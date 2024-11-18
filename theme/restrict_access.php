<?php
// restrict_access.php - Giới hạn quyền truy cập

session_start(); // Khởi động session

// Kiểm tra nếu chưa đăng nhập
if (!isset($_SESSION['user_role']) || !isset($_SESSION['username'])) {
    header("Location: 404.html"); // Chuyển hướng đến trang 404 nếu chưa đăng nhập
    exit();
}

// Lấy vai trò người dùng hiện tại
$user_role = $_SESSION['user_role'];

// Nếu vai trò là 'user', giới hạn quyền truy cập
if ($user_role === 'user') {
    $restricted_pages = ['dashboard.php', 'order.php', 'address.php', 'profile-details.php', 'post products.php'];
    $current_page = basename($_SERVER['PHP_SELF']);

    // Nếu user truy cập vào các trang bị giới hạn
    if (in_array($current_page, $restricted_pages)) {
        header("Location: 404.html"); // Chuyển hướng đến trang 404
        exit();
    }
}

// Nếu vai trò là 'admin', cho phép truy cập tất cả các trang
// Không cần hành động gì thêm, admin không bị hạn chế quyền
?>


