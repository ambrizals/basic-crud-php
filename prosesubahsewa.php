<?php
// Load file koneksi.php
include "koneksidb.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id_transaksi'];
// Ambil Data yang Dikirim dari Form
$idpelanggan = $_POST['id_pelanggan'];
$tgltransaksi = $_POST['tgl_transaksi'];
$tglpinjam = $_POST['tgl_pinjam'];
$tglkembali = $_POST['tgl_kembali'];
$status = $_POST['status_transaksi'];
$user = $_POST['user'];
$total = $_POST['total_transaksi'];
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tb_transaksi_sewa WHERE id_transaksi='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    
    // Proses ubah data ke Database
    $query = "UPDATE tb_transaksi_sewa SET id_pelanggan='".$idpelanggan."',tgl_transaksi='".$tgltransaksi."', tgl_pinjam='".$tglpinjam."', tgl_kembali='".$tglkembali."', status_transaksi='".$status."', user='".$user."', total_transaksi='".$total."' WHERE id_transaksi='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: indexsewa.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='formubahsewa.php'>Kembali Ke Form</a>";
    }
?>