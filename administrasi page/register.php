<?php
include 'koneksi.php';

session_start();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $pass = mysqli_real_escape_string($koneksi, ($_POST['password']));
    $cpass = mysqli_real_escape_string($koneksi, ($_POST['cpassword']));
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);


    $select_users = mysqli_query($koneksi, "SELECT * FROM `user` WHERE email = '$email' AND password ='$pass'") or die('query failed');
    if (mysqli_num_rows($select_users) > 0) {
        $message[] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } else {
            $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
            mysqli_query($koneksi, "INSERT INTO  `user` (username,role,email,password) values ('$username','$role', '$email', '$hashedpass')")
                or die('query failed');
            $message[] = 'registered sucessfully!';
            header('location:login.php');
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

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="style/style.css">

</head>

<body>

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '
            <div class="message">
                <span>' . $message . '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>';
        }
    }

    ?>

    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <input type="text" name="username" placeholder="enter your name" required class="box" autocomplete="off">
            <input type="email" name="email" placeholder="enter your email" required class="box" autocomplete="off">
            <input type="password" name="password" placeholder="enter your password" required class="box" autocomplete="off">
            <input type="password" name="cpassword" placeholder="confirm your password" required class="box" autocomplete="off">
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>
    </div>

</body>

</html>