<?php
session_start();

session_unset();

session_destroy();

echo '<script>alert("로그 아웃 성공!")</script>';
echo '<script>window.location="shopMain.php"</script>';
?>