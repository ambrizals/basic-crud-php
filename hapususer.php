<?php
// Load file koneksi.php
include "koneksidb.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id_user'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM tb_user WHERE id_user='".$id."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM tb_user WHERE id_user='".$id."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: indexuser.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='indexuser.php'>Kembali</a>";
}
?>