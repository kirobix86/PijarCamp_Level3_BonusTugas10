<?php
require_once 'connection.php';
if (isset($_GET['nama_produk'])) {
  $nama_produk = $_GET['nama_produk'];
// Delete by nama_produk
  $q = $conn->query("DELETE FROM produk WHERE nama_produk = '$nama_produk'");

  if ($q) {
    // Delete Complete Alert
    echo "<script>alert('Delete Data Complete'); window.location.href='index.php'</script>";
  } else {
    // Delete Fail Alert
    echo "<script>alert('Delete Data Failed'); window.location.href='index.php'</script>";
  }
} else {
  //  Redirect Index.php
  header('Location:index.php');
}