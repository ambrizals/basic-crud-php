<?php
    include 'include/connection.php';
    include 'include/login_check.php';
?>
<html>
    <head>
        <title>Data Pelanggan</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
        <?php
            $pagetitle = 'Data Pelanggan';
            include 'parts/header.php';
        ?>
        <div class="container">
            <br/>
            <a href="formpelanggan.php" class="button_tambah">Tambah Data</a>
            <br/><br/>
            <?php
                if (isset($_COOKIE['pesan'])){
                    echo '<p>'.$_COOKIE['pesan'].'</p>';
                    setcookie('pesan','',time());
                }
            ?>
            <table border="1" width="100%">
                <tr>
                    <th>Id Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Email</th>
                <th colspan="2">Aksi</th>
                </tr>
                    <?php
                    // Query untuk menampilkan semua data user
                    $sql = $koneksi->query(listPelanggan()); // Eksekusi/Jalankan query dari variabel $query
                    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        echo "<tr>";
                            echo "<td>".$data['id_pelanggan']."</td>";
                            echo "<td>".$data['nama_pelanggan']."</td>";
                            echo "<td>".$data['alamat']."</td>";
                            echo "<td>".$data['no_telp']."</td>";
                            echo "<td>".$data['email']."</td>";
                            echo "<td><a href='formubahpelanggan.php?id_pelanggan=".$data['id_pelanggan']."'>Ubah</a></td>";
                            echo "<td><a href='hapuspelanggan.php?id_pelanggan=".$data['id_pelanggan']."'>Hapus</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div> 
    </body>
</html>