<?php
require_once 'connection.php';
if (isset($_GET['nama_produk'])) {
  $id = $_GET['nama_produk'];
$getid = $conn->query("SELECT * FROM produk WHERE nama_produk = '$id'");
foreach ($getid as $dt) :
  ?>
<h1></h1>
  <h2></h2>
<form action="proses_update.php" method="post">
    <input type="text" name="nama_produk" placeholder="Name Product" value="<?= $dt['nama_produk'] ?>">
    <input type="text" name="keterangan" placeholder="description" value="<?= $dt['keterangan'] ?>">
    <input type="number" name="harga" placeholder="Price" value="<?= $dt['harga'] ?>">
    <input type="number" name="jumlah" placeholder="Quantity" value="<?= $dt['jumlah'] ?>">
    <input type="submit" name="submit" value="Update Data">
  </form>
<?php

  endforeach;
}
