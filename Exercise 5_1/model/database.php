<?php
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1;charset=utf8'; 
$username = 'root';
$password = '';

try {
    // Tạo kết nối PDO
    $db = new PDO($dsn, $username, $password);

    // Thiết lập chế độ báo lỗi (thay vì im lặng)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>
