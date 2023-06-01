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
    <title>Single Product</title>

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
                <a href="index.html">
                  <img src="assets/img/logo.png" alt="" />
                </a>
              </div>
              <!-- logo -->

              <!-- menu start -->
              <nav class="main-menu">
                <ul>
                  <li class="current-list-item">
                    <a href="index.html">소개</a>
                  </li>
                  <li><a href="news.html">프로모션</a></li>
                  <li>
                    <a href="shop.html">쇼핑</a>
                    <ul class="sub-menu">
                      <li><a href="shop.html">쇼핑</a></li>
                      <li><a href="checkout.html">Check Out</a></li>
                      <li><a href="single-product.html">Single Product</a></li>
                      <li><a href="cart.html">장바구니</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">문의하기</a></li>
                  <li>
                    <div class="header-icons">
                      <a class="shopping-cart" href="cart.html"
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
    <div class="breadcrumb-section breadcrumb-bg"></div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="single-product-img">
              <img src="assets/img/products/product-img-5.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-7">
            <div class="single-product-content">
              <h3>플레인 베이글</h3>
              <p class="single-product-pricing">6990원</p>
              <p>
                신선한 재료로 구워낸 플레인 베이글은 매일의 식사에 신선한 시작을
                선사합니다. 고소한 베이글의 향기와 부드럽고 쫄깃한 질감은 입안
                가득 퍼지며, 담백한 맛으로 식사를 즐길 수 있습니다. 플레인
                베이글은 식단을 가볍게 유지하고자 하는 분들에게 이상적인
                선택입니다. 건강하고 맛있는 식단을 추구하는 당신에게 플레인
                베이글은 완벽한 파트너입니다
              </p>
              <div class="single-product-form">
                <a href="cart.html" class="cart-btn"
                  ><i class="fas fa-shopping-cart"></i> 장바구니에 담기</a
                >
              </div>
              <div class="col-md-8">
                100g 기준 278kcal
                <canvas id="pieChart"></canvas>
                <br />
              </div>
            </div>
          </div>
            <?php
              // 데이터베이스 연결 설정
              $servername = "20.244.1.134:3306";  // 데이터베이스 서버 이름
              $username = "test";   // 데이터베이스 사용자 이름
              $password = "2007";     // 데이터베이스 비밀번호
              $dbname = "CalorieWise";  // 데이터베이스 이름

              // 데이터베이스에 연결
              $conn = mysqli_connect($servername, $username, $password, $dbname);

              // 연결 확인
              if (!$conn) {
                  die("데이터베이스 연결 실패: " . mysqli_connect_error());
              }

              // 상품 정보를 가져오는 SQL 쿼리
              $sql = "SELECT * FROM product";

              // 쿼리 실행
              $result = mysqli_query($conn, $sql);

              // 상품 정보를 반복하여 출력
              while ($row = mysqli_fetch_assoc($result)) {
                  $product_name = $row['name'];
                  $calories = $row['calorie'];
                  $price = $row['price'];
                  $description = $row['description'];
                  //$image_path = $row['이미지경로'];

                  // 제품 정보를 HTML로 출력
                  echo '
                  <div class="single-product mt-150 mb-150">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="single-product-img">
                          <img src="assets/img/products/product-img-5.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="single-product-content">
                          <h3>'.$product_name.'</h3>
                          <p class="single-product-pricing">'.$price.'원</p>
                          <p>
                            신선한 재료로 구워낸 플레인 베이글은 매일의 식사에 신선한 시작을
                            선사합니다. 고소한 베이글의 향기와 부드럽고 쫄깃한 질감은 입안
                            가득 퍼지며, 담백한 맛으로 식사를 즐길 수 있습니다. 플레인
                            베이글은 식단을 가볍게 유지하고자 하는 분들에게 이상적인
                            선택입니다. 건강하고 맛있는 식단을 추구하는 당신에게 플레인
                            베이글은 완벽한 파트너입니다
                          </p>
                          <div class="single-product-form">
                            <a href="cart.html" class="cart-btn"
                              ><i class="fas fa-shopping-cart"></i> 장바구니에 담기</a
                            >
                          </div>
                          <div class="col-md-8">
                            100g 기준'.$calories.'
                            <canvas id="pieChart"></canvas>
                            <br />
                          </div>
                        </div>
                      </div>

                  <div class="row product-lists">
                      <div class="col-lg-4 col-md-6 text-center 카테고리">
                          <div class="single-product-item">
                              <div class="product-image">
                                  <a href="single-product.html"><img src="'.$image_path.'" alt=""></a>
                              </div>
                              <h3>'.$product_name.'</h3>
                              <p class="product-price"><span>'.$calories.' 칼로리</span> '.$price.' 가격</p>
                              <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> 장바구니에 담기</a>
                          </div>
                      </div>
                  </div>';
              }

              // 데이터베이스 연결 종료
              mysqli_close($conn);
            ?>
        </div>
      </div>
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
                <li><a href="index.html">Home</a></li>
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
              <form action="index.html">
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

    <!--single-produck.js-->
    <script src="assets/js/single-product.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      //pie
      var ctxP = document.getElementById("pieChart").getContext("2d");
      var myPieChart = new Chart(ctxP, {
        type: "pie",
        data: {
          labels: ["탄수화물", "단백질", "지방"],
          datasets: [
            {
              data: [54, 12, 3.6],
              backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
                "#949FB1",
                "#4D5360",
              ],
              hoverBackgroundColor: [
                "#FF5A5E",
                "#5AD3D1",
                "#FFC870",
                "#A8B3C5",
                "#616774",
              ],
            },
          ],
        },
        options: {
          responsive: true,
        },
      });
    </script>
  </body>
</html>
