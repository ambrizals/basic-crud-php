<?php
// Load file koneksi.php
include "koneksidb.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id_user'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama_user'];
$pass = $_POST['password_user'];
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tb_user WHERE id_user='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    
    // Proses ubah data ke Database
    $query = "UPDATE tb_user SET nama_user='".$nama."', password_user='".$pass."' WHERE id_user='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location:user.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
?>