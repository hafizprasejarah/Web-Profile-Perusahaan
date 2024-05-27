<?php
include 'koneksi.php';

session_start();

$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM kategori WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $category = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $category['id'];
} else {
    header('location:manage-category.php');
    die();
}



?>
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


    <!-- link java script -->
    <script defer src="script/script.js"></script>

</head>

<body>

    <?php require 'admin-header/header.php';?>

    <section>
        <div class="wrapper-profil">
            <div class="sub-wrapper-profil">
                <div class="container-profil">
                    <div class="account-box">
                        <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
                        <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
                        <a href="logout.php" class="delete-btn"><button>log out</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="wrapper">
            <div class="sub-wrapper">

                <div class="container-form" enctype="multipart/form-data">
                    <form action="edit-category-logic.php" method="post">
                        <h3>Edit Category</h3>
                        <input type="text" value="<?= $category['judul'] ?>" name="judul" placeholder="Title" required class="judul" autocomplete="off" required maxlength="20">
                        <textarea name="deskripsi" rows="4" placeholder="Description" class="content" required><?= $category['deskripsi'] ?> </textarea>
                        <input type="submit" name="submit" value="Edit " class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require 'admin-header/footer.php';?>

</body>

</html>