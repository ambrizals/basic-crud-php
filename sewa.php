<html>
    <head>
        <title>Data Transaksi Sewa</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
		<?php
			$pagetitle = 'Data Transaksi Sewa';
			include 'parts/header.php';
		?>
        <div class="container">
            <br/>
            <a href="formtransaksisewa.php" class="button_tambah">Tambah Data</a>
            <br/><br/>
            <?php
                if (isset($_COOKIE['pesan'])){
                    echo '<p>'.$_COOKIE['pesan'].'</p>';
                    setcookie('pesan','',time());
                }
            ?>
            <table border="1" width="100%">
                <tr>
                    <th>Id Transaksi</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status Transaksi</th>
                    <th>User</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                    // Load file koneksi.php
                    include "koneksidb.php";

                    $query = "select * from tb_transaksi_sewa inner join tb_pelanggan on tb_transaksi_sewa.id_pelanggan = tb_pelanggan.id_pelanggan"; // Query untuk menampilkan semua data user
                    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        // print_r($data);
                        echo "<tr>";
                        echo "<td>".$data['id_transaksi']."</td>";
                        echo "<td>".$data['nama_pelanggan']."</td>";
                        echo "<td>".$data['tgl_transaksi']."</td>";
                        echo "<td>".$data['tgl_pinjam']."</td>";
                        echo "<td>".$data['tgl_kembali']."</td>";
                        echo "<td>".$data['status_transaksi']."</td>";
                        echo "<td>".$data['user']."</td>";
                        echo "<td><a href='formtransaksidetail.php?id=".$data['id_transaksi']."'>Ubah</a></td>";
                        echo "<td><a href='hapussewa.php?id_transaksi=".$data['id_transaksi']."'>Hapus</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>