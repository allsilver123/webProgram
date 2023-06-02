<?php
if (isset($_GET['id'])) {
  $productId = $_GET['id'];
}

// 데이터베이스 연결 설정
$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

// 데이터베이스에 연결
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 연결 확인
if (!$conn) {
  echo "에러";
  die("데이터베이스 연결 실패: " . mysqli_connect_error());
}

// 상품 정보를 가져오는 SQL 쿼리
$sql = 'SELECT * FROM product WHERE id=' . $productId;

// 쿼리 실행
$result = mysqli_query($conn, $sql);

// 상품 정보 출력
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row["id"];
  
  $product_name = $row["name"];
  $price = $row["price"];
  $description = $row["description"];

  $calories = $row["calorie"];
  $carbohydrate = $row["carbohydrate"];
  $protein = $row["protein"];
  $fat = $row["fat"];

  // 제품 정보를 HTML로 출력
  echo '
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="single-product-img">
            <img src="assets/img/products/'.$product_name.'.jpg" alt="" />
          </div>
        </div>
        <div class="col-md-7">
          <div class="single-product-content">
            <h3>' .$product_name .'</h3>
            <p class="single-product-pricing">' .$price .'원</p>
            <p>' .$description .'</p>
            <div class="single-product-form">
              <a href="cart.php" class="cart-btn"
                ><i class="fas fa-shopping-cart"></i> 장바구니에 담기</a
              >
            </div>
            <div class="col-md-8">
              100g 기준 ' .$calories .' 칼로리
              <canvas id="pieChart' .$id .'"></canvas>
              <br />
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var ctxP = document.getElementById("pieChart' .$id .'").getContext("2d");
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
}

// 데이터베이스 연결 종료
mysqli_close($conn);
?>
