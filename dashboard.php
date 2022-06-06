<?php 
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
	<div class="db">
		<h1>Maju Motor</h1>
		<div class="out">
			<?php
			echo $_SESSION['username'];
			?><br>
			<div class="logout">
				<a href="logout.php" onclick="return confirm('Yakin Ingin Loguot?')">Logout</a>
			</div>
		</div>
	</div>
	<div class="menu">
		<ul>
			<li><a href="service.php">Service</a></li>
			<li><a href="produk.php">Produk</a></li>
		</ul>
	</div>
</body>
</html>