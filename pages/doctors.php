<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الأطباء | عيادة التغذية الذكية</title>
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
                    <input type="text" class="form-control" placeholder="بحث عن دكتور بالاسم أو التخصص...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-printer me-2"></i>طباعة التقرير
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-person-plus-fill me-2"></i>إضافة دكتور جديد
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-person-badge"></i></div>
                        <h6 class="text-muted fw-700">إجمالي الأطباء</h6>
                        <h2 class="fw-800">8</h2>
                        <small class="text-success fw-700">طاقم طبي متكامل</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-calendar-check"></i></div>
                        <h6 class="text-muted fw-700">الأطباء المتاحين</h6>
                        <h2 class="fw-800">6</h2>
                        <small class="text-success fw-700">متصل الآن</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-star"></i></div>
                        <h6 class="text-muted fw-700">متوسط التقييم</h6>
                        <h2 class="fw-800">4.9</h2>
                        <small class="text-muted fw-700">بناءً على تقييم المرضى</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-briefcase"></i></div>
                        <h6 class="text-muted fw-700">إجمالي الكشوفات</h6>
                        <h2 class="fw-800">3,240</h2>
                        <small class="text-muted fw-700">لهذا العام</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">قائمة أعضاء الفريق الطبي</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3">الأعلى تقييماً</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">الدكتور</th>
                                <th class="border-0">التخصص</th>
                                <th class="border-0">عدد المرضى</th>
                                <th class="border-0">ساعات العمل</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Ammar+Ahmed&background=6366f1&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">د. عمار أحمد</div>
                                            <small class="text-muted">ammar@example.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">استشاري تغذية</span></td>
                                <td><span class="fw-800">450 مريض</span></td>
                                <td><span class="fw-700">04:00 م - 10:00 م</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-circle-fill me-1" style="font-size: 8px;"></i> متاح</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
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
                                            <div class="fw-800">د. سارة خالد</div>
                                            <small class="text-muted">sara@example.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">أخصائي نحافة</span></td>
                                <td><span class="fw-800">320 مريض</span></td>
                                <td><span class="fw-700">10:00 ص - 04:00 م</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-circle-fill me-1" style="font-size: 8px;"></i> متاح</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Yassin+Omar&background=f43f5e&color=fff&bold=true" class="patient-img me-3">
                                        <div class="ms-2">
                                            <div class="fw-800">د. ياسين عمر</div>
                                            <small class="text-muted">yassin@example.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3">تغذية رياضيين</span></td>
                                <td><span class="fw-800">280 مريض</span></td>
                                <td><span class="fw-700">غير محدد</span></td>
                                <td><span class="status-badge status-expired"><i class="bi bi-circle-fill me-1" style="font-size: 8px;"></i> في إجازة</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
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