<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي للطبيب | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-grad: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --glass-bg: rgba(255, 255, 255, 0.9);
        }
        .doc-profile-header {
            background: white;
            border-radius: 35px;
            padding: 40px;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 10px 40px rgba(0,0,0,0.02);
            margin-bottom: 30px;
            position: relative;
        }
        .doc-avatar-lg {
            width: 150px;
            height: 150px;
            border-radius: 40px;
            object-fit: cover;
            border: 6px solid #f8fafc;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        }
        .stat-box-modern {
            background: #f8fafc;
            border-radius: 24px;
            padding: 20px;
            text-align: center;
            border: 1px solid transparent;
            transition: 0.3s;
        }
        .stat-box-modern:hover {
            background: white;
            border-color: #6366f1;
            transform: translateY(-5px);
        }
        .info-card {
            background: white;
            border-radius: 30px;
            padding: 30px;
            border: 1px solid rgba(0,0,0,0.05);
            height: 100%;
        }
        .schedule-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            background: #f8fafc;
            border-radius: 15px;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .rating-badge {
            background: #fff9db;
            color: #f59e0b;
            padding: 5px 15px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 0.9rem;
        }
        .review-item {
            padding-bottom: 20px;
            border-bottom: 1px solid #f1f5f9;
            margin-bottom: 20px;
        }
        .review-item:last-child { border: none; margin-bottom: 0; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="doc-profile-header">
                <div class="row align-items-center">
                    <div class="col-md-auto text-center mb-4 mb-md-0">
                        <img src="https://ui-avatars.com/api/?name=Ammar+Ahmed&background=6366f1&color=fff&bold=true" class="doc-avatar-lg">
                    </div>
                    <div class="col text-md-start">
                        <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 mb-2">
                            <h1 class="fw-800 m-0">د. عمار أحمد محمد</h1>
                            <span class="rating-badge"><i class="bi bi-star-fill me-1"></i> 4.9 (120 تقييم)</span>
                        </div>
                        <p class="text-primary fw-800 fs-5 mb-3">استشاري السمنة والنحافة والتغذية العلاجية</p>
                        <div class="d-flex flex-wrap gap-4 text-muted fw-700">
                            <span><i class="bi bi-envelope me-2"></i>ammar@smartclinic.com</span>
                            <span><i class="bi bi-telephone me-2"></i>01012345678</span>
                            <span><i class="bi bi-geo-alt me-2"></i>العيادة الرئيسية - سوهاج</span>
                        </div>
                    </div>
                    <div class="col-md-auto mt-4 mt-md-0 text-md-start">
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary rounded-pill px-4 fw-800 py-3 shadow-lg">تعديل الملف</button>
                            <button class="btn btn-light rounded-pill px-4 fw-800 py-3 border">الإعدادات</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5 text-center text-md-start">
                <div class="col-md-3">
                    <div class="stat-box-modern">
                        <small class="text-muted fw-800">إجمالي المرضى</small>
                        <h2 class="fw-800 text-primary mt-1 mb-0">1,250</h2>
                        <small class="text-success fw-700">حققت نتائج ممتازة</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box-modern">
                        <small class="text-muted fw-800">سنوات الخبرة</small>
                        <h2 class="fw-800 mt-1 mb-0">+10</h2>
                        <small class="text-muted fw-700">عام من العطاء</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box-modern">
                        <small class="text-muted fw-800">الأبحاث العلمية</small>
                        <h2 class="fw-800 mt-1 mb-0">15</h2>
                        <small class="text-muted fw-700">بحث منشور</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box-modern">
                        <small class="text-muted fw-800">الاستشارات الشهرية</small>
                        <h2 class="fw-800 mt-1 mb-0">320</h2>
                        <small class="text-success fw-700"><i class="bi bi-graph-up me-1"></i> نمو مستمر</small>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="info-card mb-4">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-journal-text me-2 text-primary"></i>النبذة المهنية</h5>
                        <p class="fw-600 text-muted lh-lg m-0">
                            خبير متخصص في التغذية العلاجية وإدارة الوزن، حاصل على الزمالة المصرية في التغذية. 
                            أسهم في مساعدة أكثر من 1200 مريض في الوصول لوزنهم المثالي من خلال أنظمة غذائية مرنة ومبنية على أسس علمية.
                            متخصص في تصميم أنظمة الكيتو، الصيام المتقطع، وتغذية الرياضيين ومرضى السكري.
                        </p>
                    </div>

                    <div class="info-card">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-chat-heart me-2 text-primary"></i>آراء المرضى (التغذية الراجعة)</h5>
                        <div class="review-item">
                            <div class="d-flex justify-content-between mb-2">
                                <h6 class="fw-800 m-0">أحمد محمود</h6>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                            <p class="small fw-600 text-muted m-0">"دكتور ممتاز ومستمع جيد، النظام الغذائي كان مريح جداً ونزلت 10 كيلو في شهرين بدون حرمان."</p>
                        </div>
                        <div class="review-item">
                            <div class="d-flex justify-content-between mb-2">
                                <h6 class="fw-800 m-0">سارة علي</h6>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
                            </div>
                            <p class="small fw-600 text-muted m-0">"أسلوبه راقي جداً والعيادة منظمة، والمتابعة على الواتساب سريعة جداً."</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-card mb-4">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-clock me-2 text-primary"></i>جدول المواعيد الثابت</h5>
                        <div class="schedule-label"><span>السبت</span><span class="text-primary">04:00 م - 10:00 م</span></div>
                        <div class="schedule-label"><span>الأحد</span><span class="text-primary">04:00 م - 10:00 م</span></div>
                        <div class="schedule-label"><span>الثلاثاء</span><span class="text-primary">04:00 م - 10:00 م</span></div>
                        <div class="schedule-label"><span>الأربعاء</span><span class="text-primary">09:00 ص - 03:00 م</span></div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded-4 mt-4">
                            <p class="small fw-700 text-primary mb-0 text-center">بإمكان المرضى حجز المواعيد إلكترونياً بناءً على هذا الجدول.</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-award me-2 text-primary"></i>الشهادات والاعتمادات</h5>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="bg-light p-2 rounded-3 text-primary"><i class="bi bi-patch-check fs-3"></i></div>
                            <div><div class="fw-800 small">دبلومة التغذية العلاجية</div><small class="text-muted fw-700">جامعة القاهرة</small></div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-light p-2 rounded-3 text-primary"><i class="bi bi-patch-check fs-3"></i></div>
                            <div><div class="fw-800 small">عضو الجمعية المصرية للسمنة</div><small class="text-muted fw-700">منذ 2020</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>