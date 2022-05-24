<?php
require_once 'connection.php';
if (isset($_POST['submit'])) {
  $nama_produk = $_POST['nama_produk'];
  $keterangan = $_POST['keterangan'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
// id_produk value '' set auto increment on database
  $q = $conn->query("INSERT INTO produk VALUES ( '$nama_produk', '$keterangan','$harga', '$jumlah')");
if ($q) {
    // Save Complete Alert
    echo "<script>alert('Add Data Complete'); window.location.href='index.php'</script>";
  } else {
    // Save Failed Alert
    echo "<script>alert('Add Data Failed'); window.location.href='index.php'</script>";
  }
} else {
  // Redirect Index.php
  header('Location: index.php');
}