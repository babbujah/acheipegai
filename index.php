<?php
	require_once('env.php');
	$response = file_get_contents(URL_BASE.'admin/rest.php?class=LojaRestService&method=handle');
	
	$lojas = json_decode($response)->data;
	
?>

<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>4 Columns Full Width  | Porto - Multipurpose Website Template</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="vendor/bootstrap-star-rating/css/star-rating.min.css">
		<link rel="stylesheet" href="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<div class="notice-top-bar bg-primary" data-sticky-start-at="180">
				<button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>
				<div class="container">
					<div class="row justify-content-center py-2">
						<div class="col-9 col-md-12 text-center">
							<p class="text-color-light font-weight-semibold mb-0">Get Up to <strong>40% OFF</strong> New-Season Styles <a href="#" class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ms-2">MEN</a> <a href="#" class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ms-1 me-2">WOMAN</a> <span class="opacity-6 text-1">* Limited time only.</span></p>
						</div>
					</div>
				</div>
			</div>
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-container container">
						<div class="header-row py-2">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									<div class="header-logo z-index-2 col-lg-2 px-0">
										<a href="index.html">
											<img alt="Porto" width="120" height="84" data-sticky-width="100" data-sticky-height="80" data-sticky-top="84" src="img/logo-default-slim.png">
										</a>
									</div>
									<div class="header-nav-features header-nav-features-no-border col-lg-5 col-xl-6 px-0 ms-0">
										<div class="header-nav-feature ps-lg-5 pe-lg-4">
											<form role="search" action="page-search-results.html" method="get">
												<div class="search-with-select">
													<a href="#" class="mobile-search-toggle-btn me-2" data-toggle-class="open">
														<i class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
													</a>
													<div class="search-form-wrapper input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Estou procurando por...">
														<div class="search-form-select-wrapper">
															<div class="custom-select-1">
																<select name="category" class="form-control form-select">
																	<option value="all" selected>Todas as lojas</option>
																	<option value="fashion">Fashion</option>
																	<option value="electronics">Electronics</option>
																	<option value="homegarden">Home & Garden</option>
																	<option value="motors">Motors</option>
																	<option value="features">Features</option>
																</select>
															</div>
															<button class="btn" type="submit">
																<i class="icons icon-magnifier header-nav-top-icon text-color-dark"></i>
															</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
									<ul class="header-extra-info col-lg-3 col-xl-2 ps-2 ps-xl-0 ms-lg-3 d-none d-lg-block">
										<li class="d-none d-sm-inline-flex ms-0">
											<div class="header-extra-info-icon ms-lg-4">
												<img src="https://i0.wp.com/www.multarte.com.br/wp-content/uploads/2018/11/whatsapp-logo-icone-fundo-transparente.png" width="50px">
											</div>
											<div class="header-extra-info-text">
												<label class="text-1 font-weight-semibold text-color-default"></label>
												<strong class="text-4"><a href="https://chat.whatsapp.com/K1bM5cPdKat2fHTNtkoKfl" class="text-color-hover-primary text-decoration-none">Receba as promoções</a></strong>
											</div>
										</li>
									</ul>
									<div class="d-flex col-auto col-lg-2 pe-0 ps-0 ps-xl-3">
										<ul class="header-extra-info">
											<li class="ms-0 ms-xl-2">
												<div class="header-extra-info-icon">
													<a href="https://www.instagram.com/acheipegai/" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="icons icon-social-instagram"></i>
													</a>
												</div>
											</li>
                                            <li class="ms-0 ms-xl-2">
												<div class="header-extra-info-icon">
													<a href="https://www.facebook.com/acheipegai" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="icons icon-social-facebook"></i>
													</a>
												</div>
											</li>											
										</ul>
										
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">

								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar header-nav-bar-top-border bg-light">
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '105px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
											<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 w-100">
												<nav class="collapse w-100">
													<ul class="nav nav-pills w-100" id="mainNav">												
														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle active" href="#">
																Shop
															</a>															
														</li>
													</ul>
												</nav>
											</div>
											<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
												<i class="fas fa-bars"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main shop pt-4">

				<div class="container">

					<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="product-thumb-info-badges-wrapper">
                                            <span class="badge badge-ecommerce badge-success">NEW</span>

										</div>

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Photo Camera</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
										<span class="amount">$59,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="product-thumb-info-badges-wrapper">
