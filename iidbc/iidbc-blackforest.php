<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iidbc-menu</title>

    <!-- link css -->
    <link rel="stylesheet" href="../style/styleiidbc.css">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css ">

    <!-- link java script -->
    <script defer src="../script/scriptiidbc.js"></script>
</head>

<body>
    <!-- navigasi bar -->
    <html lang="en">

    <body>
        <!-- navigasi bar -->
        <header class="header">

            <div class="header-1">
                <a href="../index.php">
                <div class="logo"><img  src="../img/logo.png" alt=""></div>
                </a>

                <!-- navbar -->
                <nav class="navbar">
                    <ul>

                        <li class="dropdown">
                            <p class="btn-drpdwn" id="current-page">IIDBC <i class="fa-solid fa-caret-down"></i></p>
                            <div class="dropdown-menu">
                                <div class="box-title">
                                    <h1>tentang iidbc</h1>
                                    <a href="../iidbc.php">
                                        <div class="dropdown-btn">Mengenal IIDBC <span>-></span></div>
                                    </a>
                                </div>
                                <div class="box-title">
                                    <ul>
                                        <li><a class="link" href="about.php">tentang perusahaan</a></li>
                                        <li><a class="link" href="iidbc-blackforest.php">IDBC International dan BLACKFOREST fect</a></li>
                                        <li><a class="link" href="masapendidikan.php">pendidikan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <p class="btn-drpdwn">ausbildung <i class="fa-solid fa-caret-down"></i></p>
                            <div class="dropdown-menu">
                                <div class="box-title">
                                    <h1>ausbildung</h1>
                                    <a href="../ausbildung.php">
                                        <div class="dropdown-btn">tentang ausbildung <span>-></span></div>
                                    </a>
                                </div>
                                <div class="box-title">
                                    <ul>
                                        <li><a class="link" href="../ausbildung/prgm-ausbildung.php">Program Ausbildung</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <p class="btn-drpdwn">BLACKFOREST <i class="fa-solid fa-caret-down"></i></p>
                            <div class="dropdown-menu">
                                <div class="box-title">
                                    <h1>BLACKFOREST</h1>
                                    <a href="../blackforest.php">
                                        <div class="dropdown-btn">tentang BLACKFOREST <span>-></span></div>
                                    </a>
                                </div>
                                <div class="box-title">
                                    <ul>
                                        <li><a class="link" href="../blackforest/generasi-habibie.php">Melahirkan Generasi Habibie masa Kini</a></li>
                                        <li><a class="link" href="../blackforest/latar-belakang.php">Latar Belakang</a></li>
                                        <li><a class="link" href="../blackforest/visi-misi.php">visi misi</a></li>
                                        <li><a class="link" href="../blackforest/special-prog.php">Spesial Program</a></li>
                                        <li><a class="link" href="../blackforest/kerangka-berpikir.php">Kerangka Berpikir</a></li>
                                        <li><a class="link" href="../blackforest/program-kegiatan.php">Program Kegiatan</a></li>
                                        <li><a class="link" href="../blackforest/pengelolaan.php">pengelolaan program</a></li>
                                        <li><a class="link" href="../blackforest/system-pembinaan.php">System Pembinaan</a></li>
                                        <li><a class="link" href="../blackforest/Keunggulan.php">Keunggulan</a></li>
                                        <li><a class="link" href="../blackforest/benefit.php">Benefit Untuk Peserta Program</a></li>
                                        <li><a class="link" href="../blackforest/syarat.php">Syarat Kepersetaan Peserta</a></li>
                                        <li><a class="link" href="../blackforest/target.php">Target Kompetensi Peserta</a></li>
                                        <li><a class="link" href="../blackforest/keunggulan-lembaga.php">Keunggulan Lembaga</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <p class="btn-drpdwn">DAFTAR</p>
                            <div class="dropdown-menu">
                                <div class="box-title">
                                    <h1>DAFTAR</h1>
                                    <a href="../daftar.php">
                                        <div class="dropdown-btn"> alur dan proses program<span>-></span></div>
                                    </a>
                                </div>
                                <div class="box-title">
                                    <ul>
                                        <li><a class="link" href="../daftar.php"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <p class="btn-drpdwn">JERMAN <i class="fa-solid fa-caret-down"></i></p>
                            <div class="dropdown-menu">
                                <div class="box-title">
                                    <h1>kenapajerman?</h1>
                                    <a href="../jerman.php">
                                        <div class="dropdown-btn">alasan kuliah di jerman<span>-></span> </div>
                                    </a>
                                </div>
                                <div class="box-title">
                                    <ul>
                                        <li><a class="link" href="../jerman/ideologis.php">ideologis</a></li>
                                        <li><a class="link" href="../jerman/sosial.php">sosial</a></li>
                                        <li><a class="link" href="../jerman/budaya.php">Budaya</a></li>
                                        <li><a class="link" href="../jerman/ekonomi.php">Ekonomi</a></li>
                                        <li><a class="link" href="../jerman/penjelasan-program.php">Penjelasan Program Pendidikan jerman dan perincian biaya-biaya</a></li>
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
                    <a href="../index.php"><div id="home-btn" class="fa-solid fa-house"></div></a>
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>

            </div>
        </header>


        <section>
            <!-- timeline -->
            <div class="wrapper-iidbc-blackforest">
                <div class="sub-wrapper-iidbc-blackforest">

                    <h1 class="main-title">IDBC International dan Black Forest FECT</h1>
                    <p class="second-title">Hakekatnya kedua Lembaga ini adalah satu tapi dengan fungsi dan lokasi yang berbeda</p>

                    <div class="container-iidbc-blackforest">
                        <div class="child-iidbc-blackforest">
                            <div class="group">
                                <div class="icon-title">
                                    <div class="fa-regular fa-building"></div>
                                    <h1>idbc</h1>
                                </div>
                                <div class="content-idbc">
                                    <p>Lembaga Pendidikan yang melakukan seleksi bagi peserta program study luar negeri.</p>
                                </div>
                            </div>
                            <div class="group">
                                <div class="icon-title">
                                    <div class="fa-solid fa-house"></div>
                                    <h1>idbc</h1>
                                </div>
                                <div class="content-idbc">
                                    <p>Melakukan Pendidikan persiapan yang menjadi persyaratan dari destinasi negara tujuan baik berupa persiapan mental, Bahasa ataupun document pemberkasan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gambar">
                            <img src="../img/IDBC2.jpg" alt="">
                        </div>
                        <div class="child-iidbc-blackforest">
                            <div class="group">
                                <div class="icon-title">
                                    <div class="fa-solid fa-hotel"></div>
                                    <h1>idbc</h1>
                                </div>
                                <div class="content-idbc">
                                    <p>Melakukan pengkondisian kebiasaan atau kultur negara tujuan selama boarding sehingga saat sampai di negara tujuan tidak terjadi shock culture.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- copyright -->
        <div class="container-cprght">

            <div class="cprght">
                <div class="cprght-menu">
                    <p>Copyright © 2023 IDBC International - All Rights Reserved</p>
                </div>
            </div>

        </div>

    </body>

    </html>