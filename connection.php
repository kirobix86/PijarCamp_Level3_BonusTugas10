<?php
$hostname="localhost";
$username="root";
$password="";
$database="pijarcamp";
$conn= mysqli_connect($hostname,$username,$password) or die ("koneksi ke MYSQL gagal");
mysqli_select_db($conn,$database) or die ("koneksi ke database gagal");
?>