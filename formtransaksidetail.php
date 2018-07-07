<html>
    <head>
        <title>Membuat Data Transaksi Detail</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <?php
            $pagetitle = 'Data Transaksi';
            include 'parts/header.php';
            include 'include/connection.php';
            include 'include/login_check.php';
            $queryTransaksi = $koneksi->query(viewTransaksi($_GET['id']));
            $dataTransaksi = mysqli_fetch_array($queryTransaksi);
            $queryMobil = $koneksi->query(listMobil());
        ?>
        <div class="container">
            <fieldset>
                <legend>Transaksi</legend>
                <div class="form_group">
                    <label for="id_transaksi" class="label">Nomor Transaksi</label>
                    <input type="text" name="id_transaksi" class="input_text" value="<?php echo $dataTransaksi['id_transaksi']  ?>" readonly />
                </div>
                <div class="form_group">
                    <label for="id_pelanggan" class="label">Pelanggan</label>
                    <select name="id_pelanggan" class="input_text" readonly>
                        <?php
                            $listpelanggan = $koneksi->query(listPelanggan());
                            
                            while ($data = mysqli_fetch_array($listpelanggan)) {
                                if ($dataTransaksi['id_pelanggan'] == $data['id_pelanggan']) {
                                    echo "<option value='".$data['id_pelanggan']."' selected>".$data['nama_pelanggan']."</option>";
                                } else {
                                    echo "<option value='".$data['id_pelanggan']."'>".$data['nama_pelanggan']."</option>";
                                }
                        ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="form_group">
                    <label for="tgl_transaksi" class="label">Tanggal Transaksi</label>
                    <input type="date" name="tgl_transaksi" class="input_text" value="<?php echo $dataTransaksi['tgl_transaksi'] ?>" readonly />
                </div>
                <div class="form_group">
                    <label for="tgl_pinjam" class="label">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="input_text" value="<?php echo $dataTransaksi['tgl_pinjam'] ?>" readonly />
                </div>
                <div class="form_group">
                    <label for="tgl_kembali" class="label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="input_text" value="<?php echo $dataTransaksi['tgl_kembali'] ?>" readonly />
                </div>
            </fieldset>

            <fieldset>
                <legend>Daftar Sewa</legend>
                <form action="simpandetail.php" method="POST">
                    <table width="100%">
                        <tr>
                            <th>Nama Mobil</th>
                            <th>Lama Sewa</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="mobil" class="input_text">
                                    <?php
                                        while($dataMobil = mysqli_fetch_array($queryMobil)){
                                            echo '<option value="'.$dataMobil['id_mobil'].'">'.$dataMobil['nama_mobil'].' - Rp.'.$dataMobil['harga_sewa'].'</option>';
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="input_text" name="lama_sewa" required />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit" name="btnAddDetail" class="input_text">Tambah Data</button></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </body>
</html>