<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->

	<!-- bootstrap -->
	<link rel="stylesheet" href="plugsin/bootstrap/bootstrap.css">
	<!-- animate -->
	<link rel="stylesheet" href="plugsin/animate/animate.css">
	<!-- animsition -->
	<link rel="stylesheet" href="plugsin/animsition/css/animsition.min.css">
	<!-- hamburgers -->
	<link rel="stylesheet" href="plugsin/css-hamburgers/hamburgers.min.css">
	<!-- DataTable -->
	<link rel="stylesheet" href="plugsin/DataTables/datatables.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="plugsin/fonts/fontawesome/all.min.css">
	<link rel="stylesheet" href="plugsin/fonts/themify/themify-icons.css">
	<link rel="stylesheet" href="plugsin/fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" href="plugsin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!-- slick -->
	<link rel="stylesheet" href="plugsin/slick/slick.css">
	<!-- lightbox2 -->
	<link rel="stylesheet" href="plugsin/lightbox2/css/lightbox.min.css">
	<!-- custom style -->
	<link rel="stylesheet" href="plugsin/css/util.css">
	<link rel="stylesheet" href="plugsin/css/main.css">
	<link rel="stylesheet" href="plugsin/css/style.css">





	<!-- <link rel="stylesheet" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" href="vendor/daterangepicker/daterangepicker.css"> -->

</head>

