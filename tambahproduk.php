<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
</head>
<body>
	<h3>Tambah Produk</h3>
	<br/>
	<br/>
	<a href="dashboard.php">Kembali</a>
	<br/>
	<br/>
	<form method="post" action="tambahnyaproduk.php">
		<table>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="jenisproduk"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="hargaproduk"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>