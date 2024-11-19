<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'wedvanhashop';

// Kết nối MySQL
try {
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Tạo database
    $sql = "CREATE DATABASE IF NOT EXISTS $db_name CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    $conn->exec($sql);
    echo "Database $db_name created successfully<br>";
    
    // Chọn database
    $conn->exec("USE $db_name");
    
    // Tạo bảng roles
    $sql = "CREATE TABLE IF NOT EXISTS roles (
        role_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table roles created successfully<br>";

    // Tạo bảng users
    $sql = "CREATE TABLE IF NOT EXISTS users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role_id INT NOT NULL,
        full_name VARCHAR(100),
        phone VARCHAR(20),
        address VARCHAR(100),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (role_id) REFERENCES roles(role_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table users created successfully<br>";

    // Tạo bảng categories
    $sql = "CREATE TABLE IF NOT EXISTS categories (
        category_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table categories created successfully<br>";

    // Tạo bảng products
    $sql = "CREATE TABLE IF NOT EXISTS products (
        product_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        price DECIMAL(10,2) NOT NULL,
        sale_price DECIMAL(10,2),
        stock_quantity INT DEFAULT 0,
        category_id INT,
        status ENUM('draft', 'active', 'inactive') DEFAULT 'draft',
        is_featured BOOLEAN DEFAULT FALSE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (category_id) REFERENCES categories(category_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table products created successfully<br>";

    // Tạo bảng product_images
    $sql = "CREATE TABLE IF NOT EXISTS product_images (
        image_id INT AUTO_INCREMENT PRIMARY KEY,
        product_id INT NOT NULL,
        image_url VARCHAR(255) NOT NULL,
        is_primary BOOLEAN DEFAULT FALSE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (product_id) REFERENCES products(product_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table product_images created successfully<br>";

    // Tạo bảng cart
    $sql = "CREATE TABLE IF NOT EXISTS cart (
        cart_id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        product_id INT NOT NULL,
        quantity INT DEFAULT 1,
        added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(user_id),
        FOREIGN KEY (product_id) REFERENCES products(product_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table cart created successfully<br>";

    // Thêm một số dữ liệu mẫu cho bảng roles
    $sql = "INSERT INTO roles (name) VALUES 
        ('admin'),
        ('user')
    ON DUPLICATE KEY UPDATE name=VALUES(name)";
    $conn->exec($sql);
    echo "Sample roles data inserted successfully<br>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// Đóng kết nối
$conn = null;
?>