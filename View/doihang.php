<?php include_once 'View/header.php'; ?>

<style>

/* ===== WRAPPER ===== */
.doihang-page{
    background:#f5f5f5;
    padding-bottom:40px;
}

/* ===== BANNER ===== */
.doihang-page .banner{
    position:relative;
}

.doihang-page .banner img{
    width:100%;
    height:320px;
    object-fit:cover;
}

.doihang-page .banner::after{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.4);
}

.doihang-page .banner-text{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    color:#fff;
    text-align:center;
    z-index:2;
}

.doihang-page .banner-text h1{
    font-size:36px;
    margin:0;
}

.doihang-page .banner-text p{
    margin-top:10px;
}

/* ===== CONTENT (ĐỔI CLASS ĐỂ KHÔNG BỊ FLEX) ===== */
.doihang-page .doihang-container{
    width:900px;
    margin:30px auto;
    background:#fff;
    padding:30px;
    border-radius:10px;
}

/* text */
.doihang-page h2{
    margin-top:25px;
    color:#c0392b;
}

.doihang-page p{
    line-height:1.7;
    color:#333;
}

.doihang-page ul{
    padding-left:20px;
}

.doihang-page ul li{
    margin-bottom:8px;
}

/* box */
.doihang-page .highlight{
    background:#fff3cd;
    padding:15px;
    border-left:5px solid #ffc107;
    margin:20px 0;
}

.doihang-page .note{
    background:#fdecea;
    padding:15px;
    border-left:5px solid #e74c3c;
    margin:20px 0;
}

/* responsive */
@media(max-width:768px){
    .doihang-page .doihang-container{
        width:90%;
    }
}

</style>

<div class="doihang-page">

    <!-- ===== BANNER ===== -->
    <div class="banner">
        <img src="public/img/chinhsachdoitra.png">
        <div class="banner-text">
            <h1>Chính sách bảo hành miễn phí trong vòng 7 ngày</h1>
            <p>Cam kết uy tín – Minh bạch – Hỗ trợ tận tâm</p>
        </div>
    </div>

    <!-- ===== NỘI DUNG ===== -->
    <div class="doihang-container">

        <p>
        Chúng tôi cam kết mang đến cho khách hàng những sản phẩm chất lượng cao cùng chính sách bảo hành và đổi trả rõ ràng.
        </p>

        <div class="highlight">
            ✔ Bảo hành 12 - 24 tháng <br>
            ✔ Đổi trả trong 7 ngày <br>
            ✔ Hỗ trợ trọn đời
        </div>

        <h2>1. Thời gian bảo hành</h2>
        <p>Thời gian bảo hành từ 12 - 24 tháng tùy sản phẩm.</p>

        <h2>2. Điều kiện bảo hành</h2>
        <ul>
            <li>Còn thời hạn bảo hành</li>
            <li>Có hóa đơn</li>
            <li>Lỗi do nhà sản xuất</li>
            <li>Không bị sửa chữa bên ngoài</li>
        </ul>

        <h2>3. Không được bảo hành</h2>
        <ul>
            <li>Rơi vỡ, va đập</li>
            <li>Vào nước</li>
            <li>Hư hỏng do người dùng</li>
        </ul>

        <div class="note">
            ⚠ Không đủ điều kiện vẫn hỗ trợ sửa chữa có phí
        </div>

        <h2>4. Chính sách đổi trả</h2>
        <p>Đổi trong vòng <b>7 ngày</b> nếu lỗi từ nhà sản xuất.</p>

        <h2>5. Điều kiện đổi trả</h2>
        <ul>
            <li>Còn nguyên vẹn</li>
            <li>Đầy đủ hộp, phụ kiện</li>
            <li>Có hóa đơn</li>
        </ul>

        <h2>6. Quy trình</h2>
        <ul>
            <li>Liên hệ cửa hàng</li>
            <li>Gửi sản phẩm</li>
            <li>Kiểm tra</li>
            <li>Xử lý</li>
        </ul>

        <h2>7. Cam kết</h2>
        <ul>
            <li>Minh bạch</li>
            <li>Hỗ trợ nhanh</li>
            <li>Uy tín</li>
        </ul>

        <div class="highlight">
            💎 Luôn đặt khách hàng lên hàng đầu
        </div>

    </div>

</div>

<?php include_once 'View/footer.php'; ?>