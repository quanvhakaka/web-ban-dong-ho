<?php include_once 'header.php'; ?>
<style>
    /* ===== CONTAINER ===== */
.policy-page{
    max-width: 900px;
    margin: 40px auto;
    padding: 30px 40px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    line-height: 1.7;
    color: #333;
}

/* ===== TITLE ===== */
.policy-page h1{
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #111;
    border-bottom: 3px solid #c0392b;
    padding-bottom: 10px;
}

/* ===== SUB TITLE ===== */
.policy-page h2{
    font-size: 20px;
    margin-top: 25px;
    margin-bottom: 10px;
    color: #c0392b;
}

/* ===== TEXT ===== */
.policy-page p{
    margin-bottom: 15px;
}

/* ===== LIST ===== */
.policy-page ul{
    padding-left: 20px;
    margin-bottom: 15px;
}

.policy-page ul li{
    margin-bottom: 8px;
}

/* ===== NOTE ===== */
.policy-page .note{
    background: #fff3cd;
    padding: 12px 15px;
    border-left: 4px solid #ffc107;
    border-radius: 5px;
    font-size: 14px;
    color: #856404;
}

/* ===== HIGHLIGHT ===== */
.policy-page b{
    color: #d0021c;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px){
    .policy-page{
        padding: 20px;
        margin: 20px;
    }

    .policy-page h1{
        font-size: 22px;
    }

    .policy-page h2{
        font-size: 18px;
    }
}

.policy-banner{
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
}

.policy-banner img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(70%);
}

/* TEXT TRÊN BANNER */
.banner-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
}

.banner-text h1{
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 10px;
}

.banner-text p{
    font-size: 18px;
    opacity: 0.9;
}
</style>
<div class="policy-banner">
    <img src="public/img/banner_vanchuyen.png" alt="Banner vận chuyển">
    <div class="banner-text">
        <h1>VẬN CHUYỂN TOÀN QUỐC</h1>
        <p>Giao nhanh - An toàn - Đúng hẹn</p>
    </div>
</div>
<div class=" policy-page">

    <h1>CHÍNH SÁCH VẬN CHUYỂN & GIAO NHẬN</h1>

    <p>
        Chúng tôi luôn nỗ lực mang đến trải nghiệm mua sắm tốt nhất cho khách hàng 
        thông qua dịch vụ giao hàng nhanh chóng, an toàn và minh bạch. 
        Tất cả đơn hàng đều được xử lý và vận chuyển theo quy trình tiêu chuẩn nhằm đảm bảo sản phẩm đến tay khách hàng trong tình trạng hoàn hảo nhất.
    </p>

    <!-- 1 -->
    <h2>1. Phạm vi áp dụng</h2>
    <ul>
        <li>Áp dụng cho tất cả khách hàng mua sắm tại website.</li>
        <li>Giao hàng trên toàn bộ 63 tỉnh thành tại Việt Nam.</li>
        <li>Áp dụng cho mọi sản phẩm thuộc hệ thống cửa hàng.</li>
    </ul>

    <!-- 2 -->
    <h2>2. Phương thức giao hàng</h2>
    <ul>
        <li>Giao hàng tiêu chuẩn thông qua đơn vị vận chuyển đối tác.</li>
        <li>Giao hàng nhanh nội thành (áp dụng tại một số khu vực).</li>
        <li>Nhận hàng trực tiếp tại cửa hàng (nếu có hỗ trợ).</li>
    </ul>

    <!-- 3 -->
    <h2>3. Thời gian xử lý đơn hàng</h2>
    <ul>
        <li>Đơn hàng được xác nhận trong vòng <b>1 – 3 giờ</b> làm việc.</li>
        <li>Đơn đặt sau 17h sẽ được xử lý vào ngày làm việc tiếp theo.</li>
        <li>Không xử lý đơn hàng vào ngày lễ, Tết.</li>
    </ul>

    <!-- 4 -->
    <h2>4. Thời gian giao hàng dự kiến</h2>
    <ul>
        <li><b>Nội thành:</b> từ 2 – 6 giờ hoặc trong ngày.</li>
        <li><b>Ngoại thành:</b> từ 1 – 2 ngày làm việc.</li>
        <li><b>Các tỉnh khác:</b> từ 2 – 5 ngày làm việc.</li>
    </ul>

    <p class="note">
        * Thời gian giao hàng có thể thay đổi tùy thuộc vào điều kiện thời tiết, 
        tình trạng giao thông hoặc các yếu tố khách quan từ đơn vị vận chuyển.
    </p>

    <!-- 5 -->
    <h2>5. Phí vận chuyển</h2>
    <ul>
        <li>Miễn phí vận chuyển với đơn hàng từ <b>500.000đ</b>.</li>
        <li>Đơn dưới 500.000đ: phí từ <b>20.000đ – 40.000đ</b> tùy khu vực.</li>
        <li>Phí giao hàng nhanh (nếu có) sẽ được thông báo trước khi xác nhận đơn.</li>
    </ul>

    <!-- 6 -->
    <h2>6. Kiểm tra và nhận hàng</h2>
    <ul>
        <li>Khách hàng có quyền kiểm tra sản phẩm trước khi thanh toán.</li>
        <li>Vui lòng quay video khi mở hộp để đảm bảo quyền lợi nếu có vấn đề phát sinh.</li>
        <li>Từ chối nhận hàng nếu sản phẩm bị lỗi, hư hỏng hoặc không đúng mô tả.</li>
    </ul>

    <!-- 7 -->
    <h2>7. Trách nhiệm của các bên</h2>
    <ul>
        <li><b>Chúng tôi:</b> đảm bảo đóng gói kỹ càng, giao đúng sản phẩm, đúng thời gian.</li>
        <li><b>Đơn vị vận chuyển:</b> chịu trách nhiệm trong quá trình vận chuyển.</li>
        <li><b>Khách hàng:</b> cung cấp thông tin nhận hàng chính xác và đầy đủ.</li>
    </ul>

    <!-- 8 -->
    <h2>8. Trường hợp giao hàng không thành công</h2>
    <ul>
        <li>Không liên lạc được với khách hàng.</li>
        <li>Địa chỉ giao hàng không chính xác.</li>
        <li>Khách hàng từ chối nhận hàng không lý do chính đáng.</li>
    </ul>

    <p>
        Trong các trường hợp trên, đơn hàng có thể bị hủy hoặc phát sinh thêm chi phí giao lại.
    </p>

    <!-- 9 -->
    <h2>9. Chính sách hỗ trợ & khiếu nại</h2>
    <ul>
        <li>Mọi khiếu nại sẽ được tiếp nhận và xử lý trong vòng <b>24 – 48 giờ</b>.</li>
        <li>Cam kết hỗ trợ tối đa để đảm bảo quyền lợi khách hàng.</li>
    </ul>

    <!-- 10 -->
    <h2>10. Thông tin liên hệ</h2>
    <p>Nếu có bất kỳ thắc mắc nào, vui lòng liên hệ:</p>
    <ul>
        <li>Hotline: <b>0123 456 789</b></li>
        <li>Email: <b>support@watchstore.com</b></li>
        <li>Thời gian làm việc: 8h00 – 21h00 (Tất cả các ngày trong tuần)</li>
    </ul>

</div>
<?php include_once 'footer.php'; ?>