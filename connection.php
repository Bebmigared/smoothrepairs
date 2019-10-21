<?php
    $pass = 'B1eF(Fes#}hI';
    $db = 'smoothre_quotes';
    $host = 'localhost';
    $username = 'smoothre_quotes';
    $conn = mysqli_connect($host, $username, $pass,$db);
    if($conn){
    	//echo 'connected';
    }
    else {
    	//echo "failed";
    }
?>