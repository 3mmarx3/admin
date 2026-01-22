<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المواعيد | عيادة التغذية الذكية</title>
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
                    <input type="text" class="form-control" placeholder="بحث عن موعد، اسم مريض، أو تاريخ...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-calendar-range me-2"></i>عرض التقويم
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-plus-circle me-2"></i>حجز موعد جديد
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-calendar-event"></i></div>
                        <h6 class="text-muted fw-700">مواعيد اليوم</h6>
                        <h2 class="fw-800">18</h2>
                        <small class="text-primary fw-700">الخميس، 22 يناير</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-check2-circle"></i></div>
                        <h6 class="text-muted fw-700">تم الحضور</h6>
                        <h2 class="fw-800">12</h2>
                        <small class="text-success fw-700">بانتظار بقية المواعيد</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-hourglass-split"></i></div>
                        <h6 class="text-muted fw-700">قيد الانتظار</h6>
                        <h2 class="fw-800">4</h2>
                        <small class="text-muted fw-700">في غرفة الانتظار الآن</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger"><i class="bi bi-x-circle"></i></div>
                        <h6 class="text-muted fw-700">تم الإلغاء</h6>
                        <h2 class="fw-800">2</h2>
                        <small class="text-muted fw-700">مواعيد ملغاة اليوم</small>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h5 class="fw-800 m-0">جدول مواعيد اليوم الحالية</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3">الكل</button>
                        <button class="btn btn-light btn-sm rounded-pill px-3">مؤكد</button>
                        <button class="btn btn-light btn-sm rounded-pill px-3">أونلاين</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted small fw-700">
                                <th class="border-0">الوقت</th>
                                <th class="border-0">المريض</th>
                                <th class="border-0">الطبيب</th>
                                <th class="border-0">نوع الزيارة</th>
                                <th class="border-0">الحالة</th>
                                <th class="border-0 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-800 text-primary">04:30 م</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Ahmed+Sami&background=6366f1&color=fff&bold=true" class="patient-img me-3">
                                        <div>
                                            <div class="fw-800">أحمد سامي</div>
                                            <small class="text-muted">01012345678</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">د. عمار أحمد</span></td>
                                <td><span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3">كشف جديد</span></td>
                                <td><span class="status-badge status-active"><i class="bi bi-check-circle-fill"></i> تم الوصول</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-check-lg"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-800 text-primary">05:15 م</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Mona+Zaki&background=a855f7&color=fff&bold=true" class="patient-img me-3">
                                        <div>
                                            <div class="fw-800">منى زكي</div>
                                            <small class="text-muted">01122334455</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">د. سارة خالد</span></td>
                                <td><span class="badge bg-purple bg-opacity-10 rounded-pill px-3" style="color: #a855f7; background: #f5f3ff;">استشارة أونلاين</span></td>
                                <td><span class="status-badge bg-warning bg-opacity-10 text-warning"><i class="bi bi-clock-history"></i> قيد الانتظار</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-camera-video"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-800 text-primary">06:00 م</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Youssef+Ali&background=f43f5e&color=fff&bold=true" class="patient-img me-3">
                                        <div>
                                            <div class="fw-800">يوسف علي</div>
                                            <small class="text-muted">01299887766</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="fw-700">د. عمار أحمد</span></td>
                                <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">متابعة أسبوعية</span></td>
                                <td><span class="status-badge status-expired"><i class="bi bi-dash-circle"></i> لم يحضر</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action"><i class="bi bi-arrow-repeat"></i></button>
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