<span class="badge badge-ecommerce badge-success">NEW</span>
<span class="badge badge-ecommerce badge-danger">27% OFF</span>
										</div>

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image product-thumb-info-image-effect">
												<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">

													<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Porto Headphone</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
										<span class="amount">$99,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Golf Bag</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
										<span class="amount">$19,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="product-thumb-info-badges-wrapper">

<span class="badge badge-ecommerce badge-danger">27% OFF</span>
										</div>

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<div class="countdown-offer-wrapper">
											<div class="text-color-light negative-ls-05 text-2" data-plugin-countdown data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 'date': '2024/01/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFFER ENDS IN </span>', 'textDay': 'DAYS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Workout</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
										<span class="amount">$30,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Luxury Bag</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
										<span class="amount">$79,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Styled Bag</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
										<span class="amount">$119,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">hat</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Blue Hat</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
										<span class="amount">$289,00</span>
									</p>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-3">
								<div class="product mb-0">
									<div class="product-thumb-info border-0 mb-3">

										<div class="addtocart-btn-wrapper">
											<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
												<i class="icons icon-bag"></i>
											</a>
										</div>

										<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
										<a href="shop-product-sidebar-left.html">
											<div class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

											</div>
										</a>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
											<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
										</div>
										<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
									</div>
									<div title="Rated 5 out of 5">
										<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
									</div>
									<p class="price text-5 mb-3">
										<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
										<span class="amount">$79,00</span>
									</p>
								</div>
							</div>

						</div>
						
					</div>

				</div>

			</div>

			<footer id="footer" class="footer-texts-more-lighten">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTATO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:contato@acheipegai.com.br">contato@acheipegai.com.br</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">HORÁRIO DE FUNCIONAMENTO</span>
									Estamos 24 horas no ar!
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
                                <li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-telegram"></i></a>
								</li>
                                <li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-whatsapp"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-9 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">LOJAS PARCEIRAS</h5>
							<ul class="list list-unstyled list-inline mb-0">
								<?php
									foreach( $lojas as $loja ){
										echo '<li class="list-inline-item"><a href="'.$loja->link_afiliado.'" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">'.$loja->nome.'</a></li>';
									}
								?>
								
								<!-- 
								<li class="list-inline-item"><a href="https://amzn.to/3KYDhlN" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Amazon</a></li>
								<li class="list-inline-item"><a href="https://www.magazinevoce.com.br/magazineacheiPEGAi/" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Magazine Luíza</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Americanas</a></li>
								<li class="list-inline-item"><a href="https://shope.ee/9KBtMCWH69" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Shopee</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/414HFFb" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Casas Bahia</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3mvkUvc" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Aliexpress</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=43984&murl=https%3A%2F%2Fwww.netshoes.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Netshoes</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=43464&murl=https%3A%2F%2Fwww.boticario.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Boticário</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=45560&murl=https%3A%2F%2Fwww.eudora.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Eudora</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=43985&murl=https%3A%2F%2Fwww.zattini.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Zattini</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=41720&murl=https%3A%2F%2Fwww.iplace.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">loja iPlace</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3KWY3lx" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Extra</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3GIOPqN" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Nike</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/40Y3qXn" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Tricae</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=46154&murl=https%3A%2F%2Fwww.rihappy.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Ri Happy</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3zSSIFP" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Ponto Frio</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=42158&murl=https%3A%2F%2Fwww.compracerta.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Compra Certa</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3GHZEJL" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Dafiti</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3MFzRWc" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Kanui</a></li>
								-->
							</ul>
						</div>
						
					</div>
				</div>
				<div class="container">
					<div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
						<div class="row align-items-center justify-content-md-between">
							<div class="col-12 col-md-auto text-center text-md-start mb-2 mb-md-0">
								<p class="mb-0">Achei Pegai © 2023. Todos os direitos reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>
		<script src="vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
		<script src="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.shop.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>


