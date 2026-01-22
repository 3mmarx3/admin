<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء باقة احترافية | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-grad: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --glass: rgba(255, 255, 255, 0.95);
        }
        body { background-color: #f4f7fe; font-family: 'Cairo', sans-serif; }
        .form-section { background: var(--glass); border-radius: 25px; padding: 35px; box-shadow: 0 10px 30px rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.05); margin-bottom: 30px; }
        .form-label-custom { font-weight: 800; color: #475569; font-size: 0.85rem; margin-bottom: 10px; display: block; }
        .form-control-modern { border: 2px solid #f1f5f9; background: #f8fafc; border-radius: 16px; padding: 14px 20px; font-weight: 600; transition: 0.3s; }
        .form-control-modern:focus { background: white; border-color: #6366f1; box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1); outline: none; }
        .image-uploader { border: 2px dashed #cbd5e1; border-radius: 20px; padding: 30px; text-align: center; cursor: pointer; transition: 0.3s; background: #f8fafc; }
        .image-uploader:hover { border-color: #6366f1; background: rgba(99, 102, 241, 0.05); }
        .feature-item { background: #f8fafc; border-radius: 18px; padding: 12px 15px; margin-bottom: 12px; border: 1px solid #f1f5f9; display: flex; align-items: center; gap: 12px; }
        .preview-card-sticky { position: sticky; top: 30px; }
        .pkg-preview { background: white; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .pkg-preview-header { background: var(--primary-grad); padding: 40px 20px; text-align: center; color: white; }
        .pkg-preview-body { padding: 30px; }
        .icon-selector { width: 50px; height: 50px; border-radius: 12px; border: 2px solid #f1f5f9; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: 0.2s; font-size: 1.4rem; }
        .icon-selector.active { border-color: #6366f1; background: #6366f1; color: white; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h2 class="fw-800 mb-1">تصميم نظام اشتراك جديد</h2>
                    <p class="text-muted fw-600 m-0">قم ببناء باقة جذابة لمرضاك مع كامل الخصائص والمميزات</p>
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border shadow-sm rounded-pill px-4 fw-800 py-3">حفظ كمسودة</button>
                    <button class="btn btn-primary rounded-pill px-5 fw-800 shadow-lg py-3">نشر الباقة الآن</button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="form-section">
                        <h5 class="fw-800 mb-4 d-flex align-items-center"><i class="bi bi-palette me-2 text-primary"></i>هوية الباقة والمظهر</h5>
                        <div class="row g-4">
                            <div class="col-md-12 text-center mb-3">
                                <label class="form-label-custom">أيقونة الباقة</label>
                                <div class="d-flex justify-content-center gap-2">
                                    <div class="icon-selector active"><i class="bi bi-gem"></i></div>
                                    <div class="icon-selector"><i class="bi bi-fire"></i></div>
                                    <div class="icon-selector"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="icon-selector"><i class="bi bi-heart-pulse"></i></div>
                                    <div class="icon-selector"><i class="bi bi-award"></i></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label-custom text-start">اسم النظام الغذائي / الباقة</label>
                                <input type="text" class="form-control-modern w-100" placeholder="مثال: دايت الإنقاذ السريع">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label-custom text-start">السعر الرئيسي</label>
                                <div class="input-group">
                                    <input type="number" class="form-control-modern w-100" placeholder="00.00">
                                    <span class="position-absolute start-0 top-50 translate-middle-y ms-3 fw-800 text-muted">ج.م</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom text-start">صورة الغلاف (تسويقية)</label>
                                <div class="image-uploader" onclick="document.getElementById('pkgImg').click()">
                                    <i class="bi bi-cloud-upload fs-1 mb-2 text-primary"></i>
                                    <p class="m-0 fw-700">اضغط لرفع صورة تعبيرية (خضروات، رياضة، نجاح مريض)</p>
                                    <input type="file" id="pkgImg" hidden>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h5 class="fw-800 mb-4 d-flex align-items-center"><i class="bi bi-clipboard-data me-2 text-success"></i>الخصائص الطبية والمميزات</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label-custom text-start">فترة المتابعة</label>
                                <select class="form-select form-control-modern">
                                    <option>أسبوع واحد</option>
                                    <option>شهر كامل (4 أسابيع)</option>
                                    <option>3 شهور (كورس مكثف)</option>
                                    <option>6 شهور (تغيير نمط حياة)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom text-start">عدد مرات فحص InBody</label>
                                <input type="number" class="form-control-modern w-100" placeholder="مثال: 4 مرات">
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <label class="form-label-custom m-0">قائمة المميزات (تظهر للمريض)</label>
                                    <button class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-800" onclick="addFeature()">+ إضافة ميزة</button>
                                </div>
                                <div id="features-list">
                                    <div class="feature-item">
                                        <i class="bi bi-check2-circle"></i>
                                        <input type="text" class="form-control border-0 bg-transparent p-0 fw-600 shadow-none" value="نظام غذائي مخصص حسب فصيلة الدم">
                                        <i class="bi bi-trash3 text-danger ms-auto cursor-pointer" onclick="this.parentElement.remove()"></i>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check2-circle"></i>
                                        <input type="text" class="form-control border-0 bg-transparent p-0 fw-600 shadow-none" value="متابعة يومية عبر الواتساب الشخصي">
                                        <i class="bi bi-trash3 text-danger ms-auto cursor-pointer" onclick="this.parentElement.remove()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="preview-card-sticky">
                        <div class="pkg-preview">
                            <div class="pkg-preview-header">
                                <i class="bi bi-gem fs-1 mb-3 d-block"></i>
                                <h3 class="fw-800 mb-1" id="preName">اسم الباقة</h3>
                                <p class="m-0 fw-600 opacity-75">نظام احترافي متكامل</p>
                            </div>
                            <div class="pkg-preview-body">
                                <div class="text-center mb-4">
                                    <h1 class="fw-800 text-primary d-inline-block">00</h1>
                                    <span class="text-muted fw-700">ج.م / شهر</span>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-patch-check-fill text-success"></i>
                                        <span class="small fw-700">ميزة افتراضية رقم 1</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-patch-check-fill text-success"></i>
                                        <span class="small fw-700">ميزة افتراضية رقم 2</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 rounded-pill py-3 fw-800" disabled>اشترك الآن</button>
                            </div>
                        </div>
                        <div class="mt-4 p-4 rounded-4 bg-white shadow-sm">
                            <h6 class="fw-800 text-dark mb-3">خيارات الظهور</h6>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" checked>
                                <label class="form-check-label fw-700 small">تفعيل الباقة فوراً على الموقع</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label fw-700 small">إظهار كباقة مميزة (Featured)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function addFeature() {
            const container = document.getElementById('features-list');
            const div = document.createElement('div');
            div.className = 'feature-item';
            div.innerHTML = `
                <i class="bi bi-check2-circle"></i>
                <input type="text" class="form-control border-0 bg-transparent p-0 fw-600 shadow-none" placeholder="اكتب ميزة جديدة هنا...">
                <i class="bi bi-trash3 text-danger ms-auto cursor-pointer" onclick="this.parentElement.remove()"></i>
            `;
            container.appendChild(div);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>