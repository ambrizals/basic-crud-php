<?php
    // Load file koneksi.php
    include "koneksidb.php";
    // Ambil Data yang Dikirim dari Form
    $nama = $_POST['nama_user'];
    $pass = $_POST['password_user'];

    $query = "INSERT INTO tb_user (nama_user,password_user) VALUES('".$nama."', '".$pass."')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        setcookie('pesan','Data berhasil ditambah !',time()+60);
        header("Location:user.php"); // Redirect ke halaman index.php
    }else{
    // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='formuser.php'>Kembali Ke Form</a>";
    }
?>