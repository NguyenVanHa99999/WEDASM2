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
									<div class='item active'>
										<img src='https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg' alt='' data-zoom-image="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg" />
									</div>
									<div class='item'>
										<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE' alt='' data-zoom-image="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE" />
									</div>
									<div class='item'>
										<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY' alt='' data-zoom-image="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY" />
									</div>
									<div class='item'>
										<img src='https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg' alt='' data-zoom-image="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg" />
									</div>
									<div class='item'>
										<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE' alt='' data-zoom-image="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE" />
									</div>
									<div class='item'>
										<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY' alt='' data-zoom-image="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY" />
									</div>
								</div>

								<!-- sag sol -->
								<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
									<i class="tf-ion-ios-arrow-left"></i>
								</a>
								<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
									<i class="tf-ion-ios-arrow-right"></i>
								</a>
							</div>

							<!-- thumb -->
							<ol class='carousel-indicators mCustomScrollbar meartlab'>
								<li data-target='#carousel-custom' data-slide-to='0' class='active'>
									<img src='https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg' 
										alt='' />
								</li>
								<li data-target='#carousel-custom' data-slide-to='1'>
									<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE'
										alt='' />
								</li>
								<li data-target='#carousel-custom' data-slide-to='2'>
									<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY'
										alt='' />
								</li>
								<li data-target='#carousel-custom' data-slide-to='4'>
									<img src='https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg' 
										alt='' />
								</li>
								<li data-target='#carousel-custom' data-slide-to='5'>
									<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE'
										alt='' />
								</li>
								<li data-target='#carousel-custom' data-slide-to='6'>
									<img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY'
										alt='' />
								</li>

							</ol>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-details">
						<h2>iMac M4 2024 24 inch</h2>
						<p class="product-price">$2000</p>

						<p class="product-description mt-20">
							Experience groundbreaking performance with the new iMac M4, powered by Apple's latest M4
							chip. The stunning 24-inch display offers vibrant colors and true-to-life clarity, making it
							perfect for both work and entertainment.
						</p>
						<p>The iMac M4 2024 features a sleek, modern design with powerful processing capabilities and
							reliable performance. It’s the perfect choice for those seeking both beauty and
							functionality in one device.</p>

							<div class="color-swatches">
								<span>color:</span>
								<ul>
									<li>
										<a href="#!" class="swatch-blue" onclick="changeProductImage('blue')"></a> <!-- Màu xanh -->
									</li>
									<li>
										<a href="#!" class="swatch-gray" onclick="changeProductImage('gray')"></a> <!-- Màu xám -->
									</li>
									<li>
										<a href="#!" class="swatch-green" onclick="changeProductImage('green')"></a> <!-- Màu xanh lá -->
									</li>
								</ul>
							</div>
							
							<script>
								function changeProductImage(color) {
									const productImage = document.querySelector('.single-product-slider .carousel-inner .item.active img');
									
									if (color === 'blue') {
										productImage.src = 'https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg';
									} else if (color === 'gray') {
										productImage.src = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4ReADI3WvL9bht5eCRF7sMECcXzZuNCb5ggCkGLSZFWmkRg5R0Ih0gxauw-N4S_9qwYVhelg&usqp=CAE';
									} else if (color === 'green') {
										productImage.src = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSeFUyraFRFjT6ss-MdMTjK6ZMdS7QRe3X631jCIawWIfmehbs&usqp=CAY';
									}
								}
							</script>

						<div class="product-quantity">
							<span>Quantity:</span>
							<div class="product-quantity-slider">
								<input id="product-quantity" type="text" value="1" name="product-quantity">
							</div>
						</div>
						<div class="product-category">
							<span>Categories:</span>
							<ul>
								<li><a href="product-single.php">screen</a></li>
								<li><a href="product-single.php">Apple</a></li>
							</ul>
						</div>
						<a href="cart.php" class="btn btn-main mt-20">Add To Cart</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="tabCommon mt-20">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a>
							</li>
							<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews (3)</a></li>
						</ul>
						<div class="tab-content patternbg">
							<div id="details" class="tab-pane fade active in">
								<h4>Product Description</h4>
								<p>The iMac M4 2024 redefines all-in-one desktops with Apple revolutionary M4 chip,
									delivering exceptional speed, power, and efficiency. The stunning 24-inch 4.5K
									Retina display brings vivid colors and remarkable clarity, making it ideal for
									creative projects, business tasks, and immersive entertainment experiences.</p>
								<p>Built with both performance and aesthetics in mind, the iMac M4 features a minimalist
									design with a slim profile, available in various color options to suit your
									workspace. Whether you’re editing videos, creating graphics, or enjoying
									high-definition content, the iMac M4 ensures smooth and fast performance.</p>
								<p>This model includes state-of-the-art features such as advanced cooling, enhanced
									security through Apple’s Secure Enclave, and seamless integration with other Apple
									devices. Experience the future of computing with the iMac M4 2024 – where power
									meets elegance.</p>
							</div>

							<div id="reviews" class="tab-pane fade">
								<div class="post-comments">
									<ul class="media-list comments-list m-bot-50 clearlist">
										<!-- Comment Item start-->
										<li class="media">
											<a class="pull-left" href="#!">
												<img class="media-object comment-avatar"
													src="https://scontent-hkg1-1.xx.fbcdn.net/v/t39.30808-6/449679975_1224493928921901_506438491388211638_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHuhB-rxRmM7xd8dhGBpsA4Tl6-DUuu0ohOXr4NS67SiPandfELM6krclS-8U07uBMdenCAr028X3tQau3w5KRs&_nc_ohc=7GDUCtm3v0AQ7kNvgGXhP5E&_nc_zt=23&_nc_ht=scontent-hkg1-1.xx&_nc_gid=AqM6UqMczL0XlASG8BrjeeR&oh=00_AYC8aq_sIBM-gXjgILXR38gYGfWsKDF9yjAnhEw_Sm_4Tg&oe=67375C4E"
													alt="" width="50" height="50" />
											</a>
											<div class="media-body">
												<div class="comment-info">
													<h4 class="comment-author">
														<a href="#!">user1234</a>
													</h4>
													<time datetime="2024-03-15T10:30">November 15, 2024, at 10:30</time>
													<a class="comment-button" href="#!"><i
															class="tf-ion-chatbubbles"></i>Reply</a>
												</div>
												<p>
													Absolutely love my new iMac M4 2024! The display is stunning, and
													the performance is incredibly smooth.
													It handles all my creative projects without a hitch. Highly
													recommend for anyone looking for power and style in one device.
												</p>
											</div>
										</li>
										<!-- End Comment Item -->

										<!-- Comment Item start-->
										<li class="media">
											<a class="pull-left" href="#!">
												<img class="media-object comment-avatar"
													src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/349661808_701892755277577_4429249135858725310_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeG04Nz4yTj_6_cgsi1jPJRf4lU3z7hBr6fiVTfPuEGvp1n-P6cI7efcUbVWMsZwci8D7b4nFWPyXYFvmzA1Ijkk&_nc_ohc=sMbOBnkYkvsQ7kNvgGqbCVX&_nc_zt=23&_nc_ht=scontent-hkg4-1.xx&_nc_gid=ATRu9ur8N9B0zl8o1Qfgr8z&oh=00_AYBKIZGsIIqq13fsxk_FX7z-pN3ywgP-u0K75fqdA0Wzmw&oe=67376CDF"
													alt="" width="50" height="50" />
											</a>
											<div class="media-body">
												<div class="comment-info">
													<h4 class="comment-author">
														<a href="#!">user3737</a>
													</h4>
													<time datetime="2024-02-28T09:20">November 28, 2024, at 09:20</time>
													<a class="comment-button" href="#!"><i
															class="tf-ion-chatbubbles"></i>Reply</a>
												</div>
												<p>
													The iMac M4 has exceeded my expectations. The M4 chip provides
													lightning-fast speeds, and the integration with other Apple devices
													is seamless.
													It's perfect for multitasking and has become an essential part of my
													workflow.
												</p>
											</div>
										</li>
										<!-- End Comment Item -->

										<!-- Comment Item start-->
										<li class="media">
											<a class="pull-left" href="#!">
												<img class="media-object comment-avatar"
													src="https://scontent-hkg1-2.xx.fbcdn.net/v/t39.30808-6/322254340_3351151341805030_6501671695470116386_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFuyQA121u0DJTj3vXaewcqf68brNOiF-Z_rxus06IX5knM2pB1mrykS1G0Lf1Q3rxNUOeqUzJmJqaJqrYPOwXz&_nc_ohc=ByGHX0mAaogQ7kNvgH-n5_h&_nc_zt=23&_nc_ht=scontent-hkg1-2.xx&_nc_gid=A46hpoMW2Iy2Lk7tVEIvGre&oh=00_AYAIfdLvZutYo4xHErE6e8wP5_k1QnidpGeXAZ2_5iauvg&oe=6737412C"
													alt="" width="50" height="50">
											</a>
											<div class="media-body">
												<div class="comment-info">
													<h4 class="comment-author">
														<a href="#!">user8989</a>
													</h4>
													<time datetime="2024-01-15T14:10">November 15, 2024, at 14:10</time>
													<a class="comment-button" href="#!"><i
															class="tf-ion-chatbubbles"></i>Reply</a>
												</div>
												<p>
													I was blown away by the sleek design and vibrant display. The iMac
													M4 2024 handles all my graphic design tasks effortlessly,
													and the color accuracy is fantastic. It’s an investment worth every
													penny!
												</p>
											</div>
										</li>
										<!-- End Comment Item -->
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="products related-products section">
		<div class="container">
			<div class="row">
				<div class="title text-center">
					<h2>Related Products</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
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
				<div class="col-md-3">
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
				<div class="col-md-3">
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
				<div class="col-md-3">
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
	</div>
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
							<a href="contact.html">PRIVACY POLICY</a>
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