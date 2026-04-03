<?php
// Tên file: register.php
// Bạn có thể chèn logic PHP xử lý đăng ký ở đây hoặc để ở Controller tùy cấu trúc project
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên | LUXORA</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        /* --- CSS RESET & BASE --- */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; }
        body { background-color: #f8f5f2; overflow-x: hidden; }

        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        /* --- LAYOUT CHÍNH --- */
        .auth-card {
            background: #fff;
            width: 100%;
            max-width: 1000px;
            display: flex;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        }

        /* --- CỘT TRÁI: THƯƠNG HIỆU --- */
        .auth-brand-side {
            flex: 1;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1547996160-81dfa63595aa?q=80&w=1000&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand-logo {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #c69c6d;
        }

        .brand-content h2 {
            font-size: 38px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #fff;
        }

        .brand-content p {
            font-size: 16px;
            line-height: 1.6;
            color: #ddd;
            font-weight: 300;
        }

        /* --- CỘT PHẢI: FORM ĐĂNG KÝ --- */
        .auth-form-side {
            flex: 1.2;
            padding: 50px 60px;
            background: #fff;
        }

        .auth-form-side h1 {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .sub-text {
            color: #888;
            font-size: 14px;
            margin-bottom: 35px;
        }

        /* --- FORM ELEMENTS --- */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group { margin-bottom: 22px; }

        .form-group label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            color: #555;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .form-group input {
            width: 100%;
            padding: 13px 16px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            font-size: 14px;
            background: #fafafa;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input:focus {
            border-color: #c69c6d;
            background: #fff;
            box-shadow: 0 0 12px rgba(198, 156, 109, 0.15);
            transform: translateY(-1px);
        }

        /* --- NÚT BẤM --- */
        .btn-register {
            width: 100%;
            padding: 16px;
            background: #1a1a1a;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-register:hover {
            background: #c69c6d;
            box-shadow: 0 10px 20px rgba(198, 156, 109, 0.3);
            transform: translateY(-2px);
        }

        /* --- FOOTER FORM --- */
        .auth-footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }

        .auth-footer a {
            color: #c69c6d;
            text-decoration: none;
            font-weight: 700;
            margin-left: 5px;
        }

        .auth-footer a:hover { text-decoration: underline; }

        /* --- THÔNG BÁO LỖI (NẾU CÓ) --- */
        .error-box {
            background: #fff1f0;
            border: 1px solid #ffa39e;
            color: #d9534f;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 13px;
            text-align: center;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 900px) {
            .auth-card { flex-direction: column; }
            .auth-brand-side { padding: 40px; min-height: 250px; }
            .auth-form-side { padding: 40px 30px; }
        }
        
        @media (max-width: 500px) {
            .form-grid { grid-template-columns: 1fr; gap: 0; }
        }
    </style>
</head>
<body>

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-brand-side">
            <div class="brand-logo">LUXORA</div>
            <div class="brand-content">
                <h2>Nâng Tầm Đẳng Cấp Thượng Lưu</h2>
                <p>Khám phá thế giới phụ kiện xa xỉ. Đăng ký ngay để nhận ưu đãi đặc biệt dành riêng cho thành viên.</p>
            </div>
            <div class="brand-footer">
                <p>&copy; 2026 Luxora International</p>
            </div>
        </div>

        <div class="auth-form-side">
            <h1>Tạo tài khoản</h1>
            <p class="sub-text">Hãy điền thông tin bên dưới để bắt đầu</p>

            <?php if(isset($error)): ?>
                <div class="error-box"><?php echo $error; ?></div>
            <?php endif; ?>

            <form action="index.php?trang=register" method="POST">
                <div class="form-group">
                    <label for="TenKH">Họ và tên</label>
                    <input type="text" id="TenKH" name="TenKH" placeholder="Nguyễn Văn A" required>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="Email">Địa chỉ Email</label>
                        <input type="email" id="Email" name="Email" placeholder="example@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="SDT">Số điện thoại</label>
                        <input type="text" id="SDT" name="SDT" placeholder="09xx xxx xxx" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="DiaChi">Địa chỉ nhận hàng</label>
                    <input type="text" id="DiaChi" name="DiaChi" placeholder="Số nhà, tên đường, quận/huyện..." required>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="MatKhau">Mật khẩu</label>
                        <input type="password" id="MatKhau" name="MatKhau" placeholder="••••••••" required>
                    </div>
                    <div class="form-group">
                        <label for="re_pass">Xác nhận mật khẩu</label>
                        <input type="password" id="re_pass" name="re_pass" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" name="btn_register" class="btn-register">Đăng ký thành viên</button>
            </form>

            <div class="auth-footer">
                Bạn đã là thành viên? <a href="index.php?trang=login">Đăng nhập ngay</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>