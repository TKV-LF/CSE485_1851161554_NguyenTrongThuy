<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include_once('phpmailer/class.phpmailer.php');

    require_once('phpmailer/class.smtp.php');

    $name = strip_tags($_POST['name']);
    $email = strip_tags ($_POST['email']);
    $msg = strip_tags ($_POST['messages']);
    $phone = strip_tags($_POST['phone']);

    $subject = "Mail phản hồi từ bạn ".$name;

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "smtp.gmail.com"; // SMTP server example
    //$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "thuongkhungvu68@gmail.com"; // SMTP account username example
    $mail->Password   = "thuongkhung120";        // SMTP account password example

    $mail->From = $email;
    $mail->FromName = $name;

    $mail->AddAddress('thuongkhungvu68@gmail.com', 'Information'); 
    $mail->AddReplyTo($email, 'TKV');

    $mail->IsHTML(true);

    $mail->Subject = $subject;

    $messages = '<strong>Họ tên: </strong>'.$name.'<br/>
    <strong>Email: </strong>'.$email.'<br/>
    <strong>SĐT: </strong>'.$phone.'<br/>
    <strong>Tin nhắn: </strong>'.$msg.'<br/>';
    $mail->Body    =  $messages;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
    }
    echo 'Message has been sent';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://mixigaming.com/wp-content/uploads/2019/08/favicon-300x300.jpg">
    <title>From Mixigaming with Love</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/P/assets/css/style.css">
    <link rel="stylesheet" href="/P/assets/css/footer.css">
    <link rel="stylesheet" href="/P/assets/css/side-bar.css">
    <link rel="stylesheet" href="/P/assets/css/nav.css">
    <link rel="stylesheet" href="/P/assets/css/link.css">
    <link rel="stylesheet" href="/P/assets/css/codingui.css">


</head>
<style>
.signup {
    padding: 40px 20px;
    background-color: white;
    border-radius: 30px;
    width: 100%;
}

.signup-heading {
    text-align: center;
    font-weight: 600;
    color: #363a40;
    font-size: 35px;
    margin-bottom: 35px;
}

.signup-google {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    border-radius: 16px;
    background-color: #4c6ef4;
    text-decoration: none;
    padding: 8px;
    margin-bottom: 45px;
    box-shadow: 0 10px 20px -5px rgba(76, 110, 244, 0.9);
}

.signup-google-icon {
    width: 50px;
    height: 50px;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    color: #ff7870;
    border-radius: 10px;
    background-color: white;
    font-size: 25px;
}

.signup-google-text {
    color: white;
    font-weight: 500;
    display: block;
    margin: 0 auto;
}

.signup-or {
    color: #363a40;
    display: block;
    text-align: center;
    position: relative;
    margin-bottom: 55px;
}

.signup-or-text {
    display: inline-block;
    padding: 5px 20px;
    background-color: white;
    position: relative;
    font-size: 14px;
}

.signup-or:before {
    content: "";
    height: 1px;
    width: 100%;
    position: absolute;
    top: 50%;
    left: 0;
    background-color: #999;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.signup-already {
    text-align: center;
    color: #363a40;
    font-size: 13px;
}

.signup-already-link {
    color: #4c6ef4;
    text-decoration: none;
}

.form-group {
    margin-bottom: 25px;
}

.form-label {
    display: inline-block;
    cursor: pointer;
    color: #363a40;
    margin-bottom: 15px;
    font-size: 13px;
}

.form-input {
    display: block;
    width: 100%;
    padding: 20px;
    border-radius: 15px;
    border: 0;
    outline: none;
    font-family: "Poppins", sans-serif;
    background-color: #f2f3f5;
    color: #363a40;
    font-size: 16px;
}

.form-input::-webkit-input-placeholder {
    color: #b4bdc1;
}

.form-submit {
    display: block;
    margin-top: 45px;
    width: 100%;
    padding: 20px;
    color: white;
    text-align: center;
    cursor: pointer;
    border: 0;
    border-radius: 15px;
    background-color: #81c91d;
    font-size: 16px;
    font-weight: 500;
    font-family: "Poppins", sans-serif;
    margin-bottom: 20px;
    box-shadow: 0 10px 20px -5px rgba(129, 201, 29, 0.9);
    outline: none;
}

@media screen and (max-width: 767px) {
    .signup {
        padding: 30px 20px;
    }
}
</style>

<body style="background-color: rgb(34,34,34);">
    <?php
      include "includes/navbar.php";
      
      
    ?>
    <div class="container mt-5 pt-5">
        <div class="signup mt-5">
            <h1 class="signup-heading">Contact</h1>
            <form action="/p/report/" method="POST" class="signup-form" autocomplete="off">
                <div class="form-group">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" name="name" class="form-input" id="name" placeholder="Eg: Nguyen Trong Thuy">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" id="email" placeholder="Eg: thuyngtrong@email.com">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-input" id="phone" placeholder="Eg: 0977691072">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Messages</label>
                    <textarea name="messages" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>
                <button type="submit" class="form-submit">Send</button>
            </form>
        </div>

    </div>

    <?php
        include "includes/footer.php";
     ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="/P/assets/js/Scroll-To-Top-Button.js"></script>
    <script src="/P/assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="/P/assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
    <script src="/P/assets/js/buttonUp.js"></script>
</body>

</html>