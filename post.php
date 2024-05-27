<?php
include 'administrasi page/koneksi.php';

//fetch from the database if id is exist

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM post WHERE id=$id";
    $result  = mysqli_query($koneksi, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: article-page.php');
    die();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single-post</title>
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
                <a href="article-page.php"><div class="fa-regular fa-newspaper"></div></a>
                <a href="index.php">
                    <div id="home-btn" class="fa-solid fa-house"></div>
                </a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

        </div>
    </header>

    <section>
        <div class="wrapper-post">
            <div class="sub-wrapper">

                <div class="container-single-post">
                    <h2><?= $post['judul'] ?></h2>

                    <div class="author">
                        <?php
                        $user_id = $post['author_id'];
                        $user_query = "SELECT * FROM user WHERE id=$user_id";
                        $user_result = mysqli_query($koneksi, $user_query);
                        $user =  mysqli_fetch_assoc($user_result);
                        $user_name = $user['name'];
                        ?>
                        <h5 class="name">By : <?= $user_name ?></h5>
                        <small class="date"><?php echo date("M d, Y - H.i", strtotime($post['tanggal'])) ?></small>
                    </div>

                    <div class="single-post-thumbnail">
                        <img src="thumbnail/<?= $post['thumbnail']?>" alt="">
                    </div>

                    <p><?= $post['konten']?></p>
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