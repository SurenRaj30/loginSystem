<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="styles/login_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="form">
    <h2><i>Raj Inc</i></h2>
    <div class="input">
      <form action="includes/login.inc.php" method="POST">
        <div class="inputBox">
          <input type="text" name="uid" placeholder="Username" />
        </div>
        <div class="inputBox">
          <input type="password" name="pwd" placeholder="Password" />
        </div>
        <div class="inputBox">
          <input type="submit" name="login-submit" value="Login" />
        </div>
    </div>
    </form>

    <p class="join">No account ?<a href="register.php">Join Now</a></p>
    <?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, 'emptyinput') == true) {
      echo "<p class='error'>You did not fill in all fields</p>";
      exit();
    } elseif (strpos($fullUrl, 'wrongpassword') == true) {
      echo "<p class='error'>You have entered wrong password</p>";
      exit();
    }
    ?>
  </div>

</body>

</html>