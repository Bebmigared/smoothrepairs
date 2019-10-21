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
    <div class="navbar" style="padding-top:5px; font:13px Arial; background:#FF4500; color: #FFFFFF; height:20px; position:fixed; top:0; left:0px; width:100%;">
    <?php
    include("srconfig.php");
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "Welcome " . $row['FIRST_NAME'] . " (" . $row['USERNAME'] . ") ";
    ?>
    <?php if($row['USER_TYPE']=='Admin'): ?>
    <a href="logout.php" style="margin-left: 70%; color: #FFFFFF; text-decoration: none" >Logout</a>
    </div>

<br>
<br>
<form method="post" action="">
<div>
  <a href="/" class="active">Home</a>
  <a href="registrations.php">User Manager</a>
  <a href="requests.php">Requests</a>
  <a href="#">Payments</a>
  <a href="#">Reports</a>
  <a href="search.php?CATEGORY="'.$cat.'"">Artisan Search</a>
</div>


<?php else: ?>
echo "<script type='text/javascript'>alert('Sorry, you do not have permission to access this page!')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='login.php'</script>";
<?php endif; ?>
<?php endif; ?>
<?php
include('footer.php');
?>
</body>
</html>