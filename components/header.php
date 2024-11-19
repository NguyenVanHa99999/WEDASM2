		<section class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-12 col-sm-4">
						<div class="user-avatar">
							<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<img src="https://github.com/shadcn.png" alt="User Avatar" class="avatar-img avt">
								Nguyễn Văn Hà
							</a>
							<ul class="dropdown-menu">
								<li><a href=" <?php echo '/WEDASM2/pages/profile.php'; ?>">Profile</a></li>
								<<li><a href="<?php echo '/WEDASM2/utils/logout.php'; ?>">Logout</a></li>

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
							<a href="<?php echo '/WEDASM2/index.php'; ?>">
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
										<li><a href="pages/payment/cart.php" class="btn btn-small">View Cart</a></li>
										<li><a href="pages/payment/checkout.php" class="btn btn-small btn-solid-border">Checkout</a></li>
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
							<a href="<?php echo '/WEDASM2/index.php'; ?>">Home</a>
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
											<li><a href="<?php echo '/WEDASM2/pages/products.php' ?>">Shop</a></li>
											<li><a href="<?php echo '/WEDASM2/pages/checkout.php' ?>">Checkout</a></li>
											<li><a href="<?php echo '/WEDASM2/pages/cart.php' ?>">Cart</a></li>
						

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
											<li><a href=" <?php echo '/WEDASM2/contact.php'; ?>">Contact Us</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="faq.html">FAQ</a></li>
										</ul>
									</div>

									<!-- Contact -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Dashboard</li>
											<li role="separator" class="divider"></li>
											<li><a href="<?php echo '/WEDASM2/dashboard/home.php' ?>">Users manager</a></li>
											<li><a href="<?php echo '/WEDASM2/dashboard/order.php' ?>">Orders manager</a></li>
									
										</ul>
									</div>

									<!-- Utility -->
									<div class="col-sm-3 col-xs-12">
										<ul>
											<li class="dropdown-header">Utility</li>
											<li role="separator" class="divider"></li>
											<li><a href="<?php echo '/WEDASM2/pages/auth/sign-in.php'; ?>" >Login </a></li>
											<li><a href="<?php echo '/WEDASM2/pages/auth/sign-up.php'; ?>">Register </a></li>
							
										</ul>
									</div>

									<!-- Mega Menu -->
									<div class="col-sm-3 col-xs-12">
										<a href="shop.php">
											<img class="img-responsive"
												src="https://cdn2.fptshop.com.vn/unsafe/640x0/filters:quality(100)/2023_3_22_638151025559961816_cach-nap-game-free-fire.jpg"
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