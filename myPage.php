<?php
session_start();
$accountId = $_SESSION['accountId'];

if(!isset($accountId)) {
  echo '<script>alert("로그인 해주세요!")</script>';
  echo '<script>window.location="login.php"</script>';
}

$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

// 데이터베이스에 연결
$conn = mysqli_connect($servername, $username, $password, $dbname);
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
                          <a href="myPage.php">마이페이지</a>
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
              <p>칼로리와이즈</p>
              <h1>마이 페이지</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="cart-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <div class="cart-table-wrap">
              <table class="cart-table">
              <thead class="cart-table-head">
                  <tr class="table-head-row">
                    <th class="product-image">주문 번호</th>
                    <th class="product-name">이름</th>
                    <th class="product-price">배송 주소</th>
                    <th class="product-quantity">전화 번호</th>
                    <th class="product-total">요청 사항</th>
                    <th class="product-total">결재 금액</th>
                  </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM orders WHERE accountId = $accountId";
              $result = mysqli_query($conn, $sql);
         
              if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row["id"];
                      $orderName = $row["orderName"];
                      $deliveryAddress = $row["deliveryAddress"];
                      $orderTel = $row["orderTel"];
                      $orderText = $row["orderText"];
                      $totalPrice = $row["totalPrice"];

                      echo '
                      <tr class="table-body-row">

                        <td class="product-image">'.$id.'</td>
                        <td class="product-name">'.$orderName.'</td>
                        <td class="product-price">'.$deliveryAddress.'</td>
                        <td class="product-total">'.$orderTel.'</td>
                        <td class="product-total">'.$orderText.'</td>
                        <td class="product-total">'.$totalPrice.'원</td>
                      </tr>';
                }
              }
              ?>
              
              </tbody>
              </table>
          </div>
            </div>
          </div>
          <br>
          <form method="post" action="myPage.php">
            키
            <input type="number" name="tall">
            몸무게
            <input type="number" name="weight">
            나이
            <input type="number" name="age">
            <label>
              <input type="radio" name="gender" value="male">
              남자
            </label>

            <label>
              <input type="radio" name="gender" value="female">
              여자
            </label>
            <input type="submit" name="calculate">
          </form>
          <h3>
          <?php
            if(isset($_POST['calculate'])) {
              $gender = $_POST['gender'];

              $tall = $_POST['tall'];
              $weight = $_POST['weight'];
              $age = $_POST['age'];
              if($gender=='male') {
                $mustEat = 66 + (13.7 *$weight) + (5 * $tall) - (6.8 * $age);
              } else {
                $mustEat = 655 + (9.6 * $weight) + (1.8 * $tall) - (4.7 * $age);
              }
                echo '당신의 기초 대사량은'.$mustEat.'칼로리 입니다!';
            }
          ?>
          </h3>
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
