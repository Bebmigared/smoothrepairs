<?php 
include("srconfig.php");
	   if(isset($_GET['id'])){
				$sql = "UPDATE request_form SET status='1' WHERE request_id='".$_GET['id']."'";
				$result = mysql_query($sql);
				if($result){			
			 header('Location: requests.php');
				}
			else{				 
			 echo "error occured ".mysql_error($db);
		 }
			
		}

?>