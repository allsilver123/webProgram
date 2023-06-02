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


?>