<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Nạp các file của PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['emails'])) {
    $emails = $_POST['emails'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    foreach ($emails as $email) {
        $mail = new PHPMailer(true);
        try {
            // Cấu hình SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'annvh.24itb@vku.udn.vn';
            $mail->Password = 'hsdv wntw mseg hlij'; // hoặc App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Người gửi và người nhận
            $mail->setFrom('annvh.24itb@vku.udn.vn', 'Nguyễn Văn Hoài An');
            $mail->addAddress($email);

            // Nội dung email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = nl2br($message);

            $mail->send();
        } catch (Exception $e) {
            echo "Không gửi được đến $email. Lỗi: {$mail->ErrorInfo}<br>";
        }
    }
    echo "<h3>Đã gửi email thành công!</h3>";
} else {
    echo "<h3>Chưa chọn người nhận!</h3>";
}
?>
