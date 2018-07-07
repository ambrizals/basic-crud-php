<?php
	session_start();
	if (isset($_SESSION['username'])){
		session_destroy();
	} else {
		setcookie('pesan','Anda tidak bisa logout tanpa login', time()+60);
	}
	header('location:login.php');
?>