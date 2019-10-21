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
<div class="navbar" style="padding-top:5px; font:13px Arial; background:#FF4500; color: #FFFFFF; height:20px; position:fixed; top: 0; left: 0; width:100%;">
    <?php
    include("srconfig.php");
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "' AND STATUS=1";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "Hi " . $row['FIRST_NAME'] . " (" . $row['USERNAME'] . ") ";
    ?>
    <?php if($row['USER_TYPE']=='Admin'): ?>
    <a href="home.php" style="margin-left: 70%; color: #FFFFFF; text-decoration: none" >Home</a>
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
    background-color: #696969;
    color: white;
}
</style>

<?php endif; ?>    
<br>
<br>
<form method="post" action="">
<link rel="stylesheet" type="text/css" href="srstyle.css">

    <label style="margin-left:50px; font:12px Arial; font-weight: bold">Search for User</label><label style="margin-left:274px; font:12px Arial; font-weight: bold">User Type</label>

    <br>
<input type="text" name="USERN" style="margin-left:50px; width:350px; height: 25px; border:1px solid #D8D8D8;">
<select name="USRTYPE" placeholder="Select User Type..." oninput="this.className = ''" style="margin-left: 10px; width: 200px; font-size: 15px; border: 1px solid #D8D8D8; height: 25px; color: #0000CD">
<option value="Artisan">Artisan</option><?php 
$sql137 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='UType' ORDER BY OPTION_NAME");
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
$USERN = $_POST['USERN'];
$USRTYPE = $_POST['USRTYPE'];
$sql = "SELECT * FROM Users WHERE USERNAME=IF('$USERN'='',USERNAME,'$USERN') AND USER_TYPE=IF('$USRTYPE'='','Artisan','$USRTYPE') ORDER BY REG_DATE DESC, LAST_NAME, FIRST_NAME, MIDDLE_NAME";
$result = mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
?>

<link rel="stylesheet" type="text/css" href="style.css">
<table id="tada">

<tr>
                
                <th>UID</th>
                <th >Full Name</th>
                <th >Location</th>
                <th >Reg Date</th>
                <th >User Type</th>
                <th >Category</th>
                <th >Details</th>
                <th style="background: #FF0000" >Active</th>
                
                
</tr>
<?php 
while($rows=mysql_fetch_array($result)){ 
?>

<tr>
                <td ><?php echo $rows['UID']; ?></td>
                <td ><?php echo $rows['LAST_NAME']; ?>, <?php echo  $rows['FIRST_NAME']; ?></td>
                <td ><?php echo $rows['CITY']; ?></td>
                <td ><?php echo $rows['REG_DATE']; ?></td>
                <td ><?php echo $rows['USER_TYPE']; ?></td>
                <td ><?php echo $rows['CATEGORY']; ?></td>
                <td ><a href='user_manager.php?UID=<?php echo $rows['UID'] ?>'>Review</a></td>
                <td ><?php if($rows['STATUS']==1) echo "Active"; if($rows['STATUS']==0) echo "Inactive"; ?></td>

</tr>


 <?php 
} 
?> 
            </table>
            <br>
            <a style="margin-left:50px; font:13px Arial; font-weight: bold" href="add_user.php">Add User</a><a style="margin-left:10px; font:13px Arial; font-weight: bold" href="home.php">Back to Dashboard</a>

            </form>
        
<?php else: ?>
echo "<script type='text/javascript'>alert('Sorry, you do not have permission to access this page!')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='login.php'</script>";
<?php endif; ?>