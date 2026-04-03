<?php

class ConnectModel {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "website_dong_ho";
    private $conn;

    public function __construct() {
        $this->connect();
    }

    // 1. Kết nối với database dùng MySQLi
    public function connect() {
        try {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            
            // Kiểm tra kết nối
            if ($this->conn->connect_error) {
                throw new Exception("Kết nối thất bại: " . $this->conn->connect_error);
            }
            
            // Thiết lập charset UTF-8 để không bị lỗi font tiếng Việt
            $this->conn->set_charset("utf8mb4");
            
            return true;
        } catch (Exception $e) {
            error_log("Lỗi kết nối Database: " . $e->getMessage());
            echo "Có lỗi xảy ra khi kết nối dữ liệu.";
            return false;
        }
    }

    // 2. Lấy đối tượng kết nối (Dùng khi cần thao tác trực tiếp mysqli)
    public function getConnection() {
        return $this->conn;
    }

    // 3. Đóng kết nối
    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    // 4. Thực hiện truy vấn SELECT (Trả về mảng dữ liệu)
    // CHỈ DÙNG CHO: SELECT
    public function select($sql) {
        $result = $this->conn->query($sql);
        
        if ($result === false) {
            error_log("Lỗi SQL Select: " . $this->conn->error);
            return null;
        }
        
        // Trả về mảng chứa các dòng dữ liệu
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // 5. Thực hiện truy vấn hành động (Trả về true/false)
    // DÙNG CHO: INSERT (Đăng ký), UPDATE, DELETE
    public function execute($sql) {
        if ($this->conn->query($sql) === true) {
            return true;
        } else {
            error_log("Lỗi SQL Execute: " . $this->conn->error);
            return false;
        }
    }

    // 6. Lấy ID cuối cùng được INSERT (Ví dụ lấy mã khách hàng vừa tạo)
    public function getLastInsertId() {
        return $this->conn->insert_id;
    }

    // 7. Prepared statement cho SELECT (Bảo mật cao)
    public function preparedSelect($sql, $types, $params) {
        $stmt = $this->conn->prepare($sql);
        
        if (!$stmt) {
            error_log("Lỗi Prepare Select: " . $this->conn->error);
            return null;
        }
        
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // 8. Prepared statement cho INSERT/UPDATE/DELETE (Bảo mật cao)
    // ĐÂY LÀ HÀM BẠN NÊN DÙNG CHO TRANG ĐĂNG KÝ
    public function preparedExecute($sql, $types, $params) {
        $stmt = $this->conn->prepare($sql);
        
        if (!$stmt) {
            error_log("Lỗi Prepare Execute: " . $this->conn->error);
            return false;
        }
        
        $stmt->bind_param($types, ...$params);
        $result = $stmt->execute();
        $stmt->close();
        
        return $result;
    }
}

?>