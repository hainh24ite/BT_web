<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM categories WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $conn->query("UPDATE categories SET name='$name' WHERE id=$id");
    header("Location: list.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Category</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            border-radius: 20px;
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem #fda08580;
            border-color: #fda085;
            transition: box-shadow 0.3s;
        }
        .btn-custom {
            background: linear-gradient(90deg, #f6d365 0%, #fda085 100%);
            color: #fff;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px #fda08580;
        }
        .back-link {
            color: #fda085;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: #f6d365;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card p-4">
                    <h2 class="mb-4 text-center" style="color:#fda085;font-weight:700;">Sửa danh mục</h2>
                    <form method="post" autocomplete="off">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required placeholder="Nhập tên danh mục...">
                        </div>
                        <button type="submit" name="update" class="btn btn-custom w-100">Cập nhật</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="list.php" class="back-link">⬅ Quay lại danh sách</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
