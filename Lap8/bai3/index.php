<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Gửi email cho khách hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f6f7fb;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 25px;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Gửi Email Cho Khách Hàng</h2>

    <form action="send.php" method="POST" enctype="multipart/form-data">
        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM User";
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox' name='emails[]' value='{$row['email']}'></td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Không có dữ liệu khách hàng</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="mb-3">
            <label for="subject" class="form-label"><strong>Tiêu đề email</strong></label>
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Nhập tiêu đề..." required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label"><strong>Nội dung email</strong></label>
            <textarea id="message" name="message" class="form-control" rows="6" placeholder="Nhập nội dung email..." required></textarea>
        </div>

        <div class="mb-3">
            <label for="attachment" class="form-label"><strong>File đính kèm (tuỳ chọn)</strong></label>
            <input type="file" id="attachment" name="attachment" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success px-4">Gửi Email</button>
            <button type="reset" class="btn btn-secondary px-4 ms-2">Làm lại</button>
        </div>
    </form>
</div>

</body>
</html>
