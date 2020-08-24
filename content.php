<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="styles/cont_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="form">
        <?php

        if (isset($_SESSION['userID'])) {
            echo "<p>You are now logged in</p>";
        }
        ?>
        <form action="index.php" method="POST">
            <div class="content">
                <input type="submit" name="logout-submit" value="Log Out">
            </div>
        </form>
    </div>



</body>

</html>