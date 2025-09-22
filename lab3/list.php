<?php
include 'config.php';
$result = $conn->query("SELECT * FROM categories");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách danh mục</title>
    <style>
        body {
            background: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .card {
            background: #fff;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.08);
            border-radius: 18px;
            animation: fadeIn 1s;
            padding: 2rem;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .title {
            font-size: 2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 1.5rem;
            text-align: left;
        }
        .btn-custom {
            background: #222;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            padding: 0.5rem 1.2rem;
            font-size: 1rem;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(31,38,135,0.08);
        }
        .btn-custom:hover {
            background: #444;
            transform: scale(1.04);
        }
        .action-link {
            text-decoration: none;
            color: #222;
            font-weight: 500;
            margin-right: 10px;
            transition: color 0.2s;
        }
        .action-link:hover {
            color: #888;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(31,38,135,0.04);
        }
        .table th, .table td {
            padding: 0.8rem 1rem;
            border-bottom: 1px solid #eee;
            text-align: left;
        }
        .table th {
            background: #fafafa;
            color: #222;
            font-weight: bold;
        }
        .table tr:last-child td {
            border-bottom: none;
        }
        .table-hover tbody tr:hover {
            background: #f5f5f5;
            transition: background 0.2s;
        }
    </style>
</head>
<body>
    <div style="width:100%;max-width:700px;">
        <div class="card">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.2rem;">
                <div class="title">Danh sách danh mục</div>
                <a href="add.php" class="btn-custom">➕ Thêm mới</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tên danh mục</th>
                        <th style="text-align:center;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td style="text-align:center;">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="action-link">Sửa</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="action-link" onclick="return confirm('Xóa danh mục này?')">Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
