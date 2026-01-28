<?php
include '../config/db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/log_in.php");
    exit();
}
$course_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$user_id = $_SESSION['user_id'];
$course_stmt = $conn->prepare("
    SELECT c.*, i.full_name as instructor_name, i.specialization_subject, i.profile_image, i.id as instructor_id
    FROM courses c
    LEFT JOIN instructors i ON c.instructor_id = i.id
    WHERE c.id = ?
");
$course_stmt->execute([$course_id]);
$course = $course_stmt->fetch(PDO::FETCH_ASSOC);
if (!$course) {
    die("Course not found.");
}
$curriculum_stmt = $conn->prepare("SELECT * FROM course_curriculum WHERE course_id = ? ORDER BY order_number ASC");
$curriculum_stmt->execute([$course_id]);
$sections = $curriculum_stmt->fetchAll(PDO::FETCH_ASSOC);
$lessons_stmt = $conn->prepare("
    SELECT l.*, cc.id as section_id
    FROM lessons l
    JOIN course_curriculum cc ON l.curriculum_id = cc.id
    WHERE cc.course_id = ?
    ORDER BY cc.order_number ASC, l.order_number ASC
");
$lessons_stmt->execute([$course_id]);
$all_lessons = $lessons_stmt->fetchAll(PDO::FETCH_ASSOC);
$lecture_files_stmt = $conn->prepare("
    SELECT lf.*, cc.id as section_id, cc.title as section_title
    FROM lecture_files lf
    JOIN course_curriculum cc ON lf.curriculum_id = cc.id
    WHERE cc.course_id = ?
    ORDER BY lf.id DESC
");
$lecture_files_stmt->execute([$course_id]);
$lecture_files = $lecture_files_stmt->fetchAll(PDO::FETCH_ASSOC);
$course_files_stmt = $conn->prepare("SELECT * FROM course_files WHERE course_id = ? ORDER BY id DESC");
$course_files_stmt->execute([$course_id]);
$course_files = $course_files_stmt->fetchAll(PDO::FETCH_ASSOC);
$quiz_stmt = $conn->prepare("SELECT q.* FROM quizzes q WHERE q.section_id IN (SELECT id FROM course_curriculum WHERE course_id = ?) ORDER BY q.id ASC");
$quiz_stmt->execute([$course_id]);
$all_quizzes = $quiz_stmt->fetchAll(PDO::FETCH_ASSOC);
$file_progress_stmt = $conn->prepare("SELECT file_id FROM file_progress WHERE user_id = ? AND completed = 1");
try {
    $file_progress_stmt->execute([$user_id]);
    $viewed_files = $file_progress_stmt->fetchAll(PDO::FETCH_COLUMN);
    if (!$viewed_files) { $viewed_files = []; }
} catch (PDOException $e) {
    $viewed_files = [];
}
$lessons_by_section = [];
foreach ($all_lessons as $lesson) {
    $lessons_by_section[$lesson['section_id']][] = $lesson;
}
$lecture_files_by_section = [];
foreach ($lecture_files as $file) {
    $lecture_files_by_section[$file['section_id']][] = $file;
}
$quizzes_by_section = [];
foreach ($all_quizzes as $quiz) {
    $quizzes_by_section[$quiz['section_id']][] = $quiz;
}
$stmt = $conn->prepare("SELECT lesson_id FROM lesson_progress WHERE user_id = ? AND completed = 1");
$stmt->execute([$user_id]);
$completed_lessons = $stmt->fetchAll(PDO::FETCH_COLUMN);
$attempted_stmt = $conn->prepare("SELECT quiz_id FROM quiz_attempts WHERE user_id = ?");
$attempted_stmt->execute([$user_id]);
$attempted_quizzes = $attempted_stmt->fetchAll(PDO::FETCH_COLUMN);
function getYTId($url) {
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    return $match[1] ?? $url;
}
$first_lesson_vid = "";
$first_lesson_title = "";
$first_lesson_id = 0;
if (!empty($all_lessons)) {
    $first_lesson_vid = getYTId($all_lessons[0]['video_url']);
    $first_lesson_title = $all_lessons[0]['lesson_title'];
    $first_lesson_id = $all_lessons[0]['id'];
}
$progress_stmt = $conn->prepare("
    SELECT
        ((SELECT COUNT(*) FROM lessons l JOIN course_curriculum cc ON l.curriculum_id = cc.id WHERE cc.course_id = ?) +
         (SELECT COUNT(*) FROM lecture_files lf JOIN course_curriculum cc ON lf.curriculum_id = cc.id WHERE cc.course_id = ?) +
         (SELECT COUNT(*) FROM quizzes WHERE section_id IN (SELECT id FROM course_curriculum WHERE course_id = ?))) as total_items,
        ((SELECT COUNT(*) FROM lesson_progress lp JOIN lessons l ON lp.lesson_id = l.id JOIN course_curriculum cc ON l.curriculum_id = cc.id WHERE lp.user_id = ? AND cc.course_id = ? AND lp.completed = 1) +
         (SELECT COUNT(*) FROM file_progress fp JOIN lecture_files lf ON fp.file_id = lf.id JOIN course_curriculum cc ON lf.curriculum_id = cc.id WHERE fp.user_id = ? AND cc.course_id = ? AND fp.completed = 1) +
         (SELECT COUNT(*) FROM quiz_attempts WHERE user_id = ? AND quiz_id IN (SELECT id FROM quizzes WHERE section_id IN (SELECT id FROM course_curriculum WHERE course_id = ?)))) as completed_items
");
$progress_stmt->execute([$course_id, $course_id, $course_id, $user_id, $course_id, $user_id, $course_id, $user_id, $course_id]);
$progress_data = $progress_stmt->fetch(PDO::FETCH_ASSOC);
$total_items = $progress_data['total_items'] ?? 0;
$completed_items_count = $progress_data['completed_items'] ?? 0;
$progress_percentage = $total_items > 0 ? round(($completed_items_count / $total_items) * 100) : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        <?= htmlspecialchars($course['title']); ?> | Player
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="../assets/css/course_player.css">
    <style>
        .video-container {
            position: relative;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80%;
            z-index: 2;
            background: transparent;
        }

        .quiz-label {
            transition: all 0.2s ease;
            border: 1px solid #dee2e6 !important;
            background: #fff !important;
            cursor: pointer;
        }

        .btn-check:checked+.quiz-label {
            background-color: #dc3545 !important;
            color: white !important;
            border-color: #dc3545 !important;
        }

        .curriculum-item.completed .bi-play-circle,
        .curriculum-item.completed .bi-file-earmark-text {
            color: #198754 !important;
        }

        .curriculum-item.completed .bi-play-circle::before,
        .curriculum-item.completed .bi-file-earmark-text::before {
            content: "\f26a";
            font-family: "bootstrap-icons";
        }

        .disabled {
            cursor: not-allowed !important;
            opacity: 0.5 !important;
            pointer-events: none !important;
        }

        @media (max-width: 991px) {
            main.main-player-area {
                padding: 10px;
            }
        }
    </style>
</head>

<body oncontextmenu="return false;">
    <div class="player-grid">
        <main class="main-player-area">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="javascript:history.back()" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
                <div class="badge bg-purple text-white px-4 py-2 rounded-pill fw-600">
                    <i class="bi bi-play-circle me-2"></i> Learning Mode
                </div>
            </div>
            <div id="videoSection">
                <div class="video-container">
                    <div class="video-overlay"></div>
                    <div id="player" class="plyr__video-embed">
                        <iframe
                            src="https://www.youtube.com/embed/<?= $first_lesson_vid ?>?origin=<?= $_SERVER['HTTP_HOST'] ?>&iv_load_policy=3&modestbranding=1&rel=0&autohide=1&showinfo=0&disablekb=1"
                            allowfullscreen allow="autoplay" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
                <div class="mt-4">
                    <h1 class="h3 fw-800 mb-3 text-purple" id="titleDisplay">
                        <?= htmlspecialchars($first_lesson_title ?: "Select a Lesson"); ?>
                    </h1>
                    <div class="d-flex gap-3 align-items-center">
                        <div class="badge bg-light text-dark px-3 py-2 rounded-pill">
                            <i class="bi bi-clock me-2"></i> Video Lesson
                        </div>
                        <div class="badge bg-light text-dark px-3 py-2 rounded-pill">
                            <i class="bi bi-check-circle me-2"></i> Complete to continue
                        </div>
                    </div>
                </div>
            </div>
            <div id="quizSection" style="display:none;">
                <div id="quizContainer"></div>
            </div>
            <div id="fileSection" style="display:none;">
                <div class="file-view-container shadow">
                    <div id="pdfControls" class="pdf-controls" style="display:none;">
                        <div class="d-flex align-items-center gap-3">
                            <button class="pdf-nav-btn" onclick="pdfPrev()"><i class="bi bi-chevron-left"></i>
                                Previous</button>
                            <span class="fw-600" id="pageInfo">Page: 1/1</span>
                            <button class="pdf-nav-btn" onclick="pdfNext()">Next <i
                                    class="bi bi-chevron-right"></i></button>
                        </div>
                        <div class="d-flex gap-3">
                            <button class="btn-viewed" onclick="markFileAsViewed()">
                                <i class="bi bi-check-circle me-2"></i> Mark as Viewed
                            </button>
                        </div>
                    </div>
                    <div id="fileViewerContainer"></div>
                </div>
                <div class="mt-4" id="fileInfo">
                    <h3 class="h4 fw-800 mb-3 text-purple" id="fileNameDisplay"></h3>
                    <div class="d-flex gap-3">
                        <div class="badge bg-light text-dark px-3 py-2 rounded-pill">
                            <i class="bi bi-file-text me-2"></i> Study Material
                        </div>
                        <div class="badge bg-light text-dark px-3 py-2 rounded-pill">
                            <i class="bi bi-clock me-2"></i> Read to continue
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($course['instructor_id']): ?>
            <a href="instructor_view.php?id=<?= $course['instructor_id']; ?>" class="instructor-info">
                <img src="../<?= $course['profile_image'] ?: 'assets/img/default-user.png'; ?>" class="instructor-img">
                <div class="flex-grow-1">
                    <h6 class="fw-800 mb-1">
                        <?= htmlspecialchars($course['instructor_name']); ?>
                    </h6>
                    <span class="small text-muted">
                        <?= htmlspecialchars($course['specialization_subject']); ?>
                    </span>
                </div>
                <i class="bi bi-arrow-right-short fs-4 text-purple"></i>
            </a>
            <?php endif; ?>
            <div class="mt-5">
                <h5 class="fw-800 mb-4 text-purple">Course Resources</h5>
                <div class="row g-4">
                    <?php foreach($course_files as $f): ?>
                    <div class="col-md-6">
                        <div
                            class="p-4 border rounded-4 d-flex align-items-center justify-content-between hover-shadow">
                            <div class="d-flex align-items-center gap-4">
                                <div class="file-icon-wrapper"><i class="bi bi-file-earmark-text"></i></div>
                                <div>
                                    <h6 class="fw-700 mb-1">
                                        <?= htmlspecialchars($f['display_name']); ?>
                                    </h6>
                                    <span class="small text-muted">
                                        <?= strtoupper(pathinfo($f['file_name'], PATHINFO_EXTENSION)); ?> File
                                    </span>
                                </div>
                            </div>
                            <button
                                onclick="openResourceFile('<?= addslashes($f['display_name']) ?>','<?= $f['file_path'] ?>','<?= $f['id'] ?>')"
                                class="btn btn-purple btn-sm rounded-pill px-4">
                                <i class="bi bi-download me-2"></i> Download
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
        <aside class="curriculum-sidebar">
            <div class="sidebar-header">
                <h5 class="fw-800 mb-3 text-purple">Course Content</h5>
                <div class="progress-container">
                    <div class="d-flex justify-content-between small fw-700 mb-2">
                        <span class="text-muted">Your Progress</span>
                        <span id="progVal" class="text-purple">
                            <?= $progress_percentage ?>%
                        </span>
                    </div>
                    <div class="progress-bar-custom">
                        <div id="progBar" class="progress-fill" style="width: <?= $progress_percentage ?>%"></div>
                    </div>
                    <div class="small text-muted text-center mt-2">
                        <span id="completedItemsTxt">
                            <?= $completed_items_count ?>
                        </span> of <span id="totalItemsTxt">
                            <?= $total_items ?>
                        </span> items completed
                    </div>
                </div>
            </div>
            <div class="sidebar-content">
                <?php foreach($sections as $sec): ?>
                <div class="section-header">
                    <i class="bi bi-folder2 me-2"></i>
                    <?= htmlspecialchars($sec['title']); ?>
                </div>
                <?php
                $section_num = 0;
                if(isset($lessons_by_section[$sec['id']])) {
                    foreach($lessons_by_section[$sec['id']] as $l) {
                        $section_num++;
                        $is_comp = in_array($l['id'], $completed_lessons);
                        $v_id = getYTId($l['video_url']);
                ?>
                <div class="curriculum-item <?= ($l['id'] == $first_lesson_id) ? 'active' : '' ?> <?= $is_comp ? 'completed' : '' ?>"
                    onclick="playLesson('<?= $v_id ?>', '<?= addslashes($l['lesson_title']) ?>', this, <?= $l['id'] ?>)">
                    <div class="progress-circle">
                        <?= $section_num ?>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-700">
                            <?= htmlspecialchars($l['lesson_title']) ?>
                        </div>
                        <div class="small text-muted mt-1">
                            <i class="bi bi-play-circle me-1"></i> Video Lesson
                            <?php if(isset($l['duration']) && $l['duration']): ?>
                            <span class="ms-3"><i class="bi bi-clock me-1"></i>
                                <?= $l['duration'] ?> min
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($is_comp): ?>
                    <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    <?php else: ?>
                    <i class="bi bi-play-circle text-purple fs-5"></i>
                    <?php endif; ?>
                </div>
                <?php
                    }
                }
                if(isset($lecture_files_by_section[$sec['id']])) {
                    foreach($lecture_files_by_section[$sec['id']] as $file) {
                        $section_num++;
                        $is_viewed = in_array($file['id'], $viewed_files);
                        $file_ext = strtoupper(pathinfo($file['file_name'], PATHINFO_EXTENSION));
                ?>
                <div class="curriculum-item <?= $is_viewed ? 'completed' : '' ?>"
                    onclick="openFile(<?= $file['id'] ?>, '<?= addslashes($file['display_name']) ?>', '<?= $file['file_name'] ?>', '<?= $file['file_path'] ?>', this)">
                    <div class="progress-circle">
                        <?= $section_num ?>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-700">
                            <?= htmlspecialchars($file['display_name']) ?>
                        </div>
                        <div class="small text-muted mt-1">
                            <i class="bi bi-file-earmark me-1"></i> Study Material
                            <span class="ms-3"><i class="bi bi-filetype-<?= strtolower($file_ext) ?> me-1"></i>
                                <?= $file_ext ?> File
                            </span>
                        </div>
                    </div>
                    <?php if($is_viewed): ?>
                    <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    <?php else: ?>
                    <i class="bi bi-file-earmark-text text-purple fs-5"></i>
                    <?php endif; ?>
                </div>
                <?php
                    }
                }
                if(isset($quizzes_by_section[$sec['id']])) {
                    foreach($quizzes_by_section[$sec['id']] as $qz) {
                        $section_num++;
                        $done = in_array($qz['id'], $attempted_quizzes);
                ?>
                <div class="curriculum-item <?= $done ? 'completed' : '' ?>" onclick="<?= $done ? '' : "
                    loadQuiz(".$qz['id'].", this)" ?>">
                    <div class="progress-circle">
                        <i class="bi bi-question-lg"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-700">
                            <?= htmlspecialchars($qz['title']); ?>
                        </div>
                        <div class="small text-muted mt-1">
                            <?php if($done): ?>
                            <i class="bi bi-check-circle me-1"></i> Attempted
                            <?php else: ?>
                            <i class="bi bi-exclamation-circle me-1"></i> Required Assessment
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($done): ?>
                    <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    <?php else: ?>
                    <i class="bi bi-arrow-right-circle text-purple fs-5"></i>
                    <?php endif; ?>
                </div>
                <?php
                    }
                }
                ?>
                <?php endforeach; ?>
            </div>
            <div class="sidebar-footer">
                <a href="get_certificate.php?id=<?= $course_id ?>" id="certificateBtn"
                    class="certificate-btn <?= $progress_percentage >= 100 ? 'pulse' : 'disabled' ?>">
                    <i class="bi bi-trophy-fill me-2"></i>
                    GET CERTIFICATE
                </a>
                <p class="small text-muted text-center mt-3">
                    Complete all items to unlock your certificate
                </p>
            </div>
        </aside>
    </div>
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script>
        let currentLessonId = <?= $first_lesson_id ?>;
        let currentFileId = 0;
        let quizData = null;
        let currentQuestionIndex = 0;
        const courseId = <?= $course_id ?>;

        document.addEventListener('DOMContentLoaded', () => {
            player = new Plyr('#player', {
                controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
                youtube: { noCookie: true, rel: 0, showinfo: 0, iv_load_policy: 3, modestbranding: 1, enablejsapi: 1 }
            });

            player.on('ended', markLessonAsCompleted);

            let lastTime = 0;
            player.on('timeupdate', () => {
                if (!player.seeking && player.currentTime > lastTime + 2) {
                    player.currentTime = lastTime;
                } else {
                    lastTime = player.currentTime;
                }
            });

            player.on('seeking', () => {
                if (player.currentTime > lastTime) {
                    player.currentTime = lastTime;
                }
            });

            updateProgress();
        });

        function playLesson(videoUrl, title, element, lessonId) {
            if (!videoUrl) return;
            document.getElementById('videoSection').style.display = 'block';
            document.getElementById('quizSection').style.display = 'none';
            document.getElementById('fileSection').style.display = 'none';
            document.getElementById('titleDisplay').innerText = title;
            currentLessonId = lessonId;
            player.source = { type: 'video', sources: [{ src: videoUrl, provider: 'youtube' }] };
            document.querySelectorAll('.curriculum-item').forEach(item => item.classList.remove('active'));
            element.classList.add('active');
        }

        function markLessonAsCompleted() {
            if (!currentLessonId) return;
            const formData = new FormData();
            formData.append('lesson_id', currentLessonId);
            formData.append('course_id', courseId);
            fetch('mark_lesson_completed.php', { method: 'POST', body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });
        }

        function openSecureViewer(filePath) {
            const fullPath = window.location.origin + '/' + filePath.replace('../', '');
            const viewerUrl = 'https://docs.google.com/viewer?url=' + encodeURIComponent(fullPath) + '&embedded=true';

            const win = window.open('about:blank', '_blank');
            win.document.write(`
        <html>
        <head><title>Learning Material</title></head>
        <body style="margin:0;overflow:hidden">
            <iframe src="${viewerUrl}" style="width:100%;height:100%;border:none;" allowfullscreen></iframe>
        </body>
        </html>
    `);
        }

        function openFile(fileId, displayName, fileName, filePath, element) {
            const formData = new FormData();
            formData.append('file_id', fileId);
            formData.append('course_id', courseId);

            fetch('mark_file_viewed.php', { method: 'POST', body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });

            openSecureViewer(filePath);
        }

        function openResourceFile(displayName, filePath, fileId) {
            const formData = new FormData();
            formData.append('file_id', fileId);
            formData.append('course_id', courseId);

            fetch('mark_file_viewed.php', { method: 'POST', body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });

            openSecureViewer(filePath);
        }

        function updateCompletionUI(iconSelector) {
            const activeItem = document.querySelector('.curriculum-item.active');
            if (activeItem) {
                activeItem.classList.add('completed');
                const icon = activeItem.querySelector(iconSelector);
                if (icon) {
                    icon.className = 'bi bi-check-circle-fill text-success fs-5';
                }
            }
        }

        function loadQuiz(quizId, element) {
            if (player) player.pause();
            document.getElementById('videoSection').style.display = 'none';
            document.getElementById('fileSection').style.display = 'none';
            document.getElementById('quizSection').style.display = 'block';
            document.getElementById('quizContainer').innerHTML = '<div class="text-center py-5"><div class="spinner-border text-purple"></div></div>';

            fetch(`get_quiz_api.php?quiz_id=${quizId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.already_done) {
                        showQuizResult(data.score, data.total);
                    } else {
                        quizData = data;
                        quizData.id = quizId;
                        quizData.answers = {};
                        currentQuestionIndex = 0;
                        renderCurrentQuestion();
                    }
                });
            document.querySelectorAll('.curriculum-item').forEach(item => item.classList.remove('active'));
            element.classList.add('active');
        }

        function renderCurrentQuestion() {
            const question = quizData.questions[currentQuestionIndex];
            let html = `
        <div class="quiz-step">
            <h3 class="fw-800 text-purple mb-4">${quizData.title}</h3>
            <div class="p-4 border rounded-4 bg-light mb-4">
                <h5 class="fw-800 mb-4">
                    <span class="badge bg-purple me-2">${currentQuestionIndex + 1}</span>
                    ${question.question_text}
                </h5>
                <div class="row g-3">
    `;
            ['a', 'b', 'c', 'd'].forEach(opt => {
                if (question['option_' + opt]) {
                    const isChecked = quizData.answers[question.id] === opt.toUpperCase() ? 'checked' : '';
                    html += `
                <div class="col-md-6">
                    <input type="radio" class="btn-check" 
                           name="q${question.id}" 
                           value="${opt.toUpperCase()}" 
                           id="btn${question.id}${opt}" 
                           onchange="saveAnswer('${question.id}', '${opt.toUpperCase()}')"
                           ${isChecked}>
                    <label class="btn btn-outline-light text-dark p-4 w-100 text-start border rounded-3 quiz-label" 
                           for="btn${question.id}${opt}">
                        ${question['option_' + opt]}
                    </label>
                </div>
            `;
                }
            });
            html += `
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-secondary px-5 rounded-pill" 
                        onclick="prevQuestion()" 
                        ${currentQuestionIndex === 0 ? 'disabled' : ''}>
                    Previous
                </button>
                ${currentQuestionIndex === quizData.questions.length - 1
                    ? `<button type="button" class="btn btn-success px-5 rounded-pill" onclick="submitQuiz()">Submit Quiz</button>`
                    : `<button type="button" class="btn btn-purple px-5 rounded-pill" onclick="nextQuestion()">Next</button>`
                }
            </div>
        </div>
    `;
            document.getElementById('quizContainer').innerHTML = html;
        }

        function saveAnswer(questionId, value) {
            quizData.answers[questionId] = value;
        }

        function nextQuestion() {
            if (currentQuestionIndex < quizData.questions.length - 1) {
                currentQuestionIndex++;
                renderCurrentQuestion();
            }
        }

        function prevQuestion() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                renderCurrentQuestion();
            }
        }

        function submitQuiz() {
            const formData = new FormData();
            formData.append('quiz_id', quizData.id);
            formData.append('course_id', courseId);
            let answeredCount = 0;
            Object.keys(quizData.answers).forEach(qId => {
                formData.append(`q${qId}`, quizData.answers[qId]);
                answeredCount++;
            });
            if (answeredCount < quizData.questions.length) {
                Swal.fire('Warning', 'Please answer all questions', 'warning');
                return;
            }
            fetch('submit_quiz_api.php', { method: 'POST', body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        updateProgress();
                        Swal.fire({
                            icon: 'success',
                            title: 'Quiz Completed',
                            text: `Your Score: ${data.score}/${data.total}`
                        }).then(() => location.reload());
                    }
                });
        }

        function showQuizResult(score, total) {
            document.getElementById('quizContainer').innerHTML = `
        <div class="text-center py-5">
            <i class="bi bi-check-circle-fill text-success display-1 mb-4"></i>
            <h2 class="fw-800">Quiz Already Completed</h2>
            <div class="display-4 text-purple fw-800 mb-3">${score}/${total}</div>
            <button class="btn btn-purple px-5 rounded-pill" onclick="location.reload()">
                Back to Course
            </button>
        </div>
    `;
        }

        function updateProgress() {
            fetch(`get_progress.php?course_id=${courseId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.progress !== undefined) {
                        const percentage = Math.round(data.progress);
                        if (document.getElementById('progBar')) document.getElementById('progBar').style.width = percentage + '%';
                        if (document.getElementById('progVal')) document.getElementById('progVal').innerText = percentage + '%';
                        if (document.getElementById('completedItemsTxt')) document.getElementById('completedItemsTxt').innerText = data.completed;
                        if (document.getElementById('totalItemsTxt')) document.getElementById('totalItemsTxt').innerText = data.total;

                        const certButton = document.getElementById('certificateBtn');
                        if (certButton) {
                            if (percentage >= 100) {
                                certButton.classList.remove('disabled');
                                certButton.style.pointerEvents = 'auto';
                                certButton.onclick = null;
                            } else {
                                certButton.classList.add('disabled');
                                certButton.onclick = (e) => {
                                    e.preventDefault();
                                    Swal.fire('Locked', 'Complete all items to download your certificate', 'info');
                                };
                            }
                        }
                    }
                });
        }
    </script>

</body>

</html>