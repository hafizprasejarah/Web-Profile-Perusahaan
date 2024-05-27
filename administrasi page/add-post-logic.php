<?php
require 'koneksi.php';

session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {
    $author_id = $admin_id;
    $judul = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['judul']));
    $konten = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['content']));
    $kategori_id = filter_var($_POST['kategori'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    // set if to zero when featured is unchecked
    $is_featured =  $is_featured == 1 ?: 0;

    //validate form
    if (!$judul) {
        $_SESSION['add-post'] ='Enter Post Title';
    } else if (!$kategori_id) {
        $_SESSION['add-post'] = 'Select Post Category';
    } else if (!$konten) {
        $_SESSION['add-post'] = 'Enter The Body Post';
    } else if (!$thumbnail['name']) {
        $_SESSION = "Choose Post Thumbnail";
    } else {
        //work in thumbnail
        //rename the image
        $time = time();
        $thumbnail_name = $time . $thumbnail['name'];
        $thumbnail_tmp_name = $thumbnail['tmp_name'];
        $thumbnail_destination_path  = '../thumbnail/'.$thumbnail_name;

        // make sure that the file is an image
        
        $allowed_files = ["jpg","png","jpeg"];
        $ekstensi = explode('.',$thumbnail_name);
        $ekstensi = end($ekstensi);

        if(in_array($ekstensi,$allowed_files)){

            //make sure image is not to big ();
            if($thumbnail['size'] < 5_000_000){
                // upload thumbnail
                move_uploaded_file($thumbnail_tmp_name,$thumbnail_destination_path);
            }else{
                $_SESSION['add-post'] = 'File size is too big. Should be less than 5mb';
            }
        }else{
            $_SESSION['add-post'] ='File should be png, jpg, or jpeg'; 
        }
    }

    // redirect back to the add-post page if there is any problem
    if(isset($_SESSION['add-post'])){
            $_SESSION['add-post-data'] = $_POST;
            header('location:add-post.php');
            die();
    }else{
        // set the featured of all post to zero(false) if featured in this post is 1(true) 
        if ($is_featured == 1) {
            $zero_all_featured_query= "UPDATE post SET featured=0";
            $zero_all_featured_result =mysqli_query($koneksi, $zero_all_featured_query);
        } 
        
        $query = "INSERT INTO `post` (judul, konten, thumbnail, category_id ,author_id ,featured) values 
        ('$judul','$konten','$thumbnail_name',$kategori_id,$author_id,$is_featured)";
        $result = mysqli_query($koneksi, $query);

        if (!mysqli_errno($koneksi)) {
            $_SESSION['add-post-success'] = 'new post added successfully';
            header('location:index.php');
            die();
        }
        
    }


}
header('location:add-post.php');
die();
