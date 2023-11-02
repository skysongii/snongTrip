<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>OPEN API</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="./assets/img/favicon.png" rel="icon">
	<link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="./assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="./assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
    * Template Name: PhotoFolio
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid d-flex align-items-center justify-content-between">

			<a href="/WhoisController" class="logo d-flex align-items-center  me-auto me-lg-0">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<i class="bi bi-camera"></i>
				<h1>¿SIOHW</h1>
			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="/WhoisController" class="active">Home</a></li>
					<!-- <li class="dropdown"><a href="#"><span>OpenAPI</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="./kisa_search_domain.html">KISA</a></li>
                            <li><a href="gallery.html">People</a></li>
                            <li><a href="gallery.html">Architecture</a></li>
                            <li><a href="gallery.html">Animals</a></li>
                            <li><a href="gallery.html">Sports</a></li>
                            <li><a href="gallery.html">Travel</a></li>
                            <li class="dropdown"><a href="#"><span>Sub Menu</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Sub Menu 1</a></li>
                                    <li><a href="#">Sub Menu 2</a></li>
                                    <li><a href="#">Sub Menu 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
					<!-- <li><a href="services.html">Services</a></li> -->
					<li><a href="/Welcome">GO KRC NAVI</a></li>
				</ul>
			</nav><!-- .navbar -->

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<h2><span>Open API</span></h2>
					<!-- <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero. Qui voluptas amet.</p> -->
					<!-- <a href="contact.html" class="btn-get-started">Available for hire</a> -->
				</div>
			</div>
		</div>
	</section><!-- End Hero Section -->

	<main id="main" data-aos="fade" data-aos-delay="1500">

		<!-- ======= Gallery Section ======= -->
		<section id="gallery" class="gallery">
			<div class="container-fluid">

				<div class="row gy-4 justify-content-center">
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="gallery-item h-100" onclick="goKisaIEInfo();">
							<h3 style="text-align: center;"><br>KISA <br>인터넷주소 <br>정보 검색 서비스</h3>
							<div class="gallery-links d-flex align-items-center justify-content-center">
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-3 col-lg-4 col-md-6">
					<div class="gallery-item h-100" onclick="location.href='./exchange_service.html'">
						<h3 style="text-align: center;"><br>한국수출입은행 <br>환율 검색 서비스</h3>
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
						</div>
					</div>
				</div> -->
			</div>
		</section><!-- End Gallery Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<div id="preloader">
		<div class="line"></div>
	</div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main-photo.js"></script>

</body>

<script>
	function goKisaIEInfo() {
		location.href = '/KisaController';
	}
</script>

</html>