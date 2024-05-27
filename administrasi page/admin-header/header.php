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
            <div id="user-btn" class="fa-solid fa-user"></div>
            <a href="../index.php">
                <div id="home-btn" class="fa-solid fa-house"></div>
            </a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </div>
</header>

<!-- acount box & admin menu -->
<section>
    <div class="wrapper-profil">
        <div class="sub-wrapper-profil">
            <div class="container-profil">
                <div class="account-box">
                    <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
                    <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
                    <a href="index.php"><p>dashboard</p></a>
                    <a href="logout.php" class="delete-btn"><button>log out</button></a>
                </div>
            </div>
        </div>
    </div>
</section>