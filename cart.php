<?php        
// 데이터베이스 연결 설정
$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

$cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();

// 데이터베이스에 연결
$conn = mysqli_connect($servername, $username, $password, $dbname);


// 장바구니 추가
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'add') {
  $productId = $_GET['id'];
  if(!isset($cart[$productId])) {
  
    $sql = "SELECT * FROM product WHERE id = $productId";
    $result2 = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result2)) {
     $priceResult = $row['price'];
     $productName = $row['name'];
    }
    $cart[$productId] = array('id' => $productId, 'quantity' => 1, 'price' => $priceResult, 'name' => $productName);
     // 쿠키에 저장, 유효 시간 1시간 

    setcookie('cart', serialize($cart), time() + (60 * 60), '/');
  }
}

//장바구니 삭제
if(isset($_GET['action']))
{
  if($_GET['action']=='delete')
  {
    if(isset($cart[$_GET['deleteId']]))
    {   
        unset($cart[$_GET['deleteId']]);
        $cart = array_values($cart);
        setcookie('cart', serialize($cart), time() + (60 * 60), '/');
        echo '<script>alert("삭제 되었습니다")</script>';
        echo '<script>window.location="cart.php"</script>';
    }
  } 
}

//장바구니 업데이트
if (isset($_POST['updateCart'])) {
  $changedProduct = $_POST['changedProduct'];
  $changedProductNum = $_POST['changedProductNum'];
  $cart[$changedProduct]['quantity'] = $changedProductNum;

  // 쿠키에 저장, 유효 시간 1시간 
  setcookie('cart', serialize($cart), time() + (60 * 60), '/');

  echo '<script>alert("장바구니가 업데이트되었습니다.")</script>';
  echo '<script>window.location="cart.php"</script>';
}

//장바구니 초기화
if(isset($_POST['reset_cart'])) {
  $cart = null;
  setcookie('cart', '', time() - 3600, '/');
  echo '<script>alert("장바구니가 초기화되었습니다.")</script>';
  echo '<script>window.location="cart.php"</script>';
}
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <p>쉽고 간편하게</p>
              <h1>장바구니</h1>
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
                <!-- 장바구니 목록 -->
                <tbody>
                <form method="post" action="cart.php">
                  <!-- 추가한 상품 -->
                  <?php          
                      // 연결 확인
                      if (!$conn) {
                        die("데이터베이스 연결 실패: " . mysqli_connect_error());
                      }
                      
                      if(isset($cart)){
                        $sql = "SELECT * FROM product WHERE id IN (". implode(",", array_keys($cart)) .")";
                        $result = mysqli_query($conn, $sql);
                        /*
                        foreach ($cart as $row) {
                          echo '행: '.$id.'<br>';
                          echo 'id: '.$row['id'].'<br>';
                          echo 'quantity: '.$row['quantity'].'<br>';
                          echo 'price: '.$row['price'].'<br>';
                          echo 'name: '.$row['name'].'<br>';
                          echo '<br>';
                        }
                        */
                        // 가져온 결과 출력
                        if ($result->num_rows > 0) {
                          $calories = 0;
                          $carbohydrate = 0;
                          $protein = 0;
                          $fat = 0;
                          while ($row = mysqli_fetch_assoc($result)) {
                                $productId = $row["id"];
                                $name = $row["name"];
                                $price = $row["price"];

                                $calories += $row["calorie"];
                                $carbohydrate += $row["carbohydrate"];
                                $protein += $row["protein"];
                                $fat += $row["fat"];

                                $totalPrice = $price*$cart[$productId]['quantity'];
                                $SumtotalPrice = $SumtotalPrice + $totalPrice;
                                echo '
                                <tr class="table-body-row">
                                  <td class="product-remove">
                                    <a href="cart.php?action=delete&deleteId='.$productId.'"> 
                                      <span class="text-danger">삭제</span> 
                                    </a>
                                  </td>
                                  <td class="product-image">
                                    <img src="assets/img/products/'.$name.'.jpg" alt="" />
                                  </td>
                                  <td class="product-name">'.$name.'</td>
                                  <td class="product-price">'.$price.'원</td>
                                  <td class="product-quantity">
                                   '.$cart[$productId]['quantity'].'
                                  </td>
                                  <td class="product-total">'.$totalPrice.'</td>
                                </tr>';
                            }
                            setcookie('cart', serialize($cart), time() + (60 * 60), '/');
                            if($SumtotalPrice >= 20000) {
                              $shipCost = 0;
                            } else {
                              $shipCost = 3000;
                            }
                            
                        } else {
                            echo "결과가 없습니다.";
                        }
                      }
                      // 데이터베이스 연결 종료
                      
                      $conn->close();       
                  ?>
                  <!-- 추가한 상품 끝 -->
                </tbody>
                <!-- 장바구니 목록 끝 -->
              </table>
            </div>
            <form action="cart.php" method="post">
              <div class="input-group">
                <select name="changedProduct" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>제품 선택</option>
                  <?php
                    foreach ($cart as $row) {
                      echo '
                      <option value="'.$row['id'].'">'.$row['name'].'</option>
                      ';
                    }

                    setcookie('cart', serialize($cart), time() + (60 * 60), '/');
                  ?>
                </select>
                <input name="changedProductNum" type="number" class="form-control" placeholder="수량" aria-label="1" aria-describedby="basic-addon1">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-secondary"  name="updateCart">변경</button>
                </div>
              </div>
            </form>
            <?php
            echo '<br><br>
                    <div class="col-md-6 justify-content-center">
                    <h4>장바구니 영양성분 비율<h4>
                    <canvas id="pieChart"></canvas>
                  <br />
                  </div>
                  
                  <script>
                    var ctxP = document.getElementById("pieChart").getContext("2d");
                    var myPieChart = new Chart(ctxP, {
                      type: "pie",
                      data: {
                        labels: ["탄수화물", "반백질", "지방"],
                        datasets: [
                          {
                            data: [' .$carbohydrate .", " .$protein .", " .$fat .'],
                            backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
                            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"],
                          },
                        ],
                      },
                      options: {
                        responsive: true,
                      },
                    });
                  </script>
                  ';
            ?>
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
                    <td><strong>제품 총 합 : </strong></td>
                    <td>
                      <?php
                      echo $SumtotalPrice;
                    ?>
                    </td>
                  </tr>
                  <tr class="total-data">
                    <td><strong>배송비 : </strong></td>
                    <td><?php
                      echo $shipCost;
                    ?></td>
                  </tr>
                  <tr class="total-data">
                    <td><strong>총합 : </strong></td>
                    <td>
                      <?php
                      echo $SumtotalPrice+$shipCost;
                    ?>원
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="cart-buttons"> 
                <div>    
                  <form action="cart.php" method="post">
                    <button type="submit" name="reset_cart" class="btn btn-outline-success">장바구니 초기화</button>
                  </form> 
                </div>
              </div>
              <br>
              <div>
                </form>
                  <form action="checkout.php" method="post">
                    <button type="submit" class="btn btn-outline-success">결재하기</button>
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
