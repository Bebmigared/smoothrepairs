<?php
	$hostname='localhost';
	$user = 'smoothre_dir';
	$password = 'Sm00thR3p@1r5s';
	$mysql_database = 'smoothre_Directory';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("smoothre_Directory", $db);
?>