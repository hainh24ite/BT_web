<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>DEMO GỬI EMAIL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  
  <!-- CKEditor (Trình soạn nội dung email) -->
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="col-md-8 mx-auto bg-white p-4 shadow rounded">
      <h3 class="text-center mb-4">Email tới bạn</h3>
      <form action="send_mail.php" method="POST" enctype="multipart/form-data">
        
        <!-- Email người nhận -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email người nhận" required>
        </div>
        
        <!-- Tiêu đề -->
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" name="subject" id="subject" class="form-control" placeholder="Nhập tiêu đề email" required>
        </div>
        
        <!-- Nội dung -->
        <div class="mb-3">
          <label for="message" class="form-label">Nội dung</label>
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Nhập nội dung email..."></textarea>
          <script>CKEDITOR.replace('message');</script>
        </div>
        
        <!-- File đính kèm -->
        <div class="mb-3">
          <label for="file" class="form-label">File đính kèm</label>
          <input type="file" name="attachment" id="file" class="form-control">
        </div>

        <!-- Nút gửi -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary px-5">GỬI</button>
        </div>

      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
