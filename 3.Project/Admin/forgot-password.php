<?php
require 'config.php';
function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

$email = $email_err = $pass = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter a email.";
    } else {
        // Prepare a select statement
        $sql = "SELECT password FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 0) {
                    $email_err = "Can't find your Email.";
                } else {
                    $email = trim($_POST["email"]);
                    $pass = generateRandomString();
                    $hash_password = password_hash($pass, $PASSWORD_DEFAULT);
                    $sql1 = "UPDATE users SET password = '$hash_password' WHERE email = '$email'";
                    mysqli_query($link, $sql1);

                    header("location: action/sendmail.php?p=" . $pass . "&email=" . $email);

                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

:root {
  --primary: #08aeea;
  --secondary: #13D2B8;
  --purple: #bd93f9;
  --pink: #ff6bcb;
  --blue: #8be9fd;
  --gray: #333;
  --font: "Poppins", sans-serif;
  --gradient: linear-gradient(40deg, #ff6ec4, #7873f5);
  --shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body {
  font-family: var(--font);
  font-size: 1.4rem;
  overflow-x: hidden;
  font-weight: 300;
}

img {
  display: block;
  max-width: 100%;
}

a {
  text-decoration: none;
}

input,
button,
textarea,
select {
  font-family: var(--font);
  font-size: 1.4rem;
  font-weight: 300;
  outline: none;
  border: 0;
  margin: 0;
  padding: 0;
  border-radius: 0;
  -webkit-appearance: none;
}

button {
  cursor: pointer;
}

.simple-card {
  background-color: white;
  border-radius: 2rem;
  padding: 1.5rem;
  box-shadow: var(--shadow);
}

.simple-card-image {
  position: relative;
  height: 0;
  padding-bottom: 56.25%;
}

.simple-card-image>img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 1rem;
}

.simple-card-content {
  padding: 3rem 1rem;
}

.simple-card-title {
  font-weight: 500;
  font-size: 2rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  color: #2b2b2b;
}

.simple-card-desc {
  color: #c7cbdc;
  font-weight: 300;
  line-height: 1.6;
  font-size: 1.4rem;
  margin-bottom: 3rem;
}

.simple-card-line {
  width: 30%;
  height: 2px;
  margin-left: auto;
  background-color: var(--primary);
}

.input-button {
  display: flex;
  width: 100%;
  background-color: #eee;
}

.input-button input {
  width: 100%;
  flex: 1;
  padding: 1.5rem;
  background-color: transparent;
}

.input-button button {
  background-color: #08aeea;
  color: white;
  padding: 1.5rem 2rem;
}
</style>

<body>

  <div class="container mb-5 pt-5">
    <form action="forgot-password.php" method="POST">
      <div class="simple-card mt-5 pt-5">

        <div class="simple-card-content">
          <h3 class="mb-4 text-center">Send password to your email</h3>
          <div class="input-button">
            <input type="text" name="email" placeholder="Your email address..." />

            <button type="submit">Send</button>
          </div>
          <span class="help-block"><?php echo $email_err; ?></span>
        </div>
      </div>
    </form>
  </div>
</body>

</html>