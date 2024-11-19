

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
   <script>
        // Lấy thông tin người dùng từ localStorage
        const user = JSON.parse(localStorage.getItem('user'));

        // Kiểm tra nếu không phải Admin, chuyển hướng về trang chủ
        if (!user || user.role !== 'admin') {
						sessionStorage.setItem('accessDenied', 'true');
            window.location.href = '/WEDASM2/index.php'; // Chuyển về trang chủ
        }
    </script>	
  <?php include '../components/header.php'; ?>
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h1 class="page-name">Dashboard</h1>
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">information user management</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="user-dashboard page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline dashboard-menu text-center">
							<li><a  href="home.php">User manager</a></li>
							<li><a class="active" href="order.php">Orders manager</a></li>
		

					</ul>
					<div class="dashboard-wrapper user-dashboard">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Order ID</th>
										<th>Date</th>
										<th>Items</th>
										<th>Total Price</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#252125</td>
										<td>Nov 05, 2024</td>
										<td>MacBook Pro 16 inch M3 Pro</td>
										<td>$1000.00</td>
										<td><span class="label label-primary">Processing</span></td>
										<td><button class="btn btn-default" data-toggle="modal" data-target="#orderModal1">View</button></td>
									</tr>
									<tr>
										<td>#252126</td>
										<td>Nov 10, 2024</td>
										<td>iMac M4 2024 24 inch</td>
										<td>$2000.00</td>
										<td><span class="label label-success">Completed</span></td>
										<td><button class="btn btn-default" data-toggle="modal" data-target="#orderModal2">View</button></td>
									</tr>
									<tr>
										<td>#252127</td>
										<td>Nov 30, 2024</td>
										<td>Razer Blade 16</td>
										<td>$3200.00</td>
										<td><span class="label label-danger">Canceled</span></td>
										<td><button class="btn btn-default" data-toggle="modal" data-target="#orderModal3">View</button></td>
									</tr>
									<!-- More rows as needed -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Order Detail Modals -->
	<!-- Order Modal for MacBook Pro 16 inch M3 Pro -->
	<div class="modal fade" id="orderModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Order Details - #252125</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="https://macstores.vn/wp-content/uploads/2023/10/macbook-pro-16-inch-m3-pro-silver-1.jpg" alt="MacBook Pro 16 inch M3 Pro" class="img-responsive mb-3">
					<p><strong>Product:</strong> MacBook Pro 16 inch M3 Pro</p>
					<p><strong>Price:</strong> $1000.00</p>
					<p><strong>Date:</strong> Nov 23, 2024</p>
					<p><strong>Status:</strong> Processing</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Order Modal for iMac M4 2024 24 inch -->
	<div class="modal fade" id="orderModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Order Details - #252126</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="https://shopdunk.com/images/thumbs/0031541_blue_550.jpeg" alt="iMac M4 2024 24 inch" class="img-responsive mb-3">
					<p><strong>Product:</strong> iMac M4 2024 24 inch</p>
					<p><strong>Price:</strong> $2000.00</p>
					<p><strong>Date:</strong> Nov 23, 2024</p>
					<p><strong>Status:</strong> Completed</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Order Modal for Razer Blade 16 -->
	<div class="modal fade" id="orderModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Order Details - #252127</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="https://assets3.razerzone.com/xP6cTvuLHz3kTYQA4KlrCCZoCf0=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh0c%2Fh7d%2F9472706805790%2Fblade16-s9-1500x1000-2.jpg" alt="Razer Blade 16" class="img-responsive mb-3">
					<p><strong>Product:</strong> Razer Blade 16</p>
					<p><strong>Price:</strong> $3200.00</p>
					<p><strong>Date:</strong> Nov 23, 2024</p>
					<p><strong>Status:</strong> Canceled</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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