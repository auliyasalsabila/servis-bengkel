<?php
include 'koneksi.php';

$id = $_POST['id'];
$jenisproduk = $_POST['jenisproduk'];
$hargaproduk = $_POST['hargaproduk'];

mysqli_query($koneksi, "UPDATE produk SET jenisproduk='$jenisproduk', hargaproduk='$hargaproduk' WHERE jenisproduk='$id'");

header("location:produk.php");

?>