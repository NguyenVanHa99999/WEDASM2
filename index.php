<?php
// Configuration
define('SITE_NAME', 'VANHASHOP');
define('SITE_DESCRIPTION', 'E-commerce');
define('SITE_AUTHOR', 'Nguyen Van Ha');

// Helper functions
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

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?php echo SITE_NAME . ' | ' . SITE_DESCRIPTION; ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/Caesium.png" />

    <!-- Themefisher Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	
	<!-- Animate css -->
	<link rel="stylesheet" href="plugins/animate/animate.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick/slick-theme.css">
	
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="styles/main.css">
</head>

<body id="body">
 <script>
        if (sessionStorage.getItem('accessDenied') === 'true') {
            // Tạo thông báo
            const messageDiv = document.createElement('div');
            messageDiv.style.position = 'fixed';
            messageDiv.style.top = '20px';
            messageDiv.style.left = '50%';
            messageDiv.style.transform = 'translateX(-50%)';
            messageDiv.style.padding = '10px 20px';
            messageDiv.style.backgroundColor = '#f44336';
            messageDiv.style.color = '#fff';
            messageDiv.style.fontSize = '16px';
            messageDiv.style.borderRadius = '5px';
            messageDiv.innerText = 'Bạn không có quyền truy cập vào trang này!';
            document.body.appendChild(messageDiv);

            // Xóa thông báo sau khi hiển thị
            setTimeout(() => {
                messageDiv.style.display = 'none';
                // Xóa sessionStorage sau khi thông báo hiển thị
                sessionStorage.removeItem('accessDenied');
            }, 3000); // Thời gian hiển thị thông báo
        }
    </script>

 	<?php get_header(); ?>

  <div class="hero-slider">
      <?php include 'components/hero-slider.php'; ?>
  </div>

 <section class="product-category section">
    <?php include 'components/product-categories.php'; ?>
	</section>

	<section class="products section bg-gray">
    <?php include 'components/product-preview-meta.php'; ?>
  </section>
	<?php include 'components/newsletter.php'; ?>
	<?php include 'components/instagram-feed.php'; ?>

	<?php get_footer(); ?>

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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
		<script type="text/javascript" src="plugins/google-map/gmap.js"></script>
	
		<!-- Main Js File -->
		<script src="js/script.js"></script>
	
</body>

</html>