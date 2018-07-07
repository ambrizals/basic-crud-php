<?php
    include 'include/connection.php';
    include 'include/login_check.php';
?>
<html>
	<head>
		<title>Ubah Data Pelanggan</title>
		<link rel="stylesheet" href="assets/style.css">
	</head>
	<body>
        <?php
            $pagetitle = 'Ubah Data Pelanggan';
            include 'parts/header.php';
        ?>
		<?php
			// Ambil data NIS yang dikirim oleh index.php melalui URL
			$id = $_GET['id_pelanggan'];

			// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
			
			$sql = $koneksi->query(viewPelanggan($id));  // Eksekusi/Jalankan query dari variabel $query
			$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
		?>

		<div class="container">
			<form method="post" action="prosesubahpelanggan.php?id_pelanggan=<?php echo $id; ?>" enctype="multipart/form-data">
				<div class="form_group">
					<label for="nama_pelanggan" class="label">Nama Pelanggan :</label>
					<input type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan']; ?>" class="input_text"/>
				</div>
				<div class="form_group">
					<label for="alamat" class="label">Alamat :</label>
					<input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="input_text" />
				</div>
				<div class="form_group">
					<label for="no_telp" class="label">Nomor Telepon :</label>
					<input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" class="input_text"/>
				</div>
				<div class="form_group">
					<label for="email" class="label">E-Mail :</label>
					<input type="text" name="email" value="<?php echo $data['email']; ?>" class="input_text" />				
				</div>
				<hr>
				<input type="submit" value="Ubah">
				<a href="pelanggan.php"><input type="button" value="Batal"></a>
			</form>
		</div>
	</body>
</html>