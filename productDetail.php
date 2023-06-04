<!DOCTYPE html>
<html lang="en">

<head>
  <!-- 차트 스크립트-->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/" />

  <!-- title -->
  <title>Single Product</title>

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" />
  <!-- magnific popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <!-- animate css -->
  <link rel="stylesheet" href="assets/css/animate.css" />
  <!-- mean menu css -->
  <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
  <!-- main style -->
  <link rel="stylesheet" href="assets/css/main.css" />
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->

  <!-- header -->
  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <!-- logo -->
            <div class="site-logo">
              <a href="index.php">
                <img src="assets/img/logo.png" alt="" />
              </a>
            </div>
            <!-- logo -->

            <!-- menu start -->
            <nav class="main-menu">
              <ul>
                <li class="current-list-item">
                  <a href="index.php">소개</a>
                </li>
                <li><a href="promotion.php">프로모션</a></li>
                <li>
                  <a href="shopMain.php">쇼핑</a>
                  <ul class="sub-menu">
                    <li><a href="shopMain.php">쇼핑</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="productDetail.php">Single Product</a></li>
                    <li><a href="cart.php">장바구니</a></li>
                  </ul>
                </li>
                <li><a href="contact.php">문의하기</a></li>
                <li>
                  <div class="header-icons">
                    <a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                  </div>
                </li>
              </ul>
            </nav>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
            <div class="mobile-menu"></div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header -->

  <!-- search area -->
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="close-btn"><i class="fas fa-window-close"></i></span>
          <div class="search-bar">
            <div class="search-bar-tablecell">
              <h3>Search For:</h3>
              <input type="text" placeholder="Keywords" />
              <button type="submit">
                Search <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <!-- end search arewa -->

  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg"></div>
  <!-- end breadcrumb section -->

  <!-- single product -->
  <div class="single-product mt-150 mb-150">
  <?php
    $productId = $_GET['id'];
    include "productDetailRespond.php";
  ?>

  </div>
  <!-- end single product -->

  <!-- footer -->
  <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-box pages">
              <h2 class="widget-title">페이지 목록</h2>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Shop</a></li>
                <li><a href="promotion.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="footer-box get-in-touch">
              <h2 class="widget-title">칼로리 와이즈</h2>
              <ul>
                <li>충청남도 천안시 동남구 병천면 충절로 1600</li>
                <li>support@CalorieWise.com</li>
                <li>041-560-1230</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="footer-box subscribe">
              <h2 class="widget-title">구독</h2>
              <p>구독을 하시면 칼로리와이즈의 다양한 최신 정보를 제공합니다</p>
              <form action="index.php">
                <input type="email" placeholder="Email" />
                <button type="submit">
                  <i class="fas fa-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- end footer -->


  <!-- jquery -->
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- count down -->
  <script src="assets/js/jquery.countdown.js"></script>
  <!-- isotope -->
  <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
  <!-- waypoints -->
  <script src="assets/js/waypoints.js"></script>
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- magnific popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- mean menu -->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!-- sticker js -->
  <script src="assets/js/sticker.js"></script>
  <!-- main js -->
  <script src="assets/js/main.js"></script>

</body>

</html>