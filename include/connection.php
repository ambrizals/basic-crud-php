<?php
	include 'app_config.php';
	
	$koneksi = new mysqli($database['host'],$database['username'],$database['password'],$database['dbname']);
	if ($koneksi->connect_error){
		die('Connection Failed : '. $koneksi->connect_error);
	}

	function login($username, $password){
		$query = 'select * from tb_user where (nama_user = "'.$username.'" ) & (password_user = "'.$password.'")';
		return $query;
	}

	function addPelanggan($nama, $alamat, $notelp, $emailpelanggan){
		$query = "INSERT INTO tb_pelanggan (nama_pelanggan, alamat, no_telp, email) VALUES('".$nama."', '".$alamat."', '".$notelp."', '".$emailpelanggan."')";
		return $query;
	}

	function listPelanggan(){
		$query = "SELECT * FROM tb_pelanggan";
		return $query;
	}

	function viewPelanggan($id){
		$query = "SELECT * FROM tb_pelanggan WHERE id_pelanggan='".$id."'";
		return $query;
	}

	function updatePelanggan($id,$nama,$alamatpelanggan,$notelp,$emailpelanggan){
		$query = "UPDATE tb_pelanggan SET nama_pelanggan='".$nama."', alamat='".$alamatpelanggan."', no_telp='".$notelp."', email='".$emailpelanggan."' WHERE id_pelanggan='".$id."'";
		return $query;
	}

	function listMobil(){
		$query = "SELECT * FROM tb_mobil";
		return $query;
	}

	function addMobil($nama,$hargasewa,$nopolisi){
		$query = "INSERT INTO tb_mobil (nama_mobil,harga_sewa,no_pol) VALUES('".$nama."', '".$hargasewa."', '".$nopolisi."')";
		return $query;
	}

	function listTransaksi(){
		$query = 'select * from tb_transaksi_sewa inner join tb_pelanggan on tb_transaksi_sewa.id_pelanggan = tb_pelanggan.id_pelanggan';
		return $query;
	}

	function viewTransaksi($id){
		$query = 'select * from tb_transaksi_sewa where id_transaksi = "'.$id.'"';
		return $query;
	}