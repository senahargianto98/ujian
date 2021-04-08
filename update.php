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
 
// update data ke database
mysqli_query($con,"update tb_obat set Kategori='$kategori', Nama_buku='$namabuku', Harga='$harga', Stok='$stok',Farmasi='$farmasi' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>