<?php 
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<div class="struk">
		<h1>Maju Motor</h1>
		<hr>
		<div class="tanggal">
			<?php 
			date_default_timezone_set('Asia/Jakarta');
			$tanggal = date('d F y');
			echo $tanggal . "&nbsp";
			$waktu = date('H:i');
			echo $waktu;
			echo "<br>";
			?>
		</div>
		<div class="isi">
			<hr>
			<?php
			$totalharga = 0;
			$data = mysqli_query($koneksi, "SELECT * FROM keranjang");
			while ($datanya = mysqli_fetch_array($data)) {
			$subtotal = $datanya['harga'] * $datanya['jumlah'];
			$totalharga += $subtotal;
			?>
			<div class="kiri">
				<?php echo $datanya['jenisservice']; ?>
				<br>
				<?php echo $datanya['jumlah'] . " x " . "Rp. " . number_format($datanya['harga'],2,',','.'); ?>
				<br>
			</div>
			<div class="kanan">
				<?php echo "Rp. " . number_format($subtotal,2,',',','); ?>
			</div>
			<?php
			}
			?>
			<div class="foot">
				<hr>
				<?php echo "Rp. " . number_format($totalharga,2,',','.'); ?>
				<br>
			<br>
			</div>
			<hr>
		</div>
		<div class="footer">
			<p>Terima Kasih! <br>Selamat Datang Kembali</p>
			<i>Jl. --------------</i>
		</div>
	</div>
	<br>
	<button onclick="window.print();">Print</button>
</center>
</body>
</html>