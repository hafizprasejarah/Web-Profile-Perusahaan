<?php
include 'koneksi.php';

session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}




if (isset($_POST['submit'])) {
    $judul = htmlspecialchars( mysqli_real_escape_string($koneksi, $_POST['title']));
    $deskripsi = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['description']));


    $select_category = mysqli_query($koneksi, "SELECT * FROM `kategori` WHERE judul = '$judul' AND deskripsi ='$deskripsi'") or die('query failed');
    if (mysqli_num_rows($select_category) > 0) {
        $message[] = 'category already exist';
    } else {

        $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "INSERT INTO  `kategori` (judul,deskripsi) values ('$judul','$deskripsi')")
            or die('query failed');
        $message[] = 'sucessfully added category ';
        header('location:manage-category.php');

        if(!mysqli_errno($koneksi)){
            $_SESSION['add-category-success'] = "Category added successfully";
        }else{
            $_SESSION['add-category-success'] = "Failed added the category";
        }
    }
}
?>

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
                <div class="container-form" >
                    <form action="" enctype="multipart/form-data" method="post">
                        <h3>Add Category</h3>
                        <input type="text" name="title" placeholder="Title" required class="judul" autocomplete="off" required maxlength="20">
                        <textarea name="description" id="" rows="4" placeholder="Description" class="content" required ></textarea>
                        <input type="submit" name="submit" value="Add Category" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php require 'admin-header/footer.php'; ?>

</body>

</html>