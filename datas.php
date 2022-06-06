<?php 
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Jasa Service</title>
</head>
<body>
	<a href="service.php">Kembali</a><br>
	<a href="tambahservice.php">+</a>
	<center>
		<h3>Data Jasa Service</h3>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>Jenis Jasa Service</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
			<?php
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM service");
			while ($datanya = mysqli_fetch_array($data)) {
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<td><?php echo $datanya['jenisservice']; ?></td>
				<td><?php echo $datanya['harga']; ?></td>
				<td>
					<a href="editservice.php?id=<?php echo $datanya['jenisservice']; ?>">Edit</a>
					<a href="hapusservice.php?id=<?php echo $datanya['jenisservice']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</center>
	<a href="#">Buat Pesanan</a>
</body>
</html>