<?php ob_start();
include "koneksi.php";
$Id_Mobil  		= $_POST['Id_Mobil'];
$Merk  			= $_POST['Merk'];
$Model 			= $_POST['Model'];
$Tipe  			= $_POST['Tipe'];
$Pintu   		= $_POST['Pintu'];
$Tahun_Produksi = $_POST['Tahun_Produksi'];
$Negara_Pembuat	= $_POST['Negara_Pembuat'];
$Jenis_Produksi = $_POST['Jenis_Produksi'];

$query = mysql_query("UPDATE mobil set Id_Mobil='$Id_Mobil', Merk = '$Merk',Model = '$Model', Tipe = '$Tipe', Pintu = '$Pintu', Tahun_Produksi = '$Tahun_Produksi', Negara_Pembuat = '$Negara_Pembuat', Jenis_Produksi = '$Jenis_Produksi'");
header('location:tampilmobil.php');
?>