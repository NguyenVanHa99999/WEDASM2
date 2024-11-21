<?php
// Kết nối cơ sở dữ liệu
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
$user_email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : null;

if (!$user_email) {
     echo '<script type="text/javascript">
    
        
        // Chuyển hướng đến trang đăng ký (hoặc trang đăng nhập)
        window.location.href = "/WEDASM2/pages/auth/sign-in.php"; // Đảm bảo URL chính xác
      </script>';
    exit;
}

// Kết nối cơ sở dữ liệu
$conn = getDatabaseConnection();

// Lấy user_id từ user_email
$stmt = $conn->prepare("SELECT user_id FROM users WHERE email = :email");
$stmt->bindValue(':email', $user_email, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "<h3>Người dùng không tồn tại!</h3>";
    exit;
}

$user_id = $user['user_id'];

// Truy vấn giỏ hàng
$stmt = $conn->prepare("
    SELECT 
        c.product_id, 
        c.quantity, 
        p.name, 
        p.price, 
        p.image 
    FROM cart c
    INNER JOIN products p ON c.product_id = p.product_id
    WHERE c.user_id = :user_id
");
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);



$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/WEDASM2/';

if (isset($_GET['product_id']) && isset($_GET['action']) && $_GET['action'] === 'remove') {
    $product_id = intval($_GET['product_id']);

    // Xóa sản phẩm khỏi giỏ hàng
    $stmt = $conn->prepare("DELETE FROM cart WHERE user_id = :user_id AND product_id = :product_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();

    // Chuyển hướng lại trang giỏ hàng để làm mới dữ liệu
    header("Location: cart.php");
    exit;
}

// Xử lý khi giỏ hàng rỗng
if (!$cart_items) {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/WEDASM2/components/empty-cart.php");
    exit;
}
?>

<?php

function get_header() {
    include 'components/header.php';
}
function get_footer() {
    include 'components/footer.php';
}

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

</head>

<body id="body">



      <?php include '../components/header.php'; ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                       <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

<?php foreach ($cart_items as $item): ?>
    <tr>
        <td>
            <div class="product-info">
                <img width="80" src="<?php echo $base_url . $item['image']; ?>" alt="" />
                <a href="#"><?php echo htmlspecialchars($item['name']); ?></a>
            </div>
        </td>
        <td>$<?php echo number_format($item['price'], 2); ?></td>
        <td><?php echo $item['quantity']; ?></td>
        <td>
            <a class="product-remove" href="cart.php?product_id=<?php echo $item['product_id']; ?>&action=remove">Remove</a>

        </td>
    </tr>
<?php endforeach; ?>
                  </tbody>
                </table>
                <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <?php include '../components/footer.php'; ?>

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

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
