<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Produk</title>
</head>
<body>
	<h3>Edit Produk</h3>
	<br/>
	<br/>
	<a href="dashboard.php">Kembali</a>
	<br/>
	<br/>
	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE jenisproduk='$id'");
	while ($datanya = mysqli_fetch_array($data)){
	?>
	<form method="post" action="editnyaproduk.php">
		<table>
			<tr>
				<td>Nama Produk</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $datanya['jenisproduk']; ?>">
					<input type="text" name="jenisproduk" value="<?php echo $datanya['jenisproduk']; ?>">
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="hargaproduk" value="<?php echo $datanya['hargaproduk']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="EDIT"></td>
			</tr>
		</table>
	</form>
	<?php 
	}
	?>
</body>
</html>