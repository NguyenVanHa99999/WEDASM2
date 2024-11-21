<?php
// Bắt đầu session
session_start();

// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';

// Kiểm tra kết nối cơ sở dữ liệu
if (!$conn) {
    die("Kết nối cơ sở dữ liệu không thành công!");
}

// Kiểm tra xem có yêu cầu xóa sản phẩm không
if (isset($_POST['delete_product_id'])) {
    // Lấy ID sản phẩm từ yêu cầu POST
    $product_id = intval($_POST['delete_product_id']);

    // Kiểm tra ID hợp lệ
    if ($product_id > 0) {
        try {
            // Câu lệnh xóa sản phẩm
            $sql = "DELETE FROM products WHERE product_id = :product_id"; // Chỉnh sửa đây
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT); // Chỉnh sửa đây

            // Thực thi câu lệnh
            if ($stmt->execute()) {
                // Chuyển hướng và thông báo thành công
                header("Location: post-product.php?success=1");
                exit();
            } else {
                // Nếu có lỗi khi xóa
                header("Location: post-product.php?error=Lỗi khi xóa sản phẩm.");
                exit();
            }
        } catch (PDOException $e) {
            // Nếu có lỗi với cơ sở dữ liệu
            header("Location: post-product.php?error=Lỗi khi xóa sản phẩm: " . $e->getMessage());
            exit();
        }
    } else {
        // Nếu ID không hợp lệ
        header("Location: post-product.php?error=ID sản phẩm không hợp lệ.");
        exit();
    }
}
?>
