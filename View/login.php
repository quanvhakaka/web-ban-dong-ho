<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập | LUXORA</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; }
        body { background-color: #f8f5f2; display: flex; align-items: center; justify-content: center; min-height: 100vh; }

        .auth-card {
            background: #fff;
            width: 100%;
            max-width: 450px;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            text-align: center;
        }

        .auth-card h1 {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .sub-text {
            color: #888;
            font-size: 14px;
            margin-bottom: 30px;
        }

        /* --- THÔNG BÁO LỖI --- */
        .error-box {
            background: #fef0f0;
            color: #f56c6c;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #fde2e2;
            margin-bottom: 25px;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        /* --- FORM ELEMENTS --- */
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

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
            padding: 14px 16px;
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
        }

        /* --- NÚT BẤM --- */
        .btn-login {
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

        .btn-login:hover {
            background: #c69c6d;
            box-shadow: 0 10px 20px rgba(198, 156, 109, 0.3);
            transform: translateY(-2px);
        }

        .auth-footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        .auth-footer a {
            color: #c69c6d;
            text-decoration: none;
            font-weight: 700;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="auth-card">
    <h1>Đăng nhập</h1>
    <p class="sub-text">Chào mừng bạn quay lại với Luxora</p>

    <?php if(isset($error)): ?>
        <div class="error-box">
            <i class="fa-solid fa-circle-exclamation"></i>
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form action="index.php?trang=login" method="POST">
        <div class="form-group">
            <label for="email">Địa chỉ Email</label>
            <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
        </div>

        <div class="form-group">
            <label for="MatKhau">Mật khẩu</label>
            <input type="password" id="MatKhau" name="MatKhau" placeholder="Nhập mật khẩu" required>
        </div>

        <button type="submit" name="btn_login" class="btn-login">ĐĂNG NHẬP</button>
    </form>

    <div class="auth-footer">
        Bạn chưa có tài khoản? <a href="index.php?trang=register">Đăng ký ngay</a>
    </div>
</div>

</body>
</html>