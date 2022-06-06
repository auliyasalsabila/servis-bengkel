<?php
include 'koneksi.php';

$id = $_POST['id'];
$jenisservice = $_POST['jenisservice'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO service VALUES('$jenisservice', '$harga')");

header("location:datas.php");

?>