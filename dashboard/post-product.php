
<?php
// Bắt đầu session
session_start();

// Database Connection
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';

// Check database connection
if (!$conn) {
    die("Kết nối cơ sở dữ liệu không thành công!");
}

if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kiểm tra token chống trùng lặp
        if (!isset($_SESSION['last_submission']) || 
            (time() - $_SESSION['last_submission']) > 5) { // Ngăn submit lại trong 5 giây

            // Sanitize and validate input data
            $product_name = htmlspecialchars($_POST['product_name']);
            $category = htmlspecialchars($_POST['category']);
            $description = htmlspecialchars($_POST['description']);
            $price = floatval($_POST['price']);
            $quantity = intval($_POST['quantity']);
            $status = 'active'; // Default status

            // Validate input
            $errors = [];
            if (empty($product_name)) $errors[] = "Tên sản phẩm không được để trống";
            if (empty($category)) $errors[] = "Danh mục không được để trống";
            if ($price <= 0) $errors[] = "Giá sản phẩm phải lớn hơn 0";
            if ($quantity < 0) $errors[] = "Số lượng không hợp lệ";

            // Image upload handling
            if (isset($_FILES['images']) && $_FILES['images']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/uploads/products/';
                
                // Tạo tên file duy nhất
                $unique_filename = uniqid() . '_' . basename($_FILES['images']['name']);
                $target_file = $upload_dir . $unique_filename;

                // Validate image file type
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

                if (in_array($imageFileType, $allowed_types)) {
                    // Kiểm tra kích thước file (ví dụ: giới hạn 5MB)
                    if ($_FILES['images']['size'] <= 5 * 1024 * 1024) {
                        // Move uploaded file
                        if (move_uploaded_file($_FILES['images']['tmp_name'], $target_file)) {
                            try {
                                // Prepare SQL insert statement
                                $sql = "INSERT INTO products (name, description, image, price, stock_quantity, category, status, created_at, updated_at) 
                                        VALUES (:name, :description, :image, :price, :stock_quantity, :category, :status, NOW(), NOW())";
                                
                                $stmt = $conn->prepare($sql);
                                $stmt->execute([
                                    ':name' => $product_name,
                                    ':description' => $description,
                                    ':image' => '/uploads/products/' . $unique_filename,
                                    ':price' => $price,
                                    ':stock_quantity' => $quantity,
                                    ':category' => $category,
                                    ':status' => $status,
                                ]);

                                // Lưu thời gian submit cuối cùng
                                $_SESSION['last_submission'] = time();

                                // Chuyển hướng với thông báo thành công
                                header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
                                exit();
                            } catch (PDOException $e) {
                                $errors[] = "Lỗi khi thêm sản phẩm: " . $e->getMessage();
                            }
                        } else {
                            $errors[] = "Lỗi khi tải lên ảnh.";
                        }
                    } else {
                        $errors[] = "Kích thước ảnh quá lớn. Tối đa 5MB.";
                    }
                } else {
                    $errors[] = "Chỉ hỗ trợ các định dạng ảnh JPG, JPEG, PNG, GIF.";
                }
            } else {
                $errors[] = "Bạn cần tải lên một ảnh hợp lệ.";
            }
        } else {
            // Nếu submit quá nhanh
            header("Location: " . $_SERVER['PHP_SELF'] . "?error=Vui lòng chờ trước khi submit lại");
            exit();
        }
    }
} else {
    echo "Kết nối cơ sở dữ liệu không thành công!";
}
?>


<html lang="en">
</html>
   <script>
            // Lấy thông tin người dùng từ localStorage
            const user = JSON.parse(localStorage.getItem('user'));

        // Kiểm tra nếu không phải Admin, chuyển hướng về trang chủ
        if (!user || user.role !== 'admin') {
						sessionStorage.setItem('accessDenied', 'true');
            window.location.href = '/WEDASM2/index.php'; // Chuyển về trang chủ
        }
    </script>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>VANHASHOP | E-commerce </title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Constra HTML Template v1.0">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/Caesium.png" />

	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="../plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">


