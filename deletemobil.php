<?php ob_start();
include "koneksi.php";
$Id_Mobil = $_POST['Id_Mobil'];

mysql_query("DELETE from mobil WHERE Id_Mobil ='Id_Mobil'");
header('location : tampilmobil.php');
?>