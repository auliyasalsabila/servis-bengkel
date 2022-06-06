<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM produk WHERE jenisproduk='$id'");

header("location:produk.php");
?>