<?php
class JewelryController {

    public function index() {
        // Sử dụng chung ProductModel thay vì CategoriesModel dễ gây lỗi
        include_once 'Models/ProductModel.php';
        $product = new ProductModel();

        // 1. Nếu trên URL có truyền tham số act=detail hoặc id -> chuyển sang trang chi tiết
        if (isset($_GET['id']) && (!isset($_GET['act']) || $_GET['act'] == 'detail')) {
            $this->detail();
            return;
        }

        // 2. LẤY CÁC THAM SỐ TỪ URL (BỘ LỌC)
        $type  = isset($_GET['id_loai']) ? $_GET['id_loai'] : (isset($_GET['type']) ? $_GET['type'] : '');
        $brand = isset($_GET['brand']) ? $_GET['brand'] : '';
        $price = isset($_GET['price']) ? $_GET['price'] : '';

        // 3. XỬ LÝ LỌC HOẶC LẤY MẶC ĐỊNH
        if ($type != '' || $brand != '' || $price != '') {
            $sp_trangsuc = $product->filterProduct($type, $brand, $price, 14);
        } else {
            // MẶC ĐỊNH: Lấy tất cả Trang sức (có Parent = 14)
            $sp_trangsuc = $product->getProductsByParent(14);
        }

        // 4. LẤY DỮ LIỆU DROPDOWN CHO BỘ LỌC TỪ DB
        // Transg sức có Parent = 14 nên lấy Brands và Types của Parent 14
        $brands = $product->getBrands(14);
        $types  = $product->getTypes(14);

        include_once 'View/jewelry.php';
    }

    public function detail() {
        if (isset($_GET['id'])) {
            include_once 'Models/ProductModel.php';
            $id = $_GET['id'];
            $product = new ProductModel();

            // lấy chi tiết sản phẩm 
            $data = $product->getProductDetail($id);

            if ($data && count($data) > 0) {
                // lấy phần tử đầu tiên
                $sp = $data[0];

                // lấy sản phẩm tương tự cùng mã thể loại
                $spTuongTu = $product->getByLoai($sp['MaTheLoai'], $id);

                include_once 'View/jewelrydetail.php';
            } else {
                echo "Sản phẩm không tồn tại!";
            }
        }
    }
}
?>