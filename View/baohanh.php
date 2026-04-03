<?php
include_once 'header.php';
?>

<style>
/* ===== BANNER ===== */
.policy-banner {
    width: 100%;
    height: 300px;
    position: relative;
    overflow: hidden;
}

.policy-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.policy-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

    background: rgba(0,0,0,0.5);

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.policy-banner h2 {
    color: #fff;
    font-size: 34px;
    margin: 0;
}

.policy-banner p {
    color: #ddd;
}

/* ===== CONTENT ===== */
.policy-page {
    max-width: 900px;
    margin: 60px auto;
    padding: 30px;

    background: #fff;
    border-radius: 12px;

    font-family: Arial;
    line-height: 1.8;

    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.policy-page h1 {
    text-align: center;
    margin-bottom: 25px;
}

.policy-page h2 {
    margin-top: 30px;
    color: #c69a39;
    border-left: 5px solid #c69a39;
    padding-left: 10px;
}

.policy-page ul {
    padding-left: 20px;
}

.policy-page ul li {
    margin-bottom: 6px;
}

.policy-page .note {
    background: #fff3cd;
    padding: 10px;
    border-left: 5px solid #ffc107;
}
</style>

<!-- ===== BANNER ===== -->
<div class="policy-banner">
    <img src="public/img/banner_baohanh.jpg" alt="">
    <div class="overlay">
        <h2>Chính sách bảo hành</h2>
        <p>Uy tín – Minh bạch – Bảo vệ khách hàng</p>
    </div>
</div>

<!-- ===== CONTENT ===== -->
<div class="policy-page">

    <h1>CHÍNH SÁCH BẢO HÀNH SẢN PHẨM</h1>

    <p>
        Nhằm đảm bảo quyền lợi tối đa cho khách hàng khi mua sắm và sử dụng sản phẩm, 
        chúng tôi xây dựng chính sách bảo hành minh bạch, rõ ràng và phù hợp với tiêu chuẩn của nhà sản xuất. 
        Tất cả sản phẩm đều được kiểm tra kỹ lưỡng trước khi giao đến tay khách hàng.
    </p>

    <h2>1. Phạm vi áp dụng</h2>
    <ul>
        <li>Áp dụng cho tất cả sản phẩm được mua tại hệ thống cửa hàng và website chính thức.</li>
        <li>Áp dụng cho khách hàng cá nhân và tổ chức có hóa đơn mua hàng hợp lệ.</li>
        <li>Chỉ áp dụng đối với các lỗi kỹ thuật phát sinh từ nhà sản xuất.</li>
    </ul>

    <h2>2. Thời hạn bảo hành</h2>
    <ul>
        <li>Đồng hồ chính hãng: từ <b>12 – 60 tháng</b> tùy thương hiệu.</li>
        <li>Pin đồng hồ: bảo hành từ <b>6 – 12 tháng</b>.</li>
        <li>Một số sản phẩm cao cấp có thể áp dụng bảo hành mở rộng theo chính sách riêng.</li>
        <li>Thời gian bảo hành được tính từ ngày mua hàng ghi trên hóa đơn.</li>
    </ul>

    <h2>3. Điều kiện được bảo hành</h2>
    <ul>
        <li>Sản phẩm còn trong thời gian bảo hành.</li>
        <li>Có hóa đơn mua hàng hoặc mã đơn hàng hợp lệ.</li>
        <li>Sản phẩm bị lỗi kỹ thuật do nhà sản xuất (máy chạy sai, đứng máy,...).</li>
        <li>Tem bảo hành còn nguyên vẹn, không có dấu hiệu bị sửa đổi.</li>
    </ul>

    <h2>4. Các trường hợp không được bảo hành</h2>
    <ul>
        <li>Sản phẩm bị rơi vỡ, va đập mạnh gây hư hỏng.</li>
        <li>Hư hỏng do vào nước sai quy định (không đúng độ chống nước).</li>
        <li>Sản phẩm bị oxy hóa do hóa chất hoặc môi trường.</li>
        <li>Tự ý tháo lắp hoặc sửa chữa tại đơn vị không được ủy quyền.</li>
        <li>Trầy xước, hao mòn trong quá trình sử dụng.</li>
        <li>Hết thời hạn bảo hành.</li>
    </ul>

    <p class="note">
        * Các trường hợp trên vẫn được hỗ trợ sửa chữa có tính phí nếu khách hàng có nhu cầu.
    </p>

    <h2>5. Nội dung bảo hành</h2>
    <ul>
        <li>Kiểm tra và sửa chữa lỗi kỹ thuật của bộ máy.</li>
        <li>Thay thế linh kiện bị lỗi do nhà sản xuất.</li>
        <li>Hiệu chỉnh độ chính xác của đồng hồ.</li>
        <li>Kiểm tra khả năng chống nước (nếu có).</li>
    </ul>

    <h2>6. Quy trình bảo hành</h2>
    <ul>
        <li>Khách hàng mang sản phẩm đến cửa hàng hoặc gửi qua đường vận chuyển.</li>
        <li>Nhân viên tiếp nhận và kiểm tra tình trạng sản phẩm.</li>
        <li>Xác định lỗi và thông báo phương án xử lý.</li>
        <li>Tiến hành sửa chữa hoặc gửi hãng (nếu cần).</li>
        <li>Hoàn trả sản phẩm sau khi xử lý xong.</li>
    </ul>

    <h2>7. Thời gian xử lý bảo hành</h2>
    <ul>
        <li>Sửa chữa đơn giản: từ <b>3 – 7 ngày</b>.</li>
        <li>Sửa chữa phức tạp: từ <b>7 – 14 ngày</b>.</li>
        <li>Gửi hãng: từ <b>2 – 6 tuần</b>.</li>
    </ul>

    <h2>8. Chính sách đổi sản phẩm</h2>
    <ul>
        <li>Đổi sản phẩm mới trong vòng <b>7 ngày</b> nếu lỗi từ nhà sản xuất.</li>
        <li>Sản phẩm phải còn đầy đủ hộp, phụ kiện và không trầy xước.</li>
        <li>Không áp dụng đổi với lỗi do người sử dụng.</li>
    </ul>

    <h2>9. Chi phí phát sinh</h2>
    <ul>
        <li>Miễn phí hoàn toàn nếu sản phẩm đủ điều kiện bảo hành.</li>
        <li>Có thể phát sinh chi phí nếu lỗi do người dùng.</li>
        <li>Chi phí sẽ được thông báo trước khi sửa chữa.</li>
    </ul>

    <h2>10. Bảo hành phụ kiện</h2>
    <ul>
        <li>Dây đeo: không áp dụng bảo hành miễn phí.</li>
        <li>Mặt kính: không bảo hành trầy xước.</li>
        <li>Pin: hỗ trợ thay pin miễn phí theo chương trình (nếu có).</li>
    </ul>

    <h2>11. Quyền lợi của khách hàng</h2>
    <ul>
        <li>Được tư vấn và kiểm tra sản phẩm miễn phí.</li>
        <li>Được thông báo rõ ràng tình trạng sản phẩm.</li>
        <li>Đảm bảo minh bạch trong quá trình bảo hành.</li>
    </ul>

    <h2>12. Nghĩa vụ của khách hàng</h2>
    <ul>
        <li>Cung cấp thông tin mua hàng chính xác.</li>
        <li>Bảo quản sản phẩm đúng cách.</li>
        <li>Không tự ý sửa chữa khi chưa được cho phép.</li>
    </ul>

    <h2>13. Lưu ý khi sử dụng</h2>
    <ul>
        <li>Tránh va đập mạnh hoặc rơi rớt.</li>
        <li>Không sử dụng quá mức chống nước.</li>
        <li>Tránh tiếp xúc hóa chất mạnh.</li>
        <li>Bảo dưỡng định kỳ để tăng tuổi thọ sản phẩm.</li>
    </ul>

    <h2>14. Chính sách hỗ trợ & khiếu nại</h2>
    <ul>
        <li>Tiếp nhận khiếu nại trong vòng <b>24 – 48 giờ</b>.</li>
        <li>Cam kết xử lý nhanh chóng và minh bạch.</li>
        <li>Ưu tiên quyền lợi khách hàng.</li>
    </ul>

    <h2>15. Thông tin liên hệ</h2>
    <ul>
        <li>Hotline: <b>0123 456 789</b></li>
        <li>Email: <b>support@watchstore.com</b></li>
        <li>Thời gian làm việc: 8h00 – 21h00</li>
    </ul>

</div>

<?php include_once 'footer.php'; ?>