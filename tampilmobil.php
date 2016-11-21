<?php
include "koneksi.php";
include "mobil.php";
echo"<center><table border=1><tr bgcolor=yellow>
<td><b><center>Id_Mobil</td>
<td><b><center>Merk</td>
<td><b><center>Model</td>
<td><b><center>Tipe</td>
<td><b><center>Pintu</td>
<td><b><center>Tahun_Produksi</td>
<td><b><center>Negara_Pembuat</td>
<td><b><center>Jenis_Produksi</td>
</tr>";
$query=mysql_query("SELECT * FROM mobil ORDER BY Id_Mobil");
$no=1;
while($var=mysql_fetch_array($query))
{
	echo"<tr>
	<td>$no</td>
	<td>$var[Id_Mobil]</td>
	<td>$var[Merk]</td>
	<td>$var[Model]</td>
	<td>$var[Tipe]</td>
	<td>$var[Pintu]</td>
	<td>$var[Tahun_Produksi]</td>
	<td>$var[Negara_Pembuat]</td>
	<td>$var[Jenis_Produksi]</td>
	<td><center><a href='deletemobil.php? Id_Mobil = $var[Id_Mobil]'>DELETE</a></td>
	<td><centar><a href='formeditmobil.php?Id_Mobil= $var[Id_Mobil]'>Edit</a></center></td>
	</tr>";
	$no++;
}
?>