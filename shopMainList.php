<?php
// 데이터베이스 연결 설정
$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

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
  $id = $row["id"];
  $product_name = $row["name"];
  $price = $row["price"];
  $calories = $row["calorie"];
  $filter = $row["filter"];
  
  // 제품 정보를 HTML로 출력
  echo '
  <div class="col-lg-4 col-md-6 text-center '.$filter.'">
    <div class="single-product-item">
      <div class="product-image">
        <a href="productDetail.php?id='.$id.'"
          ><img class="productImg" src="assets/img/products/'.$product_name.'.jpg" alt=""/></a>
      </div>
      <h3>'.$product_name.'</h3>
      <p class="product-price"><span>'.$calories.' 칼로리 </span> '.$price.'</p>
      <a href="cart.php?id='.$id.'&action=add" class="cart-btn">
        <i class="fas fa-shopping-cart"></i> 장바구니에 담기
      </a>
    </div>
  </div>
    ';
}
// 데이터베이스 연결 종료
mysqli_close($conn);
?>