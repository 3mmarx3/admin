<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة وسيلة دفع | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .form-section { background: white; border-radius: 30px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.03); margin-bottom: 30px; }
        .form-label-custom { font-weight: 800; color: #475569; font-size: 0.85rem; margin-bottom: 10px; display: block; }
        .form-control-modern { border: 2px solid #f1f5f9; background: #f8fafc; border-radius: 16px; padding: 14px 20px; font-weight: 600; transition: 0.3s; }
        .form-control-modern:focus { background: white; border-color: #6366f1; box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1); outline: none; }
        .method-card-select { cursor: pointer; border: 2px solid #f1f5f9; border-radius: 20px; padding: 25px; transition: 0.3s; text-align: center; background: #f8fafc; height: 100%; }
        .method-card-select:hover { border-color: #6366f1; background: white; transform: translateY(-5px); }
        .method-card-select.active { border-color: #6366f1; background: rgba(99, 102, 241, 0.05); }
        .method-icon { font-size: 2.5rem; color: #64748b; margin-bottom: 15px; display: block; }
        .active .method-icon { color: #6366f1; }
        .sticky-summary { position: sticky; top: 30px; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h2 class="fw-800 mb-1">إضافة قناة دفع جديدة</h2>
                    <p class="text-muted fw-600 m-0">قم بتوسيع خيارات الدفع لتسهيل عملية الاشتراك على مرضاك</p>
                </div>
                <div class="d-flex gap-3">
                    <a href="payment-methods.php" class="btn btn-white bg-white border shadow-sm rounded-pill px-4 fw-800 py-3 text-decoration-none">إلغاء</a>
                    <button class="btn btn-primary rounded-pill px-5 fw-800 shadow-lg py-3">تفعيل الوسيلة</button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="form-section">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-grid me-2 text-primary"></i>1. اختر نوع الوسيلة</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="method-card-select active">
                                    <i class="bi bi-phone method-icon"></i>
                                    <h6 class="fw-800 m-0">محفظة إلكترونية</h6>
                                    <small class="text-muted fw-600">فودافون، اتصالات، أورانج</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="method-card-select">
                                    <i class="bi bi-bank method-icon"></i>
                                    <h6 class="fw-800 m-0">تحويل بنكي / InstaPay</h6>
                                    <small class="text-muted fw-600">حساب جاري أو عنوان دفع</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="method-card-select">
                                    <i class="bi bi-credit-card method-icon"></i>
                                    <h6 class="fw-800 m-0">بطاقة ائتمان</h6>
                                    <small class="text-muted fw-600">فيزا، ماستر كارد</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-pencil-square me-2 text-primary"></i>2. بيانات الحساب</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label-custom">اسم مقدم الخدمة</label>
                                <input type="text" class="form-control-modern w-100" placeholder="مثال: فودافون كاش">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">رقم المحفظة / رقم الحساب</label>
                                <input type="text" class="form-control-modern w-100" placeholder="01xxxxxxxxx">
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">اسم صاحب الحساب (كما يظهر للمحول)</label>
                                <input type="text" class="form-control-modern w-100" placeholder="الاسم الكامل">
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">تعليمات إضافية للمريض (تظهر عند الدفع)</label>
                                <textarea class="form-control-modern w-100" rows="3" placeholder="مثال: يرجى إرسال صورة الإيصال بعد التحويل لتأكيد الاشتراك..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-summary">
                        <div class="form-section bg-primary bg-opacity-10 border-primary border-opacity-10">
                            <h6 class="fw-800 text-primary mb-3"><i class="bi bi-shield-lock-fill me-2"></i>معايير الأمان</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex gap-2 mb-3">
                                    <i class="bi bi-check2-circle text-primary fw-800"></i>
                                    <p class="small fw-700 m-0">تشفير كامل لبيانات الحساب البنكي.</p>
                                </li>
                                <li class="d-flex gap-2 mb-3">
                                    <i class="bi bi-check2-circle text-primary fw-800"></i>
                                    <p class="small fw-700 m-0">إمكانية تعطيل الوسيلة فوراً عند الطوارئ.</p>
                                </li>
                                <li class="d-flex gap-2">
                                    <i class="bi bi-check2-circle text-primary fw-800"></i>
                                    <p class="small fw-700 m-0">سجل كامل بجميع التحويلات التي تمت عبر هذه القناة.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="form-section">
                            <h6 class="fw-800 mb-3">خيارات الظهور</h6>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="showPublic" checked>
                                <label class="form-check-label fw-700 small" for="showPublic">إتاحة الوسيلة للجمهور</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="preferredMethod">
                                <label class="form-check-label fw-700 small" for="preferredMethod">تمييز كـ "وسيلة مفضلة"</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.method-card-select').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.method-card-select').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>