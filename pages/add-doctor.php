<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة طبيب جديد | إديو تغذية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --primary-grad: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }
        .form-section { background: white; border-radius: 30px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.03); margin-bottom: 30px; }
        .form-label-custom { font-weight: 800; color: #475569; font-size: 0.85rem; margin-bottom: 10px; display: block; }
        .form-control-modern { border: 2px solid #f1f5f9; background: #f8fafc; border-radius: 16px; padding: 14px 20px; font-weight: 600; transition: 0.3s; }
        .form-control-modern:focus { background: white; border-color: #6366f1; box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1); outline: none; }
        .avatar-upload { position: relative; width: 150px; height: 150px; margin: 0 auto 30px; }
        .avatar-preview { width: 150px; height: 150px; border-radius: 40px; background-size: cover; background-position: center; border: 5px solid #fff; box-shadow: 0 10px 25px rgba(0,0,0,0.1); background-image: url('https://ui-avatars.com/api/?name=Doc&background=f1f5f9&color=cbd5e1'); }
        .avatar-edit { position: absolute; bottom: 10px; right: -10px; z-index: 1; }
        .avatar-edit input { display: none; }
        .avatar-edit label { width: 40px; height: 40px; border-radius: 12px; background: white; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 5px 10px rgba(0,0,0,0.05); transition: 0.2s; }
        .avatar-edit label:hover { background: #6366f1; color: white; border-color: #6366f1; }
        .work-day-card { background: #f8fafc; border-radius: 18px; padding: 15px 20px; margin-bottom: 15px; display: flex; align-items: center; justify-content: space-between; border: 1px solid #f1f5f9; transition: 0.3s; }
        .work-day-card:hover { background: white; border-color: #6366f1; }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <?php include '../includes/header.php'; ?>

        <main class="p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h2 class="fw-800 mb-1">إضافة طبيب جديد للفريق</h2>
                    <p class="text-muted fw-600 m-0">قم بتعبئة بيانات الطبيب المهنية وصلاحيات الدخول</p>
                </div>
                <div class="d-flex gap-3">
                    <a href="doctors.php" class="btn btn-white bg-white border shadow-sm rounded-pill px-4 fw-800 py-3 text-decoration-none">إلغاء</a>
                    <button class="btn btn-primary rounded-pill px-5 fw-800 shadow-lg py-3">اعتماد الطبيب</button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-section text-center">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"><i class="bi bi-camera-fill"></i></label>
                            </div>
                            <div class="avatar-preview" id="imagePreview"></div>
                        </div>
                        <h5 class="fw-800 mb-1">الصورة الشخصية</h5>
                        <p class="text-muted small fw-600">سيتم عرضها في ملف المرضى والتقارير</p>
                        <hr class="my-4 opacity-5">
                        <div class="text-start">
                            <label class="form-label-custom">البريد الإلكتروني المهني</label>
                            <input type="email" class="form-control-modern w-100 mb-3" placeholder="doctor@example.com">
                            <label class="form-label-custom">كلمة مرور النظام</label>
                            <input type="password" class="form-control-modern w-100" placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-section">
                        <h5 class="fw-800 mb-4 pb-3 border-bottom"><i class="bi bi-person-badge me-2 text-primary"></i>البيانات المهنية</h5>
                        <div class="row g-4">
                            <div class="col-md-7">
                                <label class="form-label-custom">الاسم الكامل (بالدرجة العلمية)</label>
                                <input type="text" class="form-control-modern w-100" placeholder="مثال: د. عمار أحمد محمد">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label-custom">التخصص الدقيق</label>
                                <select class="form-select form-control-modern">
                                    <option>تغذية علاجية</option>
                                    <option>تغذية رياضيين</option>
                                    <option>سمنة ونحافة أطفال</option>
                                    <option>جراحة سمنة</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">رقم الهاتف الشخصي</label>
                                <input type="text" class="form-control-modern w-100" placeholder="01xxxxxxxxx">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">رقم ترخيص المزاولة</label>
                                <input type="text" class="form-control-modern w-100" placeholder="12345-678">
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">نبذة تعريفية (Bio)</label>
                                <textarea class="form-control-modern w-100" rows="3" placeholder="اكتب نبذة عن الخبرات والشهادات الأكاديمية..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                            <h5 class="fw-800 m-0"><i class="bi bi-clock-history me-2 text-primary"></i>جدول المواعيد وساعات العمل</h5>
                            <button class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-800" onclick="addWorkDay()">+ إضافة يوم/فترة</button>
                        </div>
                        
                        <div id="scheduleContainer">
                            <div class="work-day-card">
                                <div class="d-flex align-items-center gap-3 flex-grow-1">
                                    <select class="form-select border-0 bg-transparent fw-800 shadow-none p-0 w-auto">
                                        <option>السبت</option>
                                        <option>الأحد</option>
                                        <option>الاثنين</option>
                                        <option>الثلاثاء</option>
                                        <option>الأربعاء</option>
                                        <option>الخميس</option>
                                        <option>الجمعة</option>
                                    </select>
                                    <div class="d-flex align-items-center gap-2 ms-md-4">
                                        <input type="time" class="form-control form-control-sm border-0 rounded-pill bg-white px-3 shadow-none" value="16:00">
                                        <span class="fw-700 text-muted">إلى</span>
                                        <input type="time" class="form-control form-control-sm border-0 rounded-pill bg-white px-3 shadow-none" value="22:00">
                                    </div>
                                </div>
                                <button class="btn btn-link text-danger p-0 border-0 ms-3" onclick="this.parentElement.remove()"><i class="bi bi-trash3"></i></button>
                            </div>
                        </div>
                        
                        <p class="text-muted small fw-700 mt-3 px-2">ملاحظة: يمكنك إضافة أكثر من فترة عمل لنفس اليوم (صباحية ومسائية).</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('imageUpload').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
                }
                reader.readAsDataURL(file);
            }
        });

        function addWorkDay() {
            const container = document.getElementById('scheduleContainer');
            const div = document.createElement('div');
            div.className = 'work-day-card';
            div.innerHTML = `
                <div class="d-flex align-items-center gap-3 flex-grow-1">
                    <select class="form-select border-0 bg-transparent fw-800 shadow-none p-0 w-auto">
                        <option>السبت</option><option>الأحد</option><option>الاثنين</option>
                        <option>الثلاثاء</option><option>الأربعاء</option><option>الخميس</option><option>الجمعة</option>
                    </select>
                    <div class="d-flex align-items-center gap-2 ms-md-4">
                        <input type="time" class="form-control form-control-sm border-0 rounded-pill bg-white px-3 shadow-none" value="09:00">
                        <span class="fw-700 text-muted">إلى</span>
                        <input type="time" class="form-control form-control-sm border-0 rounded-pill bg-white px-3 shadow-none" value="14:00">
                    </div>
                </div>
                <button class="btn btn-link text-danger p-0 border-0 ms-3" onclick="this.parentElement.remove()"><i class="bi bi-trash3"></i></button>
            `;
            container.appendChild(div);
        }
    </script>
</body>
</html>