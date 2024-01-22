<?php
/**
 * @package     MilliyCore
 * @link        https://milliysoft.uz/mCore
 * @copyright   Copyright (C) 2022-2023 MilliySoft DTM
 * @license     LICENSE.txt (see attached file)
 * @version     VERSION.txt (see attached file)
 * @author      https://riack5h3n.uz
 */

defined('_MILLIY_CORE') or die('403');
?>

<!doctype html>
<html class="no-js" lang="en">
  
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Nurex - <?=$page_name?></title>
      <meta name="robots" content="noindex, follow">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="/assets/images/fevicon.png">      
      <!-- CSS
         ============================================ -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <!-- Fontawesome -->
      <link rel="stylesheet" href="/assets/css/fontawesome.css">
      <!-- Flaticon -->
      <link rel="stylesheet" href="/assets/css/flaticon.css">
      <!-- optico Icons -->
      <link rel="stylesheet" href="/assets/css/pbminfotech-base-icons.css">
      <!-- Themify Icons -->
      <link rel="stylesheet" href="/assets/css/themify-icons.css">
      <!-- Slick -->
      <link rel="stylesheet" href="/assets/css/swiper.min.css">
      <!-- Magnific -->
      <link rel="stylesheet" href="/assets/css/magnific-popup.css">
      <!-- AOS -->
      <link rel="stylesheet" href="/assets/css/aos.css">
      <!-- Shortcode CSS -->
      <link rel="stylesheet" href="/assets/css/shortcode.css">
      <!-- Base CSS -->
      <link rel="stylesheet" href="/assets/css/base.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="/assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/assets/css/responsive.css">
      <!-- REVOLUTION STYLE SHEETS -->
      <link rel="stylesheet" type="text/css" href="/assets/revolution/rs6.css">
	  <!-- TOAST NOTIFICATION CSS -->
	  <link rel="stylesheet" href="/assets/f3oall-awesome-notifications-ede7940/dist/style.css"></link>
	  <script src="/assets/f3oall-awesome-notifications-ede7940/dist/index.var.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	  <script>
		window.replainSettings = { id: '7baece2b-2761-4f1c-b06a-d95740784c8e' };
		(function(u){var s=document.createElement('script');s.async=true;s.src=u;
		var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
		})('https://widget.replain.cc/dist/client.js');
		</script>

	<? if($_SERVER['PHP_SELF'] == "/index.php"){?>
		<script src="/assets/ch/axios.min.js"></script>
		<link href="/assets/ch/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<link href="/assets/ch/tomSelect.css" rel="stylesheet">
		<link rel="stylesheet" href="/assets/ch/owl.carousel.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="stylesheet" href="/assets/ch/owl.theme.default.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="stylesheet" href="/assets/ch/general.css">
		<link rel="stylesheet" href="/assets/ch/style.css">
		<link rel="stylesheet" href="/assets/ch/flatpickr.min.css">
		<link rel="stylesheet" href="/assets/ch/resp.css">
	<?}?>
   
