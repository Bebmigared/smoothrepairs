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
            </ul><?php
include('nav.php');
?>

<div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
    <?php
    include("srconfig.php");
    session_start();
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "<h1 class='page-header'>Hi " . $row['FIRST_NAME'] . " (" . $row['USERNAME'] . ") ";
    ?>
    </div>
    </div>
<br>
<br>
<form method="post" action="" role="form">
    <div class="form-group">
    <label>Search By Request ID</label>
<input class="form-control" type="text" name="RTID">
<label>Service Type</label>
<select class="form-control" name="ARTSN" placeholder="Select User Type...">
<option value=""></option><?php 

echo "<option value='AC Repairs'>AC Repairs</option>";
echo "<option value='Generator Repairs & Servicing'>Generator Repairs & Servicing</option>";

?>
"</option>"</select>
<label>Search By Duration</label>
<select class="form-control" name="RDATE" placeholder="Select Duration...">
<option value=""></option><?php 
echo "<option value='1 Week'>1 Week</option>";
echo "<option value='Last Month'>Last Month</option>";
?>
"</option>"</select>
<input class="btn btn-default" id="submit" name="submit" type="submit" value="Submit">
<?php
include("srconfig.php");
$RTID = $_POST['RTID'];
$ARTSN = $_POST['ARTSN'];
$RDATE = $_POST['RDATE'];
$sql = "SELECT * FROM request_form WHERE request_id=IF('$RTID'='',request_id,'$RTID') AND service_type=IF('$ARTSN'='',service_type,'$ARTSN') ORDER BY date_req DESC, fullname";
$result = mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
?>
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Requests Manager on SmoothRepairs</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                
                <th >RID</th>
                <th >Request Date</th>
                <th >Full Name</th>
                <th >Mobile</th>
                 <th >Email</th>
                <th >Category</th>
                <th >Message</th>
                <th >Location</th>
                <th >View Details</th>
                <th >Status</th>
                
                
</tr>
<tr><td></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td><a href="add_user.php">Add User</a></td><td><a href="/Admin">Back to Dashboard</a></td>
                        
</td></tr>
<?php 
while($rows=mysql_fetch_array($result)){ 
?>

<tr>
                <td ><?php echo $rows['request_id']; ?></td>
                <td ><?php echo $rows['date_req']; ?></td>
                <td ><?php echo $rows['fullname']; ?></td>
                <td ><?php echo $rows['mobile']; ?></td>
                <td ><?php echo $rows['email']; ?></td>
                <td ><?php echo $rows['service_type']; ?></td>
                <td ><?php echo $rows['messages']; ?></td>
                <td ><?php echo $rows['location']; ?></td>
                <td ><a href='approve.php?id=<?php echo $rows['request_id'] ?>'>Review</a></td>
                <td ><?php if($rows['status']==1) echo "Active"; else echo "Inactive"; ?></td>

</tr>


 <?php 
} 
?> 
 <tr><td></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a href="add_user.php">Add User</a></td><td><a href="/Admin">Back to Dashboard</a></td>
                        
</td></tr></thead>
                                    <tbody>
            </table>
                       </form>
        
<?php else: ?>
echo "<script type='text/javascript'>alert('Sorry, you do not have permission to access this page!')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='login.php'</script>";
<?php endif; ?>
<?php endif; ?>
 </div>
 </div>
 </div>
 </div>
</div>
<!-- /#wrapper -->
<?php
include('footer.php');
?>
</body>
</html>