<?php
	session_start();
	include 'koneksi.php';
	$id = $_GET['id'];
	$sid = session_id();

	$data = mysqli_query($koneksi, "SELECT jenisproduk FROM keranjang WHERE jenisproduk='$id' AND jumlahpesanan='$sid'");
	$datanya = mysqli_num_rows($data);
	if ($datanya == 0) {
		mysqli_query($koneksi, "INSERT INTO keranjang(jenisproduk, jumlahpesanan) VALUES('$id', 1)");
	}else {
        mysqli_query($koneksi, "UPDATE keranjang 
        	SET jumlahpesanan=jumlahpesanan+1
        	WHERE jenisproduk='$id' AND jumlahpesanan='$sid'");       
    }   
    header('Location:keranjang.php');
?>