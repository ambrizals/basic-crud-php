<?php
// Load file koneksi.php
include "koneksidb.php";
include 'include/login_check.php';
// Ambil Data yang Dikirim dari Form
$id = $_POST['id_transaksi'];
$idpelanggan = $_POST['id_pelanggan'];
$tgltransaksi = $_POST['tgl_transaksi'];
$tglpinjam = $_POST['tgl_pinjam'];
$tglkembali = $_POST['tgl_kembali'];
$status = 'SEWA';
$user = $_SESSION['username'];
  $query = "INSERT INTO tb_transaksi_sewa (id_transaksi,id_pelanggan,tgl_transaksi,tgl_pinjam,tgl_kembali,status_transaksi,user) VALUES('".$id."', '".$idpelanggan."', '".$tgltransaksi."', '".$tglpinjam."', '".$tglkembali."', '".$status."', '".$user."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("Location:formtransaksidetail.php?id=$id"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='formtransaksisewa.php'>Kembali Ke Form</a>";
}
  echo "<p>$query</p>";
?>