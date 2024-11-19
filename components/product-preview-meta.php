<section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Featured Tech Products</h2>
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
                    
															<?php if (isset($product['sale']) && $product['sale']): ?>
																	<span class="badge sale-text">Sale</span>
															<?php endif; ?>
															<img class="img-responsive" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
																	
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
                                <h4><a href="product-single.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                                <p class="price">$<?php echo number_format($product['price']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
  </section>