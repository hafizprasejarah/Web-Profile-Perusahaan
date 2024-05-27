<?php 
include 'koneksi.php';

session_start();
$id = $_SESSION['id'];

if(isset($_POST['submit'])){
    $judul = htmlspecialchars((mysqli_real_escape_string($koneksi, $_POST['judul'])));
    $deskripsi = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['deskripsi']));

    if(!$judul || !$deskripsi){
        $message[] = "invalid form input on edit page";
    }else{
        $query ="UPDATE kategori SET judul='$judul', deskripsi='$deskripsi'where id='$id' LIMIT 1";
        $result= mysqli_query($koneksi, $query);

        if(!mysqli_errno($koneksi)){
            $_SESSION['add-category-success'] = "Category edit successfully";
        }else{
            $_SESSION['add-category-success'] = "Failed to edit the category";
        }
    }
}

header('location:manage-category.php');
die();