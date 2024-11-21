<?php
// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';
$conn = getDatabaseConnection();
if (!$conn) {
    die("Kết nối cơ sở dữ liệu không thành công!");
}

// Lấy product_id từ URL
$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;

if ($product_id > 0) {
    // Truy vấn sản phẩm từ database (sử dụng PDO)
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id");
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kiểm tra sản phẩm tồn tại
    if ($result) {
        $product = $result;
    } else {
        echo "<h3>Sản phẩm không tồn tại!</h3>";
        exit;
    }
} else {
    echo "<h3>ID sản phẩm không hợp lệ!</h3>";
    exit;
}
?>

<?php
// Đặt đường dẫn gốc của website
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/WEDASM2/'; // Hoặc bạn có thể sử dụng đường dẫn cố định

// Lấy URL ảnh từ cơ sở dữ liệu (có thể là đường dẫn tương đối)
$image_url = $product['image'];  // Ví dụ: 'images/product1.jpg'

// Tạo URL đầy đủ bằng cách nối đường dẫn gốc với URL ảnh
$full_image_url = $base_url . $image_url;
?>

<!DOCTYPE html>
<html lang="en">

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

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/Caesium.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="../plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="../plugins/slick/slick.css">
    <link rel="stylesheet" href="../plugins/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../styles/main.css">
<style>
																.product-thumb {
																	width: 100%;
																	height: 450px;
																	/* Chiều cao cố định */
																	overflow: hidden;
																	/* Ẩn phần hình ảnh vượt quá khung */
																	display: flex;
																	align-items: center;
																	justify-content: center;
																	background-color: #191818;
																	/* Màu nền cho khung */
																}

															</style>
</head>

<body id="body">

    <?php include '../components/header.php'; ?>

    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li class="active">Single Product</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class="single-product-slider">
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-outer'>
                                <!-- me art lab slider -->
                                <div class='carousel-inner'>
                                    <div class='item active product-thumb'>
                                        <img src="<?php echo $full_image_url; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                        <p class="product-price">$<?php echo number_format($product['price'], 2); ?></p>

                        <p class="product-description mt-20">
                            <?php echo nl2br(htmlspecialchars($product['description'])); ?>
                        </p>

                        <form action="<?php echo '/WEDASM2/utils/add_to_cart.php'; ?>" method="POST">
                            <div class="product-quantity">
                                <span>Quantity:</span>
                                <div class="product-quantity-slider">
                                    <input id="product-quantity" type="number" name="quantity" value="1" min="1" required>
                                </div>
                            </div>
                            <div class="product-category">
                                <span>Categories:</span>
                                <ul>
                                    <li><?php echo htmlspecialchars($product['category']); ?></li>
                                </ul>
                            </div>

                            <!-- Hidden field for product_id -->
                            <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-main mt-20">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal product-modal fade" id="product-modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tf-ion-close"></i>
        </button>
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="modal-image">
                                <img class="img-responsive" src="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-short-details">
                                <h2 class="product-title">iMac M4 2024 24 inch</h2>
                                <p class="product-price">$2000</p>
                                <p class="product-short-description">
                                    Experience groundbreaking performance with the new iMac M4, powered by
                                    Apple's latest M4 chip. This stunning 24-inch display brings vibrant
                                    colors and true-to-life clarity, making it perfect for both work and
                                    entertainment. Sleek, powerful, and designed for the future.
                                </p>
                                <a href="cart.php" class="btn btn-main">Add To Cart</a>
                                <a href="product-single.php" class="btn btn-transparent">View Product
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>

    <!-- Main jQuery -->
    <script src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-Pn9ApMuIanKJGMe4yVeZEyrY9aC9yQ"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../js/script.js"></script>

</body>

</html>
