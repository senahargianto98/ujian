<?php 
// koneksi database
include 'dbkoneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($con,"delete from tb_obat where id='$id'");
 
header("location:admin.php");
 
?>