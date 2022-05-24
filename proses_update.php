<?php
require_once 'connection.php';
if (isset($_POST['submit'])) {
  $nama_produk = $_POST['nama_produk'];
  $keterangan = $_POST['keterangan'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
$q = $conn->query("UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' WHERE nama_produk = '$nama_produk'");
if ($q) {
    // Update Complete Alert
    echo "<script>alert('Update Data Complete'); window.location.href='index.php'</script>";
  } else {
    // Update Fail Alert
    echo "<script>alert('Update Data Failed'); window.location.href='index.php'</script>";
  }
} else {
    //  Redirect Index.php
  header('Location: index.php');
}