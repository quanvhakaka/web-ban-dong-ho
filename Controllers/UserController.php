<?php
class UserController {
    // Trang Đăng ký
    public function register() {
        if (isset($_POST['btn_register'])) {
            $tenkh = $_POST['TenKH'] ?? '';
            $email = $_POST['Email'] ?? '';
            $sdt = $_POST['SDT'] ?? '';
            $diachi = $_POST['DiaChi'] ?? '';
            $matkhau = $_POST['MatKhau'] ?? '';

            include_once 'Models/UserModel.php';
            $userModel = new UserModel();
            
            // Gọi hàm đăng ký từ Model
            $result = $userModel->register($tenkh, $email, $sdt, $diachi, $matkhau);
            
            if ($result) {
                // SỬA TẠI ĐÂY: Hiện thông báo bằng JS và chuyển hướng sang trang login
                echo "<script>
                    alert('Đăng ký thành công! Chào mừng bạn đến với Luxora.');
                    window.location.href = 'index.php?trang=login';
                </script>";
                exit();
            } else {
                $error = "Đăng ký thất bại, vui lòng kiểm tra lại thông tin!";
            }
        }
        include_once 'View/register.php';
    }

    // Trang Đăng nhập
    public function login() {
        if (isset($_POST['btn_login'])) {
            // Lưu ý: Dùng 'email' và 'MatKhau' để khớp với file login.php Luxury mình đã viết
            $email = trim($_POST['email'] ?? ''); 
            $matkhau = $_POST['MatKhau'] ?? ''; 

            include_once 'Models/UserModel.php';
            $userModel = new UserModel();
            $user = $userModel->checkLogin($email, $matkhau);

            if ($user) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['user'] = $user;
                header("Location: index.php");
                exit();
            } else {
                $error = "Email hoặc mật khẩu không đúng!";
            }
        }
        include_once 'View/login.php';
    }
}
?>