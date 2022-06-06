<?php
	session_start();
	$_SESSION['username'] = "";
	echo '<script>alert("Yakin Ingin Logout")</script>';
	header("location:login.php");
	exit;
?>