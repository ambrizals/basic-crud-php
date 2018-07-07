<html>
<head>
  <title>Data Transaksi Sewa</title>
</head>
<body>
  <h1>Ubah Data Transaksi Sewa</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksidb.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id_transaksi'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_transaksi_sewa WHERE id_transaksi='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="prosesubahsewa.php?id_transaksi=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="10">
  <tr>
    <td>Id Transaksi</td>
    <td><input type="text" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>"></td>
  </tr>
  <tr>
    <td>Id Pelanggan</td>
    <td><input type="text" name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>"></td>
  </tr>
  <tr>
    <td>Tanggal Transaksi</td>
    <td><input type="text" name="tgl_transaksi" value="<?php echo $data['tgl_transaksi']; ?>"></td>
  </tr>
  <tr>
    <td>Tanggal Pinjam</td>
    <td><input type="text" name="tgl_pinjam" value="<?php echo $data['tgl_pinjam']; ?>"></td>
  </tr>
  <tr>
    <td>Tanggal Kembali</td>
    <td><input type="text" name="tgl_kembali" value="<?php echo $data['tgl_kembali']; ?>"></td>
  </tr>
  <tr>
    <td>Status Transaksi</td>
    <td><input type="text" name="status_transaksi" value="<?php echo $data['status_transaksi']; ?>"></td>
  </tr>
  <tr>
    <td>User</td>
    <td><input type="text" name="user" value="<?php echo $data['user']; ?>"></td>
  </tr>
  <tr>
    <td>Total Transaksi</td>
    <td><input type="text" name="total_transaksi" value="<?php echo $data['total_transaksi']; ?>"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="indexsewa.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>