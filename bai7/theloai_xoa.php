<?php
require_once 'connect.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']); // an toàn

    // Lấy tên file icon để xóa
    $sql_get = "SELECT icon FROM theloai WHERE idTL = $id";
    $result = mysqli_query($conn, $sql_get);
    if($row = mysqli_fetch_assoc($result)){
        if(!empty($row['icon']) && file_exists('uploads/'.$row['icon'])){
            unlink('uploads/'.$row['icon']); // xóa file ảnh
        }
    }

    // Xóa bản ghi
    $sql_delete = "DELETE FROM theloai WHERE idTL = $id";
    if(mysqli_query($conn, $sql_delete)){
        header("Location: hienthi.php"); // quay về trang danh sách
        exit();
    } else {
        echo "Xóa thất bại: " . mysqli_error($conn);
    }
} else {
    echo "Không có ID để xóa!";
}
?>
