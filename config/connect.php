    <?php
    // db.php - Kết nối cơ sở dữ liệu

    $host = 'localhost'; // Địa chỉ máy chủ
    $db_name = 'wedvanhashop'; // Tên cơ sở dữ liệu
    $username = 'root'; // Tên đăng nhập
    $password = ''; // Mật khẩu (mặc định trống cho XAMPP)

    try {
        // Tạo kết nối PDO
        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
    }
    ?>