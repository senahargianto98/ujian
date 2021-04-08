<?php 
// koneksi database
include 'dbkoneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
 
// update data ke database
mysqli_query($con,"update tb_farmasi set Nama='$nama', Alamat='$alamat', Kota='$kota', Telepon='$telepon' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>