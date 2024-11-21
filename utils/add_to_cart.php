<?php
// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa (kiểm tra cookie)
$user_email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : null;

// Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập hoặc hiển thị thông báo
if (!$user_email) {
    echo '<script type="text/javascript">
    
        
        // Chuyển hướng đến trang đăng ký (hoặc trang đăng nhập)
        window.location.href = "/WEDASM2/pages/auth/sign-in.php"; // Đảm bảo URL chính xác
      </script>';
    exit;
}

// Kết nối với cơ sở dữ liệu
$conn = getDatabaseConnection();
if (!$conn) {
    die("Kết nối cơ sở dữ liệu không thành công!");
}

// Truy vấn ID người dùng dựa trên email
$stmt = $conn->prepare("SELECT user_id FROM users WHERE email = :email");
$stmt->bindValue(':email', $user_email, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "<h3>Email người dùng không tồn tại!</h3>";
    exit;
}

$user_id = $user['user_id'];

// Lấy thông tin sản phẩm và số lượng từ form
$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

if ($product_id > 0 && $quantity > 0) {
    // Truy vấn sản phẩm từ cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id");
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // Thêm sản phẩm vào bảng giỏ hàng
        $stmt = $conn->prepare("
            INSERT INTO cart (user_id, product_id, quantity) 
            VALUES (:user_id, :product_id, :quantity)
            ON DUPLICATE KEY UPDATE quantity = quantity + :quantity
        ");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->execute();

        // Chuyển hướng người dùng về trang giỏ hàng
        header('Location: /WEDASM2/pages/cart.php');
        exit;
    } else {
        echo "<h3>Sản phẩm không tồn tại!</h3>";
        exit;
    }
} else {
    echo "<h3>ID sản phẩm hoặc số lượng không hợp lệ!</h3>";
    exit;
}
?>
