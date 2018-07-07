<html>
    <head>
        <title>Membuat Data Mobil</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <?php
            $pagetitle = 'Tambah Data Mobil';
            include 'parts/header.php';
        ?>
        <div class="container">
            <form method="post" action="simpanmobil.php">
                <div class="form_group">
                    <label for="nama_mobil" class="label">Nama Mobil :</label>
                    <input type="text" name="nama_mobil" class="input_text"/>
                </div>
                <div class="form_group">
                    <label for="harga_sewa" class="label">Harga Sewa :</label>
                    <input type="number" name="harga_sewa" class="input_text"/>
                </div>
                <div class="form_group">
                    <label for="no_pol" class="label">Nomor Polisi :</label>
                    <input type="text" name="no_pol" class="input_text" />
                </div>
                <hr>
                <input type="submit" value="Simpan">
                <a href="mobil.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>