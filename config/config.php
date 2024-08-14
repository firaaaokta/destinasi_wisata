<?php
$host="localhost";
$user="root";
$password="";
$database="db_wisata";
$connect=mysqli_connect($host,$user, $password, $database);
echo "koneksi ke database berhasil !!";
if(!$connect) {
    die("gagal terhubung ke database :". mysqli_connect_error());
}
?>