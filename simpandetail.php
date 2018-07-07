<?php
// Load file koneksi.php
include "koneksidb.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id_transaksi'];
$idmobil = $_POST['id_mobil'];
$hargasewa = $_POST['harga_sewa'];
$jumlahsewa = $_POST['jumlah_sewa'];
$totalsewa = $_POST['total_sewa'];

  $query = "INSERT INTO tb_transaksi_sewa_detail VALUES('".$id."', '".$idmobil."', '".$hargasewa."', '".$jumlahsewa."', '".$totalsewa."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: indexdetail.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='formtransaksidetail.php'>Kembali Ke Form</a>";
}
?>