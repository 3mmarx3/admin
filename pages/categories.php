<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة التصنيفات | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-color: #6366f1;
            --bg-body: #f4f7fe;
        }
        body { background-color: var(--bg-body); font-family: 'Cairo', sans-serif; }
        .category-card {
            background: white;
            border-radius: 30px;
            padding: 30px;
            border: 1px solid rgba(0,0,0,0.02);
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            height: 100%;
        }
        .category-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.06); }
        .cat-icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        .stat-pill {
            background: #f1f5f9;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 800;
            color: #64748b;
        }
        .form-control-modern {
            border: 2px solid #f1f5f9;
            background: #f8fafc;
            border-radius: 16px;
            padding: 12px 20px;
            font-weight: 600;
            transition: 0.3s;
        }
        .form-control-modern:focus { background: white; border-color: var(--primary-color); box-shadow: none; outline: none; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h2 class="fw-900 mb-1">تصنيفات المحتوى</h2>
                    <p class="text-muted fw-700 m-0">تنظيم المقالات والخدمات في أقسام ليسهل الوصول إليها</p>
                </div>
                <button class="btn btn-primary rounded-pill px-5 fw-800 py-3 shadow-lg" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="bi bi-plus-circle me-2"></i> إضافة تصنيف جديد
                </button>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="cat-icon-wrapper bg-primary bg-opacity-10 text-primary">
                                <i class="bi bi-egg-fried"></i>
                            </div>
                            <span class="stat-pill">24 مقال</span>
                        </div>
                        <h4 class="fw-800 mb-2">وصفات صحية</h4>
                        <p class="text-muted small fw-600 mb-4">أطباق غذائية محسوبة السعرات الحرارية لمرضى السمنة والسكري.</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-light rounded-pill flex-grow-1 fw-800">تعديل</button>
                            <button class="btn btn-light rounded-circle text-danger"><i class="bi bi-trash3"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="cat-icon-wrapper bg-success bg-opacity-10 text-success">
                                <i class="bi bi-activity"></i>
                            </div>
                            <span class="stat-pill">18 مقال</span>
                        </div>
                        <h4 class="fw-800 mb-2">تمارين رياضية</h4>
                        <p class="text-muted small fw-600 mb-4">تمارين الكارديو والمقاومة المنزلية لتعزيز عملية حرق الدهون.</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-light rounded-pill flex-grow-1 fw-800">تعديل</button>
                            <button class="btn btn-light rounded-circle text-danger"><i class="bi bi-trash3"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="cat-icon-wrapper bg-warning bg-opacity-10 text-warning">
                                <i class="bi bi-capsule"></i>
                            </div>
                            <span class="stat-pill">12 مقال</span>
                        </div>
                        <h4 class="fw-800 mb-2">مكملات غذائية</h4>
                        <p class="text-muted small fw-600 mb-4">دليل شامل للفيتامينات والمعادن والمكملات التي يحتاجها الجسم.</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-light rounded-pill flex-grow-1 fw-800">تعديل</button>
                            <button class="btn btn-light rounded-circle text-danger"><i class="bi bi-trash3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: 30px; padding: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="fw-900 m-0">إضافة تصنيف جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label class="fw-800 small text-muted mb-2">اسم التصنيف</label>
                        <input type="text" class="form-control-modern w-100" placeholder="مثال: تغذية رياضيين">
                    </div>
                    <div class="mb-4">
                        <label class="fw-800 small text-muted mb-2">وصف التصنيف</label>
                        <textarea class="form-control-modern w-100" rows="3" placeholder="اكتب وصفاً مختصراً..."></textarea>
                    </div>
                    <div class="mb-0 text-center">
                        <label class="fw-800 small text-muted mb-3 d-block">اختر أيقونة معبرة</label>
                        <div class="d-flex justify-content-center gap-3 fs-3 text-muted">
                            <i class="bi bi-heart-pulse cursor-pointer text-primary"></i>
                            <i class="bi bi-droplet cursor-pointer"></i>
                            <i class="bi bi-apple cursor-pointer"></i>
                            <i class="bi bi-lightning-charge cursor-pointer"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light rounded-pill px-4 fw-800" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary rounded-pill px-4 fw-800 shadow">حفظ التصنيف</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>