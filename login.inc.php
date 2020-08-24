<?php

if (isset($_POST['login-submit'])) {

    require 'dtb.inc.php';

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if (empty($uid) || empty($pwd)) {
        header("Location: ../login.php?error=emptyinput");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pwd, $row['user_pwd']);  // comparing password from user with the password in database

                if ($pwdCheck == 0) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                } else {
                    session_start();
                    $_SESSION['userID'] = $row['id'];
                    $_SESSION['userUID'] = $row['user_uid'];
                    header("Location: ../content.php?login=success");
                    exit();
                }
            } else {
                header("Location ../login.php?error=nodata");
            }
        }
    }
}
