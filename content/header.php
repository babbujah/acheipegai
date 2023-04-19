<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Achei Pegaí</title>	

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
		<div class="body" style="background:#FEFEFF8F">			
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-container container">
						<div class="header-row py-2">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									<div class="header-logo z-index-2 col-lg-2 px-0">
										<a href="./home">
											<img alt="Porto" width="100" height="84" data-sticky-width="100" data-sticky-height="80" data-sticky-top="84" src="img/logo-default-slim.png">
										</a>
									</div>
									<div class="header-nav-features header-nav-features-no-border col-lg-5 col-xl-6 px-0 ms-0">
										<div class="header-nav-feature ps-lg-5 pe-lg-4">
											<form role="search" action="./" method="get">
												<div class="search-with-select">
													<a href="#" class="mobile-search-toggle-btn me-2" data-toggle-class="open">
														<i class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
													</a>
													<div class="search-form-wrapper input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Estou procurando por...">
														<div class="search-form-select-wrapper">
															<div class="custom-select-1">
																<select name="loja" class="form-control form-select">
																	<option value="" selected>Todas as lojas</option>
																	<?php
																		foreach($lojas as $loja){
																			echo '<option value="'.$loja->nome.'">'.$loja->nome.'</option>';

																		}
																	?>
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
															<a class="dropdown-item dropdown-toggle" href="./">
																Todos os produtos
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="#">
																Categorias
															</a>
															<ul class="dropdown-menu">
																<?php 
																	foreach( $categorias as $categoria ){
																		echo '
																			<li>
																				<a class="dropdown-item" href="./?categoria='.$categoria->nome.'">
																					'.$categoria->nome.'
																				</a>
																			</li>
																		';
																	}
																?>											
															</ul>
														</li>
														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="lojas">
																Lojas
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

					

				

			


