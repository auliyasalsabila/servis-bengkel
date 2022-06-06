<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Jasa Service</title>
</head>
<body>
	<h3>Edit Data Jasa Service</h3>
	<br/>
	<br/>
	<a href="dashboard.php">Kembali</a>
	<br/>
	<br/>
	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM service WHERE jenisservice='$id'");
	while ($datanya = mysqli_fetch_array($data)){
	?>
	<form method="post" action="editnyaservice.php">
		<table>
			<tr>
				<td>Jenis Jasa Service</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $datanya['jenisservice']; ?>">
					<input type="text" name="jenisservice" value="<?php echo $datanya['jenisservice']; ?>">
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" value="<?php echo $datanya['harga']; ?>"></td>
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