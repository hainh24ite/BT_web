<?php
require_once 'connect.php'; // Kết nối DB

// Lấy dữ liệu từ bảng theloai
$sql = "SELECT * FROM theloai ORDER BY thutu ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Thể loại</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
        img { width: 50px; height: auto; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h2>Danh sách Thể loại</h2>
    <table>
        <tr>
            <th>Ten The Loai</th>
            <th>Thu Tu</th>
            <th>An Hien</th>
            <th>Bieu tuong</th>
            <th><a href="theloai_them.php">Them</a></th>
        </tr>
        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['TenTL']; ?></td>
                    <td><?php echo $row['ThuTu']; ?></td>
                    <td><?php echo $row['AnHien']==0?"Hiện":"Ẩn"; ?></td>
                    <td>
                        <?php if(!empty($row['icon'])): ?>
                            <img src="uploads/<?php echo $row['icon']; ?>" alt="icon">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="theloai_sua.php?id=<?php echo $row['idTL']; ?>">Sua</a> | 
                        <a href="theloai_xoa.php?id=<?php echo $row['idTL']; ?>" onclick="return confirm('Ban co muon xoa?');">xoa</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Chưa có dữ liệu</td>
            </tr>
        <?php endif; ?>
    </table>
    <br>
</body>
</html>
