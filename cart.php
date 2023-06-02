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
    <title>장바구니</title>

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
                  <li><a href="news.html">프로모션</a></li>
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
                      <a class="mobile-hide search-bar-icon" href="#"
                        ><i class="fas fa-search"></i
                      ></a>
                    </div>
                  </li>
                </ul>
              </nav>
              <a class="mobile-show search-bar-icon" href="#"
                ><i class="fas fa-search"></i
              ></a>
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
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>Fresh and Organic</p>
              <h1>Cart</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <div class="cart-table-wrap">
              <table class="cart-table">
                <thead class="cart-table-head">
                  <tr class="table-head-row">
                    <th class="product-remove"></th>
                    <th class="product-image">제품 사진</th>
                    <th class="product-name">이름</th>
                    <th class="product-price">가격</th>
                    <th class="product-quantity">수량</th>
                    <th class="product-total">총 가격</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- 추가한 상품 -->
                  <tr class="table-body-row">
                    <td class="product-remove">
                      <a href="#"><i class="far fa-window-close"></i></a>
                    </td>
                    <td class="product-image">
                      <img src="assets/img/products/product-img-1.jpg" alt="" />
                    </td>
                    <td class="product-name">Strawberry</td>
                    <td class="product-price">$85</td>
                    <td class="product-quantity">
                      <input type="number" placeholder="0" />
                    </td>
                    <td class="product-total">1</td>
                  </tr>
                  <tr>
                  <?php
                    // cart.php 파일에서 쿠키를 사용하여 정보 저장
                    if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'add') {
                      $productId = $_GET['id'];

                      // 기존 쿠키 값을 가져오기
                      $cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();

                      // 새로운 상품 추가
                      $cart[] = $productId;

                      // 쿠키에 저장, 유효 시간 1시간 
                      setcookie('cart', serialize($cart), time() + (60 * 60), '/');
                    }
                  ?>

                  </tr>
                  <!-- 추가한 상품 끝 -->
                </tbody>
              </table>
            </div>
          </div>

          <!-- 계산서 -->
          <div class="col-lg-4">
            <div class="total-section">
              <table class="total-table">
                <thead class="total-table-head">
                  <tr class="table-total-row">
                    <th>Total</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="total-data">
                    <td><strong>Subtotal: </strong></td>
                    <td>$500</td>
                  </tr>
                  <tr class="total-data">
                    <td><strong>Shipping: </strong></td>
                    <td>$45</td>
                  </tr>
                  <tr class="total-data">
                    <td><strong>Total: </strong></td>
                    <td>$545</td>
                  </tr>
                </tbody>
              </table>
              <div class="cart-buttons">
                <a href="cart.php" class="boxed-btn">Update Cart</a>
                <a href="checkout.html" class="boxed-btn black">Check Out</a>
              </div>
            </div>

            <div class="coupon-section">
              <h3>쿠폰 적용</h3>
              <div class="coupon-form-wrap">
                <form action="index.php">
                  <p><input type="text" placeholder="Coupon" /></p>
                  <p><input type="submit" value="Apply" /></p>
                </form>
              </div>
            </div>
          </div>
          <!-- 계산서 끝 -->
        </div>
      </div>
    </div>
    <!-- end cart -->

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
                <li><a href="news.html">News</a></li>
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
