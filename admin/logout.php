<?php 
session_start();
session_destroy(); //session admin diberhentikan
header("location:../index.php");
?>