<!DOCTYPE html>
<html>
	<head>
		<title>Login : Rental Mobil</title>
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>
	<body>
		<?php
			include 'include/connection.php';
			session_start();
			if(isset($_SESSION['username'])){
				$flag_login = true;
			} else {
				$flag_login = false;
			}
			if ($flag_login == true){
				header('Location:index.php');
			}
			if (isset($_POST['btnLogin'])){
				$data = $_POST['login'];
				$login = $koneksi->query(login($data['username'],$data['password']));
				$datalogin = $login->fetch_assoc();
				if ($login == true){
					if ($login->num_rows == 1){
						setcookie('pesan','Anda berhasil login !',time()+60);
						$_SESSION['username'] = $datalogin['nama_user'];
						$_SESSION['id'] = $datalogin['id_user'];
						header('Location:index.php');
					} else {
						setcookie('pesan','Gagal login !',time()+60);
						header('Location:login.php');
					}
				} else {
					echo "Error : ".$login->error;
				}
			}
		?>
		<h2 class="title">
			Login
		</h2>
		<form action="" method="POST" class="form_box">
			<?php
				if (isset($_COOKIE['pesan'])){
					echo $_COOKIE['pesan'];
					setcookie('pesan','',time());
				}
			?>
			<div class="form_group">
				<label for="username" class="label">Username : </label>
				<input type="text" name="login[username]" class="input_text" placeholder="Masukkan Nama User"/>
			</div>
			<div class="form_group">
				<label for="password" class="label">Password :</label>
				<input type="password" name="login[password]" class="input_text"/>
			</div>
			<button type="submit" name="btnLogin">Login</button>
		</form>
	</body>
</html>