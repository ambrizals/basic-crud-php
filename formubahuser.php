<html>
    <head>
        <title>Ubah Data User</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
		<?php
			$pagetitle = 'Ubah Data User';
			include 'parts/header.php';
		?>
        <div class="container">
            <?php
                // Load file koneksi.php
                include "koneksidb.php";

                // Ambil data NIS yang dikirim oleh index.php melalui URL
                $id = $_GET['id_user'];

                // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
                $query = "SELECT * FROM tb_user WHERE id_user='".$id."'";
                $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
                $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
            ?>

            <form method="post" action="prosesubahuser.php?id_user=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="nama_user" class="label">Nama User</label>
                    <input type="text" name="nama_user" value="<?php echo $data['nama_user']; ?>" class="input_text" readonly/>
                </div>
                <div class="form_group">
                    <label for="password_user" class="label">Password</label>
                    <input type="password" name="password_user" value="<?php echo $data['password_user']; ?>" class="input_text"/>
                </div>
                <hr>
                <input type="submit" value="Ubah">
                <a href="user.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>