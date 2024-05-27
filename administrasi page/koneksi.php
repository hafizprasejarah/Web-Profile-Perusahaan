<?php

$db_name = "article";
$user = "Hafiz";
$password = "kawuloalit";
$server = "localhost";

$koneksi = mysqli_connect($server, $user, $password, $db_name);

if(!$koneksi){
    die('koneksi gagal'.mysqli_connect_error());
}

?>