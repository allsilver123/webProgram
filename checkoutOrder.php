<?php
session_start();
$accountId = $_SESSION['accountId'];

if(isset($accountId) && isset($_COOKIE['cart'])) {
    $cart = unserialize($_COOKIE['cart']);

    $orderName = $_POST['orderName'];
    $deliveryAddress = $_POST['deliveryAddress'];
    $orderTel = $_POST['orderTel'];
    $orderText = $_POST['orderText'];

    $servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
    $username = "test"; // 데이터베이스 사용자 이름
    $password = "2007"; // 데이터베이스 비밀번호
    $dbname = "CalorieWise"; // 데이터베이스 이름

    
    $prices = array();
    foreach ($cart as $item) {
        if (isset($item['id'])) {
            $ids[] = strval($item['id']);
        }

        if (isset($item['quantity'])) {
            $quantitys[] = strval($item['quantity']);
        }
        $totalPrice = $totalPrice + $item['price'] * $item['quantity'];
    }

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $productList = implode(', ', $ids);
    $productQuantityList = implode(', ', $quantitys);

    $sql = "INSERT INTO orders (accountId, orderName, deliveryAddress, orderTel, 
            orderText, productList, productQuantityList, totalPrice) 
            VALUES ('$accountId', '$orderName', '$deliveryAddress', '$orderTel', 
            '$orderText', '$productList', '$productQuantityList', '$totalPrice')";

    if ($conn->query($sql) === TRUE) {
        // 회원가입 완료 후 리다이렉션
        echo '<script>alert("주문 성공!")</script>';
        echo '<script>window.location="shopMain.php"</script>';
        exit;
    } else {
        echo "주문을 처리하는 동안 오류가 발생했습니다: " . $conn->error;
    }
    
} else {
    echo '<script>alert("로그인 해주세요!")</script>';
    echo '<script>window.location="login.php"</script>';
}
?>