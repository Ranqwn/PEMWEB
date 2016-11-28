<?php
mysql_connect("localhost","root",""); 
mysql_select_db("data1"); 

$prov = $_GET['s'];
$query = mysql_query("SELECT kab.id_kab , kab.kabupaten FROM kab , prov WHERE kab.id_prov = prov.id_prov and prov.id_prov=$prov"); 
if(mysql_num_rows($query)>0){
    echo "<select>";
    while($row=mysql_fetch_array($query))
    {
        echo "<option value='$row[0]'>$row[1]<br>";
    }
    echo "</select>";
    }
   else
   {
   	echo "tidak ada kota yang match dengan $prov";
   }
?>


