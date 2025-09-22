<?php
$host = "localhost";
$user = "root";   // user MySQL của bạn
$pass = "";       // mật khẩu MySQL
$db   = "baitap4";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    echo 'ket noi that bai'. $conn;
}
?>
