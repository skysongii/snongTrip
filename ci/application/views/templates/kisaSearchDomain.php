<?php
defined('BASEPATH') or exit('No direct script access allowed');


	/**
	 * 2023-10-25
	 * @author snong
	 * model 		: $this -> load -> kisaDomainList();
	 * controllers 	: $this->load->model('Api_model');
	 * 				  $data['row'] = $this->Api_model->kisaDomainList();
	 * Kisa 도메인 정보 조회를 위한 api_key 받아오기
	 */
    foreach($row as $item){
		$idx = $item -> idx;
		$name = $item -> k_name;
		$url = $item -> url;
		$auth_key = $item -> api_key;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	
	<title>인터넷진흥원 API</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">

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
				<h1>?SIOHW</h1>
			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="/WhoisController" class="active">Home</a></li>
					<!-- <li class="dropdown"><a href="#"><span>Gallery</span> <i
								class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<li><a href="gallery.html">Nature</a></li>
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
					</li>
					<li><a href="services.html">Services</a></li> -->
					<li><a href="/Welcome">GO KRC NAVI</a></li>
				</ul>
			</nav><!-- .navbar -->

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
		data-aos-delay="1500">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
				<table>
    
    
</table>
					<h3>정보를 알고싶은 도메인을 입력하세요.</h3>
					<h2>
						<input id="search-domain" type="text" value="" class="form-control" placeholder="ex) kisa.or.kr"
							onkeyup="if(window.event.keyCode==13) {go_req();}">
						<br><button type="button" class="btn btn-success" onclick="go_req();">검색</button>
					</h2>
					<div class="d-flex justify-content-center">
						<div class="spinner spinner-border text-primary" id="spinner" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
					</div>
					<div class="text-primary" id="api-result" role="status">
						<span>g.g</span>
					</div>
					<!-- <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero. Qui voluptas amet.</p> -->
					<!-- <a href="contact.html" class="btn-get-started">Available for hire</a> -->
				</div>
			</div>
		</div>
	</section><!-- End Hero Section -->

	<main id="main" data-aos="fade" data-aos-delay="1500">

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

	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<div id="preloader">
		<div class="line"></div>
	</div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main-photo.js"></script>

</body>

<script>

	var doc = document;
	// kisa 인터넷 주소 - 도메인 이름/IP 정보 검색
	var api_key = '<?php echo $auth_key?>';
	console.log(api_key);

	
	// 스피너 
	let spinner = doc.getElementById('spinner');
	spinner.style.visibility = 'hidden';

	// API 결과란
	let api_result = doc.getElementById('api-result');
	// var api_result_innerHTML = api_result.innerHTML;
	api_result.style.visibility = 'hidden';

	// 도메인 입력란 - 엔터 혹은 검색 클릭 시 입력한 도메인 URL VALUE값을 가지고 옴
	function go_req() {
		var request_api = new XMLHttpRequest();
		var req_domain = doc.getElementById('search-domain').value;
		/**
		*  인터넷진흥원 인터넷주소 - 도메인 이름 / IP 정보 검색
		*  2023-10-16
		*  CSH
		* */
		request_api.open('GET', 'http://apis.data.go.kr/B551505/whois/domain_name?serviceKey=' + api_key + '&query=' + req_domain + '&answer=json')
		request_api.send();
		request_api.onload = function () {

			var result = JSON.parse(request_api.response);

			// 정상작동
			var result_code = result.response.result.result_code;
			// console.log('result_code :', result_code);
			// console.log('type :', typeof(result_code));

			if(result_code != '10000') {
				setTimeout(() => {
					api_result.innerHTML = '<p class="text-primary">유효하지 않은 URL입니다.</p>';
					// api_result.innerText = "asdas";
					api_result.style.visibility = 'visible';
					spinner.style.visibility = 'hidden';


					// api_result.innerHTML(result.response);
					// alert(result.response.result);
				}, 1000);
			} else if (result_code = '10000') {
				var result_msg = result.response.result.result_msg;
				var result_addr; 

				console.log(result.response);
				// 1.3초 후 api 요청 - 요청하는 동안 스피너
				setTimeout(() => {
					result_addr = result.response.whois.krdomain.addr;
					api_result.innerHTML = '<p class="text-primary">reusult_code : ' + result_code + '<br>result_msg : ' + result_msg;
					api_result.innerHTML += 'result_addr : ' + result_addr + '</p>';
					// api_result.innerText = "asdas";
					api_result.style.visibility = 'visible';
					spinner.style.visibility = 'hidden';
				}, 1300);
			};

		};

		// 스피너 보임
		spinner.style.visibility = 'visible';

		// 1.2초 후 스피너 사라짐
		// setTimeout(() => {
		// }, 1200);


	};



</script>

</html>
