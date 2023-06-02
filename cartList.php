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


$sql = "SELECT * FROM product WHERE id IN (". implode(",", $cart) .")";
$result = mysqli_query($conn, $sql);

// 가져온 결과 출력
if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
        echo $cart[0];
        echo $cart[1];
        echo $cart[2];
        $productId = $row["id"];
        $name = $row["name"];
        $price = $row["price"];
        $totalPrice = $price*2;
        echo '
        <tr class="table-body-row">
          <td class="product-remove">
            <a href="index.php?action=delete&id=<?php echo $values["item_id"]?>"> 
              <span class="text-danger">삭제</span> 
            </a>
          </td>
          <td class="product-image">
            <img src="assets/img/products/'.$name.'.jpg" alt="" />
          </td>
          <td class="product-name">'.$name.'</td>
          <td class="product-price">'.$price.'원</td>
          <td class="product-quantity">
            <input type="number" placeholder="0" />
          </td>
          <td class="product-total">'.$totalPrice.'</td>
        </tr>';
    }
} else {
    echo "결과가 없습니다.";
}

// 데이터베이스 연결 종료
$conn->close();
?>
