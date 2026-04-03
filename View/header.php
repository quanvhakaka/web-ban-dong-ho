<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LUXORA SHOP</title>

  <link rel="stylesheet" href="/DA1/Du_an_1/public/css/style.css"/>

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<style>
/* FIX chiều cao header */
.header .container{
  height: 70px;
  display: flex;
  align-items: center;
}

/* LOGO */
.logo{
  height: 100%;
  display: flex;
  align-items: center;
}

.logo img{
  max-height: 100px;
  width: auto;
}

/* CSS bổ sung cho phần icon */
.icon-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}
.icon-buttons a, .icon-buttons button {
    background: none;
    border: none;
    color: black;
    cursor: pointer;
    text-decoration: none;
    font-size: 18px;
    display: flex;
    align-items: center;
}
.user-name-header {
    font-size: 14px;
    font-weight: bold;
    margin-right: 5px;
}
</style>
  <body>
    <header class="header">
      <div class="container">
       <div class="logo">
        <a href="index.php">
          <img src="public/img/logo.png" alt="Luxora Logo">
        </a>
</div>
<nav class="menu">
    <ul>
        <li class="dropdown">
            <a href="index.php?trang=watch&type=13">ĐỒNG HỒ</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?trang=watch&type=1">Đồng hồ nam</a>
                </li>
                <li>
                    <a href="index.php?trang=watch&type=2">Đồng hồ nữ</a>
                </li>
                <li>
                    <a href="index.php?trang=watch&type=13">Đồng hồ cặp</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="index.php?trang=jewelry&type=14">TRANG SỨC</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?trang=jewelry&type=7">Nhẫn</a>
                </li>
                <li>
                    <a href="index.php?trang=jewelry&type=9">Dây chuyền</a>
                </li>
                <li>
                    <a href="index.php?trang=jewelry&type=10">Bông tai</a>
                </li>
                <li>
                    <a href="index.php?trang=jewelry&type=8">Vòng tay</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="index.php?trang=about">VỀ CHÚNG TÔI</a>
        </li>
        <li>
            <a href="index.php?trang=blog">TIN TỨC</a>
        </li>
        <li>
            <a href="index.php?trang=contact">LIÊN HỆ</a>
        </li>
    </ul>
</nav>

        <div class="header-right">
          <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Bạn đang tìm gì ?" />
          </div>

          <div class="icon-buttons">
    <?php if(isset($_SESSION['user'])): ?>
        <div style="display: flex; align-items: center; gap: 8px; background: #f9f9f9; padding: 5px 12px; border-radius: 20px; border: 1px solid #eee;">
            <i class="fa-regular fa-circle-user" style="color: #c69c6d;"></i>
            <span style="font-size: 13px; color: #333; font-weight: 600;">
                Xin chào, <?php echo $_SESSION['user']['TenKH']; ?>
            </span>
            <a href="index.php?trang=logout" title="Đăng xuất" style="margin-left: 5px; color: #999;">
                <i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 13px;"></i>
            </a>
        </div>
    <?php else: ?>
        <a href="index.php?trang=login">
            <i class="fa-regular fa-user"></i>
        </a>
    <?php endif; ?>
    
    <a href="index.php?trang=cart">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
</div>

        </div>
      </div>
    </header>