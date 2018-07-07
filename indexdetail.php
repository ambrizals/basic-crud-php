<html>
<head>
  <title>Masukkan Data Transaksi</title>
</head>
<body>
  <h1>Data Transaksi</h1>
  <a href="formtransaksidetail.php">Tambah Data</a><br><br>
  <table border="1" width="65%">
  <tr>
    <th>Id Transaksi</th>
    <th>Id Mobil</th>
    <th>Harga Sewa</th>
    <th>Jumlah Sewa</th>
    <th>Total Sewa</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksidb.php";
  
  $query = "SELECT * FROM tb_transaksi_sewa_detail"; // Query untuk menampilkan semua data user
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id_transaksi']."</td>";
    echo "<td>".$data['id_mobil']."</td>";
    echo "<td>".$data['harga_sewa']."</td>";
    echo "<td>".$data['jumlah_sewa']."</td>";
    echo "<td>".$data['total_sewa']."</td>";
    echo "<td><a href='formubahdetail.php?id_transaksi=".$data['id_transaksi']."'>Ubah</a></td>";
    echo "<td><a href='hapusdetail.php?id_transaksi=".$data['id_transaksi']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>