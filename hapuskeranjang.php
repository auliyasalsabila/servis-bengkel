<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM keranjang WHERE jenisproduk='$id'");

header("location:dashboard.php");
?>