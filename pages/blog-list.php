<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المدونة | عيادة التغذية الذكية</title>
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
                    <input type="text" class="form-control" placeholder="بحث عن مقال بالعنوان أو الكلمات المفتاحية...">
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-white bg-white border-0 shadow-sm rounded-pill px-4 fw-700 h-100 py-3">
                        <i class="bi bi-tags me-2"></i>التصنيفات
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg py-3">
                        <i class="bi bi-plus-circle me-2"></i>كتابة مقال جديد
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-journal-text"></i></div>
                        <h6 class="text-muted fw-700">إجمالي المقالات</h6>
                        <h2 class="fw-800">48</h2>
                        <small class="text-muted fw-700">تم نشرها للعامة</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box bg-success bg-opacity-10 text-success"><i class="bi bi-eye"></i></div>
                        <h6 class="text-muted fw-700">مشاهدات المدونة</h6>
                        <h2 class="fw-800">12.5K</h2>
                        <small class="text-success fw-700"><i class="bi bi-graph-up me-1"></i> زيادة 20%</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning"><i class="bi bi-pencil-square"></i></div>
                        <h6 class="text-muted fw-700">مقالات مسودة</h6>
                        <h2 class="fw-800">5</h2>
                        <small class="text-muted fw-700">بانتظار المراجعة والنشر</small>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img-wrapper">
                            <span class="category-badge">نصائح صحية</span>
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&q=80&w=600" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar4-event me-1"></i> 20 يناير 2026</span>
                                <span><i class="bi bi-eye me-1"></i> 1,240</span>
                            </div>
                            <h3 class="blog-title">أفضل 10 أطعمة تساعد على حرق الدهون بشكل طبيعي وسريع</h3>
                            <div class="blog-actions">
                                <button class="btn-blog-edit">تعديل المقال</button>
                                <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                <button class="btn-action"><i class="bi bi-share"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img-wrapper">
                            <span class="category-badge">أنظمة غذائية</span>
                            <img src="https://images.unsplash.com/photo-1547592166-23ac45744acd?auto=format&fit=crop&q=80&w=600" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar4-event me-1"></i> 18 يناير 2026</span>
                                <span><i class="bi bi-eye me-1"></i> 850</span>
                            </div>
                            <h3 class="blog-title">دليل المبتدئين الشامل لنظام الصيام المتقطع: الفوائد والأضرار</h3>
                            <div class="blog-actions">
                                <button class="btn-blog-edit">تعديل المقال</button>
                                <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                <button class="btn-action"><i class="bi bi-share"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img-wrapper">
                            <span class="category-badge">وصفات لايت</span>
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&q=80&w=600" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar4-event me-1"></i> 15 يناير 2026</span>
                                <span><i class="bi bi-eye me-1"></i> 2,100</span>
                            </div>
                            <h3 class="blog-title">طريقة تحضير سلطة الكينوا بالخضروات: وجبة عشاء مشبعة وقليلة السعرات</h3>
                            <div class="blog-actions">
                                <button class="btn-blog-edit">تعديل المقال</button>
                                <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                <button class="btn-action"><i class="bi bi-share"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 pt-3">
                <button class="btn btn-white border rounded-pill px-5 fw-700 py-3 shadow-sm">تحميل المزيد من المقالات</button>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>