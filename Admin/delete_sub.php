<?php 
include("srconfig.php");
 	   if(isset($_GET['sub_id'])){
				$sql = "DELETE FROM subscribers WHERE sub_id='".$_GET['sub_id']."'";
				$result = mysql_query($sql) or die(mysql_error());
				//$result = mysql_query($sql);
				if($result){
				    echo "<script type='text/javascript'> alert('Subscriber was successfully removed from the list')</script>";
				    header('Location: subscribers.php');
				}
			else{				 
			 echo "error occured ".mysql_error();
		 }
			
		}

?>
