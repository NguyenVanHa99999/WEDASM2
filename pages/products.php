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

// Product data structure


// Template structure
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Constra HTML Template v1.0">

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

	<!-- Start Top Header Bar -->
	<body id="body">

 	<?php get_header(); ?>

	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h1 class="page-name">Shop</h1>
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">shop</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="products section">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="widget">
						<h4 class="widget-title">FILTER</h4>
						<form method="post" action="#">
							<!-- Bộ lọc sản phẩm theo thể loại -->
							<select class="form-control" name="category">
								<option value="">Select Category</option>
								<option value="laptops">laptops</option>
								<option value="screen">screen</option>
								<option value="mac-mini">mac-mini</option>
							</select>

							<!-- Bộ lọc sản phẩm theo hãng -->
							<select class="form-control" name="brand">
								<option value="">Select Brand</option>
								<option value="apple">apple</option>
								<option value="dell">dell</option>
								<option value="razer">razer</option>
							</select>

							<!-- Bộ lọc sản phẩm theo khoảng giá -->
							<select class="form-control" name="price-range">
								<option value="">Select Price Range</option>
								<option value="0-500">$0 - $500</option>
								<option value="500-1000">$500 - $1000</option>
								<option value="1000-2000">$1000 - $2000</option>
								<option value="2000-3000">$2000 - $3000</option>
								<option value="3000+">$3000 - $3200</option>
							</select>
							<button type="button" id="filterButton" class="btn btn-primary" style="margin-top: 10px;">Apply Filter</button>
						</form>
					</div>
				</div>
				<div class="col-md-9">

					<div class="row">

						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="laptops" data-brand="apple" data-price="1000-2000">
								<div class="product-thumb">
									<!-- Custom CSS for Fixed Image Dimensions -->
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

										.product-thumb img {
											width: 100%;
											/* Chiều rộng toàn bộ khung */
											height: auto;
											/* Đảm bảo hình ảnh không bị méo */
											object-fit: cover;
											/* Cắt hình ảnh để vừa khung mà không bị biến dạng */
										}
									</style>

									<span class="bage">Sale</span>
									<img class="img-responsive"
										src="https://macstores.vn/wp-content/uploads/2023/10/macbook-pro-16-inch-m3-pro-silver-1.jpg"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">MacBook Pro 16 inch M3 Pro</a></h4>
									<p class="price">$1000</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="screen" data-brand="apple" data-price="2000-3000">
								<div class="product-thumb">
									<img class="img-responsive"
										src="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg" alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">iMac M4 2024 24 inch</a></h4>
									<p class="price">$2000</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="mac-mini" data-brand="apple" data-price="1000-2000">
								<div class="product-thumb">
									<img class="img-responsive"
										src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTYw_CdXqSSIsJz9w9-R8o-R4v5NN5gVybAm30REQetF4AoEmvQpijLVeTPxNI9B802mjcYaRM&usqp=CAE"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">Mac mini M4 2024</a></h4>
									<p class="price">$1500</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="laptops" data-brand="razer" data-price="2000-3000">
								<div class="product-thumb">
									<span class="bage">Sale</span>
									<img class="img-responsive"
										src="https://assets2.razerzone.com/images/pnx.assets/381e915d58d2b9759725c30a9f2c3a0f/razer-blade-16-2024-laptop-500x500.webp"
										alt="product-img" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">RAZER BLADE 18</a></h4>
									<p class="price">$2000</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="screen" data-brand="razer" data-price="2000-3000">
								<div class="product-thumb">
									<img class="img-responsive"
										src="https://assets2.razerzone.com/images/pnx.assets/381e915d58d2b9759725c30a9f2c3a0f/desktops-and-components-category-500x500.webp"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">RAZER RAPTOR 27 1440P 165 HZ</a></h4>
									<p class="price">$3000</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="laptops" data-brand="razer" data-price="2000-3200">
								<div class="product-thumb">
									<img class="img-responsive"
										src="https://assets3.razerzone.com/H4WjhApyq5TkCV3Ht7BYsWERAYs=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh1c%2Fhb4%2F9719191502878%2F240109-blade16-s10-black-1500x1000-2.jpg"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">Razer Blade 16</a></h4>
									<p class="price">$3200</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="laptops" data-brand="dell" data-price="1000-2000">
								<div class="product-thumb">
									<span class="bage">Sale</span>
									<img class="img-responsive"
										src="https://cdn2.fptshop.com.vn/unsafe/750x0/filters:quality(100)/dell_latitude_15_3540_9950b79986.png"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">Laptop Dell Latitude L3540</a></h4>
									<p class="price">$1300</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="screen" data-brand="dell" data-price="0-500">
								<div class="product-thumb">
									<img class="img-responsive"
										src="https://cdn2.fptshop.com.vn/unsafe/750x0/filters:quality(100)/dell_e2423hn_61be08a0d7.png"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">Dell E2423HN/23.8inch/ FHD</a></h4>
									<p class="price">$200</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="product-item" data-category="screen" data-brand="dell" data-price="0-500">
								<div class="product-thumb">
									<img class="img-responsive"
										src="https://cdn2.fptshop.com.vn/unsafe/750x0/filters:quality(100)/2022_8_12_637959163999365942_man-hinh-dell-p2422h-238-inch-fhd-1920x1080-60hz-1.jpg"
										alt="" />
									<div class="preview-meta">
										<ul>
											<li>
												<span data-toggle="modal" data-target="#product-modal">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li>
											<li>
												<a href="#"><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="#!"><i class="tf-ion-android-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="product-content">
									<h4><a href="product-single.php">Dell P2422H/23.8 inch/FHD</a></h4>
									<p class="price">400$</p>
								</div>
							</div>
						</div>

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
													<img class="img-responsive"
														src="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg"
														alt="" />
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="product-short-details">
													<h2 class="product-title">iMac M4 2024 24 inch</h2>
													<p class="product-price">$2000</p>
													<p class="product-short-description">
														Experience groundbreaking performance with the new iMac M4,
														powered by
														Apple's latest M4 chip. This stunning 24-inch display brings
														vibrant
														colors and true-to-life clarity, making it perfect for both work
														and
														entertainment. Sleek, powerful, and designed for the future.
													</p>
													<a href="cart.php" class="btn btn-main">Add To Cart</a>
													<a href="product-single.php" class="btn btn-transparent">View
														Product
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /.modal -->

					</div>
				</div>

			</div>
		</div>
	</section>

	<footer class="footer section text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="social-media">
						<li>
							<a href="https://www.facebook.com/nobelg.ha/">
								<i class="tf-ion-social-facebook"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/nvh.201/">
								<i class="tf-ion-social-instagram"></i>
							</a>
						</li>
						<li>
							<a href="https://x.com/NguynvnH1233663">
								<i class="tf-ion-social-twitter"></i>
							</a>
						</li>
						<li>
							<a href="https://www.pinterest.com/nguyenduyha6600185/">
								<i class="tf-ion-social-pinterest"></i>
							</a>
						</li>
					</ul>
					<ul class="footer-menu text-uppercase">
						<li>
							<a href="contact.php">CONTACT</a>
						</li>
						<li>
							<a href="shop.php">SHOP</a>
						</li>
						<li>
							<a href="faq.html">F.A.Q</a>
						</li>
						<li>
							<a href="contact.php">PRIVACY POLICY</a>
						</li>
					</ul>
					<p class="copyright-text">2024 &copy; Designed by BTEC Student Nguyen Van Ha <a
							href="https://www.facebook.com/nobelg.ha/" target="_blank">Facebook</a></p>

				</div>
			</div>
		</div>
	</footer>

	<!-- 
    Essential Scripts
    =====================================-->

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

	<!-- Main Js File -->
	<script src="js/script.js"></script>



</body>

</html>