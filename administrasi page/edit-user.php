<?php
include 'koneksi.php';

session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $user['id'];
    if(!mysqli_errno($koneksi)){
        $_SESSION['add-user-success'] = "user updated successfully";
    }else{
        $_SESSION['add-user-success'] = "user updated failed";

    }
} else {
    header('location:manage-user.php');
    die();
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

    <!-- link script javascript -->
    <script defer src="script/script.js"></script>

</head>

<body>

    <?php require 'admin-header/header.php'; ?>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <div class="container-form">
                    <form action="edit-user-logic.php" method="post">
                        <h3>Edit Users </h3>
                        <input type="text" value="<?= $user['name'] ?>" name="name" placeholder="enter your name" required class="judul" maxlength="30" autocomplete="off">
                        <input type="text" value="<?= $user['username'] ?>" name="username" placeholder="enter your username" maxlength="30" required class="judul" autocomplete="off">
                        <select name="role" class="judul">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                        <input type="submit" name="submit" value="Update User" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require 'admin-header/footer.php'; ?>
</body>

</html>