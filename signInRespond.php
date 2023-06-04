<?php
// 회원가입 정보 가져오기
$accountId = $_POST['accountId'];
$userPassword = $_POST['password'];
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userLocation = $_POST['userLocation'];
$userPhoneNumber = $_POST['userPhoneNumber'];

$servername = "20.244.1.134:3306"; // 데이터베이스 서버 이름
$username = "test"; // 데이터베이스 사용자 이름
$password = "2007"; // 데이터베이스 비밀번호
$dbname = "CalorieWise"; // 데이터베이스 이름

$conn = mysqli_connect($servername, $username, $password, $dbname);

// 아이디 중복 검사
$sql = "SELECT * FROM account WHERE accountId = '$accountId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 중복된 아이디가 있음
    echo '<script>alert("중복된 아이디입니다. 다른 아이디를 선택해주세요.")</script>';
    echo '<script>window.location="shopMain.php"</script>';
} else {
    // 중복된 아이디가 없음 - 회원가입 처리
    $sql = "INSERT INTO account (accountId, password, userName, userEmail, userLocation, userPhoneNumber) 
            VALUES ('$accountId', '$userPassword', '$userName', '$userEmail', '$userLocation', '$userPhoneNumber')";

    if ($conn->query($sql) === TRUE) {
        // 회원가입 완료 후 리다이렉션
        echo '<script>alert("회원 가입 성공!")</script>';
        echo '<script>window.location="shopMain.php"</script>';
        exit;
    } else {
        echo "회원가입을 처리하는 동안 오류가 발생했습니다: " . $conn->error;
    }
}

// 데이터베이스 연결 닫기
$conn->close();
?>
