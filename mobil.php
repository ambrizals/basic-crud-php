<?php  
    include 'include/connection.php';
    include 'include/login_check.php';
?>
<html>
    <head>
        <title>Data Mobil</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <?php
            $pagetitle = 'Data Mobil';
            include 'parts/header.php';
        ?>
        <div class="container">
            <br/>
            <a href="formmobil.php" class="button_tambah">Tambah Data</a>
            <br/><br/>
            <?php
                if (isset($_COOKIE['pesan'])){
                    echo '<p>'.$_COOKIE['pesan'].'</p>';
                    setcookie('pesan','',time());
                }
            ?>
            <table border="1" width="100%">
                <tr>
                    <th>Id Mobil</th>
                    <th>Nama Mobil</th>
                    <th>Harga Sewa</th>
                    <th>No Polisi</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                    $data = $koneksi->query(listMobil()); // Query untuk menampilkan semua data user
                    while($data = mysqli_fetch_array($data)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td>".$data['id_mobil']."</td>";
                    echo "<td>".$data['nama_mobil']."</td>";
                    echo "<td>".$data['harga_sewa']."</td>";
                    echo "<td>".$data['no_pol']."</td>";
                    echo "<td><a href='formubahmobil.php?id_mobil=".$data['id_mobil']."'>Ubah</a></td>";
                    echo "<td><a href='hapusmobil.php?id_mobil=".$data['id_mobil']."'>Hapus</a></td>";
                    echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>