<?php
class CartController {
    // 1. Hàm thêm sản phẩm vào giỏ (Bạn đã có, tôi giữ nguyên logic)
    public function add() {
        if (!isset($_SESSION['user'])) {
            echo "<script>alert('Vui lòng đăng nhập để mua hàng!'); window.location.href='index.php?trang=login';</script>";
            return;
        }

        $maKH = $_SESSION['user']['MaKH'];
        $maSP = $_GET['id'];
        $soLuong = 1;
        $gia = $_GET['gia'];

        $db = new PDO("mysql:host=localhost;dbname=website_dong_ho", "root", "");

        $checkCart = $db->prepare("SELECT MaGioHang FROM gio_hang WHERE MaKH = ?");
        $checkCart->execute([$maKH]);
        $gioHang = $checkCart->fetch();

        if (!$gioHang) {
            $createCart = $db->prepare("INSERT INTO gio_hang (MaKH) VALUES (?)");
            $createCart->execute([$maKH]);
            $maGioHang = $db->lastInsertId();
        } else {
            $maGioHang = $gioHang['MaGioHang'];
        }

        $checkDetail = $db->prepare("SELECT MaCTGH, SoLuong FROM chi_tiet_gio_hang WHERE MaGioHang = ? AND MaSP = ?");
        $checkDetail->execute([$maGioHang, $maSP]);
        $detail = $checkDetail->fetch();

        if ($detail) {
            $updateDetail = $db->prepare("UPDATE chi_tiet_gio_hang SET SoLuong = SoLuong + 1 WHERE MaCTGH = ?");
            $updateDetail->execute([$detail['MaCTGH']]);
        } else {
            $insertDetail = $db->prepare("INSERT INTO chi_tiet_gio_hang (MaGioHang, MaSP, SoLuong, GiaBan) VALUES (?, ?, ?, ?)");
            $insertDetail->execute([$maGioHang, $maSP, $soLuong, $gia]);
        }

        echo "<script>alert('Đã thêm vào giỏ hàng thành công!'); window.history.back();</script>";
    }

    // 2. Hàm HIỂN THỊ giỏ hàng
    public function show() {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?trang=login");
            exit();
        }

        $maKH = $_SESSION['user']['MaKH'];
        $db = new PDO("mysql:host=localhost;dbname=website_dong_ho", "root", "");

        // JOIN bảng để lấy thông tin Tên, Hình ảnh từ bảng sản phẩm
        $sql = "SELECT sp.TenSP, sp.HinhAnh, sp.Gia, ct.SoLuong, ct.MaCTGH, ct.MaSP 
                FROM gio_hang gh
                JOIN chi_tiet_gio_hang ct ON gh.MaGioHang = ct.MaGioHang
                JOIN san_pham sp ON ct.MaSP = sp.MaSP
                WHERE gh.MaKH = ?";
        
        $stmt = $db->prepare($sql);
        $stmt->execute([$maKH]);
        $cartItems = $stmt->fetchAll();

        // Gọi file View để hiển thị giao diện
        include_once 'View/cart.php';
    }

    // 3. Hàm CẬP NHẬT số lượng (Dùng cho nút + và -)
    public function update() {
        $maCTGH = $_GET['id'];
        $action = $_GET['act']; // 'asc' là tăng, 'desc' là giảm

        $db = new PDO("mysql:host=localhost;dbname=website_dong_ho", "root", "");

        if ($action == 'asc') {
            $sql = "UPDATE chi_tiet_gio_hang SET SoLuong = SoLuong + 1 WHERE MaCTGH = ?";
        } else {
            // Chỉ giảm nếu số lượng đang lớn hơn 1
            $sql = "UPDATE chi_tiet_gio_hang SET SoLuong = SoLuong - 1 WHERE MaCTGH = ? AND SoLuong > 1";
        }

        $stmt = $db->prepare($sql);
        $stmt->execute([$maCTGH]);

        header("Location: index.php?trang=cart");
    }

    // 4. Hàm XÓA sản phẩm khỏi giỏ
    public function delete() {
        $maCTGH = $_GET['id'];
        
        $db = new PDO("mysql:host=localhost;dbname=website_dong_ho", "root", "");
        $sql = "DELETE FROM chi_tiet_gio_hang WHERE MaCTGH = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$maCTGH]);

        header("Location: index.php?trang=cart");
    }
}