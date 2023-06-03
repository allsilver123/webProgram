<?php
$cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/"
    />

    <!-- title -->
    <title>Check Out</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
    <!-- google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap"
      rel="stylesheet"
    />
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
                  <li><a href="promotion.html">프로모션</a></li>
                  <li>
                    <a href="shopMain.php">쇼핑</a>
                    <ul class="sub-menu">
                      <li><a href="shopMain.php">쇼핑</a></li>
                      <li><a href="checkout.html">Check Out</a></li>
                      <li><a href="productDetail.php">Single Product</a></li>
                      <li><a href="cart.php">장바구니</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">문의하기</a></li>
                  <li>
                    <div class="header-icons">
                      <a class="shopping-cart" href="cart.php"
                        ><i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </li>
                </ul>
              </nav>

              <div class="mobile-menu"></div>
              <!-- menu end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>칼로리와이즈</p>
              <h1>결재</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="checkout-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="checkout-accordion-wrap">
              <div class="accordion" id="accordionExample">
                <div class="card single-accordion">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        결재 정보
                      </button>
                    </h5>
                  </div>

                  <div
                    id="collapseOne"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <div class="billing-address-form">
                        <form action="order.php">
                          <p><input type="orderName" name="orderName" placeholder="이름" /></p>
                          <p><input type="text" name="deliveryAddress" placeholder="주소" /></p>
                          <p><input type="tel" name="orderTel" placeholder="전화번호" /></p>
                          <p>
                            <input type="text" name="orderText" placeholder="배송 요청 사항" />
                          </p>
                          <button type="submit" class="btn btn-success">결재</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="order-details-wrap">
              <table class="order-details">
                <thead>
                  <tr>
                    <th>제품 이름</th>
                    <th>가격</th>
                    <th>수량</th>
                  </tr>
                </thead>
                <tbody class="order-details-body">
                  <?php
                  $totalOrderPrice = 0;
                  $totalQuantity = 0;
                    foreach ($cart as $row) {
                      $totalOrderPrice = $totalOrderPrice + $row['price'] * $row['quantity'];
                      $totalQuantity = $totalQuantity + $row['quantity'];
                      echo '
                        <tr>
                          <td>'.$row['name'].'</td>
                          <td>'.$row['price'].'</td>
                          <td>'.$row['quantity'].'</td>
                        </tr>';
                    }
                    if($totalOrderPrice <=20000) {
                      echo '
                      <tr>
                      <td>배송비</td>
                      <td>3000</td>
                      </tr>
                      ';

                      $totalOrderPrice+=3000;
                    }
                    echo '
                    <td>총합</td>
                      <td>'.$totalOrderPrice.'</td>
                      <td>'.$totalQuantity.'</td>
                    </tr>';
                  ?>
                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end check out section -->

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
                <li><a href="promotion.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
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
