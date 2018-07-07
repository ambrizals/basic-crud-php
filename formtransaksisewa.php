<html>
    <head>
        <title>Menambah Data Transaksi</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <?php
            $pagetitle = 'Data Transaksi';
            include 'parts/header.php';
            include 'include/connection.php';
            include 'include/login_check.php';
            $datakode = $koneksi->query(listTransaksi());
            $incrementKode = $datakode->num_rows + 1;
            $kodeTransaksi = 'SW/'.$incrementKode.'/'.date('Ymd');
        ?>
        <div class="container">
            <form method="post" action="simpansewa.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Transaksi</legend>
                    <div class="form_group">
                        <label for="id_transaksi" class="label">Nomor Transaksi</label>
                        <input type="text" name="id_transaksi" class="input_text" value="<?php echo $kodeTransaksi ?>" readonly />
                    </div>
                    <div class="form_group">
                        <label for="id_pelanggan" class="label">Pelanggan</label>
                        <select name="id_pelanggan" class="input_text">
                            <?php
                                $listpelanggan = $koneksi->query(listPelanggan());
                                while ($data = mysqli_fetch_array($listpelanggan)) {
                            ?>
                                <option value='<?php echo $data['id_pelanggan'] ?>'><?php echo $data['nama_pelanggan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="tgl_transaksi" class="label">Tanggal Transaksi</label>
                        <input type="date" name="tgl_transaksi" class="input_text" required />
                    </div>
                    <div class="form_group">
                        <label for="tgl_pinjam" class="label">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="input_text" required />
                    </div>
                    <div class="form_group">
                        <label for="tgl_kembali" class="label">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="input_text" required />
                    </div>
                </fieldset>
                <hr>
                <input type="submit" value="Lanjut">
                <a href="indexsewa.php"><input type="button" value="Batal"></a>
            </form>        
        </div>
    </body>
</html>