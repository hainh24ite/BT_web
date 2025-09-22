<?php
include 'config.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $conn->query("INSERT INTO categories (name) VALUES ('$name')");
    header("Location: list.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
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
        .form-label {
            font-weight: 500;
            color: #222;
        }
        .form-control {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: box-shadow 0.3s, border-color 0.3s;
            background: #fafafa;
        }
        .form-control:focus {
            box-shadow: 0 0 0 2px #e0e0e0;
            border-color: #bdbdbd;
            outline: none;
        }
        .btn-custom {
            background: #222;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            padding: 0.7rem 0;
            width: 100%;
            font-size: 1.1rem;
            margin-top: 10px;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(31,38,135,0.08);
        }
        .btn-custom:hover {
            background: #444;
            transform: scale(1.04);
        }
        .back-link {
            color: #222;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: #888;
        }
        .title {
            font-size: 2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div style="width:100%;max-width:400px;">
        <div class="card">
            <div class="title">Thêm danh mục</div>
            <form method="post" autocomplete="off">
                <label for="name" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Nhập tên danh mục...">
                <button type="submit" name="save" class="btn-custom">Lưu lại</button>
            </form>
            <div class="mt-3 text-center">
                <a href="list.php" class="back-link">⬅ Quay lại danh sách</a>
            </div>
        </div>
    </div>
</body>
</html>
