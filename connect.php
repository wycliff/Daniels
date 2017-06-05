<?php
	
	$dbuser = 'root';
	$dbpass = '';
	$dbhost = 'localhost';
	$db = 'daniels';
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db);

	if (!$db){
		die("not connected : ".mysqli_error());
	}
	
?>
