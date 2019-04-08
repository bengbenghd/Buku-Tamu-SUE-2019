<?php 
include 'config.php';
$nama = $_POST['nama'];
$telp = $_POST['telp'];	
$asal = $_POST['asal']; 
$alamat = $_POST['alamat']; 
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];

mysqli_query($con, "INSERT INTO peserta VALUES ('','$nama', '$telp', '$asal', '$email', '$alamat', '$tanggal' )");
header("location:index.php");
?>