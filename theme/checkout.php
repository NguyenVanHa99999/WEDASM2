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
							<li><a href="profile.html">Profile</a></li>
							<li><a href="Order information.html">Order information</a></li>
							<li><a href="login.html">Logout</a></li>
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
						<a href="index.html">
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
									<li><a href="cart.html" class="btn btn-small">View Cart</a></li>
									<li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
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
							<a href="index.html">Home</a>
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
											<li><a href="shop.html">Shop</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="confirmation.html">Confirmation</a></li>

										</ul>
									</div>

									<!-- Layout -->
									<div class="col-lg-6 col-md-6 mb-sm-3">
										<ul>
											<li class="dropdown-header">Layout</li>
											<li role="separator" class="divider"></li>
											<li><a href="product-single.html">Product Details</a></li>
											<!-- <li><a href="shop-sidebar.html">Shop With Sidebar</a></li> -->

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
											<li><a href="contact.html">Contact Us</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="faq.html">FAQ</a></li>
										</ul>
									</div>

									<!-- Contact -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Dashboard</li>
											<li role="separator" class="divider"></li>
											<li><a href="dashboard.html">User Interface</a></li>
											<li><a href="order.html">Orders</a></li>
											<li><a href="address.html">Address</a></li>
											<li><a href="profile-details.html">Profile Details</a></li>
											<li><a href="post products.html">Post products</a></li>
										</ul>
									</div>

									<!-- Utility -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Utility</li>
											<li role="separator" class="divider"></li>
											<li><a href="login.html">Login Page</a></li>
											<li><a href="signin.html">Signin Page</a></li>
											<li><a href="forget-password.html">Forget Password</a></li>
										</ul>
									</div>

									<!-- Mega Menu -->
									<div class="col-sm-3 col-xs-12">
										<a href="shop.html">
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
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Billing Details</h4>
                  <form class="checkout-form">
                     <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">Address</label>
                        <input type="text" class="form-control" id="user_address" placeholder="">
                     </div>
                     <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">Zip Code</label>
                           <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">City</label>
                           <input type="text" class="form-control" id="user_city" name="city" value="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_country">Country</label>
                        <input type="text" class="form-control" id="user_country" placeholder="">
                     </div>
                  </form>
               </div>
			   <div class="block">
				<h4 class="widget-title">Payment Method</h4>
				<p>Choose a payment method</p>
				<div class="checkout-product-details">
				  <div class="payment">
					<div class="form-group">
					  <!-- Checkbox for 'Cash on Delivery' method -->
					  <label>
						<input type="checkbox" id="cod-option">  Cash on Delivery
					  </label>
					</div>
				  </div>
				  <!-- Place Order Button -->
				  <a href="confirmation.html" class="btn btn-main mt-20" style="margin-left: 310px;">Place Order</a>

				</div>
			  </div>
			</div>
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>
                     <div class="media product-card">
                        <a class="pull-left" href="product-single.html">
                           <img class="media-object" src="https://shopdunk.com/images/thumbs/0024433_midnight_550.jpeg" alt="Image" />
                        </a>
                        <div class="media-body">
                           <h4 class="media-heading"><a href="product-single.html">MacBook Air M3 13 inch</a></h4>
                           <p class="price">1 x $1200</p>
                           <span class="remove" >Remove</span>
                        </div>
                     </div>
                     <div class="discount-code">
                        <p>Have a discount ? <a data-toggle="modal" data-target="#coupon-modal" href="#!">enter it here</a></p>
                     </div>
                     <ul class="summary-prices">
                        <li>
                           <span>Subtotal:</span>
                           <span class="price">$1200</span>
                        </li>
                        <li>
                           <span>Shipping:</span>
                           <span>Free</span>
                        </li>
                     </ul>
                     <div class="summary-total">
                        <span>Total</span>
                        <span>$1200</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- Modal -->
   <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <input class="form-control" type="text" placeholder="Enter Coupon Code">
                  </div>
                  <button type="submit" class="btn btn-main">Apply Coupon</button>
               </form>
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
						<a href="contact.html">CONTACT</a>
					</li>
					<li>
						<a href="shop.html">SHOP</a>
					</li>
					<li>
						<a href="pricing.html">Pricing</a>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>