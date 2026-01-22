<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وسائل الدفع | عيادة التغذية الذكية</title>
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
                    <input type="text" class="form-control" placeholder="بحث عن وسيلة دفع أو رقم حساب...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-shield-check me-2"></i>تأمين الحسابات
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-plus-circle me-2"></i>إضافة وسيلة دفع
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-credit-card-2-front"></i></div>
                        <h6 class="text-muted fw-700">الوسائل النشطة</h6>
                        <h2 class="fw-800">5</h2>
                        <small class="text-success fw-700">جاهزة لاستقبال الدفع</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-cash-stack"></i></div>
                        <h6 class="text-muted fw-700">إجمالي التحويلات</h6>
                        <h2 class="fw-800">42,500 <small class="fs-6">ج.م</small></h2>
                        <small class="text-success fw-700">خلال آخر 30 يوم</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-activity"></i></div>
                        <h6 class="text-muted fw-700">الأكثر استخداماً</h6>
                        <h2 class="fw-800">فودافون</h2>
                        <small class="text-muted fw-700">بنسبة 65% من الدفع</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-exclamation-octagon"></i></div>
                        <h6 class="text-muted fw-700">وسائل متوقفة</h6>
                        <h2 class="fw-800">1</h2>
                        <small class="text-muted fw-700">تحتاج لتحديث بيانات</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">إدارة قنوات استقبال الأموال</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3">ترتيب حسب الأولوية</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">الوسيلة</th>
                                <th class="border-0">رقم الحساب / المحفظة</th>
                                <th class="border-0">اسم صاحب الحساب</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-danger bg-opacity-10 p-2 rounded-3 me-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/Vodafone_Logo.png" width="30">
                                        </div>
                                        <div>
                                            <div class="fw-800">فودافون كاش</div>
                                            <small class="text-muted">محفظة إلكترونية</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-800">01012345678</span></td>
                                <td><span class="fw-700">عمار أحمد</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> تعمل حالياً</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-pause-circle"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Instapay_Logo.svg/2560px-Instapay_Logo.svg.png" width="30">
                                        </div>
                                        <div>
                                            <div class="fw-800">إنستا باي (InstaPay)</div>
                                            <small class="text-muted">تحويل بنكي فوري</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-800">ammar@instapay</span></td>
                                <td><span class="fw-700">عمار أحمد محمد</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> تعمل حالياً</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-pause-circle"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-info bg-opacity-10 p-2 rounded-3 me-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Bank_Misr_Logo.svg/1200px-Bank_Misr_Logo.svg.png" width="30">
                                        </div>
                                        <div>
                                            <div class="fw-800">بنك مصر</div>
                                            <small class="text-muted">حساب بنكي جاري</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-800">1234-5678-9012</span></td>
                                <td><span class="fw-700">عمار أحمد أحمد</span></td>
                                <td><span class="status-badge status-expired"><i class="bi bi-clock-history"></i> متوقفة مؤقتاً</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-play-circle-fill text-success"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4 pt-4 border-top">
                    <p class="text-muted small m-0 fw-600">يمكنك تعطيل أي وسيلة دفع مؤقتاً في حال الصيانة</p>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>