<html>
    <head>
        <title>Tambah Data User</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
		<?php
			$pagetitle = 'Tambah Data User';
			include 'parts/header.php';
		?>
        <div class="container">
            <form method="post" action="simpanuser.php" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="nama_user" class="label">Nama User</label>
                    <input type="text" name="nama_user" class="input_text"/>
                </div>
                <div class="form_group">
                    <label for="password_user" class="label">Password</label>
                    <input type="password" name="password_user" class="input_text"/>
                </div>

                <hr>
                <input type="submit" value="Simpan">
                <a href="indexuser.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>