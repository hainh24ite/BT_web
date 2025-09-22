<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thêm thể loại</title>
    <style>
        /* theloai_them.css */
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background: #f0f0f0;
}

form {
    width: 400px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

input[type="text"], select, input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"], input[type="reset"] {
    margin-top: 15px;
    padding: 10px 20px;
    border: none;
    background: #007BFF;
    color: white;
    font-weight: bold;
    cursor: pointer;
    border-radius: 4px;
}

input[type="reset"] {
    background: #dc3545;
}

input[type="submit"]:hover {
    background: #0056b3;
}

input[type="reset"]:hover {
    background: #c82333;
}

    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="tentheloai">Tên thể loại</label>
        <input type="text" name="tentheloai" id="tentheloai"><br>
        <label for="thutu">Thứ tự</label>
        <input id="thutu" type="text" name="thutu"><br>
        <label for="anhien">Ẩn Hiện</label>
        <select name="anhien" id="anhien">
            <option value="hien" selected>Hiện</option>
            <option value="an">Ẩn</option>
        </select><br>
        <label for="">icon</label>
        <input type="file" name="icon"><br>
        <input type="submit" value="Thêm">
        <input type="reset" value="Hũy" onclick="window.location.href='hienthi.php';">
    </form>
</body>
</html>

<!-- xử lí cùng 1 trang -->

<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tentheloai = $_POST['tentheloai'];
    $thutu = $_POST['thutu'];
    $anhien = $_POST['anhien'];

    if (isset($_FILES['icon']) && $_FILES['icon']['error'] == 0) {
        $iconName = $_FILES['icon']['name'];            
        $tmpName = $_FILES['icon']['tmp_name'];       
        $uploadDir = "uploads/";                       
        $targetFile = $uploadDir . basename($iconName);


        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Di chuyển file vào thư mục uploads
        if (move_uploaded_file($tmpName, $targetFile)) {
            echo "Upload thành công!<br>";
        } else {
            echo "Upload thất bại!<br>";
        }
    } else {
        $iconName = ""; // nếu không chọn file
    }

    // Ví dụ lưu vào DB
    $sql = "INSERT INTO theloai (TenTL, ThuTu, AnHien, icon) 
            VALUES ('$tentheloai', '$thutu', '$anhien', '$iconName')";
    if (mysqli_query($conn, $sql)) {
        echo "Thêm thể loại thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>
