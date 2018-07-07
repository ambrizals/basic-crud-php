<?php
// Load file koneksi.php
include "koneksidb.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id_transaksi'];
// Ambil Data yang Dikirim dari Form
$idmobil = $_POST['id_mobil'];
$hargasewa = $_POST['harga_sewa'];
$jumlahsewa = $_POST['jumlah_sewa'];
$totalsewa = $_POST['total_sewa'];
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tb_transaksi_sewa_detail WHERE id_transaksi='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    
    // Proses ubah data ke Database
    $query = "UPDATE tb_transaksi_sewa_detail SET id_mobil='".$idmobil."',harga_sewa='".$hargasewa."', jumlah_sewa='".$jumlahsewa."', total_sewa='".$totalsewa."' WHERE id_transaksi='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: indexdetail.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='formubahdetail.php'>Kembali Ke Form</a>";
    }
?>