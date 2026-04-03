<?php
session_start();
$trang = isset($_GET['trang']) ? $_GET['trang'] : 'home';

switch($trang){

    // ===== TRANG SỨC =====
    case 'jewelry':
        include_once 'Controllers/JewelryController.php';
        $controller = new JewelryController();
        if(isset($_GET['id'])){
            $controller->detail();
        }else{
            $controller->index();
        }
        break;

    // ===== ĐỒNG HỒ =====
    case 'watch':
        include_once 'Controllers/WatchController.php';
        $controller = new WatchController();
        if(isset($_GET['id'])){
            $controller->detail();
        }else{
            $controller->index();
        }
        break;

    // ===== ĐIỀU KHOẢN / CHÍNH SÁCH =====
    case 'doihang':
        include_once 'View/doihang.php';
        break;
    case 'vanchuyen':
        include_once 'View/vanchuyen.php';
        break;
    case 'baohanh':
        include_once 'View/baohanh.php';
        break; 

    // ===== TÀI KHOẢN =====
    case 'login':
        include_once 'Controllers/UserController.php';
        $controller = new UserController();
        $controller->login();
        break;

    case 'register':
        include_once 'Controllers/UserController.php';
        $controller = new UserController();
        $controller->register();
        break;

    case 'logout':
        // Không cần session_start() lần nữa vì đã có ở dòng đầu file
        unset($_SESSION['user']);
        header("Location: index.php");
        exit();
        break;   

    // ===== GIỎ HÀNG (QUAN TRỌNG) =====
    case 'add_to_cart':
        include_once 'Controllers/CartController.php';
        $controller = new CartController();
        $controller->add();
        break;

    case 'cart':
        include_once 'Controllers/CartController.php';
        $controller = new CartController();
        $controller->show(); 
        break; 

    // Thêm case cập nhật số lượng (+ / -)
    case 'update_cart':
        include_once 'Controllers/CartController.php';
        $controller = new CartController();
        $controller->update();
        break;

    // Thêm case xóa sản phẩm khỏi giỏ
    case 'delete_cart':
        include_once 'Controllers/CartController.php';
        $controller = new CartController();
        $controller->delete();
        break;
    
    case 'about':
        include_once 'View/about.php';
        break;
    // ===== TRANG CHỦ =====
    default:
        include_once 'Controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
}
?>