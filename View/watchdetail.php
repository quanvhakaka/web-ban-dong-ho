<?php include_once 'View/header.php'; ?> 

<style> 
.top{ display:flex; gap:50px; padding:40px 100px; background:#fff; } 
.left{ width:45%; text-align:center; } 
.left img{ width:75%; } 

.right{ width:55%; } 
.right h2{ font-size:24px; margin-bottom:10px; font-weight:600; } 
.right p{ color:#666; margin:5px 0; } 

.price{ color:#d0021c; font-size:30px; font-weight:bold; margin:15px 0; } 

/* Chỉnh sửa class .btn để hỗ trợ thẻ a */
.btn{ 
    display:block; 
    width:300px; 
    background:#c0392b; 
    color:#fff; 
    padding:14px; 
    text-align:center; 
    margin-top:15px; 
    border-radius:5px; 
    cursor:pointer; 
    text-decoration: none; /* Đảm bảo không bị gạch chân */
    font-weight: bold;
} 
.btn:hover{ background:#a93226; color: #fff; } 

.btn-installment{ width:300px; background:#3498db; color:#fff; padding:12px; margin-top:10px; border-radius:5px; text-align:center; } 

.policy{ 
    display:grid; 
    grid-template-columns: repeat(4,1fr); 
    gap:15px; 
    padding:20px 100px; 
    background:#fafafa; 
} 

.policy-item{ 
    display:flex; 
    align-items:center; 
    gap:10px; 
    background:#fff; 
    padding:15px; 
    border-radius:10px; 
    border:1px solid #eee; 
} 

.bottom{ display:flex; gap:40px; padding:30px 100px; background:#fafafa; } 

.specs{ width:50%; background:#fff; padding:20px; border-radius:8px; } 
.specs table{ width:100%; } 
.specs td{ border-bottom:1px solid #eee; padding:10px; } 

.desc{ width:50%; background:#fff; padding:20px; border-radius:8px; } 

.related{ padding:30px 100px; background:#fff; } 
.related-list{ display:grid; grid-template-columns: repeat(4,1fr); gap:20px; } 

.related-item{ 
    border:1px solid #eee; 
    padding:15px; 
    border-radius:10px; 
    text-align:center; 
} 

.related-item img{ 
    width:100%; 
    height:180px; 
    object-fit:contain; 
} 

.related-item .price{ color:#d0021c; font-weight:bold; } 

/* Bỏ gạch chân link */
a { text-decoration:none; color:inherit; }
a:hover { text-decoration:none; color:inherit; }

/* ACCORDION */
.policy-accordion{ margin-top:20px; }

.policy-accordion input{ display:none; }

.policy-accordion .title{
    display:flex;
    justify-content:space-between;
    padding:15px 0;
    font-weight:600;
    color:#c0392b;
    cursor:pointer;
    border-bottom:1px solid #eee;
}

.policy-accordion .content{
    max-height:0;
    overflow:hidden;
    transition:0.4s;
    padding-left:20px;
}

#vc:checked ~ .vc{ max-height:300px; padding:10px 0; }
#bh:checked ~ .bh{ max-height:200px; padding:10px 0; }

.policy-accordion ul{ margin:10px 0; padding-left:18px; }

.more{
    display:inline-block;
    margin-top:10px;
    color:#c0392b;
    border-bottom:2px solid #c0392b;
}
</style> 


<div class="top"> 
    <div class="left"> 
        <img src="public/img/<?php echo $sp['HinhAnh']; ?>"> 
    </div> 

    <div class="right"> 
        <h2><?php echo $sp['TenSP']; ?></h2> 
        <p><b>Mã SP:</b> <?php echo $sp['MaSP']; ?></p> 
        <p class="price"><?php echo number_format($sp['Gia']); ?> đ</p> 
        <p><b>Thương hiệu:</b> <?php echo $sp['TenTH']; ?></p> 

        <a href="index.php?trang=add_to_cart&id=<?php echo $sp['MaSP']; ?>&gia=<?php echo $sp['Gia']; ?>" class="btn">
            Thêm vào giỏ hàng
        </a> 

        <div class="btn-installment">Mua trả góp 0%</div> 
        <div class="benefits"> 
            <p>✔ Bảo hành 12 tháng</p> 
            <p>✔ Miễn phí vận chuyển</p> 
            <p>✔ Đổi trả 7 ngày</p> 
        </div> 
    </div> 
</div> 


<div class="policy"> 
    <div class="policy-item"><span>🔰</span><p>Bảo hành lên đến 5 năm</p></div> 
    <div class="policy-item"><span>💰</span><p>Hoàn tiền nếu phát hiện hàng giả</p></div> 
    <div class="policy-item"><span>✔️</span><p>Trung tâm bảo hành chuẩn quốc tế</p></div> 
    <div class="policy-item"><span>⚙️</span><p>Thay pin miễn phí suốt đời</p></div> 
    <div class="policy-item"><span>🚚</span><p>Giao hàng nhanh miễn phí</p></div> 
    <div class="policy-item"><span style="color:red;">30</span><p>Kinh nghiệm hơn 30 năm</p></div> 
    <div class="policy-item"><a href="index.php?trang=doihang">🔄 Đổi trả trong 7 ngày</a></div> 
</div> 


<div class="bottom"> 

<div class="specs"> 
<h3>Thông số sản phẩm</h3> 
<table> 
<tr><td>Số hiệu</td><td><?php echo $sp['SoHieu']; ?></td></tr>
<tr><td>Xuất xứ</td><td><?php echo $sp['XuatXu']; ?></td></tr>
<tr><td>Giới tính</td><td><?php echo $sp['GioiTinh']; ?></td></tr>
<tr><td>Kính</td><td><?php echo $sp['Kinh']; ?></td></tr>
<tr><td>Máy</td><td><?php echo $sp['May']; ?></td></tr>
<tr><td>Bảo hành</td><td><?php echo $sp['BaoHanh']; ?></td></tr>
<tr><td>Đường kính</td><td><?php echo $sp['DuongKinh']; ?></td></tr>
<tr><td>Độ dày</td><td><?php echo $sp['DoDay']; ?></td></tr>
<tr><td>Niềng</td><td><?php echo $sp['Nieng']; ?></td></tr>
<tr><td>Dây đeo</td><td><?php echo $sp['DayDeo']; ?></td></tr>
<tr><td>Màu mặt</td><td><?php echo $sp['MauMat']; ?></td></tr>
<tr><td>Chống nước</td><td><?php echo $sp['ChongNuoc']; ?></td></tr>
</table> 

<div class="policy-accordion">

<input type="checkbox" id="vc">
<label for="vc" class="title">🚚 Chính sách vận chuyển <span>⌄</span></label>
<div class="content vc">
<ul>
<li>Giao hàng toàn quốc</li>
<li>2h nội thành</li>
<li>2-3 ngày</li>
</ul>
<a href="index.php?trang=vanchuyen" class="more">Xem thêm ></a>
</div>

<input type="checkbox" id="bh">
<label for="bh" class="title">🔄 Chính sách bảo hành <span>⌄</span></label>
<div class="content bh">
<ul>
<li>Bảo hành 5 năm</li>
<li>Thay pin miễn phí</li>
</ul>
<a href="index.php?trang=baohanh" class="more">Xem thêm ></a>
</div>

</div>

</div> 


<div class="desc"> 
<h3>Mô tả sản phẩm</h3> 
<?php echo $sp['MoTa']; ?> 
</div> 

</div> 


<div class="related">
<h3>Sản phẩm tương tự</h3>

<div class="related-list">
<?php foreach($spTuongTu as $row){ ?>
    <div class="related-item">
<a href="index.php?trang=watch&id=<?php echo $row['MaSP']; ?>">
            <img src="public/img/<?php echo $row['HinhAnh']; ?>">
            <p><?php echo $row['TenSP']; ?></p>
            <p class="price"><?php echo number_format($row['Gia']); ?> đ</p>
        </a>
    </div>
<?php } ?>
</div>

</div>

<?php include_once 'View/footer.php'; ?>