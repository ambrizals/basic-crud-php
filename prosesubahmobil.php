<?php
// Load file koneksi.php
include "koneksidb.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id_mobil'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama_mobil'];
$hargasewa = $_POST['harga_sewa'];
$nopolisi = $_POST['no_pol'];
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tb_mobil WHERE id_mobil='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    
    // Proses ubah data ke Database
    $query = "UPDATE tb_mobil SET nama_mobil='".$nama."', harga_sewa='".$hargasewa."', no_pol='".$nopolisi."' WHERE id_mobil='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: indexmobil.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='formubahmobil.php'>Kembali Ke Form</a>";
    }
?>