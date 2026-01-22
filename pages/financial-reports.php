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
    <style>
        .revenue-chart-container {
            height: 350px;
            display: flex;
            align-items: flex-end;
            gap: 20px;
            padding: 40px 20px 20px;
            background: #f8fafc;
            border-radius: 25px;
        }
        .chart-bar-item {
            flex: 1;
            background: var(--primary-color);
            border-radius: 12px 12px 4px 4px;
            position: relative;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .chart-bar-item:hover {
            opacity: 0.85;
            transform: scaleX(1.05);
        }
        .chart-bar-item::before {
            content: attr(data-label);
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.75rem;
            font-weight: 700;
            color: #94a3b8;
        }
        .chart-bar-item::after {
            content: attr(data-value);
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.8rem;
            font-weight: 800;
            color: var(--primary-color);
        }
        .transaction-badge {
            padding: 5px 15px;
            border-radius: 10px;
            font-size: 0.75rem;
            font-weight: 800;
        }
        .bg-income { background: #dcfce7; color: #15803d; }
        .bg-expense { background: #fee2e2; color: #b91c1c; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div class="premium-search">
                    <i class="bi bi-calendar-range"></i>
                    <input type="text" class="form-control" placeholder="تحديد نطاق زمني للتقرير...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-download me-2"></i>تصدير البيانات
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-plus-lg me-2"></i>إضافة حركة مالية
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-arrow-up-right-circle"></i></div>
                        <h6 class="text-muted fw-700">إجمالي الدخل</h6>
                        <h2 class="fw-800">145,200 <small class="fs-6">ج.م</small></h2>
                        <small class="text-success fw-700"><i class="bi bi-arrow-up-short"></i> 15% هذا الشهر</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-arrow-down-left-circle"></i></div>
                        <h6 class="text-muted fw-700">إجمالي المصروفات</h6>
                        <h2 class="fw-800">42,800 <small class="fs-6">ج.م</small></h2>
                        <small class="text-danger fw-700"><i class="bi bi-arrow-down-short"></i> ارتفع 2%</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-wallet2"></i></div>
                        <h6 class="text-muted fw-700">صافي الربح</h6>
                        <h2 class="fw-800">102,400 <small class="fs-6">ج.م</small></h2>
                        <small class="text-primary fw-700">نسبة الربحية 70%</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-credit-card"></i></div>
                        <h6 class="text-muted fw-700">مستحقات معلقة</h6>
                        <h2 class="fw-800">5,400 <small class="fs-6">ج.م</small></h2>
                        <small class="text-muted fw-700">بانتظار تأكيد التحويل</small>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-xl-8">
                    <div class="table-container h-100">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <h5 class="fw-800 m-0">تحليل الإيرادات الشهرية</h5>
                            <button class="btn btn-link text-decoration-none fw-800 small text-primary">تفاصيل الأداء</button>
                        </div>
                        <div class="revenue-chart-container">
                            <div class="chart-bar-item" style="height: 60%;" data-value="12K" data-label="أغسطس"></div>
                            <div class="chart-bar-item" style="height: 45%; opacity: 0.6;" data-value="9K" data-label="سبتمبر"></div>
                            <div class="chart-bar-item" style="height: 80%;" data-value="18K" data-label="أكتوبر"></div>
                            <div class="chart-bar-item" style="height: 65%; opacity: 0.6;" data-value="14K" data-label="نوفمبر"></div>
                            <div class="chart-bar-item" style="height: 95%;" data-value="24K" data-label="ديسمبر"></div>
                            <div class="chart-bar-item" style="height: 85%;" data-value="21K" data-label="يناير"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="table-container h-100">
                        <h5 class="fw-800 mb-5 pb-3 border-bottom">توزيع مصادر الدخل</h5>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-700 small">الاشتراكات الشهرية</span>
                                <span class="fw-800 small text-primary">65%</span>
                            </div>
                            <div class="progress" style="height: 8px; border-radius: 10px;">
                                <div class="progress-bar bg-primary" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-700 small">استشارات أونلاين</span>
                                <span class="fw-800 small text-success">25%</span>
                            </div>
                            <div class="progress" style="height: 8px; border-radius: 10px;">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-700 small">بيع مكملات غذائية</span>
                                <span class="fw-800 small text-warning">10%</span>
                            </div>
                            <div class="progress" style="height: 8px; border-radius: 10px;">
                                <div class="progress-bar bg-warning" style="width: 10%"></div>
                            </div>
                        </div>
                        <div class="p-3 bg-light rounded-4 mt-5">
                            <p class="small text-muted fw-700 m-0"><i class="bi bi-info-circle me-1"></i> يتم تحديث هذه البيانات تلقائياً بناءً على العمليات المسجلة في جدول الطلبات.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">أحدث العمليات المالية</h5>
                    <button class="btn btn-link text-decoration-none fw-800">سجل المعاملات <i class="bi bi-arrow-left"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">التاريخ</th>
                                <th class="border-0">البيان</th>
                                <th class="border-0">الفئة</th>
                                <th class="border-0">الوسيلة</th>
                                <th class="border-0">المبلغ</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-700">22 يناير 2026</span></td>
                                <td><span class="fw-800">تجديد باقة VIP - أحمد محمد</span></td>
                                <td><span class="transaction-badge bg-income">إيراد</span></td>
                                <td><span class="fw-700">فودافون كاش</span></td>
                                <td><span class="fw-800 text-primary">+1,500 ج.م</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-receipt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-700">21 يناير 2026</span></td>
                                <td><span class="fw-800">فاتورة كهرباء العيادة</span></td>
                                <td><span class="transaction-badge bg-expense">مصروف</span></td>
                                <td><span class="fw-700">نقدي</span></td>
                                <td><span class="fw-800 text-danger">-850 ج.م</span></td>
                                <td class="text-center">
                                    <button class="btn-action"><i class="bi bi-receipt"></i></button>
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