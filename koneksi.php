<?php
	$koneksi = mysqli_connect("localhost", "root", "", "bengkel");
	if (mysqli_connect_errno()) {
	echo "Koneksi Gagal " . mysqli_connect_errno();
	}
?>