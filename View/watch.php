<?php
include_once 'View/header.php';
?>

<style>

.product-grid{
display:grid;
grid-template-columns: repeat(4,1fr);
gap:25px;
}

.product{
text-align:center;
background:#fff;
padding:20px;
border-radius:10px;
box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.product img{
width:100%;
height:220px;
object-fit:contain;
}

/* bộ lọc */

.filter-box{
display:flex;
gap:15px;
justify-content:center;
margin:30px 0;
flex-wrap:wrap;
}

.filter-box select{
padding:8px 12px;
border-radius:6px;
border:1px solid #ccc;
}

.filter-box button{
padding:8px 16px;
background:black;
color:white;
border:none;
border-radius:6px;
cursor:pointer;
}

.banner_watch{
width:100%;
margin:0;
padding:0;
}

.banner_watch img{
width:100%;
height:auto;
display:block;
}

.product a{
text-decoration: none;
color: black;
}

.product a:hover{
color: #c69c6d;
}
/* ===== BANNER ĐỒNG HỒ ===== */
.banner_watch{
    position: relative;
    width: 100%;
    height: 380px; /* chiều cao cố định cho đẹp */
    overflow: hidden;
    border-radius: 12px;
    margin-bottom: 30px;
}

.banner_watch img{
    width: 100%;
    height: 100%;
    object-fit: cover; /* full đẹp không méo */
    transition: transform 0.5s ease;
}

/* zoom nhẹ khi hover */
.banner_watch:hover img{
    transform: scale(1.05);
}

/* lớp phủ tối cho sang */
.banner_watch::after{
    content: "";
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(0,0,0,0.35);
}

/* text trên banner */
.banner_text{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    color:white;
    text-align:center;
    z-index:2;
}

.banner_text h1{
    font-size:40px;
    letter-spacing:2px;
    margin-bottom:10px;
}

.banner_text p{
    font-size:18px;
    opacity:0.9;
}

</style>


<!-- Banner -->
<div class="banner_watch">
<img src="public/img/banner_dongho.png" alt="Banner Đồng Hồ">
</div>

<section class="product">

<h2 style="text-align:center;">ĐỒNG HỒ NỔI BẬT</h2>

<!-- Bộ lọc -->
<form method="GET" action="index.php" class="filter-box">

<!-- 🔥 SỬA Ở ĐÂY -->
<input type="hidden" name="trang" value="watch">

<!-- Thương hiệu -->
<select name="brand">
<option value="">Thương hiệu</option>

<?php
if(isset($brands)){
foreach($brands as $b){
?>
<option value="<?php echo $b['MaTH']; ?>">
<?php echo $b['TenTH']; ?>
</option>
<?php
}}
?>
</select>

<!-- Thể loại -->
<select name="type">
<option value="">Thể loại</option>

<?php
if(isset($types)){
foreach($types as $t){
?>
<option value="<?php echo $t['MaTheLoai']; ?>">
<?php echo $t['TenTheLoai']; ?>
</option>
<?php
}}
?>
</select>

<!-- Khoảng giá -->
<select name="price">
<option value="">Khoảng giá</option>
<option value="1">Dưới 1 triệu</option>
<option value="2">1 - 5 triệu</option>
<option value="3">Trên 5 triệu</option>
</select>

<button type="submit">Lọc</button>

</form>


<!-- Danh sách sản phẩm -->
<div class="product-grid">

<?php
if(isset($sp_dongho)){
foreach ($sp_dongho as $sp){
?>

<div class="product">

<!-- 🔥 SỬA LINK Ở ĐÂY -->
<a href="index.php?trang=watch&id=<?php echo $sp['MaSP']; ?>">
<img src="public/img/<?php echo $sp['HinhAnh']; ?>">
<h3><?php echo $sp['TenSP']; ?></h3>
</a>

<p class="price">
<?php echo number_format($sp['Gia']); ?> VND
</p>

<button>Mua ngay</button>

</div>

<?php
}}
?>

</div>

</section>


<?php
include_once 'View/footer.php';
?>