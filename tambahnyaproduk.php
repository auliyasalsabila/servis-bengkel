<?php
include 'koneksi.php';

$id = $_POST['id'];
$jenisproduk = $_POST['jenisproduk'];
$hargaproduk = $_POST['hargaproduk'];

mysqli_query($koneksi, "INSERT INTO produk VALUES('$jenisproduk', '$hargaproduk')");

header("location:produk.php");

?>