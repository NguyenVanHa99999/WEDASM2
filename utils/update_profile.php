<?php
header('Content-Type: application/json');

// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';
$conn = getDatabaseConnection();

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['full_name'], $data['phone'], $data['address'])) {
    $full_name = $data['full_name'];
    $phone = $data['phone'];
    $address = $data['address'];

    // Thực hiện câu truy vấn cập nhật
    $stmt = $conn->prepare("UPDATE users SET full_name = ?, phone = ?, address = ? WHERE email = ?");
    $stmt->execute([$full_name, $phone, $address, $_COOKIE['user_email']]);

    if ($stmt->rowCount()) {
        echo json_encode(["status" => "success", "message" => "Profile updated successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "No changes made or update failed."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid data provided."]);
}
exit;
?>
