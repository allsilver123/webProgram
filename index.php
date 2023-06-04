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
    <title>CalorieWise</title>

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
                  <li><a href="promotion.php">프로모션</a></li>
                  <li>
                    <a href="shopMain.php">쇼핑</a>
                    <ul class="sub-menu">
                      <li><a href="shopMain.php">쇼핑</a></li>
                      <li><a href="checkout.php">주문</a></li>
                      <li><a href="cart.php">장바구니</a></li>
                    </ul>
                  </li>
                  <li><a href="login.php">로그인</a></li>
                  <li><a href="contact.php">문의하기</a></li>
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

    <!-- search area -->
    <div class="search-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="close-btn"><i class="fas fa-window-close"></i></span>
            <div class="search-bar">
              <div class="search-bar-tablecell">
                <h3>검색 :</h3>
                <input type="text" placeholder="어떤 것을 원하시나요?" />
                <button type="submit">
                  검색 <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end search area -->

    <!-- home page slider -->
    <div class="homepage-slider">
      <!-- single home slider -->
      <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
              <div class="hero-text">
                <div class="hero-text-tablecell">
                  <p class="subtitle">맛있고 건강하게</p>
                  <h1>맛있는 음식을 먹으면서 건강을 챙기세요!</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- single home slider -->
      <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
              <div class="hero-text">
                <div class="hero-text-tablecell">
                  <p class="subtitle">아는만큼 보인다</p>
                  <h1>영양을 알면 건강이 보입니다</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- single home slider -->
      <div class="single-homepage-slider homepage-bg-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 text-right">
              <div class="hero-text">
                <div class="hero-text-tablecell">
                  <p class="subtitle">쉽게 빠르게 정확하게</p>
                  <h1>
                    복잡한 영양성분 계산을<br />쉽고 빠르게 해결하세요
                  </h1>
                  <div class="hero-btns">
                    <a href="shopMain.php" class="boxed-btn">지금 계산하기</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end home page slider -->

    <!-- shop banner -->
    <section class="shop-banner">
      <div class="container">
        <h3>
          <span class="orange-text">칼로리와이즈</span>는
          <br />
          칼로리, 영양성분 자동계산
          <br />
          온라인 쇼핑몰 입니다
        </h3>
      </div>
    </section>
    <!-- end shop banner -->

    <!-- 왜 칼로리 와이즈 인가 -->
    <div class="feature-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="featured-text">
              <h2 class="pb-3">
                왜 <span class="orange-text">칼로리와이즈</span>일까요?
              </h2>
              <div class="row">
                
                <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                  <div class="list-box d-flex">
                    <div class="list-icon">
                      <i class="fas fa-utensils"></i>
                    </div>
                    <div class="content">
                      <h3>엄선된 제품</h3>
                      <p>
                        칼로리와이즈가 직접 선정한<br />
                        제품들을 판매합니다
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                  <div class="list-box d-flex">
                    <div class="list-icon">
                      <i class="fas fa-calculator"></i>
                    </div>
                    <div class="content">
                      <h3>건강의 시작은 계산</h3>
                      <p>
                        영양성분을 쉽고 빠르게<br />
                        계산하여 제공합니다
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                  <div class="list-box d-flex">
                    <div class="list-icon">
                      <i class="fas fa-user"></i>
                    </div>
                    <div class="content">
                      <h3>맞춤 정보 제공</h3>
                      <p>
                        칼로리와이즈는 사용자에게<br />
                        맞춤 정보를 제공합니다
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="list-box d-flex">
                    <div class="list-icon">
                      <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                      <h3>무료 배송</h3>
                      <p>20,000원이상 주문시<br />무료 배송</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 왜 칼로리 와이즈인가 끝 -->

    <!-- 프로모션 목록 -->
    <div class="latest-news pt-150 pb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">
              <h3><span class="orange-text">다양한</span>&nbsp; 프로모션</h3>
              <p>다양하고 파격적인 프로모션들로 합리적인 쇼핑</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-latest-news">
              <a href="single-promotion.php"
                ><div class="latest-news-bg news-bg-1"></div
              ></a>
              <div class="news-text-box">
                <h3>
                  <a href="single-promotion.php">플레인 베이글 할인</a>
                </h3>
                <p class="blog-meta">
                  <span class="date"
                    ><i class="fas fa-calendar"></i>6월 3일 ~ 6월 15일</span
                  >
                </p>
                <p class="excerpt">
                  순수한 맛의 플레인 베이글, 오리지널 풍미를 즐겨보세요!
                </p>
                <a href="single-promotion.php" class="read-more-btn"
                  >더 알아보기 <i class="fas fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-latest-news">
              <a href="single-promotion.php"
                ><div class="latest-news-bg news-bg-2"></div
              ></a>
              <div class="news-text-box">
                <h3>
                  <a href="single-promotion.php">건면 할인전</a>
                </h3>
                <p class="blog-meta">
                  <span class="date"
                    ><i class="fas fa-calendar"></i> 6월 4일 ~ 6월 11일</span
                  >
                </p>
                <p class="excerpt">
                  면발을 튀기지 않고 기름에 튀기지 않고 열풍으로 자연건조시킨
                  건강하게!
                </p>
                <a href="single-promotion.php" class="read-more-btn"
                  >더 알아보기 <i class="fas fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
            <div class="single-latest-news">
              <a href="single-promotion.php"
                ><div class="latest-news-bg news-bg-3"></div
              ></a>
              <div class="news-text-box">
                <h3>
                  <a href="single-promotion.php">제로 음료수 할인</a>
                </h3>
                <p class="blog-meta">
                  <span class="date"
                    ><i class="fas fa-calendar"></i> 6월 10일 ~ 6월 24일</span
                  >
                </p>
                <p class="excerpt">
                  달달하게 땅길때는?<br />
                  0칼로리로 부담없이
                </p>
                <a href="single-promotion.php" class="read-more-btn"
                  >더 알아보기<i class="fas fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <a href="promotion.php" class="boxed-btn"
              >더 다양한 프로모션 알아보기</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- 프로모션 목록 끝 -->

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
