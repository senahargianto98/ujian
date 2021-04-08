<?php 
// koneksi database
include 'dbkoneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
 
// menginput data ke database
mysqli_query($con,"insert into tb_farmasi values('$id','$nama','$alamat','$kota','$telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>