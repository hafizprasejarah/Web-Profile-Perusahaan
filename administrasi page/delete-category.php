<?php
include 'koneksi.php';
session_start();

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query_delete = "SELECT * FROM kategori WHERE id=$id";
    $delete_result = mysqli_query($koneksi, $query_delete);

    //update category id of post that belong to this category_id of uncategorized category
    $update_query = "UPDATE post SET category_id= 29 WHERE category_id=$id";
    $update_result = mysqli_query($koneksi, $update_query);
    if (!mysqli_errno($koneksi)) {
        if (mysqli_num_rows($delete_result) == 1) {
            $query = "DELETE FROM kategori Where id =$id LIMIT 1";
            $result = mysqli_query($koneksi, $query);

            if (!mysqli_errno($koneksi)) {
                $_SESSION['delete-category-success'] = "category deleted successfully";
            }
        }
    }


    header('location:manage-category.php');
    die();
}
