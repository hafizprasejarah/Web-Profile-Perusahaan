<?php
require 'koneksi.php';

session_start();
$admin_id = $_SESSION["admin_id"];


if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $judul = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['judul']));
    $konten = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['content']));
    $kategori_id = filter_var($_POST['kategori'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    // set if to zero when featured is unchecked
    $is_featured =  $is_featured == 1 ?: 0;


    //validate form
    if (!$judul) {
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form data on edit post page";
    } else if (!$kategori_id) {
        $_SESSION['edi-post'] = "Couldn't update post. Invalid form data on edit post page";
    } else if (!$konten) {
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form data on edit post page";
    } else {
        //delete existing thumbnail if new thumbnail is available
        if ($thumbnail['name']) {
            $previous_thumbnail_path = "../thumbnail/" . $previous_thumbnail_name;
            if ($previous_thumbnail_path) {
                unlink($previous_thumbnail_path);
            }

            // work ON NEW thumbnail
            // rename the thumbnail to make sure that there is no duplicate image name
            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path  = '../thumbnail/' . $thumbnail_name;

            // make sure that the file is an image

            $allowed_files = ["jpg", "png", "jpeg"];
            $ekstensi = explode('.', $thumbnail_name);
            $ekstensi = end($ekstensi);

            if (in_array($ekstensi, $allowed_files)) {

                //make sure image is not to big ();
                if ($thumbnail['size'] < 5_000_000) {
                    // upload thumbnail
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                } else {
                    $_SESSION['edit-post'] = 'File size is too big. Should be less than 5mb';
                }
            } else {
                $_SESSION['edit-post'] = 'File should be png, jpg, or jpeg';
            }
        }
    }

    // redirect back to the add-post page if there is any problem
    if (isset($_SESSION['edit-post'])) {
        header('location:index.php');
        die();
    } else {
        // set the featured of all post to zero(false) if featured in this post is 1(true) 
        if ($is_featured == 1) {
            $zero_all_featured_query = "UPDATE post SET featured=0";
            $zero_all_featured_result = mysqli_query($koneksi, $zero_all_featured_query);
        }

        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;
        $query = "UPDATE post SET judul='$judul', konten='$konten', thumbnail='$thumbnail_to_insert', category_id=$kategori_id, featured=$is_featured WHERE id=$id LIMIT 1 ";
        $result = mysqli_query($koneksi, $query);

        if (!mysqli_errno($koneksi)) {
            $_SESSION['add-post-success'] = 'post updated successfully';
        }
    }
}
header('location:index.php');
die();
