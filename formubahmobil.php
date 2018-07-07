<html>
<head>
  <title>Data Mobil</title>
</head>
<body>
  <h1>Ubah Data Mobil</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksidb.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id_mobil'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_mobil WHERE id_mobil='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="prosesubahmobil.php?id_pelanggan=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="6">
  <tr>
    <td>Id Mobil</td>
    <td><input type="text" name="id_mobil" value="<?php echo $data['id_mobil']; ?>"></td>
  </tr>
  <tr>
    <td>Nama Mobil</td>
    <td><input type="text" name="nama_mobil" value="<?php echo $data['nama_mobil']; ?>"></td>
  </tr>
  <tr>
    <td>Harga Sewa</td>
    <td><input type="text" name="harga_sewa" value="<?php echo $data['harga_sewa']; ?>"></td>
  </tr>
  <tr>
    <td>No Polisi</td>
    <td><input type="text" name="no_pol" value="<?php echo $data['no_pol']; ?>"></td>
  </tr>
  
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="indexmobil.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>