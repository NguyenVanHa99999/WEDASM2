<?php
// Bắt đầu phiên làm việc
session_start();

// Hủy tất cả dữ liệu phiên
session_unset();

// Hủy session
session_destroy();
echo '<script type="text/javascript">
        // Xóa tất cả dữ liệu trong localStorage
        localStorage.clear();
        
        // Chuyển hướng đến trang đăng ký (hoặc trang đăng nhập)
        window.location.href = "/WEDASM2/pages/auth/sign-in.php"; // Đảm bảo URL chính xác
      </script>';
exit();
?>
