<?php
// Bắt đầu phiên làm việc
session_start();

// Hủy tất cả dữ liệu phiên
session_unset();

// Hủy session
session_destroy();

// Xóa cookie user_email bằng cách đặt thời gian hết hạn trong quá khứ
if (isset($_COOKIE['user_email'])) {
    setcookie('user_email', '', time() - 3600, '/'); // Thời gian hết hạn là một giờ trước
}

echo '<script type="text/javascript">
        // Xóa tất cả dữ liệu trong localStorage
        localStorage.clear();
        
        // Chuyển hướng đến trang đăng ký (hoặc trang đăng nhập)
        window.location.href = "/WEDASM2/pages/auth/sign-in.php"; // Đảm bảo URL chính xác
      </script>';
exit();
?>
