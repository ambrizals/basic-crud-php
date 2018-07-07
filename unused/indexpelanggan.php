<html>
<head>
  <title>Masukkan Data Pelanggan</title>
</head>
<body>
  <h1>Data Pelanggan</h1>
  <a href="formpelanggan.php">Tambah Data</a><br><br>
  <table border="1" width="65%">
  <tr>
    <th>Id Pelanggan</th>
    <th>Nama Pelanggan</th>
    <th>Alamat</th>
    <th>No Telp</th>
    <th>Email</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksidb.php";
  
  $query = "SELECT * FROM tb_pelanggan"; // Query untuk menampilkan semua data user
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id_pelanggan']."</td>";
    echo "<td>".$data['nama_pelanggan']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['no_telp']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td><a href='formubahpelanggan.php?id_pelanggan=".$data['id_pelanggan']."'>Ubah</a></td>";
    echo "<td><a href='hapuspelanggan.php?id_pelanggan=".$data['id_pelanggan']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>