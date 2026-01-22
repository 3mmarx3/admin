<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التقارير المالية | عيادة التغذية الذكية</title>
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
                    <input type="text" class="form-control" placeholder="بحث عن معاملة مالية بالرقم أو اسم المريض...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-file-earmark-excel me-2"></i>تصدير اكسل
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-plus-lg me-2"></i>إضافة مصروفات
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-graph-up-arrow"></i></div>
                        <h6 class="text-muted fw-700">إجمالي الدخل</h6>
                        <h2 class="fw-800">84,250 <small class="fs-6">ج.م</small></h2>
                        <small class="text-success fw-700"><i class="bi bi-caret-up-fill"></i> 15% هذا الشهر</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-graph-down-arrow"></i></div>
                        <h6 class="text-muted fw-700">إجمالي المصروفات</h6>
                        <h2 class="fw-800">12,400 <small class="fs-6">ج.م</small></h2>
                        <small class="text-muted fw-700">رواتب، إيجار، أدوات</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-wallet2"></i></div>
                        <h6 class="text-muted fw-700">صافي الأرباح</h6>
                        <h2 class="fw-800">71,850 <small class="fs-6">ج.م</small></h2>
                        <small class="text-primary fw-700">بعد استقطاع المصاريف</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-hourglass-split"></i></div>
                        <h6 class="text-muted fw-700">مبالغ معلقة</h6>
                        <h2 class="fw-800">3,150 <small class="fs-6">ج.م</small></h2>
                        <small class="text-muted fw-700">اشتراكات لم تفعل بعد</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">سجل المعاملات المالية الأخيرة</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3">كل المعاملات</button>
                        <button class="btn btn-light btn-sm rounded-pill px-3">دخل فقط</button>
                        <button class="btn btn-light btn-sm rounded-pill px-3">مصروفات فقط</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">رقم العملية</th>
                                <th class="border-0">المريض / البند</th>
                                <th class="border-0">التصنيف</th>
                                <th class="border-0">التاريخ</th>
                                <th class="border-0">طريقة الدفع</th>
                                <th class="border-0">المبلغ</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-700 text-muted">#INV-8824</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Ahmed+Ali&background=6366f1&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">أحمد علي</div>
                                            <small class="text-muted">باقة VIP شهري</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">دخل (إيراد)</span></td>
                                <td>2026-01-22</td>
                                <td><span class="fw-600">فودافون كاش</span></td>
                                <td><span class="fw-800 text-success">+ 600 ج.م</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-printer"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-700 text-muted">#EXP-1020</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box bg-danger bg-opacity-10 text-danger mb-0 me-3" style="width: 44px; height: 44px; font-size: 1rem;">
                                            <i class="bi bi-lightning-charge"></i>
                                        </div>
                                        <div class="ms-2">
                                            <div class="fw-800">فاتورة الكهرباء</div>
                                            <small class="text-muted">مصاريف العيادة</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3">مصروفات</span></td>
                                <td>2026-01-21</td>
                                <td><span class="fw-600">نقداً</span></td>
                                <td><span class="fw-800 text-danger">- 1,200 ج.م</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-700 text-muted">#INV-8820</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Sara+Khaled&background=a855f7&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">سارة خالد</div>
                                            <small class="text-muted">متابعة أونلاين</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">دخل (إيراد)</span></td>
                                <td>2026-01-20</td>
                                <td><span class="fw-600">إنستا باي</span></td>
                                <td><span class="fw-800 text-success">+ 450 ج.م</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-printer"></i></button>
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