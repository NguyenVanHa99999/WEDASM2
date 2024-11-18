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

  <!-- theme meta -->
  <meta name="theme-name" content="VANHASHOP" />

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
  
</head>

<body id="body">

	<!-- Start Top Header Bar -->
	<section class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 col-sm-4">
					<div class="user-avatar">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
							<img src="images/User.gif" alt="User Avatar" class="avatar-img">
							Nguyễn Văn Hà
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">Profile</a></li>
							<li><a href="Order information.php">Order information</a></li>
							<li><a href="login.php">Logout</a></li>
						</ul>
					</div>
					<div class="contact-number"><br><br>
						<i class="tf-ion-ios-telephone"></i>
						<span>0972 - 867 - 256</span>
					</div>
				</div>
				<style>
					.user-avatar {
						position: relative;
					}

					.user-avatar .dropdown-menu {
						position: absolute;
						top: 100%;
						left: 0;
						margin-top: 0.5em;
						transform: none;
					}

					.contact-number {
						display: flex;
						align-items: center;
						margin-left: 4em;
					}

					.contact-number i {
						margin-right: 0.5em;
						color: #333;
						font-size: 1.2em;
					}
				</style>
				<div class="col-md-4 col-xs-12 col-sm-4">
					<!-- Site Logo -->
					<div class="logo text-center">
						<a href="index.php">
							<!-- replace logo here -->
							<svg width="500px" height="150px" viewBox="0 0 600 200" version="1.1"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
									font-size="70" font-family="AustinBold, Austin" font-weight="bold">
									<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
										<text id="VAN HA SHOP">
											<tspan x="108.94" y="400">VAN HA SHOP</tspan>
										</text>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-4">
					<!-- Cart -->
					<ul class="top-menu text-right list-inline">
						<li class="dropdown cart-nav dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
									class="tf-ion-android-cart"></i>Cart</a>
							<div class="dropdown-menu cart-dropdown">
								<!-- Cart Item -->
								<div class="media">
									<a class="pull-left" href="#!">
										<img class="media-object"
											src="https://shopdunk.com/images/thumbs/0024433_midnight_550.jpeg" alt="" />
									</a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#!">MacBook Air M3 13 inch</a></h4>
										<div class="cart-price">
											<span>1 x</span>
											<span>1250.00</span>
										</div>
										<h5><strong>$1200</strong></h5>
									</div>
									<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
								</div><!-- / Cart Item -->
								<!-- Cart Item -->
								<div class="media">
									<a class="pull-left" href="#!">
										<img class="media-object"
											src="https://assets3.razerzone.com/xP6cTvuLHz3kTYQA4KlrCCZoCf0=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh0c%2Fh7d%2F9472706805790%2Fblade16-s9-1500x1000-2.jpg"
											alt="" />
									</a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#!"> Razer Blade 16</a></h4>
										<div class="cart-price">
											<span>1 x</span>
											<span>1250.00</span>
										</div>
										<h5><strong>$1200</strong></h5>
									</div>
									<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
								</div><!-- / Cart Item -->

								<div class="cart-summary">
									<span>Total</span>
									<span class="total-price">$1799.00</span>
								</div>
								<ul class="text-center cart-buttons">
									<li><a href="cart.php" class="btn btn-small">View Cart</a></li>
									<li><a href="checkout.php" class="btn btn-small btn-solid-border">Checkout</a></li>
								</ul>
							</div>

						</li><!-- / Cart -->


						<!-- Search -->
						<li class="dropdown search dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
									class="tf-ion-ios-search-strong"></i> Search</a>
							<ul class="dropdown-menu search-dropdown">
								<li>
									<form action="post"><input type="search" class="form-control"
											placeholder="Search..."></form>
								</li>
							</ul>
						</li><!-- / Search -->


						<!-- Languages -->
						<li class="commonSelect">
							<select class="form-control">
								<option>EN</option>
								<option>VN</option>
								<option>FR</option>
								<option>ES</option>
							</select>
						</li><!-- / Languages -->

					</ul><!-- / .nav .navbar-nav .navbar-right -->
				</div>
			</div>
		</div>
	</section><!-- End Top Header Bar -->


	<!-- Main Menu Section -->
	<section class="menu">
		<nav class="navbar navigation">
			<div class="container">
				<div class="navbar-header">
					<h2 class="menu-title">Menu</h2>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div><!-- / .navbar-header -->

				<!-- Navbar Links -->
				<div id="navbar" class="navbar-collapse collapse text-center">
					<ul class="nav navbar-nav">

						<!-- Home -->
						<li class="dropdown ">
							<a href="index.php">Home</a>
						</li><!-- / Home -->


						<!-- Elements -->
						<li class="dropdown dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Shop <span
									class="tf-ion-ios-arrow-down"></span></a>
							<div class="dropdown-menu">
								<div class="row">

									<!-- Basic -->
									<div class="col-lg-6 col-md-6 mb-sm-3">
										<ul>
											<li class="dropdown-header">Pages</li>
											<li role="separator" class="divider"></li>
											<li><a href="shop.php">Shop</a></li>
											<li><a href="checkout.php">Checkout</a></li>
											<li><a href="cart.php">Cart</a></li>
											<li><a href="confirmation.html">Confirmation</a></li>

										</ul>
									</div>

									<!-- Layout -->
									<div class="col-lg-6 col-md-6 mb-sm-3">
										<ul>
											<li class="dropdown-header">Layout</li>
											<li role="separator" class="divider"></li>
											<li><a href="product-single.php">Product Details</a></li>
											

										</ul>
									</div>

								</div><!-- / .row -->
							</div><!-- / .dropdown-menu -->
						</li><!-- / Elements -->


						<!-- Pages -->
						<li class="dropdown full-width dropdown-slide">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Pages <span
									class="tf-ion-ios-arrow-down"></span></a>
							<div class="dropdown-menu">
								<div class="row">

									<!-- Introduction -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Introduction</li>
											<li role="separator" class="divider"></li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="faq.html">FAQ</a></li>
										</ul>
									</div>

									<!-- Contact -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Dashboard</li>
											<li role="separator" class="divider"></li>
											<li><a href="dashboard.php">User Interface</a></li>
											<li><a href="order.php">Orders</a></li>
											<li><a href="address.php">Address</a></li>
											<li><a href="profile-details.php">Profile Details</a></li>
											<li><a href="post products.php">Post products</a></li>
										</ul>
									</div>

									<!-- Utility -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Utility</li>
											<li role="separator" class="divider"></li>
											<li><a href="login.php">Login Page</a></li>
											<li><a href="signin.php">Signin Page</a></li>
											<li><a href="forget-password.php">Forget Password</a></li>
										</ul>
									</div>

									<!-- Mega Menu -->
									<div class="col-sm-3 col-xs-12">
										<a href="shop.php">
											<img class="img-responsive"
												src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/444503418_1202652411106053_6593793449677321316_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHBiCR-AYgnVooXX1LXcQ0cTWP5vC9N7gdNY_m8L03uB27qbMZZjgNpV26VCs8pp2gjYXUubWF9lKA7jcSkEOYM&_nc_ohc=Gi9FcivlIBAQ7kNvgGEf1cj&_nc_zt=23&_nc_ht=scontent-hkg4-1.xx&_nc_gid=A-uXQ7aEiXsr3BhlAuKowoH&oh=00_AYDXxC9VitRrUCdpo_TlvEEGXj28BZwiU8z6XpxSRuJIDw&oe=6736296B"
												alt="menu image" />
										</a>
									</div>
								</div><!-- / .row -->
							</div><!-- / .dropdown-menu -->
						</li><!-- / Pages -->

					</ul><!-- / .nav .navbar-nav -->

				</div>
				<!--/.navbar-collapse -->
			</div><!-- / .container -->
		</nav>
	</section>

	<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url(https://images.unsplash.com/photo-1463620695885-8a91d87c53d0?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbXB1dGVyJTIwcHJvZHVjdHMlMjBtYWNib29rJTIwNGt8ZW58MHx8MHx8fDA%3D);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">New modern computer
							products <br> keep up with trends.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="shop.php">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url(https://m.media-amazon.com/images/I/51QmEVDZ82L._AC_SL1200_.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-left">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">New modern computer
							products <br> keep up with trends.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="shop.php">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item th-fullpage hero-area"
			style="background-image: url(https://www.anphatpc.com.vn/media/news/2908_4k-gaming-laptop-co-dang-mua-21.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-right">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">New modern computer
							products <br> keep up with trends.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
							href="shop.php">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="product-category section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title text-center">
						<h2>Product Category</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="category-box">
						<a href="#!">
							<img src="https://plus.unsplash.com/premium_photo-1681566926348-f664f6cd3190?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGNvbXB1dGVyJTIwcHJvZHVjdHMlMjBtYWNib29rJTIwNGt8ZW58MHx8MHx8fDA%3D"
								alt="" />
							<div class="content">
								<h3>Computer Sale</h3>
								<p>The Best Deals on Laptops</p>
							</div>
						</a>
					</div>
					<div class="category-box">
						<a href="#!">
							<img src="https://t3.ftcdn.net/jpg/10/34/66/78/240_F_1034667835_AA0agaodA4mHdLFCZtqngiCerfM5GDiw.jpg"
								alt="" />
							<div class="content">
								<h3>Ultra-Wide Monitors</h3>
								<p>Immersive Viewing Experience with Extra-Wide Screens</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="category-box category-box-2">
						<a href="#!">
							<img src="https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/peripherals/monitors/u-series/u4323qe/media-gallery/gray/monitor-u4323qe-gray-gallery-1.psd?fmt=png-alpha&pscan=auto&scl=1&hei=476&wid=483&qlt=100,1&resMode=sharp2&size=483,476&chrss=full"
								alt="" />
							<div class="content">
								<h3>big screen</h3>
								<p>Enhance Your Productivity with Top Accessories</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="products section bg-gray">
		<div class="container">
			<div class="row">
				<div class="title text-center">
					<h2>Featured Tech Products</h2>
				</div>
			</div>
			<div class="row">

				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<img class="img-responsive" src="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg"
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
							<h4><a href="product-single.php">iMac M4 2024 24 inch</a></h4>
							<p class="price">$2000</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
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
				<div class="col-md-4">
					<div class="product-item">
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
												src="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg" alt="" />
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
				</div><!-- /.modal -->

			</div>
		</div>
	</section>
	<!--
Start Call To Action
==================================== -->
	<section class="call-to-action bg-gray section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title">
						<h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
						<p>Sign up to stay updated on the latest computer products, special offers, and tech tips.<br>
							Don’t miss out on any updates from us!</p>

					</div>
					<div class="col-lg-6 col-md-offset-3">
						<div class="input-group subscription-form">
							<input type="text" class="form-control" placeholder="Enter Your Email Address">
							<span class="input-group-btn">
								<button class="btn btn-main" type="button">Subscribe Now!</button>
							</span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->

				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- End section -->

	<section class="section instagram-feed">
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>View us on instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="instagram-slider" id="instafeed"
						data-accessToken="IGQVJYeUk4YWNIY1h4OWZANeS1wRHZARdjJ5QmdueXN2RFR6NF9iYUtfcGp1NmpxZA3RTbnU1MXpDNVBHTzZAMOFlxcGlkVHBKdjhqSnUybERhNWdQSE5hVmtXT013MEhOQVJJRGJBRURn">
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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
		<script type="text/javascript" src="plugins/google-map/gmap.js"></script>
	
		<!-- Main Js File -->
		<script src="js/script.js"></script>
	
</body>

</html>