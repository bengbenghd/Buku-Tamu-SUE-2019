<?php 
include 'config.php'; //ambil file config.php untuk konek database

$username = $_POST['username']; //variabel username
$password = md5($_POST['password']); //variabel password

//ambil data dari tabel admmin dimana username dan password harus sama dengan username dan password di database
$login = mysqli_query($con, "select * from admin where username='$username' and password='$password'");
//melihat apakah di database ada baris tersebut atau tidak (kalau iya bernilai 1) lalu dimasukan ke variabel cek
$cek = mysqli_num_rows($login);

//jika cek lebih dari satu masuk ke admin/index.php
if($cek > 0){
	session_start(); //session admin dimulai
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{ //jika tidak
	header("location:admin/index.php");	
}
?>