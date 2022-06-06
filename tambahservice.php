<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Jasa Service</title>
</head>
<body>
	<h3>Tambah Data Jasa Service</h3>
	<br/>
	<br/>
	<a href="dashboard.php">Kembali</a>
	<br/>
	<br/>
	<form method="post" action="tambahnyaservice.php">
		<table>
			<tr>
				<td>Jenis Jasa Service</td>
				<td><input type="text" name="jenisservice"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>