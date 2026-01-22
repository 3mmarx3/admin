<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المرضى | عيادة التغذية الذكية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div class="main-wrapper">
        
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div class="premium-search">
                    <i class="bi bi-search"></i>
                    <input type="text" class="form-control" placeholder="بحث سريع عن مريض بالاسم أو الكود...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-download me-2"></i>تصدير تقرير
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-person-plus me-2"></i>إضافة مريض جديد
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-people"></i></div>
                        <h6 class="text-muted fw-700">إجمالي المرضى</h6>
                        <h2 class="fw-800">1,482</h2>
                        <small class="text-success fw-700"><i class="bi bi-arrow-up-short"></i> 12% هذا الشهر</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-patch-check"></i></div>
                        <h6 class="text-muted fw-700">الاشتراكات النشطة</h6>
                        <h2 class="fw-800">954</h2>
                        <small class="text-success fw-700"><i class="bi bi-arrow-up-short"></i> 8% هذا الشهر</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-clock-history"></i></div>
                        <h6 class="text-muted fw-700">بانتظار خطة</h6>
                        <h2 class="fw-800">12</h2>
                        <small class="text-muted fw-700">تحديثات مطلوبة</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-graph-up-arrow"></i></div>
                        <h6 class="text-muted fw-700">نسبة النجاح</h6>
                        <h2 class="fw-800">92%</h2>
                        <small class="text-muted fw-700">معدل تحقيق الأهداف</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">قائمة المرضى المسجلين</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3">الأحدث أولاً</button>
                        <button class="btn btn-light btn-sm rounded-pill px-3">الأكثر وزناً</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">المريض</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0">الوزن الحالي</th>
                                <th class="border-0">نوع الباقة</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Ahmed+Ali&background=6366f1&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">أحمد علي</div>
                                            <small class="text-muted">01012345678</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3">سمنة مفرطة</span></td>
                                <td><span class="fw-800">112 كجم</span></td>
                                <td><span class="fw-700">باقة VIP شهري</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> نشط</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-file-earmark-person"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Sara+Khaled&background=a855f7&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">سارة خالد</div>
                                            <small class="text-muted">01122334455</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">مثالي</span></td>
                                <td><span class="fw-800">65 كجم</span></td>
                                <td><span class="fw-700">باقة التثبيت</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> نشط</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-file-earmark-person"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Mona+Sami&background=f43f5e&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">منى سامي</div>
                                            <small class="text-muted">01299887766</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3">زيادة وزن</span></td>
                                <td><span class="fw-800">82 كجم</span></td>
                                <td><span class="fw-700">متابعة أونلاين</span></td>
                                <td><span class="status-badge status-expired"><i class="bi bi-exclamation-triangle-fill"></i> منتهي</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-file-earmark-person"></i></button>
                                        <button class="btn-action"><i class="bi bi-arrow-repeat"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4 pt-4 border-top">
                    <p class="text-muted small m-0 fw-600">عرض 10 مرضى من إجمالي 1,482</p>
                    <nav>
                        <ul class="pagination pagination-sm m-0">
                            <li class="page-item disabled"><a class="page-link border-0" href="#">السابق</a></li>
                            <li class="page-item active"><a class="page-link border-0 rounded-3 mx-1" href="#">1</a></li>
                            <li class="page-item"><a class="page-link border-0 rounded-3 mx-1" href="#">2</a></li>
                            <li class="page-item"><a class="page-link border-0" href="#">التالي</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>