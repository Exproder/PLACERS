<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include('database/db.php');
session_start();

if (isset($_POST['send'])) {
    $dno = $_POST['dno'];
    $sel = "SELECT users.dno, users.name, users.pass, studentdetail.email FROM users JOIN studentdetail ON users.dno = studentdetail.dno WHERE users.dno='$dno'";
    $select = mysqli_query($con, $sel);
    $count = mysqli_num_rows($select);

    if ($count == 1) {
        $data = mysqli_fetch_array($select);
        $password = $data['pass'];
        $email = $data['email'];

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'mohammedzayedk@gmail.com';  // Replace with your email
            $mail->Password   = 'ulfd bfwo strn wstc';          // Replace with your email password or App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('from@example.com', 'KJC Placement Cell');
            $mail->addAddress($email);
            $msg = "<html>
            <head>
              <title>Password Recovery</title>
            </head>
            <body>
              <h2>Password Recovery</h2>
              <p><strong>Name:</strong> {$data['name']}</p>
              <p><strong>Reg No.:</strong> {$data['dno']}</p>
              <p><strong>Password:</strong> {$data['pass']}</p>
            </body>
            </html>
            ";

            $mail->isHTML(true);
            $mail->Subject = 'Password Recovery';
            $mail->Body    = $msg;

            $mail->send();
            echo "<script>alert('Password sent to your Mail');window.location='login.php';</script>";
        } catch (Exception $e) {
            // Log detailed error information
            error_log("Mailer Error: {$mail->ErrorInfo}");
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script>alert('Invalid Reg No., Please Enter Valid Reg No.');</script>";
        echo "<script>window.location='forgetpassword.php'</script>";
    }
}
?>
