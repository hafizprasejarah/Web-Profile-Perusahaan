<?php 
include 'koneksi.php';


session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    
    //fetch from the database in order to delete thumbnail from image folder\
    $query = "SELECT * FROM post WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    //mamke sure only have 1 record
    if(mysqli_num_rows($result) == 1){
        $post = mysqli_fetch_assoc($result);
        $thumbnail_name = $post['thumbnail'];
        $thumbanil_path = "../thumbnail/".$thumbnail_name;

        if($thumbanil_path){
            unlink($thumbanil_path);

            //delete post from database

            $delete_post_qury = "DELETE FROM POST WHERE id=$id LIMIT 1";
            $delete_post_result = mysqli_query($koneksi, $delete_post_qury);

            if(!mysqli_errno($koneksi)){
                $_SESSION['delete-post-success'] = "Post deleted successfully";
            }
        }
    }
    header('location:index.php');
    die();
}
