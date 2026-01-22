<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الطبي المتكامل | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.9);
            --border-soft: rgba(0, 0, 0, 0.05);
            --primary-grad: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }
        body { background-color: #f4f7fe; }
        .profile-hero {
            background: white;
            border-radius: 35px;
            padding: 40px;
            border: 1px solid var(--border-soft);
            box-shadow: 0 10px 40px rgba(0,0,0,0.02);
            margin-bottom: 30px;
        }
        .patient-lg-avatar {
            width: 140px;
            height: 140px;
            border-radius: 40px;
            object-fit: cover;
            border: 6px solid #f8fafc;
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }
        .card-glass {
            background: white;
            border-radius: 30px;
            padding: 30px;
            border: 1px solid var(--border-soft);
            margin-bottom: 25px;
        }
        .metric-card {
            background: #f8fafc;
            border-radius: 24px;
            padding: 20px;
            text-align: center;
            transition: 0.3s;
            border: 1px solid transparent;
        }
        .metric-card:hover {
            background: white;
            border-color: #6366f1;
            transform: translateY(-5px);
        }
        .tab-modern .nav-link {
            border: none;
            color: #64748b;
            font-weight: 700;
            border-radius: 12px;
            padding: 12px 25px;
            margin-left: 10px;
        }
        .tab-modern .nav-link.active {
            background: #6366f1;
            color: white;
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.2);
        }
        .plan-history-item {
            background: #f8fafc;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 15px;
            border-right: 5px solid #6366f1;
            display: flex;
            align-items: center;
            gap: 20px;
            transition: 0.3s;
        }
        .plan-history-item:hover { transform: scale(1.01); background: white; }
        .measurement-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #e2e8f0;
        }
        .measurement-row:last-child { border: none; }
        .timeline-box {
            border-right: 2px solid #f1f5f9;
            margin-right: 10px;
            padding-right: 25px;
            position: relative;
            padding-bottom: 20px;
        }
        .timeline-dot {
            width: 14px;
            height: 14px;
            background: #6366f1;
            border-radius: 50%;
            position: absolute;
            right: -8px;
            top: 5px;
            border: 3px solid white;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        .file-box {
            background: #ffffff;
            border: 1.5px solid #f1f5f9;
            border-radius: 18px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: 0.2s;
        }
        .file-box:hover { border-color: #6366f1; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="profile-hero">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="https://ui-avatars.com/api/?name=Ahmed+Ali&background=6366f1&color=fff&bold=true" class="patient-lg-avatar">
                    </div>
                    <div class="col text-start">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <h1 class="fw-800 m-0">أحمد علي محمد</h1>
                            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 fw-700">ID: #99240</span>
                        </div>
                        <div class="d-flex flex-wrap gap-4 text-muted fw-700">
                            <span><i class="bi bi-calendar3 me-2"></i>28 سنة</span>
                            <span><i class="bi bi-telephone me-2"></i>01012345678</span>
                            <span><i class="bi bi-geo-alt me-2"></i>سوهاج، مصر</span>
                        </div>
                    </div>
                    <div class="col-md-auto text-md-start mt-4 mt-md-0">
                        <div class="d-flex gap-2">
                            <button class="btn btn-white bg-white border shadow-sm rounded-pill px-4 fw-800 py-3"><i class="bi bi-pencil me-2"></i>تعديل الملف</button>
                            <button class="btn btn-primary rounded-pill px-4 fw-800 shadow-lg py-3">إضافة كشف جديد</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-3"><div class="metric-card"><small class="text-muted fw-800">الوزن الحالي</small><h2 class="fw-800 text-primary mt-1 mb-0">102.5 <small class="fs-6">كجم</small></h2><div class="text-success small fw-800 mt-2"><i class="bi bi-arrow-down-short"></i> نزل 12.5 كجم</div></div></div>
                <div class="col-md-3"><div class="metric-card"><small class="text-muted fw-800">مؤشر الكتلة BMI</small><h2 class="fw-800 mt-1 mb-0">28.4</h2><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill mt-2">زيادة وزن</span></div></div>
                <div class="col-md-3"><div class="metric-card"><small class="text-muted fw-800">نسبة الدهون</small><h2 class="fw-800 mt-1 mb-0">24%</h2><div class="progress mt-3" style="height: 6px;"><div class="progress-bar bg-primary" style="width: 24%"></div></div></div></div>
                <div class="col-md-3"><div class="metric-card"><small class="text-muted fw-800">الالتزام بالخطة</small><h2 class="fw-800 mt-1 mb-0">95%</h2><div class="progress mt-3" style="height: 6px;"><div class="progress-bar bg-success" style="width: 95%"></div></div></div></div>
            </div>

            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="card-glass">
                        <ul class="nav nav-pills tab-modern mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#plan-current">الخطة الغذائية</button></li>
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#plan-history">أرشيف الخطط</button></li>
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#charts">تتبع التقدم</button></li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="plan-current">
                                <div class="row g-3">
                                    <div class="col-md-6"><div class="plan-history-item"><div class="bg-primary bg-opacity-10 text-primary p-3 rounded-4"><i class="bi bi-brightness-high fs-4"></i></div><div><h6 class="fw-800 mb-1">الإفطار (09:00 ص)</h6><p class="text-muted small fw-600 m-0">3 بيضات مسلوقة + حبة أفوكادو + جرجير</p></div></div></div>
                                    <div class="col-md-6"><div class="plan-history-item" style="border-right-color: #10b981;"><div class="bg-success bg-opacity-10 text-success p-3 rounded-4"><i class="bi bi-sun fs-4"></i></div><div><h6 class="fw-800 mb-1">الغداء (03:00 م)</h6><p class="text-muted small fw-600 m-0">200جم دجاج + 5 ملاعق أرز + سلطة</p></div></div></div>
                                    <div class="col-md-6"><div class="plan-history-item" style="border-right-color: #f59e0b;"><div class="bg-warning bg-opacity-10 text-warning p-3 rounded-4"><i class="bi bi-moon-stars fs-4"></i></div><div><h6 class="fw-800 mb-1">العشاء (09:00 م)</h6><p class="text-muted small fw-600 m-0">زبادي يوناني + بذور كتان + خيار</p></div></div></div>
                                    <div class="col-md-6"><div class="plan-history-item" style="border-right-color: #ef4444;"><div class="bg-danger bg-opacity-10 text-danger p-3 rounded-4"><i class="bi bi-info-circle fs-4"></i></div><div><h6 class="fw-800 mb-1">تعليمات هامة</h6><p class="text-muted small fw-600 m-0">شرب 3 لتر ماء + مشي 45 دقيقة</p></div></div></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plan-history">
                                <div class="plan-history-item justify-content-between"><div class="d-flex align-items-center gap-3"><i class="bi bi-file-earmark-text fs-3 text-primary"></i><div><h6 class="fw-800 mb-0">خطة التنشيف - المرحلة الأولى</h6><small class="text-muted fw-700">تاريخ: 01-01-2026</small></div></div><button class="btn btn-sm btn-light rounded-pill px-3 fw-800">عرض</button></div>
                                <div class="plan-history-item justify-content-between" style="border-right-color: #cbd5e1;"><div class="d-flex align-items-center gap-3"><i class="bi bi-file-earmark-text fs-3 text-secondary"></i><div><h6 class="fw-800 mb-0">خطة البداية والتهيئة</h6><small class="text-muted fw-700">تاريخ: 15-11-2025</small></div></div><button class="btn btn-sm btn-light rounded-pill px-3 fw-800">عرض</button></div>
                            </div>
                            <div class="tab-pane fade text-center py-5" id="charts">
                                <h5 class="fw-800 mb-4 text-start"><i class="bi bi-graph-down-arrow me-2 text-primary"></i>تطور قياس الوزن</h5>
                                <div class="d-flex align-items-end justify-content-between gap-2 px-4" style="height: 250px;">
                                    <div class="w-100 bg-primary bg-opacity-10 rounded-4 position-relative" style="height: 100%"><span class="position-absolute top-0 start-50 translate-middle-x mt-n4 fw-800 small">115</span></div>
                                    <div class="w-100 bg-primary bg-opacity-10 rounded-4 position-relative" style="height: 94%"><span class="position-absolute top-0 start-50 translate-middle-x mt-n4 fw-800 small">110</span></div>
                                    <div class="w-100 bg-primary bg-opacity-10 rounded-4 position-relative" style="height: 90%"><span class="position-absolute top-0 start-50 translate-middle-x mt-n4 fw-800 small">108</span></div>
                                    <div class="w-100 bg-primary bg-opacity-50 rounded-4 position-relative" style="height: 86%"><span class="position-absolute top-0 start-50 translate-middle-x mt-n4 fw-800 small">102</span></div>
                                    <div class="w-100 bg-light rounded-4 border-dashed position-relative" style="height: 75%"><span class="position-absolute top-0 start-50 translate-middle-x mt-n4 fw-800 small text-muted">90</span></div>
                                </div>
                                <div class="d-flex justify-content-between mt-3 px-4 text-muted fw-700 small"><span>البداية</span><span>كشف 1</span><span>كشف 2</span><span>اليوم</span><span>الهدف</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="card-glass">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-clipboard-pulse me-2 text-primary"></i>سجل القياسات التفصيلي</h5>
                        <div class="row g-4">
                            <div class="col-md-6"><div class="measurement-row"><span class="fw-700 text-muted">محيط الخصر</span><span class="fw-800 text-primary">92 سم <small class="text-success ms-1">(-2)</small></span></div><div class="measurement-row"><span class="fw-700 text-muted">محيط الصدر</span><span class="fw-800">104 سم</span></div></div>
                            <div class="col-md-6"><div class="measurement-row"><span class="fw-700 text-muted">الكتلة العضلية</span><span class="fw-800">35.2 كجم</span></div><div class="measurement-row"><span class="fw-700 text-muted">معدل الحرق BMR</span><span class="fw-800">2100 Cal</span></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card-glass mb-4">
                        <h5 class="fw-800 mb-4 border-bottom pb-3">الفحوصات والمرفقات</h5>
                        <div class="d-grid gap-3">
                            <div class="file-box"><div class="d-flex align-items-center gap-3"><i class="bi bi-file-earmark-pdf text-danger fs-3"></i><div><div class="fw-800 small">تحليل وظائف كبد</div><small class="text-muted fw-600">2026-01-10</small></div></div><button class="btn btn-sm btn-light rounded-circle"><i class="bi bi-download"></i></button></div>
                            <div class="file-box"><div class="d-flex align-items-center gap-3"><i class="bi bi-image text-primary fs-3"></i><div><div class="fw-800 small">تقرير InBody السنوي</div><small class="text-muted fw-600">2026-01-15</small></div></div><button class="btn btn-sm btn-light rounded-circle"><i class="bi bi-download"></i></button></div>
                        </div>
                    </div>

                    <div class="card-glass">
                        <h5 class="fw-800 mb-4 border-bottom pb-3">سجل الزيارات والتقدم</h5>
                        <div class="ms-2">
                            <div class="timeline-box"><span class="timeline-dot"></span><h6 class="fw-800 mb-1">الزيارة الرابعة - متابعة</h6><small class="text-muted fw-600">اليوم، 09:30 م</small><p class="small text-dark fw-600 mt-2">المريض ملتزم، تم ملاحظة تحسن في مقاسات الخصر.</p></div>
                            <div class="timeline-box"><span class="timeline-dot" style="background: #cbd5e1;"></span><h6 class="fw-800 mb-1">تعديل الخطة الغذائية</h6><small class="text-muted fw-600">منذ أسبوعين</small></div>
                            <div class="timeline-box border-0"><span class="timeline-dot" style="background: #cbd5e1;"></span><h6 class="fw-800 mb-1">الجلسة الافتتاحية</h6><small class="text-muted fw-600">15-11-2025</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>