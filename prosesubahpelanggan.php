<?php
    // Load file koneksi.php
    include 'include/connection.php';
    include 'include/login_check.php';
    // Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
    $id = $_GET['id_pelanggan'];
    // Ambil Data yang Dikirim dari Form
    $nama = $_POST['nama_pelanggan'];
    $alamatpelanggan = $_POST['alamat'];
    $notelp = $_POST['no_telp'];
    $emailpelanggan = $_POST['email'];
    
    // Proses ubah data ke Database
    
    $sql = $koneksi->query(updatePelanggan($id,$nama,$alamatpelanggan,$notelp,$emailpelanggan)); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ 
        // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        setcookie('pesan','Data berhasil diupdate !',time()+60);
        header("location: pelanggan.php"); // Redirect ke halaman pelanggan.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. $koneksi->error";
      echo "<br><a href='formubahpelanggan.php'>Kembali Ke Form</a>";
    }
?>