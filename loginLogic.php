<?php
// 회원가입 정보 가져오기
$accountId = $_POST['accountId'];
$accountPassword = $_POST['accountPassword'];
echo $accountId.'<br>';
echo $accountPassword;
$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}


$stmt = $conn->prepare("SELECT * FROM account WHERE accountId = ? AND password = ?");
$stmt->bind_param("ss", $accountId, $accountPassword);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
  // 로그인 성공
  session_start();
  $_SESSION['accountId'] = $accountId;
  echo '<script>alert("로그인 성공!")</script>';
  echo '<script>window.location="shopMain.php"</script>';
  exit;
} else {
  // 로그인 실패
  echo "아이디 또는 비밀번호가 일치하지 않습니다.";
}

// 데이터베이스 연결 닫기
$stmt->close();
$conn->close();

?>
