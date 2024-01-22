<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../assets/css/domestic.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">국내여행</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

        <!-- 등록 모달창 -->
        <div class="modal">
    <!-- //모달을 감쌀 박스 -->
        <div class="popup-wrap" id="popup"> 
        <!-- //실질적 모달팝업 -->
            <div class="popup"> 
            <!-- //로고 영역 -->
                <div class="popup-head"> 
                    <span class="head-title">지역 입력</span>
                </div>
                <!-- //컨텐츠 영역 -->
                <div class="popup-body"> 
                    <div class="body-content">
                        <div class="body-titlebox">
                            <h1>주소를 입력하세요.</h1>
                        </div>
                        <div class="body-contentbox">
                            <p> 모달 내용칸 </p>
                        </div>
                    </div>
                </div>
                <!-- //푸터 버튼 영역 -->
                <div class="popup-foot"> 
                    <span class="pop-btn confirm" id="confirm">확인</span>
                    <span class="pop-btn close" id="close">창 닫기</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Product section-->
    <section class="py-5">

        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div id="map" style="width:50%;height:500px;"></div>
                <!-- <div id="map" class="col-md-6"></div> -->
                <div class="col-md-6">
                    <div id="marker-explain" class="small mb-1">지도에서 궁금한 마커를 클릭</div>
                    <h1 id="location-name" class="display-5 fw-bolder">대한민국</h1>
                    <div class="fs-5 mb-5">
                        <!-- <span class="text-decoration-line-through">$45.00</span> -->
                        <span id="location-period">기간</span>
                    </div>
                    <p id="lead" class="lead">
                        <a id="lead-place-q" class="lead-q"><a id="lead-place-a" class="lead-a"></a></a><br>
                        <a id="lead-stay-q" class="lead-q"><a id="lead-stay-a" class="lead-a"></a></a><br>
                    </p>


                    <div class="d-flex">
                        <button id="content-insert" class="btn btn-outline-dark flex-shrink-0" type="button">
                            <!-- <i class="bi-cart-fill me-1"></i> -->
                            등록
                        </button>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
    <script type="text/javascript" src="https://oapi.map.naver.com/openapi/v3/maps.js?ncpClientId=ksifq5x35r&callback=CALLBACK_FUNCTION"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- <script type="module" src="../../assets/js/location.js"></script> -->
    <script type="module" src="../../assets/js/navermaps.js"></script>
    <script src="../../assets/js/modal.js"></script>
</body>

</html>

<script>

</script>