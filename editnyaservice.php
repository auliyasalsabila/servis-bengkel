<?php
include 'koneksi.php';

$id = $_POST['id'];
$jenisservice = $_POST['jenisservice'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "UPDATE service SET jenisservice='$jenisservice', harga='$harga' WHERE jenisservice='$id'");

header("location:datas.php");

?>