<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الأنظمة والاشتراكات | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.03);
            --primary-gradient: linear-gradient(135deg, #6366f1, #a855f7);
        }

        .pkg-grid-header {
            background: white;
            border-radius: 24px;
            padding: 25px 35px;
            box-shadow: var(--card-shadow);
            margin-bottom: 40px;
        }

        .package-premium-card {
            background: white;
            border-radius: 30px;
            padding: 0;
            border: 1px solid rgba(0,0,0,0.03);
            box-shadow: var(--card-shadow);
            transition: all 0.4s ease;
            height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .package-premium-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.07);
        }

        .card-head-gradient {
            background: var(--primary-gradient);
            padding: 35px 25px;
            text-align: center;
            color: white;
            position: relative;
        }

        .card-head-gradient h4 {
            font-weight: 800;
            margin-bottom: 10px;
            font-size: 1.4rem;
        }

        .price-circle {
            background: white;
            color: var(--primary-color);
            width: 110px;
            height: 110px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 15px auto -70px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            position: relative;
            z-index: 2;
        }

        .price-circle .amount { font-size: 1.5rem; font-weight: 800; line-height: 1; }
        .price-circle .curr { font-size: 0.7rem; font-weight: 700; color: #94a3b8; margin-top: 4px; }

        .card-body-content {
            padding: 80px 30px 30px;
            flex-grow: 1;
        }

        .feat-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            font-weight: 600;
            color: #475569;
            font-size: 0.95rem;
        }

        .feat-item i {
            color: #10b981;
            font-size: 1.2rem;
        }

        .feat-item.disabled { color: #cbd5e1; }
        .feat-item.disabled i { color: #cbd5e1; }

        .pkg-footer-actions {
            padding: 20px 30px 30px;
            background: #f8fafc;
            border-top: 1px solid #f1f5f9;
            display: flex;
            gap: 12px;
        }

        .btn-modern-pkg {
            flex: 1;
            border-radius: 14px;
            padding: 12px;
            font-weight: 800;
            font-size: 0.9rem;
            transition: 0.3s;
            border: none;
        }

        .btn-edit-pkg { background: white; color: #1e293b; border: 1px solid #e2e8f0; }
        .btn-edit-pkg:hover { background: #f1f5f9; }

        .btn-delete-pkg { background: #fee2e2; color: #ef4444; max-width: 55px; }
        .btn-delete-pkg:hover { background: #ef4444; color: white; }

        .add-new-dashed {
            border: 2.5px dashed #cbd5e1;
            background: transparent;
            border-radius: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px;
            transition: 0.3s;
            cursor: pointer;
            height: 100%;
        }

        .add-new-dashed:hover {
            border-color: var(--primary-color);
            background: white;
        }

        .promo-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,0.2);
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 800;
            color: white;
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="pkg-grid-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <h2 class="fw-800 mb-1">التحكم في الباقات</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">إدارة العروض</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-light rounded-pill px-4 fw-700 border shadow-sm">الأرشيف</button>
                    <button class="btn btn-primary rounded-pill px-4 fw-700 shadow-lg">إضافة باقة جديدة</button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xl-4 col-md-6">
                    <div class="package-premium-card">
                        <div class="card-head-gradient">
                            <span class="promo-badge">الأكثر مبيعاً</span>
                            <h4>المتابعة الشهرية</h4>
                            <p class="small opacity-75 m-0">مثالية للبدء في رحلة نزول الوزن</p>
                            <div class="price-circle">
                                <span class="amount">600</span>
                                <span class="curr">جنيهاً / شهر</span>
                            </div>
                        </div>
                        <div class="card-body-content">
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> 4 زيارات فحص أسبوعية</div>
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> نظام غذائي متجدد</div>
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> متابعة يومية WhatsApp</div>
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> فحص InBody مجاني</div>
                        </div>
                        <div class="pkg-footer-actions">
                            <button class="btn-modern-pkg btn-edit-pkg">تعديل الباقة</button>
                            <button class="btn-modern-pkg btn-delete-pkg"><i class="bi bi-trash3"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="package-premium-card">
                        <div class="card-head-gradient" style="background: linear-gradient(135deg, #10b981, #059669);">
                            <span class="promo-badge">خصم لفترة محدودة</span>
                            <h4>باقة VIP - 3 شهور</h4>
                            <p class="small opacity-75 m-0">الخيار المتكامل للتحول الشامل</p>
                            <div class="price-circle">
                                <span class="amount">1500</span>
                                <span class="curr">جنيهاً كلي</span>
                            </div>
                        </div>
                        <div class="card-body-content">
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> 12 زيارة للعيادة</div>
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> أنظمة تدريب رياضية</div>
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> دعم مباشر 24/7</div>
                            <div class="feat-item"><i class="bi bi-patch-check-fill"></i> خصم 20% على التحاليل</div>
                        </div>
                        <div class="pkg-footer-actions">
                            <button class="btn-modern-pkg btn-edit-pkg">تعديل الباقة</button>
                            <button class="btn-modern-pkg btn-delete-pkg"><i class="bi bi-trash3"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="add-new-dashed" onclick="location.href='add-package.php'">
                        <div class="bg-primary bg-opacity-10 text-primary p-4 rounded-circle mb-3">
                            <i class="bi bi-plus-lg fs-2"></i>
                        </div>
                        <h5 class="fw-800 text-dark mb-2">إضافة نظام اشتراك</h5>
                        <p class="text-muted small text-center px-4">قم بإنشاء باقة جديدة مخصصة لجمهورك المستهدف</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>