<?php 
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
	<div class="login">
		<center>
			<h1>Maju Motor</h1>
			<br>
			<form method="post" class="log">
				<h3>Login</h3>
				<hr><br>
				<input type="text" name="username" placeholder="Username"><br><br><br>
				<input type="password" name="password" placeholder="Password"><br><br><br>
				<input type="submit" name="login" value="Login" class="logput"><br><br>
			</form>
	</div>
	
	<?php  
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = mysqli_query($koneksi, "SELECT * FROM pekerja WHERE username = '$username' AND password = '$password'");
			if (mysqli_num_rows($query) == 1) {
				$_SESSION['username'] = $username;
				header("location:dashboard.php");
			}else{
				echo '<script>alert("Username dan Password Anda Salah")</script>';
			}
		}
	?>
	</center>
</body>
</html>