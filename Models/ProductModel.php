<?php
include_once 'Models/ConnectModel.php';

class ProductModel {

    // ============================================================
    // 1. LẤY TẤT CẢ SẢN PHẨM (Dùng cho quản trị hoặc trang tất cả)
    // ============================================================
    public function getAllProducts() {
        $conn = new ConnectModel();
        $SQL = "SELECT * FROM san_pham ORDER BY MaSP DESC";
        return $conn->select($SQL);
    }
    // 2. LẤY SẢN PHẨM THEO THỂ LOẠI (Dành cho Đồng hồ Nam/Nữ)
    // ============================================================

    public function getProductsByTheLoai($MaTheLoai) {
        $conn = new ConnectModel();
        
        // Truy vấn thẳng theo mã, không cần filter theo tên nữa
        // Với điều kiện bạn phải trả lại mã 1, 2, 11 cho sản phẩm trong DB
        $SQL = "SELECT * FROM san_pham 
                WHERE MaTheLoai = $MaTheLoai 
                ORDER BY MaSP DESC 
                LIMIT 8";
                
        return $conn->select($SQL);
    }
    // ============================================================
    // 3. LẤY SẢN PHẨM THEO DANH MỤC (Đồng hồ=13, Trang sức=14)
    // ============================================================
    public function getProductsByDanhMuc($ParentID) {
        $conn = new ConnectModel();
        // Sửa lại logic: Lấy SP có MaTheLoai chính là ParentID HOẶC có Parent trong bảng the_loai là ParentID
        $SQL = "SELECT sp.*
                FROM san_pham sp
                JOIN the_loai tl ON sp.MaTheLoai = tl.MaTheLoai
                WHERE tl.MaTheLoai = $ParentID OR tl.Parent = $ParentID
                ORDER BY sp.MaSP DESC";
        return $conn->select($SQL);
    }

    // ============================================================
    // NEW: HÀM NÀY ĐỂ FIX LỖI FATAL ERROR TRANG CHỦ
    // ============================================================
    public function getProductsByParent($ParentID) {
        return $this->getProductsByDanhMuc($ParentID);
    }

    // ============================================================
    // 4. LẤY DANH SÁCH THỂ LOẠI (Dùng cho Dropdown hoặc Menu)
    // ============================================================
    public function getTypes($ParentID = 1) {
        $conn = new ConnectModel();
        $SQL = "SELECT * FROM the_loai WHERE Parent = $ParentID";
        return $conn->select($SQL);
    }

    // ============================================================
    // 5. LẤY DANH SÁCH THƯƠNG HIỆU (Dùng cho Dropdown lọc)
    // ============================================================
    public function getBrands($ParentID = 1) {
        $conn = new ConnectModel();
        $SQL = "SELECT DISTINCT th.*
                FROM thuonghieu th
                JOIN san_pham sp ON th.MaTH = sp.MaTH
                JOIN the_loai tl ON sp.MaTheLoai = tl.MaTheLoai
                WHERE tl.Parent = $ParentID OR tl.MaTheLoai = $ParentID";
        return $conn->select($SQL);
    }

