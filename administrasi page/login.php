<?php
include 'koneksi.php';

session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $pass = mysqli_real_escape_string($koneksi, $_POST['password']);


    $select_users = mysqli_query($koneksi, "SELECT * FROM `user` WHERE email = '$email'") or die('query failed');
    if (mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users);
        $hashedpass = $row['password'];
        if (password_verify($pass, $hashedpass)) {
            
            $_SESSION['current_id'] = $row['id'];
            if ($row['role'] == "admin") {
                
                $_SESSION["admin_name"] = $row['username'];
                $_SESSION["admin_email"] = $row['email'];
                $_SESSION["admin_id"] = $row['id'];

                header('location:index.php');
            }
        } else {
            $message[] = 'incorrect email or password!';
        }
    } else {
        $message[] = 'user not found';
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
            <h3>login now</h3>
            <input type="email" name="email" placeholder="enter your email" required class="box" autocomplete="off">
            <input type="password" name="password" placeholder="enter your password" required class="box" autocomplete="off">
            <input type="submit" name="submit" value="login now" class="btn">
        </form>
    </div>

</body>

</html>