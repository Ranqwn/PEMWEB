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

mysql_query("INSERT INTO mobil(Id_Mobil, Merk, Model, Tipe, Pintu, Tahun_Produksi, Negara_Pembuat, Jenis_Produksi) VALUES ('$Id_Mobil','$Merk','$Model','$Tipe','$Pintu','$Tahun_Produksi','$Negara_Pembuat','$Jenis_Produksi')") or die (mysql_error());
	header('location:tampilmobil.php');
?>