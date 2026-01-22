<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الطلبات | عيادة التغذية الذكية</title>
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
                    <input type="text" class="form-control" placeholder="بحث برقم الطلب أو اسم المريض...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-funnel me-2"></i>تصفية متقدمة
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-plus-circle me-2"></i>تحصيل نقدي جديد
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-cart-check"></i></div>
                        <h6 class="text-muted fw-700">طلبات اليوم</h6>
                        <h2 class="fw-800">24</h2>
                        <small class="text-success fw-700"><i class="bi bi-graph-up"></i> +8 عن أمس</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-hourglass-split"></i></div>
                        <h6 class="text-muted fw-700">بانتظار التأكيد</h6>
                        <h2 class="fw-800">7</h2>
                        <small class="text-muted fw-700">تحتاج مراجعة الدفع</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-cash-coin"></i></div>
                        <h6 class="text-muted fw-700">إجمالي مبيعات اليوم</h6>
                        <h2 class="fw-800">8,450 <small class="fs-6">ج.م</small></h2>
                        <small class="text-success fw-700">نمو بنسبة 15%</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-x-octagon"></i></div>
                        <h6 class="text-muted fw-700">طلبات ملغاة</h6>
                        <h2 class="fw-800">3</h2>
                        <small class="text-muted fw-700">خلال آخر 24 ساعة</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">سجل الطلبات والعمليات المالية</h5>
                    <div class="btn-group p-1 bg-light rounded-pill">
                        <button class="btn btn-sm btn-white rounded-pill px-3 fw-700 shadow-sm">الكل</button>
                        <button class="btn btn-sm btn-light rounded-pill px-3 fw-700">مكتمل</button>
                        <button class="btn btn-sm btn-light rounded-pill px-3 fw-700">معلق</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">رقم الطلب</th>
                                <th class="border-0">المريض</th>
                                <th class="border-0">الباقة / الخدمة</th>
                                <th class="border-0">المبلغ</th>
                                <th class="border-0">وسيلة الدفع</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-800 text-dark">#ORD-5540</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Ammar+Ahmed&background=6366f1&color=fff" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">عمار أحمد</div>
                                            <small class="text-muted">01012345678</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">باقة VIP - 3 شهور</span></td>
                                <td><span class="fw-800 text-primary">1,500 ج.م</span></td>
                                <td><span class="badge bg-light text-dark rounded-pill px-3 border"><i class="bi bi-wallet2 me-1"></i> فودافون كاش</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> مكتمل</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-file-earmark-pdf"></i></button>
                                    <button class="btn-action"><i class="bi bi-three-dots"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-800 text-dark">#ORD-5541</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Sara+Khaled&background=a855f7&color=fff" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">سارة خالد</div>
                                            <small class="text-muted">01223344556</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">استشارة أونلاين</span></td>
                                <td><span class="fw-800 text-primary">450 ج.م</span></td>
                                <td><span class="badge bg-light text-dark rounded-pill px-3 border"><i class="bi bi-bank me-1"></i> إنستا باي</span></td>
                                <td><span class="status-badge bg-warning bg-opacity-10 text-warning px-3"><i class="bi bi-clock-history"></i> معلق</span></td>
                                <td class="text-center">
                                    <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                    <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-800 text-dark">#ORD-5542</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Youssef+Ali&background=10b981&color=fff" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">يوسف علي</div>
                                            <small class="text-muted">01556677889</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">كشف أول مرة</span></td>
                                <td><span class="fw-800 text-primary">600 ج.م</span></td>
                                <td><span class="badge bg-light text-dark rounded-pill px-3 border"><i class="bi bi-cash me-1"></i> نقدي</span></td>
                                <td><span class="status-badge status-expired"><i class="bi bi-x-circle-fill"></i> ملغى</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-arrow-repeat"></i></button>
                                    <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4 pt-4 border-top">
                    <p class="text-muted small m-0 fw-600">عرض 10 طلبات من أصل 1,240</p>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm m-0">
                            <li class="page-item disabled"><a class="page-link border-0 bg-transparent" href="#"><i class="bi bi-chevron-right"></i></a></li>
                            <li class="page-item active"><a class="page-link rounded-circle mx-1 border-0 shadow-sm" href="#">1</a></li>
                            <li class="page-item"><a class="page-link rounded-circle mx-1 border-0" href="#">2</a></li>
                            <li class="page-item"><a class="page-link border-0 bg-transparent" href="#"><i class="bi bi-chevron-left"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>