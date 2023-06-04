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
    <title>Contact</title>

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
                    <?php
                    session_start();
                    $accountId = $_SESSION['accountId'];

                    if(isset($accountId)) {
                      echo '
                        <li>
                          <a href="#">마이페이지</a>
                          <ul class="sub-menu">
                            <li><a href="logout.php">로그아웃</a></li>
                          </ul>
                        </li>';
                    } else {
                      echo '
                        <li>
                          <a href="login.php">회원</a>
                          <ul class="sub-menu">
                            <li><a href="login.php">로그인</a></li>
                            <li><a href="signin.php">회원가입</a></li>
                          </ul>
                        </li>';
                    }
                    ?>
                  </li>
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

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>배송만 빠른것이 아닙니다</p>
              <h1>문의 하기</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="form-title">
              <h2>문의 사항이 있나요?</h2>
              <p>문의를 주시면 최대한 빠르게 답해드리겠습니다!</p>
            </div>
            <div id="form_status"></div>
            <div class="contact-form">
              <form
                type="POST"
                id="fruitkha-contact"
                onSubmit="return valid_datas( this );"
              >
                <p>
                  <input type="text" placeholder="이름" name="name" id="name" />
                  <input
                    type="email"
                    placeholder="이메일"
                    name="email"
                    id="email"
                  />
                </p>
                <p>
                  <input
                    type="tel"
                    placeholder="전화번호"
                    name="phone"
                    id="phone"
                  />
                  <input
                    type="text"
                    placeholder="문의 종류"
                    name="subject"
                    id="subject"
                  />
                </p>
                <p>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    placeholder="내용을 적어주세요"
                  ></textarea>
                </p>
                <input type="hidden" name="token" value="FsWga4&@f6aw" />
                <p><input type="submit" value="전송" /></p>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-form-wrap">
              <div class="contact-form-box">
                <h4><i class="fas fa-map"></i> 주소</h4>
                <p>
                  충청남도 천안시 동남구 <br />
                  병천면 충절로 1600 <br />
                </p>
              </div>
              <div class="contact-form-box">
                <h4><i class="far fa-clock"></i> 상담 가능 시간</h4>
                <p>
                  평일 : 오전9 ~ 오후9 <br />
                  주말, 공휴일 : 오전12 ~ 오후8
                </p>
              </div>
              <div class="contact-form-box">
                <h4><i class="fas fa-address-book"></i> 연락처</h4>
                <p>
                  Phone: 041 560 1230 <br />
                  Email: support@calorieWise.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p><i class="fas fa-map-marker-alt"></i> 찾아 오시는 길</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.2853193681954!2d127.27706958870465!3d36.763722198234774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b2ac6c614c717%3A0x820bda83618bd53b!2z7ZWc6rWt6riw7Iig6rWQ7Jyh64yA7ZWZ6rWQIOygnDHsuqDtjbzsiqQ!5e0!3m2!1sko!2skr!4v1685788527331!5m2!1sko!2skr"
        width="600"
        height="450"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        class="embed-responsive-item"
      ></iframe>
    </div>
    <!-- end google map section -->

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
    <!-- form validation js -->
    <script src="assets/js/form-validate.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
