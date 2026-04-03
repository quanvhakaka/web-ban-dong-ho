<?php
include_once 'View/header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
/* --- CẤU TRÚC CHUNG --- */
.container-custom {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

section { margin-top: 60px; }

h2.section-title {
    text-align: center;
    margin-bottom: 40px;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
}

/* --- 12 ICON DANH MỤC (Hàng 6 cột chuẩn) --- */
.icon-categories {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
    margin: 40px auto;
}

.icon-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    text-decoration: none;
    color: #333;
}

.icon-box {
    width: 80px;
    height: 80px;
    background: #f7f7f7;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
    transition: 0.3s;
    font-size: 28px;
    color: #555;
}

.icon-item:hover .icon-box {
    background: #eeeeee;
    transform: translateY(-5px);
    color: #c69c6d;
}

.icon-item span { font-size: 13px; font-weight: 500; }

/* --- DANH MỤC SẢN PHẨM PHỨC TẠP (Kiểu ảnh mẫu 6d8996) --- */
.category-complex-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr; 
    grid-template-rows: 280px 280px; 
    gap: 15px;
}

.cat-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    text-decoration: none;
}

/* Khối Trang sức lớn bên trái - Chiếm 2 hàng dọc */
.cat-large { grid-row: 1 / span 2; }

/* Khối Đồng hồ Đôi - Chiếm 2 cột ngang ở hàng dưới */
.cat-wide { grid-column: 2 / span 2; }

.cat-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.6s ease;
}

.cat-item:hover img { transform: scale(1.08); }

/* Lớp phủ đen mờ và Chữ bên trong ảnh */
.cat-info {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 25px;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
    color: white;
    z-index: 2;
}

.cat-info h3 {
    margin: 0;
    font-size: 22px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 1px;
}

.cat-info span { font-size: 14px; opacity: 0.9; text-decoration: underline; }

/* --- GRID SẢN PHẨM CHUNG --- */
.product-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.product-item {
    border: 1px solid #f2f2f2;
    padding: 20px;
    border-radius: 12px;
    background: #fff;
    text-align: center;
    transition: 0.3s;
    display: flex;
    flex-direction: column;
}

.product-item:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transform: translateY(-5px);
}

.product-item img {
    width: 100%;
    height: 250px;
    object-fit: contain;
    margin-bottom: 15px;
}

.product-item h3 { font-size: 16px; margin: 10px 0; height: 40px; overflow: hidden; line-height: 1.4; }