    // ============================================================
    // 6. 🔥 HÀM FILTER SẢN PHẨM (ĐÃ FIX CHO DATABASE GỘP CHUNG)
    // ============================================================
    public function filterProduct($type, $brand, $price, $parentContext = null) {
        $conn = new ConnectModel();

        $SQL = "SELECT sp.*, th.TenTH 
                FROM san_pham sp
                LEFT JOIN thuonghieu th ON sp.MaTH = th.MaTH
                LEFT JOIN the_loai tl ON sp.MaTheLoai = tl.MaTheLoai
                WHERE 1=1";

        // 🔥 SUPER HACK: BỞI VÌ TẤT CẢ DO DB ĐANG GỘP MaTheLoai THÀNH 13 và 14
        // Chúng ta sẽ lấy TÊN sản phẩm để nhận diện nó thuộc loại nào để lọc chính xác!
        if (!empty($type)) {
            if ($type == 7) {
                // Nhẫn
                $SQL .= " AND (sp.MaTheLoai = 7 OR sp.TenSP LIKE '%Nhẫn%')";
            } elseif ($type == 8) {
                // Vòng tay
                $SQL .= " AND (sp.MaTheLoai = 8 OR sp.TenSP LIKE '%Vòng%' OR sp.TenSP LIKE '%Lắc%')";
            } elseif ($type == 9) {
                // Dây chuyền
                $SQL .= " AND (sp.MaTheLoai = 9 OR sp.TenSP LIKE '%Dây chuyền%' OR sp.TenSP LIKE '%Mặt dây%')";
            } elseif ($type == 10) {
                // Bông tai
                $SQL .= " AND (sp.MaTheLoai = 10 OR sp.TenSP LIKE '%Bông tai%' OR sp.TenSP LIKE '%Hoa tai%')";
            } elseif ($type == 1) {
                // Đồng hồ nam
                $SQL .= " AND (sp.MaTheLoai = 1 OR sp.TenSP LIKE '%Nam%')";
            } elseif ($type == 2) {
                // Đồng hồ nữ
                $SQL .= " AND (sp.MaTheLoai = 2 OR sp.TenSP LIKE '%Nữ%')";
            } elseif ($type == 11) {
                // Đồng hồ cặp
                $SQL .= " AND (sp.MaTheLoai = 11 OR sp.TenSP LIKE '%Cặp%' OR sp.TenSP LIKE '%Đôi%')";
            } else {
                $SQL .= " AND sp.MaTheLoai = $type";
            }
        } elseif (!empty($parentContext)) {
            // Rào chắn bảo vệ: nếu không chọn thể loại cụ thể, chỉ tìm trong phạm vi cha đang đứng
            $SQL .= " AND (tl.Parent = $parentContext OR tl.MaTheLoai = $parentContext)";
        }

        if (!empty($brand)) {
            if (is_numeric($brand)) {
                $SQL .= " AND sp.MaTH = $brand";
            } else {
                $SQL .= " AND th.TenTH = '$brand'";
            }
        }

        if ($price == 1) $SQL .= " AND sp.Gia < 1000000";
        if ($price == 2) $SQL .= " AND sp.Gia BETWEEN 1000000 AND 5000000";
        if ($price == 3) $SQL .= " AND sp.Gia > 5000000";

        $SQL .= " ORDER BY sp.MaSP DESC";
        return $conn->select($SQL);
    }

    // ============================================================
    // 7. FILTER RIÊNG CHO TRANG SỨC (Nếu cần logic khác biệt)
    // ============================================================
    public function filterJewelry($brand, $type, $price) {
        return $this->filterProduct($type, $brand, $price); 
    }

    // ============================================================
    // 8. CHI TIẾT ĐỒNG HỒ (Gồm cả thông số kỹ thuật)
    // ============================================================
    public function getWatchDetail($id) {
        $conn = new ConnectModel();
        $SQL = "SELECT sp.*, th.TenTH, ts.*
                FROM san_pham sp
                LEFT JOIN thuonghieu th ON sp.MaTH = th.MaTH
                LEFT JOIN thong_so_dong_ho ts ON sp.MaSP = ts.MaSP
                WHERE sp.MaSP = $id";
        return $conn->select($SQL);
    }

    // ============================================================
    // 9. CHI TIẾT TRANG SỨC
    // ============================================================
    public function getProductDetail($id) {
        $conn = new ConnectModel();
        $SQL = "SELECT sp.*, th.TenTH, ts.*
                FROM san_pham sp
                LEFT JOIN thuonghieu th ON sp.MaTH = th.MaTH
                LEFT JOIN thong_so_trang_suc ts ON sp.MaSP = ts.MaSP
                WHERE sp.MaSP = $id";
        return $conn->select($SQL);
    }

    // ============================================================
    // 10. SẢN PHẨM TƯƠNG TỰ (Gợi ý 4 sản phẩm cùng loại)
    // ============================================================
    public function getByLoai($maLoai, $id) {
        $conn = new ConnectModel();
        $SQL = "SELECT *
                FROM san_pham
                WHERE MaTheLoai = $maLoai
                AND MaSP != $id
                ORDER BY RAND()
                LIMIT 4";
        return $conn->select($SQL);
    }
}
?>