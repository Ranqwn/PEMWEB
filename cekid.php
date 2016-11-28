 <?php 
mysql_connect("localhost","root",""); 
mysql_select_db("data1"); 
 
$id = $_GET['q'];

$query = mysql_query("select User from isi where User='$id'"); 

if(mysql_num_rows($query)==0){ 
    echo "$id belum ada yang pakai"; 
}else{ 
    echo "$id sudah ada yang pakai"; 
}

?> 