.product-price { color: #c69c6d; font-weight: bold; font-size: 18px; margin-bottom: 15px; }

.btn-buy {
    background: #000;
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

/* --- DỊCH VỤ & THƯƠNG HIỆU --- */
.dichvu-flex {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 60px 0;
}
.dichvu-flex img { width: 32%; border-radius: 10px; }

.brand-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 15px;
}

.brand-card {
    border: 1px solid #eee;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    background: #fff;
}

.brand-card img { max-height: 45px; filter: grayscale(100%); opacity: 0.5; transition: 0.4s; }
.brand-card:hover img { filter: grayscale(0); opacity: 1; }

/* RESPONSIVE */
@media (max-width: 992px) {
    .icon-categories { grid-template-columns: repeat(3, 1fr); }
    .product-grid { grid-template-columns: repeat(2, 1fr); }
    .category-complex-grid { grid-template-columns: 1fr; grid-template-rows: auto; }
    .cat-large, .cat-wide { grid-row: auto; grid-column: auto; height: 350px; }
}
</style>

<div class="hero-banner">
    <img src="public/img/chat.png" style="width:100%; display:block;">
</div>

<div class="container-custom">
    
    <div class="icon-categories">
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-water"></i></div><span>Đồng hồ xà cừ</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-award"></i></div><span>Phiên bản giới hạn</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-layer-group"></i></div><span>Đồng hồ siêu mỏng</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-gears"></i></div><span>Đồng hồ Skeleton</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-coins"></i></div><span>Đồng hồ vàng 18k</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-gem"></i></div><span>Đá quý hiếm</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-mitten"></i></div><span>Dây da Hirsch</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-ring"></i></div><span>Đồng hồ kim cương</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-glasses"></i></div><span>Kính Hải Triều</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-wallet"></i></div><span>Ví da thật</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-clock"></i></div><span>Dây da thật</span></a>
        <a href="#" class="icon-item"><div class="icon-box"><i class="fa-solid fa-wand-sparkles"></i></div><span>Trang sức</span></a>
    </div>

    <section>
        <h2 class="section-title">Danh mục sản phẩm</h2>
        <div class="category-complex-grid">
            <a href="index.php?trang=jewelry" class="cat-item cat-large">
                <img src="public/img/trangsuc.jpg">
                <div class="cat-info"><h3>Trang sức</h3><span>Xem ngay</span></div>
            </a>
            <a href="index.php?trang=watch&gender=nam" class="cat-item">
                <img src="public/img/nam.jpg">
                <div class="cat-info"><h3>Nam</h3><span>Xem ngay</span></div>
            </a>
            <a href="index.php?trang=watch&gender=nu" class="cat-item">
                <img src="public/img/nu.jpg">
                <div class="cat-info"><h3>Nữ</h3><span>Xem ngay</span></div>
            </a>
            <a href="index.php?trang=watch&type=couple" class="cat-item cat-wide">
                <img src="public/img/banner_capdoi.webp"> 
                <div class="cat-info"><h3>Đồng hồ đôi</h3><span>Xem ngay</span></div>
            </a>
        </div>
    </section>

    <section>
        <h2 class="section-title">Đồng hồ Nam bán chạy</h2>
        <div class="product-grid">
            <?php foreach ($sp_nam as $sp): ?>
            <div class="product-item">
                <a href="index.php?trang=watch&id=<?= $sp['MaSP'] ?>"><img src="public/img/<?= $sp['HinhAnh'] ?>"></a>
                <h3><?= $sp['TenSP'] ?></h3>
                <span class="product-price"><?= number_format($sp['Gia']) ?> VND</span>
                <button class="btn-buy">MUA NGAY</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section>
        <h2 class="section-title">Đồng hồ Nữ bán chạy</h2>
        <div class="product-grid">
            <?php foreach ($sp_nu as $sp): ?>
            <div class="product-item">
                <a href="index.php?trang=watch&id=<?= $sp['MaSP'] ?>"><img src="public/img/<?= $sp['HinhAnh'] ?>"></a>
                <h3><?= $sp['TenSP'] ?></h3>
                <span class="product-price"><?= number_format($sp['Gia']) ?> VND</span>
                <button class="btn-buy">MUA NGAY</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section>
        <h2 class="section-title">Trang sức cao cấp</h2>
        <div class="product-grid">
            <?php if(isset($sp_trangsuc) && !empty($sp_trangsuc)): ?>
                <?php foreach ($sp_trangsuc as $sp): ?>
                <div class="product-item">
                    <a href="index.php?trang=jewelry&id=<?= $sp['MaSP'] ?>"><img src="public/img/<?= $sp['HinhAnh'] ?>"></a>
                    <h3><?= $sp['TenSP'] ?></h3>
                    <span class="product-price"><?= number_format($sp['Gia']) ?> VND</span>
                    <button class="btn-buy">MUA NGAY</button>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align:center; grid-column: span 4;">Đang cập nhật sản phẩm trang sức...</p>
            <?php endif; ?>
        </div>
    </section>

    <div class="dichvu-flex">
        <img src="public/img/dichvu1.png">
        <img src="public/img/dichvu2.png">
        <img src="public/img/dichvu3.png">
    </div>

    <section>
        <h2 class="section-title">Thương hiệu đồng hồ</h2>
        <div class="brand-grid">
            <?php
            $brands = ["Rolex","Casio","Seiko","Citizen","Tissot","Omega","Longines","Orient","DanielWellington","Fossil"];
            foreach($brands as $th): $n = strtolower($th); ?>
                <a href="index.php?trang=watch&brand=<?= $th ?>" class="brand-card">
                    <img src="public/img/logo_<?= $n ?>.png">
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-bottom: 80px;">
        <h2 class="section-title">Thương hiệu trang sức</h2>
        <div class="brand-grid">
            <?php
            $brands_ts = ["PNJ","SJC","DOJI","Cartier","Tiffany & Co"];
            foreach($brands_ts as $th): $n = strtolower(str_replace(' ', '', $th)); ?>
                <a href="index.php?trang=jewelry&brand=<?= $th ?>" class="brand-card">
                    <img src="public/img/logo_<?= $n ?>.png">
                </a>
            <?php endforeach; ?>
        </div>
    </section>

</div>

<?php
include_once 'View/footer.php';
?>