<!-- Thêm JavaScript của Bootstrap Toast -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

	<!-- Animate css -->
	<link rel="stylesheet" href="../plugins/animate/animate.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="../plugins/slick/slick.css">
	<link rel="stylesheet" href="../plugins/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../styles/main.css">
<style>
    .toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
    }
</style>
</head>
<body id="body">
    <?php
if (isset($_GET['success'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Thành Công!',
                text: 'Sản phẩm đã được thêm thành công.',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>";
}

if (isset($_GET['error'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: '" . htmlspecialchars($_GET['error']) . "',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>";
}
?>
<?php
if (isset($_GET['success'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Thành Công!',
                text: 'Sản phẩm đã được xóa thành công.',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>";
}

if (isset($_GET['error'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: '" . htmlspecialchars($_GET['error']) . "',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>";
}
?>
    <?php include '../components/header.php'; ?>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Post a New Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="post-product page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Post a New Product</h2>
                    <form action="post-product.php" method="POST" enctype="multipart/form-data">
                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="product-name">Product Name</label>
                            <input type="text" id="product-name" name="product_name" class="form-control"
                                placeholder="Enter product name" required>
                        </div>
                        <!-- Product Category -->
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="">Select Category</option>
                                <option value="laptops">Laptops</option>
                                <option value="desktops">Desktops</option>
                                <option value="accessories">Accessories</option>
                            </select>
                        </div>
                        <!-- Product Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" rows="5"
                                placeholder="Write a detailed description of the product" required></textarea>
                        </div>
                        <!-- Price -->
                        <div class="form-group">
                            <label for="price">Price (USD)</label>
                            <input type="number" id="price" name="price" class="form-control"
                                placeholder="Enter product price" required>
                        </div>
                        <!-- Quantity -->
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" name="quantity" class="form-control"
                                placeholder="Enter available quantity" required>
                        </div>
                        <!-- Product Images -->
                        <div class="form-group">
                        <label for="images">Upload Image</label>
                        <input type="file" id="images" name="images" class="form-control-file" required>
                    </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Post Product</button>
                        </div>
                        <!-- Delete Product -->
                   
                    </form>
                         <form action="delete-product.php" method="POST">
                            <div class="form-group">
                                <label for="delete-product-id">Delete Product by ID</label>
                                <input type="text" id="delete-product-id" name="delete_product_id" class="form-control"
                                    placeholder="Enter Product ID to delete" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger">Delete Product</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <style>
            .dashboard-menu {
                margin: 20px 0;
                padding: 0;
                list-style: none;
                border-bottom: 2px solid #ddd;
            }
            .dashboard-menu li {
                display: inline-block;
                margin: 0 10px;
            }
            .dashboard-menu li a {
                text-decoration: none;
                font-size: 16px;
                padding: 15px 20px;
                color: #555;
                border: 1px solid transparent;
                border-radius: 5px;
                transition: all 0.3s ease-in-out;
                height: 50px;
                line-height: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .dashboard-menu li a.active,
            .dashboard-menu li a:hover {
                background-color: #007bff;
                color: white;
                border-color: #007bff;
            }
            .dashboard-menu.text-center {
                text-align: center;
            }
        </style>
    </section>
     <?php include '../components/footer.php'; ?>


 	<!-- Main jQuery -->
	<script src="plugins/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.1 -->
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Bootstrap Touchpin -->
	<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<!-- Instagram Feed Js -->
	<script src="plugins/instafeed/instafeed.min.js"></script>
	<!-- Video Lightbox Plugin -->
	<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
	<!-- Count Down Js -->
	<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

	<!-- slick Carousel -->
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/slick/slick-animation.min.js"></script>

	<!-- Google Mapl -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-Pn9ApMuIanKJGMe4yVeZEyrY9aC9yQ"></script>
	<script type="text/javascript" src="plugins/google-map/gmap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Main Js File -->
	<script src="js/script.js"></script>
<!-- Toast thông báo -->


</body>
</html>