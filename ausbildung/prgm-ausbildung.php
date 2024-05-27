<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ausbildung-menu</title>
    <link rel="icon" href="../img/3.png">


    <!-- link css -->
    <link rel="stylesheet" href="../style/style-ausbildung.css">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css ">

    <!-- link java script -->
    <script defer src="../script/scriptausbildung.js"></script>

</head>

<body>
    <!-- navigasi bar -->
    <header class="header">

        <div class="header-1">
            <a href="../index.php">
                <div class="logo"><img src="../img/logo.png"></div>
            </a>

            <!-- navbar -->
            <nav class="navbar">
                <ul>

                    <li class="dropdown">
                        <p class="btn-drpdwn">IIDBC <i class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>tentang iidbc</h1>
                                <a href="../iidbc.php">
                                    <div class="dropdown-btn">Mengenal IIDBC <span>-></span></div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="../iidbc/about.php">tentang perusahaan</a></li>
                                    <li><a class="link" href="../iidbc/iidbc-blackforest.php">IDBC International dan BLACKFOREST fect</a></li>
                                    <li><a class="link" href="../iidbc/masapendidikan.php">pendidikan</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="btn-drpdwn" id="current-page">ausbildung <i class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-menu">
                            <div class="box-title">
                                <h1>ausbildung</h1>
                                <a href="../ausbildung.php">
                                    <div class="dropdown-btn">tentang ausbildung <span>-></span></div>
                                </a>
                            </div>
                            <div class="box-title">
                                <ul>
                                    <li><a class="link" href="prgm-ausbildung.php">Program Ausbildung</a></li>
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
                <a href="../article-page.php"><div class="fa-regular fa-newspaper"></div></a>
                <a href="../index.php"><div id="home-btn" class="fa-solid fa-house"></div></a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

        </div>
    </header>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Tentang Program Ausbildung di jerman</h1>
                <p class="second-title">Seputar Program Ausbildung di Jerman</p>

                <div class="container-about-program">
                    <div class="child-about-program">
                        <div class="box-number">
                            <p>1</p>
                        </div>
                        <div class="card">
                            <div class="title">Program Pendidikan resmi</div>
                            <div class="content">
                                Ausbildung merupakan program pendidikan resmi Pemerintah Jerman dalam bidang vokasi dan profesi untuk jenjang lanjutan setelah SLTA. Program ini gratis dan bahkan setiap peserta program mendapatkan gaji bulanan dari training industri yang menjadi porsi terbesar dari kegiatan program ini.
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 2 </p>
                        </div>
                        <div class="card">
                            <div class="title">Tidak ada padanannya</div>
                            <div class="content">
                                Ausbildung merupakan program kolaborasi dan sinergi segitiga yang kuat dan telah teruji antara Pemerintah, Industri dan Pendidikan. Program ini ada regulasi atau payung hukum resmi di Jerman.
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 3 </p>
                        </div>
                        <div class="card">
                            <div class="title">sinergi segitiga</div>
                            <div class="content">
                                Di dalam program Ausbildung terdapat lebih dari 300 jurusan industri, seperti : Perhotelan, Keperawatan, Sistem Gastronomi, Asisten Dokter, teknik otomotif, teknik perkapalan, teknik mesin, elektro, sipil, IT, bangunan, Optician, Masinis KA, Operator Menara Bandara, asisten dokter, dll
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 4 </p>
                        </div>
                        <div class="card">
                            <div class="title">Jurusan industri</div>
                            <div class="content">
                                Di dalam program Ausbildung terdapat lebih dari 300 jurusan industri, seperti : Perhotelan, Keperawatan, Sistem Gastronomi, Asisten Dokter, teknik otomotif, teknik perkapalan, teknik mesin, elektro, sipil, IT, bangunan, Optician, Masinis KA, Operator Menara Bandara, asisten dokter, dll
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 5 </p>
                        </div>
                        <div class="card">
                            <div class="title">Porsi kegiatan ausbildung</div>
                            <div class="content">
                                Porsi kegiatan ausbildung - teori : 30% sd 35%, - praktek lapangan/industri : 65% sd 70%
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 6 </p>
                        </div>
                        <div class="card">
                            <div class="title">Lama Program</div>
                            <div class="content">
                                Lama menjalankan program : 2, 3, atau 4 tahun tergantung jurusan/bidang yang dipilih.
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 7 </p>
                        </div>
                        <div class="card">
                            <div class="title">Sertifikat Profesi</div>
                            <div class="content">
                                Setelah lulus program ausbildung akan mendapatkan SERTIFIKAT PROFESI yang bisa diterima bekerja di dunia industri di Jerman dan Uni Eropa.
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 8 </p>
                        </div>
                        <div class="card">
                            <div class="title">Bukan program kerja magang</div>
                            <div class="content">
                                Ausbildung bukan program kerja magang atau balai latihan kerja (BLK)
                            </div>
                        </div>
                    </div>

                    <div class="child-about-program">
                        <div class="box-number">
                            <p> 9 </p>
                        </div>
                        <div class="card">
                            <div class="title">Proses Terbuka Lebar</div>
                            <div class="content">
                                Ausbildung bukan program kuliah untuk mendapatkan gelar akademik. Namun demikian, jika ingin melanjutkan ke kuliah untuk mendapatkan gelar Akademik, PROSES nya Terbuka Lebar dan LEBIH MUDAH.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Benefit Ausbildung</h1>


                <div class="container-wrapper-benefit">
                    <div class="container-benefit">
                        <div class="child-benefit">

                            <div class="card">
                                <div class="title">Program Pendidikan resmi</div>
                            </div>
                        </div>

                        <div class="child-benefit">
                            <div class="card">
                                <div class="title">Tidak ada padanannya</div>
                            </div>
                        </div>

                        <div class="child-benefit">
                            <div class="card">
                                <div class="title">sinergi segitiga</div>
                            </div>
                        </div>

                    </div>
                    <div class="timeline">
                        <div class="box-number">
                            <p>1</p>
                        </div>

                        <div class="box-number">
                            <p>2</p>
                        </div>

                        <div class="box-number">
                            <p>3</p>
                        </div>
                    </div>
                    <div class="container-benefit">
                        <div class="child-benefit">
                            <div class="card">
                                <div class="title">Porsi kegiatan ausbildung</div>
                            </div>
                        </div>

                        <div class="child-benefit">
                            <div class="card">
                                <div class="title">Lama Program</div>
                            </div>
                        </div>

                        <div class="child-benefit">
                            <div class="card">
                                <div class="title">Sertifikat Profesi</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Keunggulan Ausbildung</h1>
                <p class="second-title">Ini Adalah Keunggulan Program Ausbildung</p>
                <div class="container-slide">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <div class="carousel">

                        <div class="card">
                            <div class="profile">
                                <div class="img-wrapper">
                                    <img src="../img/sidbc.png" draggable="false">
                                </div>
                                <h1 class="title">Kuliah & bekerja</h1>
                            </div>
                            <div class="content">
                                <p>Bagian dari sistem pendidikan tinggi di Jerman dengan sertifikat profesi</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="profile">
                                <div class="img-wrapper">
                                    <img src="../img/Logo-AFLAHA-a.png" draggable="false">
                                </div>
                                <h1 class="title">Karir Development</h1>
                            </div>
                            <div class="content">
                                <p>Kesempatan berkembang dengan karir dan hasil penghasilan lebih besar pasca kelulusan</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <div class="img-wrapper">
                                    <img src="../img/logo BF.png" draggable="false">
                                </div>
                                <h1 class="title">Biaya Sangat Terjangkau</h1>
                            </div>
                            <div class="content">
                                <p>Biaya Persiapan dan keberangkatan relatif murah, terjangkau dan gratis biaya studi</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <div class="img-wrapper">
                                    <img src="../img/alwustho.png" draggable="false">
                                </div>
                                <h1 class="title">Penghasilan</h1>
                            </div>
                            <div class="content">
                                <p>Mendapat penghasilan yang meningkat setiap tahun Menjadi mandiri secara finansial</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <div class="img-wrapper">
                                    <img src="../img/kit.jpg" draggable="false">
                                </div>
                                <h1 class="title">Professional</h1>
                            </div>
                            <div class="content">
                                <p>Pekerja profesional, gaji profesional pasca kelulusan Bukan kontrak magang, tanpa batasan waktu tinggal</p>
                            </div>
                        </div>


                    </div>
                    <i id="right" class="fa-solid fa-angle-right"></i>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Persyaratan Ausbildung</h1>
                <div class="syarat-container">
                    <div class="timeline-syarat"></div>
                    <div class="timeline-syarat2"></div>

                    <div class="card-group">

                        <div class="card-right">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="title-syarat">
                                <p>PEMAHAMAN</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Memahami secara sempurna tentang Program Ausbildung.
                                </p>
                            </div>

                        </div>
                        <div class="card-left">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <div class="title-syarat">
                                <p>TATA TERTIB</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Sanggup mentaati tata tertib dan peraturan yang dibuat baik saat di Indonesia ataupun di German.
                                </p>
                            </div>
                        </div>

                        <div class="card-right">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div class="title-syarat">
                                <p>pendaftaran</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Mendaftar diri untuk mengikuti Program Ausbildung.
                                </p>
                            </div>

                        </div>

                        <div class="card-left">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div class="title-syarat">
                                <p>administrasi</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Membayar biaya Administrasi yang telah ditentukan.
                                </p>
                            </div>
                        </div>

                        <div class="card-right">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-mug-hot"></i>
                            </div>
                            <div class="title-syarat">
                                <p>Kursus</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Mengikuti Pendidikan Persiapan dan Kursus Bahasa Jerman hingga level B2 di IDBC atau lembaga lain yang ditunjuk.
                                </p>
                            </div>

                        </div>

                        <div class="card-left">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-folder-open"></i>
                            </div>
                            <div class="title-syarat">
                                <p>Ijazah</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Memiliki minimal Ijazah SLTA.
                                </p>
                            </div>
                        </div>

                        <div class="card-right">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-child"></i>
                            </div>
                            <div class="title-syarat">
                                <p>Sehat</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Sehat jasmani dan Rohani.
                                </p>
                            </div>

                        </div>

                        <div class="card-left">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-dumbbell"></i>
                            </div>
                            <div class="title-syarat">
                                <p>Sanggup</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Sanggup untuk tinggal di luar Negeri selama minimal 2-4 tahun.
                                </p>
                            </div>
                        </div>

                        <div class="card-right">
                            <!-- box -->
                            <div class="box">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div class="title-syarat">
                                <p>Perjanjian</p>
                            </div>
                            <!-- /card-content -->
                            <div class="card-content">
                                <p>
                                    Menandatangi surat perjanjian.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Beberapa Contoh Bidang Ausbildung</h1>
                <p class="second-title"> Bidang Jasa Krusial</p>

                <div class="container-iidbc-blackforest">
                    <div class="child-iidbc-blackforest">
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-code"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Perhotelan <br>
                                    Restaurant <br>
                                    Chef <br>
                                    System Gastronomy <br>
                                    Design Interior <br>
                                    Asisten Konsultan Pajak
                                </p>
                            </div>
                        </div>
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-meteor"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Asuransi dan Finance <br>
                                    Masinis Kereta <br>
                                    Early Childhood Educator <br>
                                    Speech Therapist
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="child-iidbc-blackforest">
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-paper-plane"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Keperawatan <br>
                                    bidan <br>
                                    Fisioterapis <br>
                                    Rehabilitasi Medis <br>
                                    dan Ortopedi <br>
                                    Asisten Bedah <br>
                                </p>
                            </div>
                        </div>
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-fish"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Perawat Manula <br>
                                    Asisten Anesti <br>
                                    Hearing Aid acoustic <br>
                                    Aisten dokter gigi <br>
                                    Optician
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div class="sub-wrapper">
                <h1 class="main-title">Beberapa Contoh Bidang Ausbildung</h1>
                <p class="second-title">Bidang Teknik</p>

                <div class="container-iidbc-blackforest">
                    <div class="child-iidbc-blackforest">
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-database"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Teknik Pembangunan <br>
                                    Kendaraan, Aerospace <br>
                                    Kapal <br>
                                    Teknologi Informasi <br>
                                    Teknik Elektronika <br>
                                    Teknik Industri
                                </p>
                            </div>
                        </div>
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-leaf"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Mekatronik <br>
                                    Proses Mesin Agrikultur <br>
                                    Teknik Automasi <br>
                                    Komputer <br>
                                    Otomotif <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="child-iidbc-blackforest">
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-brands fa-pagelines"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Woodworking dan<br>
                                    Processing technology <br>
                                    Teknik Pemanas dan Insulasi <br>
                                    Bangunan <br>
                                    Meat Processing Technology <br>
                                    Colling System Technology <br>
                                </p>
                            </div>
                        </div>
                        <div class="group">
                            <div class="icon-title">
                                <div class="fa-solid fa-rocket"></div>
                            </div>
                            <div class="content-idbc">
                                <p>
                                    Software Developer <br>
                                    Teknik Sipil dan Bagunan <br>
                                    Proses dan Teknik Plastik <br>
                                    dan Rubber <br>
                                    Teknik Landscape
                                </p>
                            </div>
                        </div>
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