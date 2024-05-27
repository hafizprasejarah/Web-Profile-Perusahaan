<?php
include 'koneksi.php';
session_start();

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query_delete = "SELECT * FROM user WHERE id=$id ";
    $delete_result = mysqli_query($koneksi, $query_delete);

    // fetch all the thumbnail that the current user have in the database
    $query_thumbnail = "SELECT thumbnail FROM post WHERE author_id=$id";
    $thumbnail_result = mysqli_query($koneksi, $query_thumbnail);
    if(mysqli_num_rows($thumbnail_result) > 0){
            while($thumbnail = mysqli_fetch_assoc($thumbnail_result)){ 
                $thumbanil_path = "../thumbnail/".$thumbnail['thumbnail'];
                // delete thumbnail
                unlink($thumbanil_path);
            }
    }


    //make sure to only have 1 record
    if (mysqli_num_rows($delete_result) == 1) {
        $query = "DELETE FROM user Where id=$id LIMIT 1";
        $result = mysqli_query($koneksi, $query);

        if (!mysqli_errno($koneksi)) {
            $_SESSION['delete-user-success'] = "user deleted successfully";
        } else {
            $_SESSION['delete-user-success'] = "user updated failed";
        }
    }

    header('location:manage-user.php');
    die();
}
