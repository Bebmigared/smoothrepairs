<?php 
include("srconfig.php");
	   if(isset($_GET['OID']))
	   {
	       echo "<script type='text/javascript'>alert('You are about to delete a record')</script>";
				$sql = "DELETE FROM Options WHERE OID='".$_GET['OID']."'";
				$result = mysql_query($sql);
				if($result)
				{			
			 echo "<script type='text/javascript'>alert('Record deleted, successfully')</script>";
			 header('Location: view_category.php');
				}
			else
			{				 
			 echo "error occured ".mysql_error();
		    //header('Location: view_category.php');	 
		 }
			
		}

?>