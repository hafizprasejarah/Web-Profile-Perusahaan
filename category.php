<?php
include 'administrasi page/koneksi.php';

//fetch from the database if id is exist

if (isset($_GET['id'])) {


    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $jumlah_post_per_page = 9;

    $jumlah_post_query = "SELECT * FROM post  WHERE category_id=$id ORDER BY tanggal";
    $jumlah_result = mysqli_query($koneksi, $jumlah_post_query);
    $jumlah_post = mysqli_num_rows($jumlah_result);

    $jumlah_page = ceil($jumlah_post / $jumlah_post_per_page);
    $aktifpage = (isset($_POST['page'])) ? $_POST['page'] : 1;


    $awaldata = ($jumlah_post_per_page * $aktifpage) - $jumlah_post_per_page;

    // fetch only 9 post to the article page

    $query = "SELECT * FROM post WHERE category_id=$id ORDER BY tanggal DESC LIMIT  $awaldata  ,$jumlah_post_per_page";
    $result  = mysqli_query($koneksi, $query);
} else {
    header('location: article-page.php');
    die();
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article-category</title>
    <link rel="icon" href="img/3.png">



    <!-- link css -->
    <link rel="stylesheet" href="style/css.css">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css ">

    <!-- link java script -->
    <script defer src="script/jerman.js"></script>

</head>

<body>
    <!-- navigasi bar -->
    <header class="header">

        <div class="header-1">
            <a href="index.php">
                <div class="logo"><img src="img/logo.png" alt=""></div>
            </a>

            <!-- navbar -->
            <nav class="navbar">
                <ul>

                    <li class="dropdown">
                        <p class="btn-drpdwn">IIDBC <i class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>tentang iidbc</h1>
                                <a href="iidbc.php">
                                    <div class="dropdown-btn">Mengenal IIDBC <span>-></span></div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="iidbc/about.php">tentang perusahaan</a></li>
                                    <li><a class="link" href="iidbc/iidbc-blackforest.php">IDBC International dan BLACKFOREST fect</a></li>
                                    <li><a class="link" href="iidbc/masapendidikan.php">pendidikan</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="btn-drpdwn">ausbildung <i class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>ausbildung</h1>
                                <a href="ausbildung.php">
                                    <div class="dropdown-btn">tentang ausbildung <span>-></span></div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="ausbildung/prgm-ausbildung.php">Program Ausbildung</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="btn-drpdwn">BLACKFOREST <i class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>BLACKFOREST</h1>
                                <a href="blackforest.php">
                                    <div class="dropdown-btn">tentang BLACKFOREST <span>-></span></div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="blackforest/generasi-habibie.php">Melahirkan Generasi Habibie masa Kini</a></li>
                                    <li><a class="link" href="blackforest/latar-belakang.php">Latar Belakang</a></li>
                                    <li><a class="link" href="blackforest/visi-misi.php">visi misi</a></li>
                                    <li><a class="link" href="blackforest/special-prog.php">Spesial Program</a></li>
                                    <li><a class="link" href="blackforest/kerangka-berpikir.php">Kerangka Berpikir</a></li>
                                    <li><a class="link" href="blackforest/program-kegiatan.php">Program Kegiatan</a></li>
                                    <li><a class="link" href="blackforest/pengelolaan.php">pengelolaan program</a></li>
                                    <li><a class="link" href="blackforest/system-pembinaan.php">System Pembinaan</a></li>
                                    <li><a class="link" href="blackforest/Keunggulan.php">Keunggulan</a></li>
                                    <li><a class="link" href="blackforest/benefit.php">Benefit Untuk Peserta Program</a></li>
                                    <li><a class="link" href="blackforest/syarat.php">Syarat Kepersetaan Peserta</a></li>
                                    <li><a class="link" href="blackforest/target.php">Target Kompetensi Peserta</a></li>
                                    <li><a class="link" href="blackforest/keunggulan-lembaga.php">Keunggulan Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="btn-drpdwn">DAFTAR</p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>DAFTAR</h1>
                                <a href="daftar.php">
                                    <div class="dropdown-btn"> alur dan proses program<span>-></span></div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="daftar.php"></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="btn-drpdwn">JERMAN <i class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>kenapa jerman?</h1>
                                <a href="jerman.php">
                                    <div class="dropdown-btn">alasan kuliah di jerman<span>-></span> </div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="jerman/ideologis.php">ideologis</a></li>
                                    <li><a class="link" href="jerman/sosial.php">sosial</a></li>
                                    <li><a class="link" href="jerman/budaya.php">Budaya</a></li>
                                    <li><a class="link" href="jerman/ekonomi.php">Ekonomi</a></li>
                                    <li><a class="link" href="jerman/penjelasan-program.php">Penjelasan Program Pendidikan jerman dan perincian biaya-biaya</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- form section -->
            <div class="form">
                <form action="" class="search-form">
                    <input type="text" placeholder="search" autocomplete="off" id="search-box">
                    <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <!-- icons login & search -->
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="article-page.php">
                    <div class="fa-regular fa-newspaper"></div>
                </a>
                <a href="index.php">
                    <div id="home-btn" class="fa-solid fa-house"></div>
                </a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

        </div>
    </header>


    <section>
        <div class="wrapper-category">
            <div class="sub-wrapper">
                <div class="category-title">
                    <?php
                    $kategori_id = $id;
                    $kategori_query = "SELECT * FROM kategori WHERE id=$kategori_id";
                    $kategori_result = mysqli_query($koneksi, $kategori_query);
                    $kategori = mysqli_fetch_assoc($kategori_result);
                    ?>
                    <h2><?= $kategori['judul'] ?></h2>

                </div>
            </div>
        </div>
    </section>

    <?php if (mysqli_num_rows($result) > 0) : ?>

        <section>
            <div class="wrapper">
                <div class="sub-wrapper">
                    <div class="containers-article">

                        <?php while ($post = mysqli_fetch_assoc($result)) : ?>
                            <article class="child-article">
                                <div class="thumbnail-wrapper">
                                    <img src="thumbnail/<?= $post['thumbnail'] ?>" alt="">
                                </div>
                                <div class="content-article">
                                    <div class="category">
                                        <?php
                                        $kategori_id_none_featured = $post['category_id'];
                                        $kategori_query_none_featured = "SELECT * FROM kategori WHERE id=$kategori_id_none_featured";
                                        $kategori_result_none_featured = mysqli_query($koneksi, $kategori_query_none_featured);
                                        $kategori_none_featured = mysqli_fetch_assoc($kategori_result_none_featured);
                                        ?>
                                        <a href="category.php?id=<?= $kategori_none_featured['id'] ?>" class="category-btn"><?= $kategori_none_featured['judul'] ?></a>
                                        <h2 class="post-title"><a href="post.php?id=<?= $post['id'] ?>"><?= $post['judul'] ?></a></h2>
                                        <p class="post-body"><?= substr($post['konten'], 0, 150) ?>...</p>
                                    </div>
                                    <div class="author">
                                        <?php
                                        $user_id_none_featured = $post['author_id'];
                                        $user_query_none_featured = "SELECT * FROM user WHERE id=$user_id_none_featured";
                                        $user_result_none_features = mysqli_query($koneksi, $user_query_none_featured);
                                        $user_none_featured =  mysqli_fetch_assoc($user_result_none_features);

                                        ?>
                                        <h5 class="name">By : <?= $user_none_featured['name'] ?></h5>
                                        <small class="date"><?php echo date("M d, Y - H.i", strtotime($post['tanggal'])) ?></small>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile ?>

                    </div>
                </div>
        </section>
    <?php else : ?>
        <div class="message-success category">
            <p>
                No post found for this category
            </p>
        </div>
    <?php endif ?>

    <div class="wrapper-multiple page">
        <div class="sub-wrapper">
            <!-- //page display -->
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
                                <?php $_POST['page'] = $_POST['page'] - 1;?>
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
        </div>
    </div>

    <section class="category-button">
        <div class="wrapper-multiple">
            <div class="sub-wrapper">
                <div class="container-category-btn">
                    <div class="child-category">
                        <?php
                        $all_categories = "SELECT * FROM kategori";
                        $all_categories_result = mysqli_query($koneksi, $all_categories);
                        ?>
                        <?php while ($category = mysqli_fetch_assoc($all_categories_result)) : ?>
                            <a href="category.php?id=<?= $category['id'] ?>" class="category-btn"><?= $category['judul'] ?></a>
                        <?php endwhile ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container-cprght">
        <div class="cprght">
            <div class="cprght-menu">
                <p>Copyright © 2023 IDBC International - All Rights Reserved</p>
            </div>
        </div>
    </div>



</body>

</html>