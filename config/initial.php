<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'wedvanhashop';

try {
    // Kết nối MySQL
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
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table roles created successfully<br>";

    // Tạo bảng users
    $sql = "CREATE TABLE IF NOT EXISTS users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(100) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        role_id INT NOT NULL,
        full_name VARCHAR(100),
        address VARCHAR(200),
        phone VARCHAR(20),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (role_id) REFERENCES roles(role_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table users created successfully<br>";

    // Tạo bảng products
    $sql = "CREATE TABLE IF NOT EXISTS products (
        product_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        image TEXT,
        price DECIMAL(10,2) NOT NULL,
        sale_price DECIMAL(10,2),
        stock_quantity INT DEFAULT 0,
        category ENUM('Laptops', 'Desktops', 'Accessories'),
        status ENUM('draft', 'active', 'inactive') DEFAULT 'draft',
        is_featured BOOLEAN DEFAULT FALSE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table products created successfully<br>";

    // Tạo bảng orders
    $sql = "CREATE TABLE IF NOT EXISTS orders (
        order_id INT AUTO_INCREMENT PRIMARY KEY,
        order_number VARCHAR(50) UNIQUE NOT NULL,
        user_id INT NOT NULL,
        total_amount DECIMAL(10,2) NOT NULL,
        shipping_fee DECIMAL(10,2) DEFAULT 0,
        discount_amount DECIMAL(10,2) DEFAULT 0,
        final_amount DECIMAL(10,2) NOT NULL,
        status ENUM('pending', 'processing', 'shipped', 'delivered', 'canceled') DEFAULT 'pending',
        payment_status ENUM('pending', 'paid', 'failed', 'refunded') DEFAULT 'pending',
        shipping_address_id INT NOT NULL,
        note TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(user_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table orders created successfully<br>";

    // Tạo bảng order_details
    $sql = "CREATE TABLE IF NOT EXISTS order_details (
        order_detail_id INT AUTO_INCREMENT PRIMARY KEY,
        order_id INT NOT NULL,
        product_id INT NOT NULL,
        quantity INT DEFAULT 1,
        unit_price DECIMAL(10,2) NOT NULL,
        subtotal DECIMAL(10,2) NOT NULL,
        discount DECIMAL(10,2) DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (order_id) REFERENCES orders(order_id),
        FOREIGN KEY (product_id) REFERENCES products(product_id)
    ) ENGINE=InnoDB";
    $conn->exec($sql);
    echo "Table order_details created successfully<br>";

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

    // Thêm dữ liệu mẫu vào bảng roles
    $sql = "INSERT INTO roles (name, description) VALUES 
        ('admin', 'Quản trị viên'),
        ('user', 'Người dùng thường')
    ON DUPLICATE KEY UPDATE name=VALUES(name)";
    $conn->exec($sql);
    echo "Sample roles data inserted successfully<br>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// Đóng kết nối
$conn = null;
?>
