<?php
// panggil koneksinya
require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1></h1>
  
  <!-- 
  Create Data Send to add.php
  -->
  <form method="post" action="add.php">
    <input type="text" name="nama_produk" placeholder="Name Product">
    <input type="text" name="keterangan" placeholder="description">
    <input type="number" name="harga" placeholder="Price">
    <input type="number" name="jumlah" placeholder="Quantity">
    <input type="submit" name="submit" value="Add Data">
  </form><br/>
<!-- Read Data from database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>Nama Produk</th>
      <th>Keterangan</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th colspan="2">Aksi</th>
    </tr>
<?php
    // Show Data from database
    $q = $conn->query("SELECT * FROM produk");
$no = 1; // Num
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_produk'] ?></td>
      <td><?= $dt['keterangan'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><?= $dt['jumlah'] ?></td>
      <td><a href="update.php?nama_produk=<?= $dt['nama_produk'] ?>">Update</a></td>
      <td><a href="delete.php?nama_produk=<?= $dt['nama_produk'] ?>" onclick="return confirm( 'Are you sure delete data ?')">Delete</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table>
</body>
</html>