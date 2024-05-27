<?php
include 'koneksi.php';

session_start();

$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}
// pagination
$jumlah_post_per_page = 5;

$jumlah_post_query = "SELECT * FROM kategori";
$jumlah_result = mysqli_query($koneksi, $jumlah_post_query);
$jumlah_post = mysqli_num_rows($jumlah_result);

$jumlah_page = ceil($jumlah_post / $jumlah_post_per_page);
$aktifpage = (isset($_POST['page'])) ? $_POST['page'] : 1;


$awaldata = ($jumlah_post_per_page * $aktifpage) - $jumlah_post_per_page;

$query = "SELECT * FROM kategori LIMIT  $awaldata  ,$jumlah_post_per_page";
$result = mysqli_query($koneksi, $query);


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
    <?php require 'admin-header/header.php'; ?>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <?php if (isset($_SESSION['add-category-success'])) : ?>
                    <div class="message-success">
                        <p>
                            <?php echo $_SESSION['add-category-success'];
                            unset($_SESSION['add-category-success']); ?>
                        </p>
                    </div>
                <?php elseif (isset($_SESSION['delete-category-success'])) : ?>
                    <div class="message-success">
                        <p>
                            <?php echo $_SESSION['delete-category-success'];
                            unset($_SESSION['delete-category-success']); ?>
                        </p>
                    </div>
                <?php endif ?>
                <div class="container-article">
                    <aside>
                        <ul>
                            <li>
                                <a href="add-post.php">
                                    <i class="fa-solid fa-pencil"></i>
                                    <h5>Add Post</h5>
                                </a>
                            </li>
                            <li>
                                <a href="index.php">
                                    <i class="fa-solid fa-list-check"></i>
                                    <h5>Manage Post</h5>
                                </a>
                            </li>
                            <li>
                                <a href="add-user.php">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <h5>Add User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-user.php">
                                    <i class="fa-solid fa-user-pen"></i>
                                    <h5>Manage User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="add-category.php">
                                    <i class="fa-solid fa-tags"></i>
                                    <h5>Add Category</h5>

                                </a>
                            </li>
                            <li class="current-page">
                                <a href="manage-category.php">
                                    <i class="fa-solid fa-gear"></i>
                                    <h5>Manage Category</h5>
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <main>
                        <h2>Manage Post</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($category = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td><?= $category['judul'] ?></td>
                                        <td><a href="edit-category.php?id=<?= $category['id'] ?>" class="btn-manage edit">Edit</a></td>
                                        <td><a href="delete-category.php?id=<?= $category['id'] ?>" class="btn-manage delete">Delete</a></td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                        <div class="btn-page">

                            <?php if ($jumlah_page >= 4) : ?>
                                <?php
                                $i = 1;
                                $batas = 4;
                                ?>
                                <?php while ($i <= $batas) : ?>
                                    <?php if (($_POST['page'] ?? 1) >= $batas) : ?>
                                        <?php if ($_POST['page'] < $jumlah_page) : ?>
                                            <?php $penentu = $_POST['page'] - 3 ?>
                                            <a href="category.php">
                                                <form method="post"><button name="page" value="<?= $i + $penentu ?>"><?= $i + $penentu ?></button></form>
                                            </a>
                                        <?php else : ?>
                                            <?php $_POST['page'] = $_POST['page'] - 1; ?>
                                        <?php endif ?>
                                    <?php else : ?>
                                        <a href="category.php">
                                            <form method="post"><button name="page" value="<?= $i ?>"><?= $i ?></button></form>
                                        </a>
                                    <?php endif ?>
                                    <?php $i++ ?>
                                <?php endwhile ?>
                            <?php else : ?>
                                <?php
                                $i = 1;
                                $batas = $jumlah_page;
                                ?>
                                <?php while ($i <= $batas) : ?>
                                    <a href="category.php">
                                        <form method="post"><button name="page" value="<?= $i ?>"><?= $i ?></button></form>
                                    </a>
                                    <?php $i++ ?>
                                <?php endwhile ?>
                            <?php endif ?>

                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>


    <?php require 'admin-header/footer.php'; ?>

</body>

</html>