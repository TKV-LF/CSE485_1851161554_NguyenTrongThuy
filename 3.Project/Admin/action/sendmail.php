<?php
$p = $_GET['p'];
$email = $_GET['email'];include_once 'phpmailer/class.phpmailer.php';

require_once 'phpmailer/class.smtp.php';

$subject = "Mail phản hồi từ Mixigaming ";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host = "smtp.gmail.com"; // SMTP server example
//$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = 587; // set the SMTP port for the GMAIL server
$mail->Username = "thuongkhungvu68@gmail.com"; // SMTP account username example
$mail->Password = "thuongkhung120"; // SMTP account password example

$mail->From = $email;
$mail->FromName = "Mixigaming";

$mail->AddAddress($email, 'Information');
$mail->AddReplyTo($email, 'TKV');

$mail->IsHTML(true);

$mail->Subject = $subject;

$messages = '
  <strong>Email: </strong>' . $email . '<br/>
  <strong>Your new password: </strong>' . $p . '<br/>';
$mail->Body = $messages;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
header("location: ../index.php");