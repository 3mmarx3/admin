<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #a855f7;
            --bg-body: #f4f7fe;
        }
        body { background-color: var(--bg-body); font-family: 'Cairo', sans-serif; }
        .profile-wrapper { padding: 40px 0; }
        .profile-banner { height: 200px; background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); border-radius: 40px; margin-bottom: -100px; }
        .profile-main-card { background: white; border-radius: 40px; padding: 40px; border: none; box-shadow: 0 20px 50px rgba(0,0,0,0.03); position: relative; }
        .avatar-section { position: relative; width: 160px; height: 160px; margin: 0 auto 30px; }
        .avatar-section img { width: 100%; height: 100%; border-radius: 50px; object-fit: cover; border: 6px solid white; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .upload-badge { position: absolute; bottom: -5px; left: -5px; width: 45px; height: 45px; background: white; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); border: 1px solid #f1f5f9; cursor: pointer; box-shadow: 0 10px 20px rgba(0,0,0,0.1); transition: 0.3s; }
        .upload-badge:hover { background: var(--primary-color); color: white; }
        .form-label-premium { font-weight: 800; color: #475569; font-size: 0.85rem; margin-bottom: 10px; display: block; }
        .input-premium { border: 2px solid #f1f5f9; background: #f8fafc; border-radius: 16px; padding: 14px 20px; font-weight: 700; transition: 0.3s; }
        .input-premium:focus { background: white; border-color: var(--primary-color); box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1); outline: none; }
        .section-header { border-bottom: 2px solid #f8fafc; padding-bottom: 15px; margin-bottom: 30px; }
        .section-header h5 { font-weight: 900; color: #1e293b; display: flex; align-items: center; gap: 10px; }
        .btn-save { background: var(--primary-color); color: white; padding: 15px 40px; border-radius: 20px; font-weight: 900; border: none; box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3); transition: 0.3s; }
        .btn-save:hover { transform: translateY(-3px); box-shadow: 0 15px 35px rgba(99, 102, 241, 0.4); opacity: 0.95; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="container profile-wrapper">
            <div class="profile-banner"></div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="profile-main-card">
                        
                        <div class="avatar-section text-center">
                            <img src="https://ui-avatars.com/api/?name=Ammar+Ahmed&background=6366f1&color=fff&size=200&bold=true" id="avatarPreview">
                            <label for="avatarInput" class="upload-badge">
                                <i class="bi bi-camera-fill"></i>
                            </label>
                            <input type="file" id="avatarInput" hidden accept="image/*">
                        </div>

                        <div class="text-center mb-5">
                            <h2 class="fw-900 mb-1">عمار أحمد محمد</h2>
                            <p class="text-muted fw-700">دكتور التغذية | مدير النظام</p>
                        </div>

                        <form>
                            <div class="section-header">
                                <h5><i class="bi bi-person-gear text-primary"></i> المعلومات الشخصية</h5>
                            </div>
                            <div class="row g-4 mb-5">
                                <div class="col-md-6">
                                    <label class="form-label-premium">الاسم بالكامل</label>
                                    <input type="text" class="input-premium w-100" value="عمار أحمد محمد">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-premium">البريد الإلكتروني</label>
                                    <input type="email" class="input-premium w-100" value="ammar@edu-nutrition.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-premium">رقم الجوال</label>
                                    <input type="text" class="input-premium w-100" value="01012345678">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-premium">التخصص</label>
                                    <input type="text" class="input-premium w-100" value="أخصائي تغذية علاجية">
                                </div>
                            </div>

                            <div class="section-header">
                                <h5><i class="bi bi-shield-lock text-danger"></i> إعدادات الأمان</h5>
                            </div>
                            <div class="row g-4 mb-5">
                                <div class="col-md-4">
                                    <label class="form-label-premium">كلمة المرور الحالية</label>
                                    <input type="password" class="input-premium w-100" placeholder="••••••••">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label-premium">كلمة المرور الجديدة</label>
                                    <input type="password" class="input-premium w-100" placeholder="اتركها فارغة لعدم التغيير">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label-premium">تأكيد كلمة المرور</label>
                                    <input type="password" class="input-premium w-100" placeholder="••••••••">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn-save">حفظ وتحديث البيانات</button>
                                <p class="text-muted small fw-700 mt-4">نحن نهتم بخصوصية بياناتك، يتم تشفير كافة المعلومات الحساسة.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('avatarInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('avatarPreview').src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>