<?php
include "koneksi.php";
$Id_Mobil =$_POST['Id_Mobil'];
$query=mysql_query("SELECT * from mobil where Id_Mobil = '$Id_Mobil'");
?>

<html><head><tittle>HALAMAN EDIT DATA MOBIL</tittle><head>
<body>
<form action = "editmobil.php" method="POST">
<table border="0">

<?php
while($row=mysql_fetch_array($query))
{
	?>
	<input type ="Hidden" name = "no" value="<?php echo $no;?>"
	/>
<h2>DATA MOBIL</h2>
<table><tr>
<td>Id Mobil</td>
<td> : <input type = "text" name="Id_Mobil" size="10"></td>
</tr>
<tr>
<td>Merk Mobil</td>
<td> : <input type = "text" name="Merk" size = "20"></td>
</tr>
<tr>
<td>Model Mobil</td>
<td> : <input type = "text" name = "Model" size = "20"></td>
</tr>
<tr>
<td>Tipe Mobil</td>
<td> : <input type = "text" name = "Tipe" size = "20"></td>
</tr>
<tr>
<td>Jumlah Pintu</td>
<td> : <input type = "number" name = "Pintu" size = "11"></td>
</tr>
<tr>
<td>Tahun Produksi</td>
<td> : <input type = "text" name = "Tahun_Produksi" size = "4"></td>
</tr>
<tr>
<td>Negara Pembuat</td>
<td> : <input type = "text" name = "Negara_Pembuat" size = "20"></td>
</tr>
<tr>
<td>Jenis Produksi</td>
<td> : <input type = "text" name = "Jenis_Produksi" size = "5"></td>
</tr>
<tr>
<td><input type ="submit" value="Update"></td>
</tr>
<?php
}
?>
</table></form>
</body><html>