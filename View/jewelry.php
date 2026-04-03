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

.banner_jewelry{
width:100%;
margin:0;
padding:0;
}

.banner_jewelry img{
width:100%;
height:auto;
display:block;
}
.product a{
    text-decoration: none;  /* ❌ bỏ gạch chân */
    color: black;           /* đổi màu chữ */
}

.product a:hover{
    color: #c69c6d;         /* màu hover cho sang */
}
</style>


<!-- Banner -->
<div class="banner_jewelry">
<img src="public/img/banner_jewelry.png" alt="Banner Trang Sức">
</div>
<section class="product">
<h2 style="text-align:center;">TRANG SỨC NỔI BẬT</h2>
<!-- Bộ lọc -->
<form method="GET" action="index.php" class="filter-box">
<input type="hidden" name="trang" value="jewelry">
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
if(isset($sp_trangsuc)){
foreach ($sp_trangsuc as $sp){
?>

<div class="product">
<a href="index.php?trang=jewelry&id=<?php echo $sp['MaSP']; ?>">
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