<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
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
    <script>
            // Lấy thông tin người dùng từ localStorage
            const user = JSON.parse(localStorage.getItem('user'));

        // Kiểm tra nếu không phải Admin, chuyển hướng về trang chủ
        if (!user || user.role !== 'admin') {
						sessionStorage.setItem('accessDenied', 'true');
            window.location.href = '/WEDASM2/index.php'; // Chuyển về trang chủ
        }
    </script>

<body id="body">
    <?php include '../components/header.php'; ?>

    <!-- Kiểm tra quyền truy cập người dùng -->
 

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
                        <li><a class="active" href="home.php">User manager</a></li>
                        <li><a href="order.php">Orders manager</a></li>
                    </ul><br>

                    <!-- Search Bar -->
                    <div class="search-bar mb-20" style="max-width: 200px;">
                        <input type="text" id="searchCustomer" class="form-control"
                            placeholder="Search by customer name" onkeyup="searchCustomer()">
                    </div>

                    <div class="dashboard-wrapper user-dashboard">
                        <div class="media">
                            <div class="pull-left">
                                <!-- Avatar will update based on the selected customer -->
                                <img id="customerAvatar" class="media-object user-img"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1rTLeQraa9s-Rkj2_KMPOzh30CwK1G2D85A&s"
                                    alt="Avatar" style="width: 100px; height: 100px; border-radius: 10px;">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading" id="customerName">User</h2>
                                <p id="customerDescription">Please enter a customer name to search for information.</p>
                            </div>
                        </div>

                        <div class="total-order mt-20">
                            <h4>Total Orders</h4>
                            <div class="table-responsive">
                                <table class="table" id="orderTable">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Product Name</th>
                                            <th>Items</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Orders will be inserted here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../components/footer.php'; ?>

    <script>
        // Sample customers array with avatars and order information
        const customers = [{
                name: "Nguyễn Văn Hà",
                avatar: "https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/449679975_1224493928921901_506438491388211638_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHuhB-rxRmM7xd8dhGBpsA4Tl6-DUuu0ohOXr4NS67SiPandfELM6krclS-8U07uBMdenCAr028X3tQau3w5KRs&_nc_ohc=83_6lJHWK2IQ7kNvgFeczFn&_nc_zt=23&_nc_ht=scontent.fhan2-3.fna&_nc_gid=AbQZsl90Ydm-XfmXVbU7LE7&oh=00_AYAy8krK566A2ycABSQpBIC0rpUX5QjEPH_C40pYnaZgXQ&oe=673CA24E",
                description: "Customer Nguyễn Văn Hà has been with us since 2021. He has made multiple purchases, including high-end laptops and accessories. Nguyễn Văn Hà is a tech enthusiast who often seeks the latest tech trends and innovations.",
                orders: [{
                        id: "#252125",
                        date: "Nov 05, 2024",
                        productName: "MacBook Pro 16 inch M3 Pro",
                        items: 1,
                        totalPrice: "$1000.00"
                    },
                    {
                        id: "#252126",
                        date: "Nov 10, 2024",
                        productName: "iMac M4 2024 24 inch",
                        items: 1,
                        totalPrice: "$2000.00"
                    }
                ]
            },
            {
                name: "Trần Minh Duy",
                avatar: "https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/338056750_1386548332132718_7609961800439044619_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFqTiuZgbe1RngK-zxyhioX36-FWhEOquvfr4VaEQ6q61V-o24ot2gqiSvYAu-EtejKPbq-5jEd5tWkjZ2WglFP&_nc_ohc=XB8d30cDLDUQ7kNvgEtU2S2&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=A3tufYQ-SRyismgfVZZRJdY&oh=00_AYDoPTXC6t7qxEifvB2BsPPbovT1Rj2UBF3ld75kL9-nrw&oe=673CAD40",
                description: "Trần Minh Duy is one of our loyal customers, known for his preference for gaming laptops and accessories. He joined our store in early 2022 and has since bought several high-performance products, including the Razer Blade 16.",
                orders: [{
                    id: "#252127",
                    date: "Nov 15, 2024",
                    productName: "Razer Blade 16",
                    items: 1,
                    totalPrice: "$3200.00"
                }]
            }
        ];

        // Function to search for customers
        function searchCustomer() {
            const query = document.getElementById('searchCustomer').value.toLowerCase();
            const customer = customers.find(c => c.name.toLowerCase().includes(query));

            if (customer) {
                // Update customer information
                document.getElementById('customerName').textContent = `${customer.name}`;
                document.getElementById('customerDescription').textContent = customer.description;
                document.getElementById('customerAvatar').src = customer.avatar;

                // Display orders
                const orderTableBody = document.getElementById('orderTable').querySelector('tbody');
                orderTableBody.innerHTML = ''; // Clear previous content

                customer.orders.forEach(order => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${order.id}</td>
                        <td>${order.date}</td>
                        <td>${order.productName}</td>
                        <td>${order.items}</td>
                        <td>${order.totalPrice}</td>
                    `;
                    orderTableBody.appendChild(row);
                });
            } else {
                // If customer not found, show a message and clear previous content
                document.getElementById('customerName').textContent = "Customer not found";
                document.getElementById('customerDescription').textContent = "";
                document.getElementById('customerAvatar').src = "";
                document.getElementById('orderTable').querySelector('tbody').innerHTML = "";
            }
        }
    </script>

</body>

</html>
