<?php
$con = mysqli_connect("localhost","root","","db_obat");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// echo "Sukses Terhubung";
?>

