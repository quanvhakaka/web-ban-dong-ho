<?php
include_once 'Models/ProductModel.php';

class HomeController {

    public function index() {
        // 1. Khởi tạo Model
        $productModel = new ProductModel();

        // 2. Lấy danh sách Đồng hồ Nam (MaTheLoai = 1)
        // Giả sử bạn muốn hiện 8 sản phẩm bán chạy nhất
        $sp_nam_all = $productModel->getProductsByParent(1);
        $sp_nam = is_array($sp_nam_all) ? array_slice($sp_nam_all, 0, 8) : [];

        // 3. Lấy danh sách Đồng hồ Nữ (MaTheLoai = 2)
        $sp_nu_all = $productModel->getProductsByParent(2);
        $sp_nu = is_array($sp_nu_all) ? array_slice($sp_nu_all, 0, 8) : [];

        // 4. Lấy danh sách Trang sức (Gồm tất cả các loại có Parent = 14)
        // Hàm getProductsByParent sẽ tự động gom Nhẫn(7), Vòng(8), Dây chuyền(9)...
        $sp_trangsuc_all = $productModel->getProductsByParent(14);
        $sp_trangsuc = is_array($sp_trangsuc_all) ? array_slice($sp_trangsuc_all, 0, 8) : [];

       
        include_once 'View/trangchu.php';
    }
}
?>