<?php 
include '../config.php'; //konek database
$id = $_GET['id'];
//untuk hapus id_booking dari tabel booking
mysqli_query($konek, "DELETE FROM booking WHERE id_booking='$id'")or die(mysqli_error($konek));
 
header("location:index.php?pesan=hapus");
?>