<body>

	<!-- Header -->
	<?php include('pages/idx_navbar.php'); ?>

	<!-- Slide1 -->
	<section class="slide1">
		<div class="idxslider">
			<div class="slick1 idxslider-slick">
				<!-- 一張圖片 -->
				<div class="slick-item" style="background-image: url(images/master-slide-02.jpg);">
					<!-- 文字區塊 -->
					<div class="item-desc">
						<span class="small-desc caption1-slide1 animated" data-appear="fadeInDown">
							small desc 1
						</span>

						<h2 class="item-title caption2-slide1 animated" data-appear="fadeInUp">
							New arrivals
						</h2>

						<div class="item-btn animated" data-appear="zoomIn">
							<!-- Button -->
							<a href="product.html">Shop Now</a>
						</div>
					</div>
				</div>

				<div class="slick-item" style="background-image: url(images/master-slide-03.jpg);">
					<div class="item-desc">
						<span class="small-desc caption1-slide1 animated" data-appear="rollIn">
							small title 2
						</span>

						<h2 class="item-title caption2-slide1 animated" data-appear="lightSpeedIn">
							New arrivals
						</h2>

						<div class="item-btn animated" data-appear="slideInUp">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="slick-item item3-slick1" style="background-image: url(images/master-slide-04.jpg);">
					<div class="item-desc">
						<span class="small-desc caption1-slide1 animated" data-appear="rotateInDownLeft">
							small title 3
						</span>

						<h2 class="item-title caption2-slide1 animated" data-appear="rotateInUpRight">
							New arrivals
						</h2>

						<div class="item-btn animated" data-appear="rotateIn">
							<!-- Button -->
							<a href="product.html">Shop Now</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<section class="idxbanner">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block-col">
						<img src="images/banner-02.jpg" alt="IMG-BENNER">
						<div class="col-btn">
							<!-- Button -->
							<a href="#">Dresses</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block-col">
						<img src="images/banner-05.jpg" alt="IMG-BENNER">
						<div class="col-btn">
							<!-- Button -->
							<a href="#">Sunglasses</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block-col">
						<img src="images/banner-03.jpg" alt="IMG-BENNER">

						<div class="col-btn">
							<!-- Button -->
							<a href="#">Watches</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block-col">
						<img src="images/banner-07.jpg" alt="IMG-BENNER">

						<div class="col-btn">
							<!-- Button -->
							<a href="#">Footerwear</a>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block-col">
						<img src="images/banner-04.jpg" alt="IMG-BENNER">

						<div class="col-btn">
							<!-- Button -->
							<a href="#">Bags</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block-col">
						<img src="images/icons/bg-01.jpg" alt="IMG">

						<div class="col-saletxt">
							<h4>Sign up & get 20% off</h4>
							<p>
								Be the frist to know about the latest fashion news and get exclu-sive offers
							</p>
							<div class="saletxt-btn">
								<!-- Button -->
								<a href="#">Sign Up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Main Product -->
	<section class="mainproduct">
		<div class="container">
			<div>
				<h3>We loved</h3>
			</div>
			<!-- Slide2 -->
			<div id="slider-mainprod">
				<div id="slider-mainprodlist">
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img prodlabelnew">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<!-- 加入願望清單 -->
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<!-- 加入購物車 -->
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">加入購物車</button>
									</div>
								</div>
							</div>

							<div>
								<a href="product-detail.html" class="prod_napr">NO1</a>
								<span class="prod_price">$ 555</span>
							</div>
						</div>
					</div>
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img prodlabelnew">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<!-- 加入願望清單 -->
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<!-- 加入購物車 -->
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">Add to Cart</button>
									</div>
								</div>
							</div>
							<div>
								<a href="product-detail.html" class="prod_napr">NO 2</a>

								<span class="prod_price">$92.50</span>
							</div>
						</div>
					</div>
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img prodlabelnew">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<!-- 加入願望清單 -->
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<!-- 加入購物車 -->
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">Add to Cart</button>
									</div>
								</div>
							</div>
							<div>
								<a href="product-detail.html" class="prod_napr">NO 3</a>
								<span class="prod_price">$92.50</span>
							</div>
						</div>
					</div>
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img  prodlabelnew">
								<img src="images/item-07.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">Add to Cart</button>
									</div>
								</div>
							</div>
							<div>
								<a href="product-detail.html" class="prod_napr">No 4</a>
								<span class="prod_oldprice">$29.50</span>
								<span class="prod_sprice">$15.90</span>
							</div>
						</div>
					</div>
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img  block2-labelsale">
								<img src="images/item-07.jpg" alt="IMG-PRODUCT">

								<div class="wish_cart">
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<div class="addcart">
										<!-- Button -->
										<button class="btn_addcart">Add to Cart</button>
									</div>
								</div>
							</div>

							<div>
								<a href="product-detail.html" class="prod_napr">最後一個</a>
								<span class="prod_oldprice">$29.50</span>
								<span class="prod_sprice">$15.90</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct">
		<div class="container">
			<div>
				<h3>Featured Products</h3>
			</div>

			<!-- Slide2 -->
			<div id="slider-newprod">
				<div id="slider-newprodlist">

					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img prodlabelnew">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<!-- 加入願望清單 -->
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<!-- 加入購物車 -->
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">加入購物車</button>
									</div>
								</div>
							</div>

							<div>
								<a href="product-detail.html" class="prod_napr">NO1</a>
								<span class="prod_price">$ 555</span>
							</div>
						</div>
					</div>

					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img prodlabelnew">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<!-- 加入願望清單 -->
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<!-- 加入購物車 -->
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">Add to Cart</button>
									</div>
								</div>
							</div>
							<div>
								<a href="product-detail.html" class="prod_napr">NO 2</a>

								<span class="prod_price">$92.50</span>
							</div>
						</div>
					</div>
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img prodlabelnew">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<!-- 加入願望清單 -->
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<!-- 加入購物車 -->
									<div class="addcart">
										<!-- Button -->
										<button class="btn-addcart">Add to Cart</button>
									</div>
								</div>
							</div>
							<div>
								<a href="product-detail.html" class="prod_napr">NO 3</a>

								<span class="prod_price">$92.50</span>
							</div>
						</div>
					</div>



					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img  prodlabelnew">
								<img src="images/item-07.jpg" alt="IMG-PRODUCT">
								<div class="wish_cart">
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<div class="addcart"">
										<!-- Button -->
										<button class=" btn-addcart">Add to Cart</button>
									</div>
								</div>
							</div>
							<div>
								<a href="product-detail.html" class="prod_napr">No 4</a>
								<span class="prod_oldprice">$29.50</span>
								<span class="prod_sprice">$15.90</span>
							</div>
						</div>
					</div>
					<div class="listitem">
						<!-- Block2 -->
						<div class="block2">
							<div class="prod_img  block2-labelsale">
								<img src="images/item-07.jpg" alt="IMG-PRODUCT">

								<div class="wish_cart">
									<a href="#" class="addwish">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<div class="addcart">
										<!-- Button -->
										<button class="btn_addcart">Add to Cart</button>
									</div>
								</div>
							</div>

							<div>
								<a href="product-detail.html" class="prod_napr">最後一個</a>
								<span class="prod_oldprice">$29.50</span>
								<span class="prod_sprice">$15.90</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- Footer -->
	<?php include('pages/idx_footer.php'); ?>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>






	<!-- JAVASCRIPT -->

	<!-- Jquery -->
	<script src="plugsin/jquery/jquery-3.4.1.min.js"></script>
	<!-- animsition -->
	<script src="plugsin/animsition/js/animsition.min.js"></script>
	<!-- bootstrap -->
	<script src="plugsin/bootstrap/popper.min.js"></script>
	<script src="plugsin/bootstrap/bootstrap.js"></script>
	<!-- fontawesome -->
	<script src="plugsin/fonts/fontawesome/all.min.js"></script>
	<!-- slick -->
	<script src="plugsin/slick/slick.min.js"></script>
	<script src="plugsin/js/slick-custom.js"></script>
	<!-- lightbox2 -->
	<script src="plugsin/lightbox2/js/lightbox.min.js"></script>
	<!-- sweetalert -->
	<script src="plugsin/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.addcart').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.prod_napr').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.addwish').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.prod_napr').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	<!-- Custom js -->
	<script src="plugsin/js/main.js"></script>

</body>

</html>