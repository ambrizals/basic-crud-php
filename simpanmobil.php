<?php
    // Load file koneksi.php
    include "include/connection.php";
    // Ambil Data yang Dikirim dari Form
    $nama = $_POST['nama_mobil'];
    $hargasewa = $_POST['harga_sewa'];
    $nopolisi = $_POST['no_pol'];

    $query = $koneksi->query(addMobil($nama,$hargasewa,$nopolisi));
    echo $query;
    if($query == TRUE){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
        setcookie('pesan','Data berhasil ditambah !',time()+60);
        header("Location:mobil.php"); // Redirect ke halaman index.php
    }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.". $query->error;
        echo "<br><a href='formmobil.php'>Kembali Ke Form</a>";
    }
?>