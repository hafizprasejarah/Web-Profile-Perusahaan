<?php
include 'koneksi.php';

session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}


//fecth kategori
$query = "SELECT * FROM kategori";
$kategori = mysqli_query($koneksi, $query);


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

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <!-- link java script -->
    <script defer src="script/script.js"></script>
</head>


<body>
    <?php require 'admin-header/header.php'; ?>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <div class="container-form">
                    <?php if (isset($_SESSION['add-post'])) : ?>
                        <div class="error_message negative">
                            <p>
                                <?= $_SESSION['add-post'];
                                unset($_SESSION['add-post']);
                                ?>
                            </p>
                        </div>

                    <?php endif ?>
                    <form action="add-post-logic.php" method="post" enctype="multipart/form-data">
                        <h3>add post</h3>
                        <textarea type="text" name="judul" placeholder="title" class="judul" autocomplete="off" maxlength="200"><?= $judul ?></textarea>
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content" name="content"></trix-editor>
                        <!-- <textarea type="text" rows="10" name="content" placeholder="content" class="content" autocomplete="off"><?= $konten ?></textarea> -->
                        <select name="kategori" required class="category">
                            <?php while ($kategories = mysqli_fetch_assoc($kategori)) : ?>
                                <option value="<?= $kategories['id'] ?>"><?= $kategories['judul']; ?></option>>
                            <?php endwhile ?>
                        </select>
                        <?php if (isset($_SESSION['admin_id'])) : ?>
                            <div class="group-feature">
                                <input type="checkbox" checked value="1" id="featured" name="featured" placeholder="confirm your password" class="feature" autocomplete="off">
                                <label for="featured">Featured</label>
                            </div>
                        <?php endif ?>
                        <label for="gambarid">Thumbnail</label>
                        <input type="file" id="gambarid" name="thumbnail" class="gambar" autocomplete="off">

                        <input type="submit" name="submit" value="add" class="btn-upload">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require 'admin-header/footer.php'; ?>
</body>

</html>