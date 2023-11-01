<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KRC 바로가기 서비스</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./assets/img/favicon.png" rel="icon">
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="./assets/img/ssnong-CI.png" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">스농이네<br> 싱기한 서비스</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>뭐하는
                                곳인가요?</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>누가 만들었나요?</span></a>
                    </li>
                    <li><a href="#hero" class="nav-link scrollto" onclick="goWhois();"><i class="bx bx-file-blank"></i>
                            <span>Open API</span></a></li>
                    <li><a href="#hero" class="nav-link scrollto" onclick="readyToPage();"><i class="bx bx-book-content"></i>
                            <span>준비중</span></a></li>
                    <li><a href="#hero" class="nav-link scrollto" onclick="readyToPage();"><i class="bx bx-server"></i>
                            <span>준비중...</span></a></li>
                    <li><a href="#hero" class="nav-link scrollto" onclick="readyToPage();"><i class="bx bx-envelope"></i>
                            <span>준비중입니다...</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center content">
        <div class="hero-container" data-aos="fade-in">
            <h1 id="change-typed">어떤 곳인가요? </h1>
            <p><span id="typed" class="typed" data-typed-items="비개발자를 위한 OpenAPI 활용공간입니다., 원하시는 메뉴를 클릭해주세요."></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about content">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>나는 쓰농입니다.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="./assets/img/anonymous.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Anonymous Designer &amp; Anonymous Developer.</h3>
                        <p class="fst-italic">
                            나주에 2년째 박혀있는 익명의 누군가
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>23
                                            September 1995</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <a href="https://github.com/skysongii" onclick="window.open(this.href,'_blank'); return false;">스농이 gitHub</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>010 8630
                                            9414</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Naju, South
                                            Korea</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>28</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>Bachelor</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong>
                                        <span>tjsgh9414@naver.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            놀고싶다
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts content">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>끄적끄적..</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>LoL Tier</strong> Emerald</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong> Partners Project Ranking Project Realestate Project System establish</strong>
                                Others···</p>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div> -->

                </div>

            </div>
        </section><!-- End Facts Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>snong</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="http://snong.store">SNONG</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="./assets/vendor/aos/aos.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/vendor/typed.js/typed.umd.js"></script>
    <script src="./assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="./assets/vendor/php-email-form/validate.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="./assets/js/page-redirect.js"></script>

    <!-- Template Main JS File -->
    <script src="./assets/js/main.js"></script>

</body>

<script>


    /**
     * 2023-11-01
     * @author : csh
     * 스크롤 한 번에 슉 이벤트
     */

    window.addEventListener("wheel", function(e){
	e.preventDefault();
    },{passive : false});

    var $html = $("html");
    var page = 1;
    var lastPage = $(".content").length;

    $html.animate({scrollTop:0},10);

    $(window).on("wheel", function(e) {

        if ($html.is(":animated")) return;

        if (e.originalEvent.deltaY > 0) {
            if (page == lastPage) return;

            page++;
        } else if (e.originalEvent.deltaY < 0) {
            if (page == 1) return;

            page--;
        }
        var posTop = (page - 1) * $(window).height();

        $html.animate({
            scrollTop: posTop
        });

    });
</script>

</html>