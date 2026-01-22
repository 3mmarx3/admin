<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | عيادة التغذية الذكية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div class="main-wrapper">
        
        <?php include './includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div class="premium-search">
                    <i class="bi bi-search"></i>
                    <input type="text" class="form-control" placeholder="بحث عن مريض بالاسم أو الكود...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">تصدير تقرير</button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">+ مريض جديد</button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-people"></i></div>
                        <h6 class="text-muted fw-700">إجمالي المرضى</h6>
                        <h2 class="fw-800">1,254</h2>
                        <small class="text-success fw-700"><i class="bi bi-arrow-up-short"></i> 12% هذا الشهر</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-credit-card"></i></div>
                        <h6 class="text-muted fw-700">الاشتراكات النشطة</h6>
                        <h2 class="fw-800">842</h2>
                        <small class="text-success fw-700"><i class="bi bi-arrow-up-short"></i> 5% هذا الشهر</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-calendar-event"></i></div>
                        <h6 class="text-muted fw-700">مواعيد اليوم</h6>
                        <h2 class="fw-800">14</h2>
                        <small class="text-muted fw-700">تم تأكيد 10 مواعيد</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-fire"></i></div>
                        <h6 class="text-muted fw-700">متوسط الحرق</h6>
                        <h2 class="fw-800">4.2 <small class="fs-6">كجم</small></h2>
                        <small class="text-muted fw-700">معدل نزول الوزن العام</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">أحدث اشتراكات المرضى</h5>
                    <button class="btn btn-link text-decoration-none fw-800">عرض الكل <i class="bi bi-arrow-left"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">المريض</th>
                                <th class="border-0">نوع الباقة</th>
                                <th class="border-0">تاريخ البدء</th>
                                <th class="border-0">تاريخ الانتهاء</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Ahmed+Mohamed&background=6366f1&color=fff" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">أحمد محمد</div>
                                            <small class="text-muted">ID: #00124</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">باقة المتابعة الشهرية</span></td>
                                <td>2025-12-01</td>
                                <td>2026-01-01</td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> نشط</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-eye-fill"></i></button>
                                    <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Sara+Ali&background=a855f7&color=fff" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">سارة علي</div>
                                            <small class="text-muted">ID: #00125</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">باقة التثبيت</span></td>
                                <td>2025-11-15</td>
                                <td>2025-12-15</td>
                                <td><span class="status-badge status-expired"><i class="bi bi-exclamation-triangle-fill"></i> منتهي</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-eye-fill"></i></button>
                                    <button class="btn-action"><i class="bi bi-arrow-repeat"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>