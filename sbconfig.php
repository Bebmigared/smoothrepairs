<?php	
	
	$hostname='localhost';
	$user = 'smoothre_dir';
	$password = 'Sm00thR3p@1r5s';
	$mysql_database = 'smoothre_Directory';
	$con = mysqli_connect($hostname, $user, $password);
    $db = mysqli_select_db($con,$mysql_database);
    
    ?>