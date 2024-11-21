<?php
class DatabaseConnection {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $host = 'localhost';
        $db_name = 'wedvanhashop';
        $username = 'root';
        $password = '';

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            error_log("Database Connection Error: " . $e->getMessage());
            throw $e;
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            try {
                self::$instance = new self();
            } catch (PDOException $e) {
                return null;
            }
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}

// Hàm trợ giúp để lấy kết nối
function getDatabaseConnection() {
    $db = DatabaseConnection::getInstance();
    return $db ? $db->getConnection() : null;
}