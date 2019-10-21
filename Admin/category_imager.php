<?php session_start(); ?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SmoothRepairs Admin Dashboard | Edit Category & Image</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../Smoothrepairs_favicon.jpg" />

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php if($_SESSION['loggedIn']): ?>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO0cgbsapmKRr5Sq0BSnVeBNp3XxICpCM&v=3.exp&sensor=false&libraries=places"></script>
        <script>
            function init() {
                var input = document.getElementById('CITY');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed',
        function() {
        var place = autocomplete.getPlace();
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();
        
        document.getElementById("LATITUDE").value = lat
        document.getElementById("LONGITUDE").value = lng
   }
);
            }
 
            google.maps.event.addDomListener(window, 'load', init);
        </script>

<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("TYP").value == 'Individual') {
        document.getElementById("PPP").innerHTML  = 'Passport Picture';
        document.getElementById("IDK").innerHTML  = 'Identity Card';



    }    
    if (document.getElementById("TYP").value == 'Corporate') {
        document.getElementById("PPP").innerHTML  = 'Company Logo';
        document.getElementById("IDK").innerHTML  = 'CAC Certificate';

    }
    if (document.getElementById("USER_TYPE").value == 'User') {
        document.getElementById("PPP").style.display  = 'none';
        document.getElementById("IDK").style.display  = 'none';
        document.getElementById("F_PP").style.display  = 'none';
        document.getElementById("F_ID").style.display  = 'none';
        document.getElementById("DKU").style.display  = 'none';
        document.getElementById("ARTISAN_PASSPORT").style.display  = 'none';
        document.getElementById("ARTISAN_IDCARD").style.display  = 'none';
        document.getElementById("submia").style.display  = 'none';
        document.getElementById("submio").style.display  = 'none';
    }

}
</script>
<body onload="changetextbox()" >
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SmoothRepairs Admin Dashboard v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               <!-- /.notifications-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                         <li><i class="fa fa-user fa-fw"></i><?php
    include("srconfig.php");
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "Welcome " . $row['FIRST_NAME'] . " (" . $row['USERNAME'] . ") ";
    ?>
                         <?php if($row['USER_TYPE']=='Admin'): ?></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links --><div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                            <li>
                                    <a href="add_user.php"><i class="fa fa-user fa-fw"></i>Create New User</a>
                                </li>
                                <li>
                            <a href="registrations.php"><i class="fa fa-users fa-fw"></i> User Manager</a>
                                                            
                            
                        </li>
                        <li>
                            <a href="requests.php"><i class="fa fa-wrench fa-fw"></i> Requests</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Manage Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="category.php">View All Categories</a>
                                </li>
                                <li>
                                    <a href="create_category.php">Add New Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Payments</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Reports</a>
                        </li>
                                               <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Exit<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="logout.php">Sign Out</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-lg-12">
                    
    <?php
    include("srconfig.php");
    session_start();
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "<h1 class='page-header'> Hi " . $row['FIRST_NAME']."</h1>";
    ?>
<?php endif; ?>
</div>
</div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Image Category Manager
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

<form action=""  method="post" enctype="multipart/form-data" role="form">
<br>
<?php
include("srconfig.php");
session_start();
$Id = $_GET['OID'];
$sql1 = "SELECT * FROM Options WHERE OID='$Id'";
$result1 = mysql_query($sql1) or die(mysql_error());
$row1 = mysql_fetch_array($result1);
?>
<div class="form-group">
<label>Edit Category</label>
</div>
<div class="form-group">
<label for="Category_Name">Category Name</label>
<input class="form-control" type="text" name="category_name"  placeholder="Add new professional service..." value='<?php echo  $row1['DESCRIPTION'] ?>'>
</div>
<div class="form-group">
<label for="Category_Desc">Short Description</label>
<input class="form-control" type="text" name="category_desc"  placeholder="Place short description..." value='<?php echo  $row1['OPTION_NAME']?>'>
</div>
<div class="form-group">
<label for="CATEGORY" >User Type</label>
<select name="cat_type" id="USER_TYPE" placeholder="Select User Type..." oninput="this.className = ''" required>
<option value="<?php echo  $row1['USER_TYPE'] ?>"><?php echo  $row1['USER_TYPE'] ?></option><?php 
$sql137 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='UType' ORDER BY OPTION_NAME");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['OPTION_NAME'] ."'>" . $row137['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
</div>
<div class="form-group">
<fieldset>
<label>Old Image</label>
	<div class='course'>
	    <img src='<?php echo 'https://smoothrepairs.com/'.$row1['image_link'];?>' alt='<?php echo $row1['OPTION_NAME'];?>' class='course-img'>
	    </div>
	<br>
	<label >New Image</label>
<input class="form-control" type="file" name="cat_image">
<br>
<input class="btn btn-default" type="submit" name="submit" value="Update">
</fieldset>
</div>
<?php
       
        if (isset($_POST['submit']))
            {
                
            $OID=$_GET['OID'];
            $cat_name = $_POST['category_name'];
		    $cat_desc = $_POST['category_desc'];
		    $cat_type = $_POST['cat_type'];
			$imagePath = '../../img1/'.$_FILES['cat_image']['name'] ;
			$target_dir = '../../img1/';
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$image_info = getimagesize($_FILES["cat_image"]["tmp_name"]);
			$image_width = $image_info[0];
            $image_height = $image_info[1];
            $imageFileType = strtolower(pathinfo($_FILES["cat_image"]["name"],PATHINFO_EXTENSION));

			
			if (file_exists($imagePath)) {
			echo "Sorry, file already exists.";
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.')</script>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}

if($image_width != 450 && $image_height != 300){
        
		echo "<script type='text/javascript'>alert('Ensure the image is 450(width) by 300(height).')</script>";
 		    }
        
 			else if (copy($_FILES['cat_image']['tmp_name'], $imagePath)){
		$sql02 = mysql_query("UPDATE Options SET image_link='$imagePath',DESCRIPTION='$cat_name',OPTION_NAME='$cat_desc',CATEGORY='$cat_type' WHERE OID='$OID'");
		         if($sql02){
					echo"Your update was successful";
				   echo "<script language='javascript' type='text/javascript'> location.href='category.php' </script>";
				 }
		}
			else{
		  echo 'unable to upload';
		}		
	   }
			 

?>
       
</form>


<?php else: ?>

<a href="index.php">Sign-In</a>
<?php endif; ?>

 </div>
 </div>
 </div>
 </div>
</div>
<!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>
</html>