<?php
include 'koneksi.php';
session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}




if (isset($_POST['submit'])) {
    $name = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['name']));
    $username = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['username']));
    $email = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['email']));
    $pass = htmlspecialchars(mysqli_real_escape_string($koneksi, ($_POST['password'])));
    $cpass = htmlspecialchars(mysqli_real_escape_string($koneksi, ($_POST['cpassword'])));
    $role = $_POST['role'];


    $select_users = mysqli_query($koneksi, "SELECT * FROM `user` WHERE email = '$email' AND password ='$pass'") or die('query failed');
    if (mysqli_num_rows($select_users) > 0) {
        $_SESSION['message'] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $_SESSION['message'] = 'confirm password not matched!';
        } else {
            $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
            mysqli_query($koneksi, "INSERT INTO  `user` (name,username,role,email,password) values ('$name','$username','$role', '$email', '$hashedpass')")
                or die('query failed');
            $_SESSION['message'] = 'sucessfully added user';
            header('location:manage-user.php');

            if(!mysqli_errno($koneksi)){
                $_SESSION['add-user-success'] = 'successfully added user';
            }
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

    <script defer src="script/script.js"></script>


</head>

<body>
    <?php require 'admin-header/header.php'; ?>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <?php if (isset($_SESSION['message'])) : ?>
                    <div class="message-success">
                        <p>
                            <?php echo $_SESSION['message'];
                            unset($_SESSION['message']); ?>
                        </p>
                    </div>
                <?php endif ?>
                <div class="container-form">
                    <form action="" method="post">
                        <h3>Add Users </h3>
                        <input type="text" name="name" placeholder="enter your name" required class="judul" autocomplete="off" maxlength="50">
                        <input type="text" name="username" placeholder="enter your username" required class="judul" autocomplete="off" maxlength="30">
                        <input type="email" name="email" placeholder="enter your email" required class="judul" autocomplete="off" maxlength="30">
                        <input type="password" name="password" placeholder="enter your password" required class="judul" autocomplete="off" minlength="8" maxlength="30">
                        <input type="password" name="cpassword" placeholder="confirm your password" required class="judul" autocomplete="off" minlength="8" maxlength="30">
                        <select name="role" class="category">
                            <option value="admin">admin</option>
                        </select>
                        <input type="submit" name="submit" value="Add Now" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>



    <?php require 'admin-header/footer.php'; ?>
</body>

</html>