<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO contact (name, email, phone, subject, message) 
        VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
        echo '<script>alert("문의 성공!")</script>';
        echo '<script>window.location="shopMain.php"</script>';
        exit;
    } else {
        echo "오류가 발생했습니다: " . $conn->error;
    }

// 데이터베이스 연결 닫기
$conn->close();
?>
