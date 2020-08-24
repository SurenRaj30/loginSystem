<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration</title>
  <link rel="stylesheet" href="styles/reg_style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="register_form">
    <h2><i>Raj Inc</i></h2>
    <div class="fields">
      <form action="includes/signup.inc.php" method="POST">
        <div class="names">
          <input type="text" name="first" placeholder="First name" />
          <input type="text" name="last" placeholder="Last name" />
        </div>
        <div class="email">
          <input type="text" name="email" placeholder="Email address" />
        </div>
        <div class="uid">
          <input type="text" name="uid" placeholder="Username" />
        </div>
        <div class="pwd">
          <input type="password" name="pwd" placeholder="Password" />
        </div>
        <div class="inputBox">
          <input type="submit" name="submit" value="Sign Up" />
        </div>
    </div>
    <?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, 'emptyinput') == true) {
      echo "<p class='error'>You did not fill in all fields</p>";
      exit();
    } elseif (strpos($fullUrl, 'invalidemail') == true) {
      echo "<p class='error'>Your email is not valid</p>";
      exit();
    }
    ?>
  </div>

  </form>

</body>

</html>