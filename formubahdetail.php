<html>
<head>
  <title>Data Transaksi Detail</title>
</head>
<body>
  <h1>Ubah Data Transaksi Detail</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksidb.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id_transaksi'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_transaksi_sewa_detail WHERE id_transaksi='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="prosesubahdetail.php?id_transaksi=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="7">
  <tr>
    <td>Id Transaksi</td>
    <td><input type="text" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>"></td>
  </tr>
  <tr>
    <td>Id Mobil</td>
    <td><input type="text" name="id_mobil" value="<?php echo $data['id_mobil']; ?>"></td>
  </tr>
  <tr>
    <td>Harga Sewa</td>
    <td><input type="text" name="harga_sewa" value="<?php echo $data['harga_sewa']; ?>"></td>
  </tr>
  <tr>
    <td>Jumlah Sewa</td>
    <td><input type="text" name="jumlah_sewa" value="<?php echo $data['jumlah_sewa']; ?>"></td>
  </tr>
  <tr>
    <td>Total Sewa</td>
    <td><input type="text" name="total_sewa" value="<?php echo $data['total_sewa']; ?>"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="indexdetail.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>