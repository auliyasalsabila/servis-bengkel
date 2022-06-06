<?php 
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Produk</title>
</head>
<body>
	<a href="dashboard.php">Kembali</a>
	<center>
		<h3>Produk</h3><br><br>
		<form action="produk.php" method="get">
			<label>Cari :</label>
			<input type="text" name="cari">
			<input type="submit" value="Cari">
		</form>
		<br>
		<?php 
			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				echo "<b>Hasil pencarian : ".$cari."</b>";
			}
			?>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
			<?php 
			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$data = mysqlI_query($koneksi, "SELECT * FROM produk WHERE jenisproduk LIKE '%".$cari."%'");				
			}else{
				$data = mysqli_query($koneksi, "SELECT * FROM produk");		
			}
			$no = 1;
			while($datanya = mysqli_fetch_array($data)){
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<td><?php echo $datanya['jenisproduk']; ?></td>
				<td><?php echo $datanya['hargaproduk']; ?></td>
				<td>
					<a href="keranjangnya.php?id=<?php echo $datanya['jenisproduk']; ?>">Beli</a><br>
					<a href="editproduk.php?id=<?php echo $datanya['jenisproduk']; ?>">Edit</a>
					<a href="hapusproduk.php?id=<?php echo $datanya['jenisproduk']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
			}
			?>
			<tr>
				<td colspan="4"><a href="tambahproduk.php">+</a></td>
			</tr>
		</table>
	</center>
	<a href="#">Buat Pesanan</a><br>
	<a href="#">Data Penjualan</a>
</body>
</html>