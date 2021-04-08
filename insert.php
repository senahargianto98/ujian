<?php 
// koneksi database
include 'dbkoneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$namabuku = $_POST['namabuku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$farmasi = $_POST['farmasi'];
 
// menginput data ke database
mysqli_query($con,"insert into tb_obat values('$id','$kategori','$namabuku','$harga','$stok','$farmasi')");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>