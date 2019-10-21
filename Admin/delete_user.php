<?php 
include("srconfig.php");
 	   if(isset($_GET['UID'])){
				$sql = "DELETE FROM Users WHERE UID='".$_GET['UID']."'";
				$result = mysql_query($sql) or die(mysql_error());
				//$result = mysql_query($sql);
				if($result){
				    echo "<script type='text/javascript'> alert('User was successfully removed from the list')</script>";
				    header('Location: registrations.php');
				}
			else{				 
			 echo "error occured ".mysql_error();
		 }
			
		}

?>
