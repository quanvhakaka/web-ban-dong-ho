<?php
include_once 'Models/ConnectModel.php';

class CategoriesModel {

    // ============================================================
    // 1. LẤY TẤT CẢ SẢN PHẨM (Dùng cho quản trị hoặc trang tất cả)
    // ============================================================
    public function getAllCategories() {
        $conn = new ConnectModel();
        $SQL = "SELECT * FROM the_loai ORDER BY MaTheLoai DESC";
        return $conn->select($SQL);
    }

    
  
}
?>