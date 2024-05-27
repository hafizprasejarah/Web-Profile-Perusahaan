<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>
    <link rel="icon" href="img/3.png">



    <!-- link css -->
    <link rel="stylesheet" href="style/styledaftar.css">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css ">

    <!-- link java script -->
    <script defer src="script/scriptdaftar.js"></script>

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
                        <p class="btn-drpdwn" id="current-page">DAFTAR</p>
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
                <a href="index.php"><div id="home-btn" class="fa-solid fa-house"></div></a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

        </div>
    </header>
    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Syarat Kepesertaan Program</h1>
                <h1 class="main-title">& Kuliah IDBC International</h1>
                <div class="syarat-container-3">
                    <div class="timeline-syarat-3"></div>
                    <div class="timeline-syarat2-3"></div>

                    <div class="card-group-3">

                        <div class="card-right-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/sosialisasi.jpg" alt="">
                                </div>
                                <p>
                                    Sosialisasi program
                                </p>
                            </div>
                        </div>

                        <div class="card-left-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/pic-job.jpg" alt="">
                                </div>
                                <p>
                                    Pendataan peminat program
                                </p>
                            </div>
                        </div>

                        <div class="card-right-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/pertemuan.jpg" alt="">
                                </div>
                                <p>
                                    Pertemuan tatap muka peserta untuk penjelasan detail program
                                </p>
                            </div>
                        </div>

                        <div class="card-left-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/pendaftaran.jpg" alt="">
                                </div>
                                <p>
                                    Pendaftaran peserta
                                </p>
                            </div>
                        </div>
                        <div class="card-right-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-clipboard-question"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/IDBC2.jpg" alt="">
                                </div>
                                <p>
                                    Interview peserta dan seleks
                                </p>
                            </div>
                        </div>

                        <div class="card-left-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-signature"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/tandatangan-aqad.jpg" alt="">
                                </div>
                                <p>
                                    Penandatanganan aqad
                                </p>
                            </div>
                        </div>

                        <div class="card-right-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/administrasi.jpg" alt="">
                                </div>
                                <p>
                                    Pembayaran administrasi
                                </p>
                            </div>
                        </div>

                        <div class="card-left-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/BJ-Habibie.jpg" alt="">
                                </div>
                                <p>
                                    Pelaksanaan program boarding, kursus bahasa Jerman dan pembekalan da’i (6 bulan)
                                </p>
                            </div>
                        </div>
                        <div class="card-right-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/pendaftaran.jpg" alt="">
                                </div>
                                <p>
                                    Test sertifikat bahasa Jerman
                                </p>
                            </div>
                        </div>

                        <div class="card-left-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-door-open"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/germany.jpg" alt="">
                                </div>
                                <p>
                                    Pemberkasan dokumen visa, motivasi letter, dll.
                                </p>
                            </div>
                        </div>

                        <div class="card-right-3">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-plane"></i>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content-3">
                                <div class="img-wrapper">
                                    <img src="img/place-flying-sunset-sky.jpg" alt="">
                                </div>
                                <p>
                                    Pemberangkatan ke Jerman
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper-multiple">
            <div class="sub-wrapper">

                <h1 class="main-title">Tutorial Pendaftaran
                    IDBC International</h1>
                <p class="second-title">Pahmi Penjelasan dibawah ini baik baik
                    sebelum melakukan pendaftarn agar tidak gagal faham/atau gagal melakukan pendaftaran</p>

                <div class="container-keunggulan">
                    <div class="child-keunggulan">
                        <div class="gambar-keunggulan">
                            <div class="fa-regular fa-paper-plane"></div>
                            <h1>1. Klik Daftar</h1>
                        </div>
                        <div class="content-keunggulan">
                            <p>Klik Tombol daftar Dibawah ini, Anda akan Diarahkan Ke video zoom 1 tentang Program Ausbildung.</p>
                        </div>
                    </div>

                    <div class="child-keunggulan">
                        <div class="gambar-keunggulan">
                            <div class="fa-solid fa-crown"></div>
                            <h1>2. Video Zoom 1</h1>
                        </div>
                        <div class="content-keunggulan">
                            <p>Simak Video di penjelasan tentang program ausbildung di jalaman ini baik baik. Jangan tutup halaman atau anda harus mengulangi lagi dari awal. Setelah Selesai Anda akan otomatis diarahkan ke Video Zoom ke 2 untuk anda ikuti.</p>
                        </div>
                    </div>

                    <div class="child-keunggulan">
                        <div class="gambar-keunggulan">
                            <div class="fa-regular fa-star"></div>
                            <h1>3. Video Zoom 2</h1>
                        </div>
                        <div class="content-keunggulan">
                            <p>Simak Video Penjelasan program ausbildung ini baik baik, jangan tutup halaman atau anda harus mengulangi semua proses dari awal. Bersabar, Selangkah Lagi proses pendaftaran dimulai. Setelah Selesai anda akan otomatis diarahkan ke halaman pendaftaran.</p>
                        </div>
                    </div>

                </div>

                <div class="container-keunggulan">
                    <div class="child-keunggulan">
                        <div class="gambar-keunggulan">
                            <div class="fa-solid fa-dice"></div>
                            <h1>4. Mengisi Formulir Pendaftaran</h1>
                        </div>
                        <div class="content-keunggulan">
                            <p>Selamat, Hingga sejauh ini, anda kini bisa mengisi formulir pendaftaran. Isi semua dengan lengkap ya. Simpan password anda baik baik. Ini akan digunakna untuk login ke member area nanti.</p>
                        </div>
                    </div>

                    <div class="child-keunggulan">
                        <div class="gambar-keunggulan">
                            <div class="fa-solid fa-shuttle-space"></div>
                            <h1>5. Pembayaran</h1>
                        </div>
                        <div class="content-keunggulan">
                            <p>Selesaikan administrasi pembayaran segera ya, ini untuk mengaktifkan akun anda. Dan Dilanjutkan ke proses selanjutnya</p>
                        </div>
                    </div>

                    <div class="child-keunggulan">
                        <div class="gambar-keunggulan">
                            <div class="fa-solid fa-stamp"></div>
                            <h1>6. Cetak MOU</h1>
                        </div>
                        <div class="content-keunggulan">
                            <p>Setelah melakukan pembayaran, anda bisa login ke akun anda dimana url nya diberikan otomatis saat proses pendaftaran dan dikirimkan notif via whatsap. Setelah anda login, anda bisa melengkapi data diri di member area dan mencetak surat perjanjian / MOU</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="footer-group">
            <div class="sub-footer-group">
                <!-- header -->
                <div class="heading">
                    <div class="words">
                        <p id="animation-section5" class="p1">Bersiap Mendaftar</p>
                        <h2>Program Ausbildung Jerman</h2>
                        <p id="animation-section5" class="p2">Pastikan anda sudah memahami syarat dan ketentuan yang berlaku sebelum melakukan pendaftaran.</h3>

                    </div>
                    <!-- form -->
                    <a href="https://idbcinternational.com/pendaftaran-2/">
                        <button class="register-btn">DAFTAR</button>
                    </a>
                </div>
                <!-- end of header -->
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