</head>
   <body>

	<!-- page wrapper -->
	<div class="page-wrapper">
		
        <!-- Header Main Area -->
        <header class="site-header header-style-1">
			<div class="pbmit-header-overlay">
				<div class="site-header-menu">
					<div class="container-fluid">
						<div class="pbmit-header-content d-flex align-items-center justify-content-between">
							<div class="pbmit-logo-area">
								<div class="site-branding pbmit-logo-area">
									<h1 class="site-title">
										<a href="/">
											<img class="logo-img" src="/assets/images/logo.png" style="transform: scale(2); position: absolute; top: 1.5rem; left: 7rem;" alt="Nurex">
										</a>
									</h1>
								</div>
							</div>
							<div class="site-navigation">
								<nav class="main-menu navbar-expand-xl navbar-light">
									<div class="navbar-header">
										<!-- Toggle Button --> 
										<button class="navbar-toggler" type="button">
											<i class="pbmit-base-icon-menu-1"></i>
										</button>
									</div>
									<div class="pbmit-mobile-menu-bg"></div>
									<div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
										<div class="pbmit-menu-wrap">
											<span class="closepanel">
												<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
													<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
													<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
												</svg>
											</span>
											<ul class="navigation clearfix">
												<li class="<?=($page_name=="Home Page") ? 'active' : '' ?>">
													<a href="/">Home</a>
												</li>
												<!-- <li class="dropdown">
													<a href="#">Pages</a>
													<ul>
														<li><a href="/about.php">About Us</a></li>
														<li><a href="our-team-member.html">Our Team Member</a></li>
														<li><a href="team-member-detail.html">Team Member Detail</a></li>
														<li><a href="/faq.php">FAQ</a></li>
														<li><a href="our-history.html">Our History</a></li>
														<li><a href="package-tracking.html">Package Tracking</a></li>
														<li><a href="request-a-quote.html">Request A Quote</a></li>
													</ul>
												</li> -->
												<li class="dropdown <?=($page_name=="Service Details" || $page_name=="Our Services") ? 'active' : '' ?>">
													<a href="/our-services.php">Our Service</a>
													<ul>
														<li><a href="/service-details.php">Service Detail</a></li>
													</ul>
												</li>
												<!-- <li class="dropdown">
													<a href="#">Portfolio</a>
													<ul>
														<li class="dropdown">
															<a href="#">Masonry View</a>
															<ul>
																<li><a href="masonry-grid-col-2.html">Grid Col-2</a></li>
																<li><a href="masonry-grid-col-3.html">Grid Col-3</a></li>
																<li><a href="masonry-grid-col-4.html">Grid Col-4</a></li>
																<li><a href="masonry-grid-wide.html">Grid Wide</a></li>
															</ul>
														</li>
														<li class="dropdown">
															<a href="#">Grid View</a>
															<ul>
																<li><a href="portfolio-grid-col-2.html">Grid Col 2</a></li>
																<li><a href="portfolio-grid-col-3.html">Grid Col 3</a></li>
																<li><a href="portfolio-grid-col-4.html">Grid Col 4</a></li>
																<li><a href="portfolio-grid-col-wide.html">Grid Col Wide</a></li>
																<li><a href="portfolio-grid-no-gap.html">Grid no gap</a></li>
															</ul>
														</li>
														<li class="dropdown">
															<a href="#">Sortable View</a>
															<ul>
																<li><a href="sortable-grid-col-2.html">Grid Col 2</a></li>
																<li><a href="sortable-grid-col-3.html">Grid Col 3</a></li>
																<li><a href="sortable-grid-col-4.html">Grid Col 4</a></li>
															</ul>
														</li>
														<li class="dropdown">
															<a href="#">Portfolio Detail Style</a>
															<ul>
																<li><a href="single-detail-style-1.html">Single Detail Style 1</a></li>
																<li><a href="single-detail-style-2.html">Single Detail Style 2</a></li>
															</ul>
														</li>
													</ul>
												</li> -->
												<!-- <li class="dropdown">
													<a href="#">Blog</a>
													<ul>
														<li class="dropdown">
															<a href="#">Masonry Grid</a>
															<ul>
																<li><a href="masonry-blog-col-2.html">Masonry Col 2</a></li>
																<li><a href="masonry-blog-col-3.html">Masonry Col 3</a></li>
																<li><a href="masonry-blog-col-4.html">Masonry Col 4</a></li>
																<li><a href="masonry-blog-wide.html">Masonry Wide</a></li>
															</ul>
														</li>
														<li class="dropdown">
															<a href="#">Grid View</a>
															<ul>
																<li><a href="blog-grid-col-2.html">Blog Grid Col 2</a></li>
																<li><a href="blog-grid-col-3.html">Blog Grid Col 3</a></li>
																<li><a href="blog-grid-col-4.html">Blog Grid Col 4</a></li>
																<li><a href="blog-sortable-view.html">Blog Sortable View</a></li>
															</ul>
														</li>
														<li><a href="blog-classic.html">Blog Classic</a></li>
														<li><a href="blog-single-details.html">Blog Single Details</a></li>
													</ul>
												</li> -->
												<li class="<?=($page_name=="FAQ") ? 'active' : '' ?>"><a href="/faq.php">FAQ</a></li>
												<li class="<?=($page_name=="About US") ? 'active' : '' ?>"><a href="/about.php">About Us</a></li>
												<li class="<?=($page_name=="Contact US") ? 'active' : '' ?>"><a href="/contact.php">Contact Us</a></li>
											</ul>
										</div>
									</div>
								</nav>
							</div>
							<div class="pbmit-right-box d-flex align-items-center">
								<div class="pbmit-header-search-btn">
									<a href="#"><i class="pbmit-base-icon-search-1"></i></a>
								</div>
								<div class="pbmit-button-box">
									<a class="pbmit-btn" href="/contact.php">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>