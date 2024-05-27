<?php 
include 'koneksi.php';

session_start();
$id = $_SESSION['id'];

if(isset($_POST['submit'])){
    $name = htmlspecialchars( mysqli_real_escape_string($koneksi, $_POST['name']));
    $username =htmlspecialchars( mysqli_real_escape_string($koneksi, $_POST['username']));
    $role = $_POST['role'];

    if(!$name || !$username){
        $message[] = "invalid form input on edit page";
    }else{
        $query ="UPDATE user SET name='$name', username='$username', role='$role' where id='$id' LIMIT 1";
        $result= mysqli_query($koneksi, $query);

        if(!mysqli_errno($koneksi)){
            $_SESSION['add-user-success'] = 'successfully edit the user';
        }
    }
}

header('location:manage-user.php');
die();

?>