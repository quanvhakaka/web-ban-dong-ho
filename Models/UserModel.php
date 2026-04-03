<?php
include_once 'Models/ConnectModel.php';

class UserModel {
    private $db;

    public function __construct() {
        // Khởi tạo kết nối một lần duy nhất cho cả class
        $this->db = new ConnectModel();
    }
    
    // 1. Hàm Đăng ký
    public function register($tenkh, $email, $sdt, $diachi, $pass) {
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO user (TenKH, Email, SDT, DiaChi, MatKhau, Role) 
                VALUES (?, ?, ?, ?, ?, 0)";
        
        return $this->db->preparedExecute($sql, 'sssss', [$tenkh, $email, $sdt, $diachi, $password_hash]);
    }

    // 2. Hàm Đăng nhập
    public function checkLogin($email, $pass_input) {
        $sql = "SELECT * FROM user WHERE Email = ?";
        $result = $this->db->preparedSelect($sql, 's', [$email]);

        if ($result && count($result) > 0) {
            $user = $result[0];
            // So khớp mật khẩu - Hãy chắc chắn cột trong DB là 'MatKhau'
            if (password_verify($pass_input, $user['MatKhau'])) {
                return $user; 
            }
        }
        return false;
    }
}
?>