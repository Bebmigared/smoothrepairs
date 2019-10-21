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
            <!-- /.navbar-top-links -->
<?php
include('nav.php');
?>
        <?php endif; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="">
                    <h1 class="page-header">All Artisan's on SmoothRepairs</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search for Users
                            <br>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <label>Search by Name </label>
                            <input type="text" class="form-control" name="NAME" >
                            <label>User Category</label>
<select name="USRCATEGORY" class="form-control" placeholder="Select User Type..." >
<option value=""></option><?php 
$sql137 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Artisan' ORDER BY OPTION_NAME");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['OPTION_NAME'] ."'>" . $row137['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
<br>
<input id="submit" name="submit" type="submit" value="Submit">
<?php
include("srconfig.php");
$USERNID = $_POST['NAME'];
$USRTYPE = $_POST['USRCATEGORY'];
$sql = "SELECT * FROM Users WHERE FIRST_NAME=IF('$USERNID'='',FIRST_NAME,'$USERNID') AND CATEGORY=IF('$USRTYPE'='',CATEGORY,'$USRTYPE') ORDER BY UID DESC, REG_DATE DESC, LAST_NAME, FIRST_NAME, MIDDLE_NAME";
$result = mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                       <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xl dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="export_artisan.php">Export to Excel</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>User Management on SmoothRepairs</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Full Name</th>
                                            <th>Location</th>
                                            <th>Registration Date</th>
                                            <th >Category</th>
                                            <th >Details</th>
                                             <th >Edit</th>
                                            <th >Status</th>
                                            <th >Delete</th>
                                        </tr>
                                        <tr><td></td>
                        <td></td><td></td><td></td><td></td><td></td><td><a href="add_user.php">Add User</a></td><td><a href="/Admin">Back to Dashboard</a></td>
                        
</td></tr>
                                        <?php 
while($rows=mysql_fetch_array($result)){ 
?>
                                        <tr>
                                            <td ><?php echo $rows['UID']; ?></td>
                                            <td ><?php echo $rows['LAST_NAME']; ?>, <?php echo  $rows['FIRST_NAME']; ?></td>
                                            <td ><?php echo $rows['STATE']; ?></td>
                                            <td ><?php echo $rows['REG_DATE']; ?></td>
                                            <td ><?php echo $rows['USER_TYPE']; ?></td>
                                            <td ><?php echo $rows['CATEGORY']; ?></td>
                                            <td ><a href='user_manager.php?UID=<?php echo $rows['UID'] ?>'>Review</a></td>
                                            <td ><?php if($rows['STATUS']=1) echo "Active"; if($rows['STATUS']=0) echo "Inactive"; ?></td>
                                            <td ><a href='delete_user.php?UID=<?php echo $rows['UID'] ?>'>Remove</a></td>
                                        </tr>
                                         <?php 
} 
?>
 <tr><td></td>
                        <td></td><td></td><td></td><td></td><td></td><td><a href="add_user.php">Add User</a></td><td><a href="/Admin">Back to Dashboard</a></td>
                        
</td></tr>
                                    </thead>
                                    <tbody>
                                        
   

            </form>
                                       
                                    </tbody>
                                    
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
include('footer.php');
?>
<?php endif; ?>

</body>

</html>
