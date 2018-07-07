<html>
    <head>
        <title>Membuat Data Pelanggan</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
        <?php
            $pagetitle = 'Tambah Data Pelanggan';
            include 'parts/header.php';
        ?>        
        <div class="container">
            <form method="post" action="simpanpelanggan.php">
                <div class="form_group">
                    <label for="nama_pelanggan" class="label">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="input_text" />
                </div>
                <div class="form_group">
                    <label for="alamat" class="label">Alamat</label>
                    <input type="text" name="alamat" class="input_text"/>
                </div>
                <div class="form_group">
                    <label for="no_telp" class="label">No Telp</label>
                    <input type="number" name="no_telp" class="input_text"/>
                </div>
                <div class="form_group">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="input_text"/>
                </div>
                <input type="submit" value="Simpan">
                <a href="pelanggan.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>