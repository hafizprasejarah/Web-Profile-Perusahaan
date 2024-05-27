<?php
include 'koneksi.php';


session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}

// fetch category from the database

$category_query = "SELECT * FROM kategori";
$categories = mysqli_query($koneksi, $category_query);

// fecth assoc data from the database if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query_post = "SELECT * FROM post WHERE id=$id";
    $result = mysqli_query($koneksi, $query_post);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: index.php');
}

// get back if form input is was invalid
$judul = $_SESSION['add-post-data']['judul'] ?? null;
$konten = $_SESSION['add-post-data']['content'] ?? null;

//delete from data session
unset($_SESSION['add-post-data']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>


    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="style/style.css">

    <!-- link java script -->
    <script defer src="script/script.js"></script>
</head>

<body>

    <?php require 'admin-header/header.php'; ?>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <?php if (isset($_SESSION['add-post'])) : ?>
                    <div class="error_message negative">
                        <p>
                            <?= $_SESSION['add-post'];
                            unset($_SESSION['add-post']);
                            ?>
                        </p>
                    </div>

                <?php endif ?>
                <div class="container-form">
                    <form action="edit-post-logic.php" method="post" enctype="multipart/form-data">
                        <h3>edit post</h3>
                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        <input type="hidden" name="previous_thumbnail_name" value="<?= $post['thumbnail'] ?>">
                        <textarea type="text" name="judul" placeholder="title" required class="judul" autocomplete="off"><?= $post['judul'] ?></textarea>
                        <textarea type="text" rows="10" name="content" placeholder="content" required class="content" autocomplete="off"><?= $post['konten'] ?></textarea>

                        <select name="kategori" id="" required class="category">
                            <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                                <option value="<?= $category['id'] ?>"><?= $category['judul'] ?></option>
                            <?php endwhile ?>
                        </select>
                        <div class="group-feature">
                            <input type="checkbox" checked id="featured" name="featured" placeholder="confirm your password" value="1" class="feature" autocomplete="off">
                            <label for="featured">Featured</label>
                        </div>

                        <label for="gambarid">Change Thumbnail</label>
                        <input type="file" id="gambarid" name="thumbnail" class="gambar" autocomplete="off">

                        <input type="submit" name="submit" value="Update Post" class="btn-upload">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require 'admin-header/footer.php'; ?>
</body>

</html>