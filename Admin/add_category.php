<?php session_start(); ?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<?php
include('header.php');
?>
<?php if($_SESSION['loggedIn']): ?>
<body>
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
<?php
include('nav.php');
?>
        <?php endif; ?>
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
</div>
</div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Add New Artisan Category - SmoothRepairs</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category Creation
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

<form action=""  method="post" enctype="multipart/form-data" role="form">
<br>
<div class="form-group">
<label for="Category_Name">Category Name</label>
<input class="form-control" type="text" name="category_name" id="txtbx" placeholder="Add new professional service or qualification..." required>
</div>
<div class="form-group">
<label for="Category_Desc">Short Description, Please select</label>
<select name="category_desc" class="form-control">
<option value="<?php echo  "Select Type"; ?>"><?php echo  "Please Select..."; ?></option>
<option value="Artisan Category">Artisan Category</option>
<?php 
$sql137 = mysql_query("SELECT DESCRIPTION FROM Options WHERE CATEGORY='Qualification' GROUP BY DESCRIPTION ");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['DESCRIPTION'] ."'>" . $row137['DESCRIPTION'] . "</option>";
}
?>
</select>
</div>
<div class="form-group">
<label for="CATEGORY" >Category</label>
<select name="cat_type" class="form-control" placeholder="Select User Type...">
<option value="<?php echo  "Select Type" ?>"><?php echo "Select Type"  ?></option><?php 
$sql137 = mysql_query("SELECT CATEGORY FROM Options WHERE CATEGORY='Artisan' or CATEGORY='Qualification' GROUP BY CATEGORY ");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['CATEGORY'] ."'>" . $row137['CATEGORY'] . "</option>";
}
?>
"</option>"</select>
</div>
<div class="form-group">
<label for="STATUS">Create Category</label>
<input id="submitb" class="btn btn-default" name="submitb" type="submit" value="Back">
<input class="btn btn-default" name="submit" type="submit" value="Create Category">
</fieldset>
</div>
<?php
 include("srconfig.php");
    session_start();
 if (isset($_POST['submitb']))
            {
        echo "<script language='javascript' type='text/javascript'> location.href='category.php' </script>";

        }
if(isset($_POST['submit'])){
	 if(empty($_POST['category_name'])){
		 $errors[] = "Category is empty";
		 $error = true;
	 }
	 if(empty($_POST['category_desc'])){
		 $errors[] = "Enter category Description";
		 $error = true;
	 }
	 if(empty($_POST['cat_type'])){
		 $errors[] = "Category type cannot be empty";
		 $error = true;
	 }
		if($error){
		   echo "<div class='error' >";
		  foreach($errors as $error){
			  echo "<p>".$error."</p>";
		  }
		  echo "</div>"; 
	   }
	   else
	   {
		    $option_name = $_POST['category_name'];
		    $cat_desc = $_POST['category_desc'];
		    $cat_type = $_POST['cat_type'];
		    
		    // Checking if Category already exist
		    $check_cat=mysql_query("SELECT * FROM Options WHERE OPTION_NAME='$option_name' AND CATEGORY='Artisan' ");
		    $check_cat1=mysql_query("SELECT * FROM Options WHERE OPTION_NAME='$option_name' AND CATEGORY='Qualification' ");
            
            $check_cat_exist = mysql_num_rows($check_cat);
            $check_cat1_exist = mysql_num_rows($check_cat1);
          
            if(($check_cat_exist > 0) || ($check_cat1_exist > 0))
            {
                echo "<script type='text/javascript'>alert('An Error Occurred: Category already exist, Add a unique category')</script>";
            }
            else
            {
						$sql01 = mysql_query("INSERT INTO Options (DESCRIPTION,CATEGORY,OPTION_NAME)VALUES('$cat_desc','$cat_type','$option_name')");
		         if($sql01){
					echo"Your update was successful";
				   echo "<script language='javascript' type='text/javascript'> location.href='add_category.php'
				   </script>";
				 }
			else
			{
		  echo 'unable to upload';
		}		
	   }
}
}
?></form>
                    </div>
                            <!-- /.table-responsive -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
include('footer.php');
?>
    <?php else: ?>
echo "<script type='text/javascript'>alert('Sorry, you do not have permission to access this page!')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='login.php'</script>";
<?php endif; ?>

</body>

</html>
