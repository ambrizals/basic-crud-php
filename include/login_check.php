<?php
	session_start();
	if(isset($_SESSION['username'])){
		$flag_login = true;
	} else {
		$flag_login = false;
	}
	if($flag_login == false){
		header('Location:login.php');
		setcookie('pesan','Anda Harus Login Untuk Mengakses Sistem Ini !',time()+60);
	} else {
		return false;
	}