<?php
declare(strict_types=1);
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}

$user_role = $_SESSION['role'] ?? '';
$is_admin = ($user_role === 'Admin');
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلبات الخدمات | CRM Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .badge-service { background: rgba(59, 130, 246, 0.1); color: #3b82f6; border: 1px solid rgba(59, 130, 246, 0.2); padding: 4px 12px; border-radius: 6px; font-size: 0.75rem; }
        .client-type-tag { font-size: 0.7rem; color: #a1a1aa; background: #27272a; padding: 2px 8px; border-radius: 4px; }
        .btn-call { color: #10b981 !important; background: rgba(16, 185, 129, 0.1) !important; }
        .btn-call:hover { background: #10b981 !important; color: white !important; }
        .btn-delete { color: #ef4444 !important; background: rgba(239, 68, 68, 0.1) !important; border: none !important; }
        .btn-delete:hover { background: #ef4444 !important; color: white !important; }
    </style>
</head>
<body>

<div class="crm-wrapper">
    <?php include '../includes/header.php' ?>

    <main class="workspace">
        <div class="deal-header mb-5 d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold m-0 text-white">طلبات الخدمات</h1>
                <span class="text-secondary small fw-bold">Service Orders Management</span>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <input type="text" id="orderSearch" class="search-box" placeholder="ابحث باسم العميل أو الخدمة..." style="min-width: 300px;">
                <button onclick="fetchOrders()" class="action-button border-0">
                    <i class="bi bi-arrow-clockwise me-2"></i>تحديث
                </button>
            </div>
        </div>

        <div class="stat-group mb-4">
            <div class="mini-card shadow-sm">
                <div class="icon" style="color:#3b82f6; background:rgba(59,130,246,0.1); width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 10px; margin-bottom: 10px;">
                    <i class="bi bi-cart-fill" style="font-size: 1.5rem;"></i>
                </div>
                <span class="text-muted small fw-bold">إجمالي الطلبات</span>
                <h3 class="fw-800 mt-1 mb-0" id="totalOrders">0</h3>
            </div>
        </div>

        <div id="loadingState" class="text-center py-5">
            <div class="spinner-border text-primary" role="status"></div>
            <p class="text-secondary mt-3">جاري جلب الطلبات من النظام...</p>
        </div>

        <div class="row g-4" id="ordersGrid" style="display: none;">
        </div>
    </main>
</div>

<script>
    async function deleteOrder(orderId) {
        if (!confirm('هل أنت متأكد من حذف هذا الطلب نهائياً؟')) return;

        try {
            const response = await fetch(`https://edu-consulting.online/pages/delete_order.php?id=${orderId}`);
            const result = await response.json();
            
            if (result.success) {
                fetchOrders();
            } else {
                alert('فشل الحذف');
            }
        } catch (error) {
            alert('تعذر الوصول لرابط الحذف على السيرفر');
        }
    }

    async function fetchOrders() {
        const grid = document.getElementById('ordersGrid');
        const loading = document.getElementById('loadingState');
        const totalText = document.getElementById('totalOrders');
        const apiUrl = 'https://edu-consulting.online/pages/get_orders.php';

        try {
            loading.style.display = 'block';
            grid.style.display = 'none';

            const response = await fetch(apiUrl);
            const data = await response.json();

            grid.innerHTML = '';
            totalText.textContent = data.length;

            if (data.length === 0) {
                grid.innerHTML = '<div class="col-12 text-center py-5"><p class="text-secondary">لا توجد طلبات حالياً</p></div>';
            } else {
                data.forEach(order => {
                    const cleanPhone = order.phone ? order.phone.replace(/[^0-9]/g, '') : '';
                    const card = `
                        <div class="col-md-6 col-lg-4 order-item">
                            <div class="ticket-card h-100 d-flex flex-column border border-secondary border-opacity-10 shadow-sm">
                                <div class="d-flex justify-content-between align-items-start mb-4">
                                    <div class="company-card-icon"><i class="bi bi-person-badge"></i></div>
                                    <span class="badge-service">${order.service_type}</span>
                                </div>
                                
                                <h5 class="fw-bold mb-1 text-white text-truncate order-title">${order.full_name}</h5>
                                <p class="text-accent small fw-bold mb-2 order-subtitle">${order.company_name || 'جهة غير محددة'}</p>
                                <div class="mb-3"><span class="client-type-tag">${order.client_type}</span></div>

                                <div class="flex-grow-1 border-bottom border-secondary border-opacity-10 mb-3 pb-3">
                                    <div class="small text-secondary mb-2">
                                        <i class="bi bi-envelope-at me-2"></i>${order.email}
                                    </div>
                                    <div class="small text-secondary mb-2">
                                        <i class="bi bi-telephone me-2"></i><span dir="ltr">${order.phone}</span>
                                    </div>
                                    <div class="small text-secondary mb-2">
                                        <i class="bi bi-geo-alt me-2"></i>${order.location}
                                    </div>
                                    <div class="small text-secondary">
                                        <i class="bi bi-briefcase me-2"></i>${order.business_sector}
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-2">
                                        <a href="https://wa.me/${cleanPhone}" target="_blank" class="btn-action btn-whatsapp text-decoration-none">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                        <a href="tel:${cleanPhone}" class="btn-action btn-call text-decoration-none">
                                            <i class="bi bi-telephone-fill"></i>
                                        </a>
                                        <a href="mailto:${order.email}" class="btn-action btn-email text-decoration-none">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <button onclick="deleteOrder('${order.id}')" class="btn-action btn-delete">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    grid.innerHTML += card;
                });
            }

            loading.style.display = 'none';
            grid.style.display = 'flex';

        } catch (error) {
            loading.innerHTML = '<p class="text-danger">فشل في تحميل البيانات.</p>';
        }
    }

    document.getElementById('orderSearch').addEventListener('input', function() {
        const filter = this.value.toLowerCase().trim();
        const items = document.querySelectorAll('.order-item');
        
        items.forEach(item => {
            const name = item.querySelector('.order-title').textContent.toLowerCase();
            const service = item.querySelector('.badge-service').textContent.toLowerCase();
            const company = item.querySelector('.order-subtitle').textContent.toLowerCase();
            
            if (name.includes(filter) || service.includes(filter) || company.includes(filter)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    });

    window.onload = fetchOrders;
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> وده كود api <?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once '../config/db.php';

try {
    $sql = "SELECT * FROM orders ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($orders);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Internal Server Error"]);
}
?> 