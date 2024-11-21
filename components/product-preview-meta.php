<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/WEDASM2/config/connect.php';

// Lấy kết nối
$conn = getDatabaseConnection();

function getFeaturedProducts($limit = 9) {
    global $conn;  
    
    if ($conn === null) {
        error_log("Kết nối cơ sở dữ liệu không tồn tại!");
        return [];
    }
    
    try {
        $query = "SELECT * FROM products 
				
                  ORDER BY created_at DESC 
                  LIMIT :limit";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        error_log("Lỗi truy vấn sản phẩm: " . $e->getMessage());
        return [];
    }
}


$featured_products = getFeaturedProducts();
?>


<section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h1 >SHOP</h1>
                </div>
            </div>
            <div class="row">
                <?php foreach ($featured_products as $product): ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
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
																.sale-text {
																	color: white;
																	position: absolute;
																	right: 10px;
																	top: 10px;
																}
															</style>
                    
													
															<img class="img-responsive" src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['image']) ?> ?>">
																	
															<div class="preview-meta">
																<ul>
																	<li>
                                                                        <a href="<?php echo '/WEDASM2/pages/product-details.php?product_id=' . $product['product_id']; ?>">
                                                                            <i class="tf-ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </li>

																</ul>
															</div>
                            </div>		
                            <div class="product-content">  
                                            <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                                <p class="price">$ <?php echo htmlspecialchars($product['price']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
  </section>