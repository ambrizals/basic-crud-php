<?php
	// Load file koneksi.php
	include "include/connection.php";
	// Ambil Data yang Dikirim dari Form
	$id = $_POST['id_pelanggan'];
	$nama = $_POST['nama_pelanggan'];
	$alamatpelanggan = $_POST['alamat'];
	$notelp = $_POST['no_telp'];
	$emailpelanggan = $_POST['email'];

	$query = $koneksi->query(addPelanggan($nama,$alamatpelanggan,$notelp,$emailpelanggan));
	if ($query == TRUE){
		setcookie('pesan','Data berhasil ditambah !',time()+60);
		header('Location:pelanggan.php');
	} else {
		setcookie('pesan','Data tidak berhasil ditambah : '.$koneksi->error, time()+60);
		header('Location:pelanggan.php');
	}
?>