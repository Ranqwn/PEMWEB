<html>
<head>
<tittle>Koneksi ke MySQL</tittle>
</head>
<body>
<?php
	//Connecting, selecting Database
$link = mysql_connect('localhost','root') or die ('Could not Connect : '. mysql_error());
echo '<BR>Connected Successfully';
$pilih_db = mysql_select_db("ShowRoomMobil", $link) or die ('<BR>Could not database');
?>
</body>
</html>