<?php include_once 'View/header.php'; ?>

<style>
    .cart-wrapper { padding: 40px 100px; background: #f9f9f9; min-height: 600px; }
    .cart-table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
    .cart-table th { background: #f1f1f1; padding: 15px; text-align: left; text-transform: uppercase; font-size: 14px; }
    .cart-table td { padding: 20px 15px; border-bottom: 1px solid #eee; }

    /* Cụm nút Tăng/Giảm số lượng */
    .qty-box { display: flex; align-items: center; border: 1px solid #ddd; width: fit-content; border-radius: 4px; overflow: hidden; }
    .qty-btn { 
        width: 35px; height: 35px; border: none; background: #fff; 
        cursor: pointer; font-size: 18px; font-weight: bold; transition: 0.3s; 
    }
    .qty-btn:hover { background: #f0f0f0; color: #c0392b; }
    .qty-input { 
        width: 45px; height: 35px; text-align: center; border: none; 
        border-left: 1px solid #ddd; border-right: 1px solid #ddd; font-weight: 600; 
    }

    .price-each { font-weight: 600; color: #333; }
    .price-total { font-weight: bold; color: #d0021c; }
    .btn-del { color: #999; text-decoration: none; font-size: 13px; }
    .btn-del:hover { color: red; }

    .cart-footer { margin-top: 30px; display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 20px; border-radius: 8px; }
    .checkout-btn { background: #c0392b; color: #fff; padding: 15px 40px; border-radius: 5px; font-weight: bold; text-decoration: none; }
</style>

<div class="cart-wrapper">
    <h2>GIỎ HÀNG CỦA BẠN</h2>
    
    <table class="cart-table">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $tongTiengio = 0;
            foreach ($cartItems as $item): 
                $thanhTien = $item['Gia'] * $item['SoLuong'];
                $tongTiengio += $thanhTien;
            ?>
            <tr>
                <td>
                    <div style="display:flex; align-items:center; gap:15px;">
                        <img src="public/img/<?php echo $item['HinhAnh']; ?>" width="70">
                        <strong><?php echo $item['TenSP']; ?></strong>
                    </div>
                </td>
                <td class="price-each"><?php echo number_format($item['Gia']); ?> đ</td>
                <td>
                    <div class="qty-box">
                        <a href="index.php?trang=update_cart&id=<?php echo $item['MaCTGH']; ?>&act=desc" class="qty-btn" style="text-decoration:none; display:flex; justify-content:center; align-items:center;">-</a>
                        
                        <input type="text" class="qty-input" value="<?php echo $item['SoLuong']; ?>" readonly>
                        
                        <a href="index.php?trang=update_cart&id=<?php echo $item['MaCTGH']; ?>&act=asc" class="qty-btn" style="text-decoration:none; display:flex; justify-content:center; align-items:center;">+</a>
                    </div>
                </td>
                <td class="price-total"><?php echo number_format($thanhTien); ?> đ</td>
                <td>
                    <a href="index.php?trang=delete_cart&id=<?php echo $item['MaCTGH']; ?>" class="btn-del" onclick="return confirm('Bạn muốn xóa SP này?')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="cart-footer">
        <a href="index.php" style="color:#3498db;"><i class="fa-solid fa-arrow-left"></i> Tiếp tục mua hàng</a>
        <div>
            <span style="font-size:18px; margin-right:20px;">Tổng thanh toán: <strong class="price-total" style="font-size:24px;"><?php echo number_format($tongTiengio); ?> đ</strong></span>
            <a href="index.php?trang=checkout" class="checkout-btn">ĐẶT HÀNG NGAY</a>
        </div>
    </div>
</div>

<?php include_once 'View/footer.php'; ?>