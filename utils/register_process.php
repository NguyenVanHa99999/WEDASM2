<?php
// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';
$conn = getDatabaseConnection();
if (!$conn) {
    die("Kết nối cơ sở dữ liệu không thành công!");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Kiểm tra thông tin
    if (empty($full_name) || empty($email) || empty($password) || empty($confirm_password)) {
        die('Vui lòng điền đầy đủ thông tin.');
    }

    if ($password !== $confirm_password) {
        die('Mật khẩu xác nhận không khớp.');
    }

    // Kiểm tra email trùng lặp
    $checkStmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $checkStmt->bindParam(':email', $email);
    $checkStmt->execute();
    $emailCount = $checkStmt->fetchColumn();

    if ($emailCount > 0) {
        die('Email này đã được đăng ký. Vui lòng sử dụng email khác.');
    }

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Thêm người dùng mới vào cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO users (email, password, full_name, role_id) VALUES (:email, :password, :full_name, :role_id)");
    $role_id = 1; // Gán giá trị role_id hợp lệ
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':role_id', $role_id);

    if ($stmt->execute()) {
        echo 'Đăng ký thành công!';
        // Chuyển hướng đến trang sign-in.php
        header("Location: /WEDASM2/pages/auth/sign-in.php");
        exit(); // Kết thúc script sau khi chuyển hướng
    } else {
        echo 'Lỗi xảy ra. Vui lòng thử lại!';
    }
}
?>
