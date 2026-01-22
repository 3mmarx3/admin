<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مصمم الخطط المتقدم | عيادة التغذية الذكية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-soft: rgba(99, 102, 241, 0.1);
        }
        .meal-input-group {
            background: #f8fafc;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 25px;
            border: 2px solid transparent;
            transition: 0.3s;
            position: relative;
        }
        .meal-input-group:hover {
            border-color: var(--primary-color);
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .calorie-badge {
            background: var(--primary-color);
            color: white;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 800;
        }
        .remove-meal {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #ef4444;
            cursor: pointer;
            display: none;
        }
        .meal-input-group:hover .remove-meal {
            display: block;
        }
        .draggable-section {
            border: 2px dashed #e2e8f0;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            color: #94a3b8;
            cursor: pointer;
            transition: 0.3s;
        }
        .draggable-section:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            background: var(--primary-soft);
        }
        .form-control-custom {
            border: 1.5px solid #f1f5f9;
            background: #f8fafc;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
        }
        .form-control-custom:focus {
            background: #fff;
            border-color: var(--primary-color);
            box-shadow: none;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h2 class="fw-800 mb-1">مصمم الخطط الذكي (Builder)</h2>
                    <p class="text-muted fw-600 m-0">قم ببناء الخطة الغذائية وتخصيص العناصر بشكل تفاعلي</p>
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-file-earmark-pdf me-2"></i>تصدير PDF
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-send-check me-2"></i>إرسال إلى المريض
                    </button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="table-container mb-4">
                        <h5 class="fw-800 mb-4 border-bottom pb-3">تحليل جسم المريض</h5>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="small fw-800 text-muted mb-2">اسم المريض</label>
                                <select class="form-select form-control-custom">
                                    <option>أحمد علي (#00124)</option>
                                    <option>سارة خالد (#00125)</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="small fw-800 text-muted mb-2">الوزن (كجم)</label>
                                <input type="number" class="form-control form-control-custom" value="112">
                            </div>
                            <div class="col-6">
                                <label class="small fw-800 text-muted mb-2">الطول (سم)</label>
                                <input type="number" class="form-control form-control-custom" value="175">
                            </div>
                            <div class="col-6">
                                <label class="small fw-800 text-muted mb-2">العمر</label>
                                <input type="number" class="form-control form-control-custom" value="28">
                            </div>
                            <div class="col-6">
                                <label class="small fw-800 text-muted mb-2">نسبة الدهون %</label>
                                <input type="number" class="form-control form-control-custom" value="32">
                            </div>
                        </div>
                    </div>

                    <div class="table-container">
                        <h5 class="fw-800 mb-4 border-bottom pb-3">تخصيص الماكروز</h5>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-700">البروتين (P)</span>
                                <input type="text" class="border-0 bg-transparent fw-800 text-primary text-end" value="40%" style="width: 50px;">
                            </div>
                            <input type="range" class="form-range" min="0" max="100" value="40">
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-700">الكربوهيدرات (C)</span>
                                <input type="text" class="border-0 bg-transparent fw-800 text-success text-end" value="35%" style="width: 50px;">
                            </div>
                            <input type="range" class="form-range" min="0" max="100" value="35">
                        </div>
                        <div class="mb-0">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-700">الدهون (F)</span>
                                <input type="text" class="border-0 bg-transparent fw-800 text-warning text-end" value="25%" style="width: 50px;">
                            </div>
                            <input type="range" class="form-range" min="0" max="100" value="25">
                        </div>
                        <div class="mt-4 p-3 rounded-4 text-center" style="background: #fdf2f2; color: #991b1b;">
                            <small class="fw-800">إجمالي السعرات: 1,850 سعرة حرارية</small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="table-container">
                        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                            <h5 class="fw-800 m-0">بناء الجدول الغذائي</h5>
                            <button class="btn btn-light btn-sm rounded-pill fw-800 px-3" onclick="addMeal()">
                                <i class="bi bi-plus-lg me-1"></i> إضافة وجبة
                            </button>
                        </div>

                        <div id="meals-container">
                            <div class="meal-input-group">
                                <i class="bi bi-trash remove-meal"></i>
                                <div class="row align-items-center mb-3">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control border-0 bg-transparent fw-800 fs-5 text-primary p-0 shadow-none" value="وجبة الإفطار">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="time" class="form-control form-control-sm border-0 bg-white rounded-pill px-3 shadow-none" value="08:30">
                                    </div>
                                    <div class="col-md-4 text-start">
                                        <span class="calorie-badge">350 سعرة</span>
                                    </div>
                                </div>
                                <textarea class="form-control border-0 bg-white rounded-4 shadow-none p-3" rows="3" placeholder="اكتب تفاصيل الوجبة هنا (مثال: 3 بيضات، قطعة جبن، ربع رغيف...)"></textarea>
                                <div class="mt-3 d-flex gap-2">
                                    <span class="badge bg-light text-muted rounded-pill px-3 py-2 border"><i class="bi bi-egg-fill me-1"></i> بروتين عالي</span>
                                    <span class="badge bg-light text-muted rounded-pill px-3 py-2 border"><i class="bi bi-droplet-fill me-1"></i> ألياف</span>
                                </div>
                            </div>

                            <div class="meal-input-group">
                                <i class="bi bi-trash remove-meal"></i>
                                <div class="row align-items-center mb-3">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control border-0 bg-transparent fw-800 fs-5 text-primary p-0 shadow-none" value="وجبة الغداء">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="time" class="form-control form-control-sm border-0 bg-white rounded-pill px-3 shadow-none" value="14:00">
                                    </div>
                                    <div class="col-md-4 text-start">
                                        <span class="calorie-badge">750 سعرة</span>
                                    </div>
                                </div>
                                <textarea class="form-control border-0 bg-white rounded-4 shadow-none p-3" rows="3" placeholder="اكتب تفاصيل الوجبة هنا..."></textarea>
                            </div>
                        </div>

                        <div class="draggable-section mb-4" onclick="addMeal()">
                            <i class="bi bi-plus-circle-dotted fs-1 d-block mb-2"></i>
                            <span class="fw-800">اضغط هنا لإضافة قسم جديد (سناك، عشاء، قبل التمرين)</span>
                        </div>

                        <div class="meal-input-group border-info border-opacity-25" style="background: #f0f9ff;">
                            <h6 class="fw-800 text-info mb-3"><i class="bi bi-info-circle-fill me-2"></i>ملاحظات وقواعد عامة</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-custom" placeholder="كمية الماء المطلوبة">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-custom" placeholder="عدد خطوات المشي">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control form-control-custom" rows="3" placeholder="اكتب الممنوعات أو النصائح الخاصة بالمريض..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function addMeal() {
            const container = document.getElementById('meals-container');
            const newMeal = document.createElement('div');
            newMeal.className = 'meal-input-group';
            newMeal.innerHTML = `
                <i class="bi bi-trash remove-meal" onclick="this.parentElement.remove()"></i>
                <div class="row align-items-center mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control border-0 bg-transparent fw-800 fs-5 text-primary p-0 shadow-none" value="وجبة جديدة">
                    </div>
                    <div class="col-md-4">
                        <input type="time" class="form-control form-control-sm border-0 bg-white rounded-pill px-3 shadow-none">
                    </div>
                    <div class="col-md-4 text-start">
                        <span class="calorie-badge">0 سعرة</span>
                    </div>
                </div>
                <textarea class="form-control border-0 bg-white rounded-4 shadow-none p-3" rows="3" placeholder="اكتب تفاصيل الوجبة هنا..."></textarea>
            `;
            container.appendChild(newMeal);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>