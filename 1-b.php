<html>
<head>
<tittle>Koneksi ke MySQL</tittle>
</head>
<body>
	<?php
	//Connecting, Selecting Database
	$link = mysql_connect('localhost','root') or die ('Could not Connect : '. mysql_error());
	echo 'Connected Successfully';
	mysql_select_db('ShowRoomMobil') or die ('<BR>Could not select database');
	//Perfoming SQL query
	$query  = 'SELECT * FROM mobil';
	$result = mysql_query($query) or die ('Query failed : '. mysql_error());

	//Printing results in HTML
	echo "<table>\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";

	// Free resultset
	mysql_free_result($result);

	//Closing Connection
	mysql_close($link);
	?>
</body>
</html>