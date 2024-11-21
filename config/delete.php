<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'wedvanhashop';

try {
    // Kết nối đến MySQL
    $conn = new PDO("mysql:host=$host", $username, $password);
    
    // Thiết lập chế độ báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Kiểm tra xem database có tồn tại không
    $stmt = $conn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db_name'");
    
    if ($stmt->rowCount() > 0) {
        // Xóa tất cả kết nối đến database
        $sql = "SELECT CONCAT('KILL ', id, ';') as kill_proc 
                FROM INFORMATION_SCHEMA.PROCESSLIST 
                WHERE DB = '$db_name'";
        $kill_procs = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
        
        foreach ($kill_procs as $kill_proc) {
            try {
                $conn->exec($kill_proc);
            } catch (PDOException $e) {
                // Bỏ qua lỗi nếu process đã kết thúc
                continue;
            }
        }
        
        // Drop database
        $sql = "DROP DATABASE $db_name";
        $conn->exec($sql);
        
        echo "Database '$db_name' đã được xóa thành công.<br>";
        echo "<script>alert('Database đã được xóa thành công!');</script>";
    } else {
        echo "Database '$db_name' không tồn tại.<br>";
        echo "<script>alert('Database không tồn tại!');</script>";
    }
    
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage() . "<br>";
    echo "<script>alert('Có lỗi xảy ra: " . addslashes($e->getMessage()) . "');</script>";
}

// Đóng kết nối
$conn = null;

// Thêm link để quay lại trang tạo database
echo "<br><a href='initial.php' style='
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
'>Tạo lại database</a>";
?>