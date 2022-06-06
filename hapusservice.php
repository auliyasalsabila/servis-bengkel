<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM service WHERE jenisservice='$id'");

header("location:datas.php");
?>