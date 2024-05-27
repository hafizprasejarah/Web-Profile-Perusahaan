<?php
include 'administrasi page/koneksi.php';




// fetch only 9 post to the article page
$query = "SELECT * FROM post ORDER BY tanggal DESC LIMIT 3";
$result = mysqli_query($koneksi, $query);



?>



    <div class="wrapper">
        <div class="sub-wrapper article">
            <div class="title-section-2">
                <h4>Articles</h4>
                <h1>Artikel dan Berita Terbaru</h1>
                <p>Silahkan Membaca Artikel Pendukung Program Ausbildung Jerman</p>
            </div>
            <div class="btn-article">
                <a href="article-page.php"><button>NEWS</button></a>
            </div>
            <div class="containers-article">
                <?php while ($post = mysqli_fetch_assoc($result)) : ?>
                    <article class="child-article">
                        <div class="thumbnail-wrapper">

                            <img src="thumbnail/<?= $post['thumbnail'] ?>" alt="">
                        </div>
                        <div class="content-article">
                            <div class="category">
                                <?php
                                $kategori_id = $post['category_id'];
                                $kategori_query = "SELECT * FROM kategori WHERE id=$kategori_id";
                                $kategori_result = mysqli_query($koneksi, $kategori_query);
                                $kategori = mysqli_fetch_assoc($kategori_result);
                                ?>
                                <a href="category.php?id=<?= $kategori['id']?>" class="category-btn"><?= $kategori['judul'] ?></a>
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
