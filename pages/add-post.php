<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كتابة مقال جديد | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-grad: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }
        .editor-container { background: white; border-radius: 30px; padding: 40px; border: 1px solid rgba(0,0,0,0.03); box-shadow: 0 10px 40px rgba(0,0,0,0.02); }
        .form-label-custom { font-weight: 800; color: #475569; font-size: 0.85rem; margin-bottom: 10px; display: block; }
        .form-control-modern { border: 2px solid #f1f5f9; background: #f8fafc; border-radius: 16px; padding: 14px 20px; font-weight: 600; transition: 0.3s; }
        .form-control-modern:focus { background: white; border-color: #6366f1; box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1); outline: none; }
        .image-dropzone { border: 2px dashed #cbd5e1; border-radius: 20px; padding: 40px; text-align: center; cursor: pointer; transition: 0.3s; background: #f8fafc; position: relative; overflow: hidden; }
        .image-dropzone:hover { border-color: #6366f1; background: rgba(99, 102, 241, 0.05); }
        .toolbar-box { background: #f8fafc; border-radius: 12px; padding: 10px; margin-bottom: 15px; border: 1px solid #f1f5f9; display: flex; gap: 10px; flex-wrap: wrap; }
        .toolbar-btn { background: white; border: 1px solid #e2e8f0; border-radius: 8px; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center; color: #64748b; transition: 0.2s; }
        .toolbar-btn:hover { background: #6366f1; color: white; border-color: #6366f1; }
        .sticky-side { position: sticky; top: 30px; }
        .tag-input { background: #f1f5f9; border-radius: 10px; padding: 5px 12px; font-size: 0.8rem; font-weight: 700; color: #475569; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 5px; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h2 class="fw-800 mb-1">إنشاء محتوى جديد</h2>
                    <p class="text-muted fw-600 m-0">شارك النصائح الغذائية والمقالات العلمية مع مرضاك وزوارك</p>
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border shadow-sm rounded-pill px-4 fw-800 py-3">حفظ كمسودة</button>
                    <button class="btn btn-primary rounded-pill px-5 fw-800 shadow-lg py-3">نشر المقال الآن</button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="editor-container">
                        <div class="mb-4">
                            <label class="form-label-custom">عنوان المقال</label>
                            <input type="text" class="form-control-modern w-100 fs-4" placeholder="أدخل عنواناً جذاباً ومحيطاً بالمحتوى...">
                        </div>

                        <div class="mb-4">
                            <label class="form-label-custom">محتوى المقال</label>
                            <div class="toolbar-box">
                                <button class="toolbar-btn"><i class="bi bi-type-bold"></i></button>
                                <button class="toolbar-btn"><i class="bi bi-type-italic"></i></button>
                                <button class="toolbar-btn"><i class="bi bi-type-underline"></i></button>
                                <div class="vr mx-1"></div>
                                <button class="toolbar-btn"><i class="bi bi-list-ul"></i></button>
                                <button class="toolbar-btn"><i class="bi bi-list-ol"></i></button>
                                <div class="vr mx-1"></div>
                                <button class="toolbar-btn"><i class="bi bi-link-45deg"></i></button>
                                <button class="toolbar-btn"><i class="bi bi-image"></i></button>
                                <button class="toolbar-btn"><i class="bi bi-quote"></i></button>
                                <button class="toolbar-btn ms-auto"><i class="bi bi-code-slash"></i></button>
                            </div>
                            <textarea class="form-control-modern w-100" rows="15" placeholder="ابدأ بكتابة أفكارك هنا..."></textarea>
                        </div>

                        <div class="mb-0">
                            <label class="form-label-custom">كلمات مفتاحية (Tags)</label>
                            <input type="text" class="form-control-modern w-100" placeholder="اضغط Enter لإضافة كلمة...">
                            <div class="mt-3">
                                <span class="tag-input">تغذية علاجية <i class="bi bi-x-lg cursor-pointer"></i></span>
                                <span class="tag-input">نقص فيتامينات <i class="bi bi-x-lg cursor-pointer"></i></span>
                                <span class="tag-input">دايت صحي <i class="bi bi-x-lg cursor-pointer"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-side">
                        <div class="editor-container mb-4">
                            <h6 class="fw-800 mb-3 border-bottom pb-2">الصورة البارزة</h6>
                            <div class="image-dropzone" onclick="document.getElementById('postImg').click()">
                                <i class="bi bi-image fs-1 text-primary mb-2 d-block"></i>
                                <p class="small fw-700 text-muted m-0">اسحب صورة هنا أو اضغط للرفع</p>
                                <input type="file" id="postImg" hidden>
                            </div>
                        </div>

                        <div class="editor-container mb-4">
                            <h6 class="fw-800 mb-3 border-bottom pb-2">إعدادات النشر</h6>
                            <div class="mb-3">
                                <label class="form-label-custom">التصنيف</label>
                                <select class="form-select form-control-modern">
                                    <option>نصائح غذائية</option>
                                    <option>وصفات صحية</option>
                                    <option>أبحاث ودراسات</option>
                                    <option>قصص نجاح</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label-custom">تاريخ النشر</label>
                                <input type="date" class="form-control-modern w-100" value="2026-01-22">
                            </div>
                            <div class="form-check form-switch mt-4">
                                <input class="form-check-input" type="checkbox" id="allowComments" checked>
                                <label class="form-check-label fw-700 small" for="allowComments">السماح بالتعليقات</label>
                            </div>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" id="showInSlider">
                                <label class="form-check-label fw-700 small" for="showInSlider">عرض في السلايدر الرئيسي</label>
                            </div>
                        </div>

                        <div class="editor-container bg-primary bg-opacity-10 border-primary border-opacity-25">
                            <h6 class="fw-800 text-primary mb-2"><i class="bi bi-lightbulb me-2"></i>نصيحة سريعة</h6>
                            <p class="small fw-600 text-dark m-0">المقالات التي تحتوي على صور توضيحية وقوائم نقطية تحصل على تفاعل أكبر بنسبة 40%.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>س