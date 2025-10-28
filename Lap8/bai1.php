<?php
          require "PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
          require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
          require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
          $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
            try {
               // $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
		    $nguoigui = 'annvh.24itb@vku.udn.vn';
		    $matkhau = 'hsdv wntw mseg hlij';// mật khẩu của tài khoản annvh.24itb@vku.udn.vn
		    $tennguoigui = 'AnNguyen';
                $mail->Username = $nguoigui; // SMTP username
                $mail->Password = $matkhau;   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom($nguoigui, $tennguoigui ); 
                $to = "nguyenvanhoaian3004@gmail.com";
                $to_name = "Hoaian";
                
                $mail->addAddress($to, $to_name); //mail và tên người nhận
               // $mail->addAddress("nlquan@vku.udn.vn","lequan");
                /* $recipients = "test1@test.com,test2@test.com,test3@test.com,test1@test.com";
    $email_array = explode(",",$recipients);*/
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = 'xin chao ';      
                $noidungthu = "<b>Chào bạn toi la annvh.24itb@vku.udn.vn!</b><br>Chúc suc khoe gap nhieu may man!" ;
                $mail->Body = $noidungthu;
               // $mail->AddAttachment("4.jpg","picture");
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
                echo 'Đã gửi mail xong';
                
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }

?>
