<?php
class WatchController {

    public function index() {
        include_once 'Models/ProductModel.php';
        $product = new ProductModel();

        // 1. Nếu có ID thì chuyển sang trang chi tiết
        if (isset($_GET['id'])) {
            $this->detail();
            return;
        }

        // 2. LẤY CÁC THAM SỐ TỪ URL (BỘ LỌC)
        // Ưu tiên lấy 'id_loai' từ menu hoặc 'type' từ form lọc
        $type  = isset($_GET['id_loai']) ? $_GET['id_loai'] : (isset($_GET['type']) ? $_GET['type'] : '');
        $brand = isset($_GET['brand']) ? $_GET['brand'] : '';
        $price = isset($_GET['price']) ? $_GET['price'] : '';

        // 3. XỬ LÝ LOGIC BỘ LỌC ĐÃ CẢI TIẾN
        // Thay vì dùng if/else tách biệt, ta dùng một hàm filter duy nhất 
        // để kết hợp cả 3 điều kiện: Type AND Brand AND Price
        if ($type != '' || $brand != '' || $price != '') {
            // Nếu không có type (truy cập chung), mặc định là rỗng để Model xử lý (nhưng khoanh vùng 13)
            $sp_dongho = $product->filterProduct($type, $brand, $price, 13);
        } else {
            // MẶC ĐỊNH: Nếu mới vào trang đồng hồ mà chưa chọn bộ lọc nào
            // Lấy TẤT CẢ sản phẩm thuộc danh mục Đồng hồ (Parent = 13: bao gồm Cả Nam, Nữ, Cặp)
            $sp_dongho = $product->getProductsByParent(13); 
        }

        // 4. LẤY DỮ LIỆU CHO CÁC DROPDOWN TRÊN GIAO DIỆN
        // Phải truyền 13 vào vì 13 là mã của danh mục Đồng hồ, thì mới lấy ra được subcategory (Nam, Nữ, Cặp)
        $brands = $product->getBrands(13); 
        $types  = $product->getTypes(13); 

        // 5. HIỂN THỊ VIEW
        include_once 'View/watch.php';
    }

    public function detail() {
        if (isset($_GET['id'])) {
            include_once 'Models/ProductModel.php';
            $id = $_GET['id'];
            $product = new ProductModel();
            
            $data = $product->getWatchDetail($id);

            if ($data && count($data) > 0) {
                $sp = $data[0];
                // Lấy sản phẩm tương tự cùng thể loại
                $spTuongTu = $product->getByLoai($sp['MaTheLoai'], $id);
                include_once 'View/watchdetail.php';
            } else {
                echo "Sản phẩm không tồn tại!";
            }
        }
    }
}
?>