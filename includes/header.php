<aside class="sidebar" id="mainSidebar">
    <a href="index.php" class="sidebar-brand">
        <div class="brand-logo">
            <i class="bi bi-lightning-charge-fill"></i>
        </div>
        <span class="brand-name">إديو تغذية</span>
    </a>

    <div class="sidebar-menu">
        <div class="menu-label">الرئيسية</div>
        <a href="index.php" class="nav-link active">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>لوحة التحكم</span>
        </a>
        
        <div class="menu-label">إدارة العيادة</div>
        <a href="patients.php" class="nav-link">
            <i class="bi bi-people-fill"></i>
            <span>قائمة المرضى</span>
        </a>
        <a href="appointments.php" class="nav-link">
            <i class="bi bi-calendar2-check-fill"></i>
            <span>المواعيد</span>
        </a>
        <a href="doctors.php" class="nav-link">
            <i class="bi bi-person-badge-fill"></i>
            <span>الأطباء</span>
        </a>

        <div class="menu-label">الخدمات والخطط</div>
        <a href="plans.php" class="nav-link">
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>إنشاء خطة</span>
        </a>
        <a href="management.php" class="nav-link">
            <i class="bi bi-box-seam-fill"></i>
            <span>الباقات </span>
        </a>

        <div class="menu-label">المالية والمحتوى</div>
        <a href="finance.php" class="nav-link">
            <i class="bi bi-wallet2"></i>
            <span>الحسابات المالية</span>
        </a>
        <a href="payment-methods.php" class="nav-link">
            <i class="bi bi-credit-card-fill"></i>
            <span>وسائل الدفع</span>
        </a>
        <a href="blog-list.php" class="nav-link">
            <i class="bi bi-journal-text"></i>
            <span>المدونة</span>
        </a>
    </div>

    <div class="sidebar-footer">
        <a href="logout.php" class="logout-link">
            <i class="bi bi-box-arrow-right ms-2"></i>
            <span>تسجيل الخروج</span>
        </a>
    </div>
</aside>

<header class="top-header">
    <div class="container-fluid d-flex align-items-center justify-content-between px-0">
        
        <div class="search-wrapper d-none d-lg-block">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="بحث سريع عن مريض أو فاتورة...">
        </div>

        <div class="mobile-toggle d-lg-none">
            <button class="header-action-btn" onclick="document.getElementById('mainSidebar').classList.toggle('show')">
                <i class="bi bi-list fs-3"></i>
            </button>
        </div>

        <div class="d-flex align-items-center gap-3">
            <button class="header-action-btn">
                <i class="bi bi-chat-left-dots"></i>
            </button>
            
            <div class="dropdown">
                <button class="header-action-btn" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="notif-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-3 p-0 rounded-4" style="width: 320px;">
                    <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                        <h6 class="m-0 fw-800">التنبيهات</h6>
                        <span class="badge bg-primary-subtle text-primary rounded-pill">2 جديد</span>
                    </div>
                    <div class="p-2">
                        <a href="#" class="dropdown-item p-3 rounded-3 d-flex gap-3">
                            <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-3" style="height: fit-content;">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div class="text-wrap">
                                <p class="m-0 small fw-800">مريض جديد انضم للعيادة</p>
                                <small class="text-muted">منذ 5 دقائق</small>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 text-center border-top">
                        <a href="#" class="small text-decoration-none fw-700">عرض الكل</a>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <button class="user-dropdown-btn shadow-sm" data-bs-toggle="dropdown">
                    <div class="text-end d-none d-sm-block">
                        <span class="d-block fw-800 fs-14" style="font-size: 14px;">د. عمار أحمد</span>
                        <span class="d-block text-muted" style="font-size: 11px;">المدير العام</span>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Ammar+Ahmed&background=6366f1&color=fff&bold=true" width="40" height="40" class="rounded-circle border border-2">
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-3 p-2 rounded-4">
                    <li><a class="dropdown-item py-2 rounded-3" href="profile.php"><i class="bi bi-person me-2"></i>حسابي</a></li>
                    <li><a class="dropdown-item py-2 rounded-3" href="settings.php"><i class="bi bi-gear me-2"></i>الإعدادات</a></li>
                    <li><hr class="dropdown-divider opacity-50"></li>
                    <li><a class="dropdown-item py-2 rounded-3 text-danger fw-700" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>خروج</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>