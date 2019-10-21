<?php session_start(); ?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<title >SmoothRepairs | Registrations</title>
<?php if($_SESSION['loggedIn']): ?>
<div class="navbar" style="padding-top:5px; font:13px Arial; background:#FF4500; color: #FFFFFF; height:20px; position:fixed; top:0; left:0px; width:100%;">
    <?php
    include("srconfig.php");
    session_start();
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "Hi " . $row['FIRST_NAME'] . " (" . $row['USERNAME'] . ") ";
    $USERNME=$row['USERNAME'];
    ?>

<?php if($row['USER_TYPE']=='User'): ?>
<a href="user_home.php" style="margin-left: 70%; color: #FFFFFF; text-decoration: none" >Home</a>
<a href="logout.php" style="margin-left: 5px; color: #FFFFFF;text-decoration: none" >Logout</a>
</div>

<style>
#tada {
    font: 13px Arial;
    border-collapse: collapse;
    width: 80%;
    margin-left: 50px;
    
}

#tada td, #tada th {
    border: 1px solid #D8D8D8;
    padding: 8px;

}

#tada tr:nth-child(even){background-color: #f2f2f2;}

#tada tr:hover {background-color: #FFD700;}

#tada th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #2E8B57;
    color: white;
}
</style>

<?php endif; ?>    
<br>
<br>
<form method="post" action="">
<link rel="stylesheet" type="text/css" href="srstyle.css">

    <label style="margin-left:50px; font:12px Arial; font-weight: bold">Search By Request ID</label><label style="margin-left:239px; font:12px Arial; font-weight: bold">Artisan Category</label>

    <br>
<input type="text" name="RTID" style="margin-left:50px; width:350px; height: 25px; border:1px solid #D8D8D8;">
<select name="ARTSN" placeholder="Select User Type..." oninput="this.className = ''" style="margin-left: 10px; width: 200px; font-size: 15px; border: 1px solid #D8D8D8; height: 25px; color: #0000CD">
<option value=""></option><?php 
$sql137 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Artisan' ORDER BY OPTION_NAME");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['OPTION_NAME'] ."'>" . $row137['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
<input id="submit" name="submit" type="submit" value="Submit" style="margin-left:20px;">
    <br>
    <br>
<?php
include("srconfig.php");
$RTID = $_POST['RTID'];
$ARTSN = $_POST['ARTSN'];
$sql = "SELECT * FROM Requests WHERE TID=IF('$RTID'='',TID,'$RTID') AND SERVICE_CATEGORY=IF('$ARTSN'='',SERVICE_CATEGORY,'$ARTSN') AND USERNAME='$USERNME' ORDER BY REQUEST_DATE DESC, ORIGINATOR";
$result = mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
?>

<link rel="stylesheet" type="text/css" href="style.css">
<table id="tada">

<tr>
                
                <th >RID</th>
                <th >Request Date</th>
                <th >Full Name</th>
                <th >Category</th>
                <th >Request Details</th>
                <th >Artisan</th>
                <th >View Details</th>
                <th style="background: #FF0000" >Status</th>
                
                
</tr>
<?php 
while($rows=mysql_fetch_array($result)){ 
?>

<tr>
                <td ><?php echo $rows['TID']; ?></td>
                <td ><?php echo $rows['REQUEST_DATE']; ?></td>
                <td ><?php echo $rows['ORIGINATOR']; ?></td>
                <td ><?php echo $rows['SERVICE_CATEGORY']; ?></td>
                <td ><?php echo $rows['REQUEST_DESCRIPTION']; ?></td>
                <td ><?php echo $rows['ARTISAN']; ?></td>
                <td ><a href='order.php?TID=<?php echo $rows['TID'] ?>'>Review</a></td>
                <td ><?php echo $rows['STATUS']; ?></td>

</tr>


 <?php 
} 
?> 
            </table>
            <br>
            <a style="margin-left:50px; font:13px Arial; font-weight: bold" href="request.php">New Request</a><a style="margin-left:10px; font:13px Arial; font-weight: bold" href="user_home.php">Back to Dashboard</a>

            </form>
        
<?php else: ?>
echo "<script type='text/javascript'>alert('Sorry, you do not have permission to access this page!')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='login.php'</script>";
<?php endif; ?>