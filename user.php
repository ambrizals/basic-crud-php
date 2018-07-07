<html>
    <head>
        <title>Data User</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
		<?php
			$pagetitle = 'Data User';
			include 'parts/header.php';
		?>
        <div class="container">
            <?php
                if (isset($_COOKIE['pesan'])){
                    echo '<p>'.$_COOKIE['pesan'].'</p>';
                    setcookie('pesan','',time());
                }
            ?>
            <br/>
            <a href="formuser.php" class="button_tambah">Tambah Data</a>
            <br/><br/>
            <table border="1" width="100%">
                <tr>
                    <th>Id User</th>
                    <th>Nama User</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                    // Load file koneksi.php
                    include "koneksidb.php";

                    $query = "SELECT * FROM tb_user"; // Query untuk menampilkan semua data user
                    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td>".$data['id_user']."</td>";
                    echo "<td>".$data['nama_user']."</td>";
                    echo "<td><a href='formubahuser.php?id_user=".$data['id_user']."'>Ubah</a></td>";
                    echo "<td><a href='hapususer.php?id_user=".$data['id_user']."'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>        
        </div>
    </body>
</html>