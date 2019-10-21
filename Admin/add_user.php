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
           <?php
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
    echo "<h1 class='page-header'> Hi " . $row['FIRST_NAME']."</h1>";
    ?>
<?php endif; ?>
</div>
</div>
<?php
include("srconfig.php");
session_start();
$Id = $_GET['UID'];
$sql1 = "SELECT * FROM Users WHERE UID='$Id'";
$result1 = mysql_query($sql1) or die(mysql_error());
$row1 = mysql_fetch_array($result1);
$UTYPE=$Id = $row1['USER_TYPE'];
?>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Creation
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
<form action=""  method="post" enctype="multipart/form-data" role="form">
<br>
<div class="form-group">
<label>Create New User</label>
</div>
<div class="form-group">
<label for="FIRST_NAME">First Name</label>
<input class="form-control" type="text" name="FIRST_NAME" id="txtbx"  required>
</div>
<div class="form-group">
<label for="LAST_NAME">Last Name</label>
<input class="form-control" type="text" name="LAST_NAME" id="txtbxs"  required>
<input type="text" name="LONGITUDE" id="LONGITUDE" oninput="this.className = ''" hidden>
<input type="text" name="LATITUDE" id="LATITUDE" oninput="this.className = ''" hidden>
</div>
<div class="form-group">
    <label for="Gender">Gender</label>
          <select name="Gender" class="form-control" required>
      <option></option>
      <?php 
$sql135 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Gender' ORDER BY OPTION_NAME");
while ($row135 = mysql_fetch_array($sql135)){
echo "<option value='". $row135['OPTION_NAME'] ."'>" . $row135['OPTION_NAME'] . "</option>";
}
?>
</select>
        </div>
<div class="form-group">
    <label for="qualification">Qualification</label>
          <select name="qualification" class="form-control">
      <option></option>
      <?php 
$sql138 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Qualification' ORDER BY OPTION_NAME");
while ($row138 = mysql_fetch_array($sql138)){
echo "<option value='". $row138['OPTION_NAME'] ."'>" . $row138['OPTION_NAME'] . "</option>";
}
?>
</select>
        </div>


<!--<div class="form-group">
<label for="ARTISAN_TYPE">Plan</label>
<select class="form-control" name="ARTISAN_TYPE" placeholder="Select Artisan Type..." oninput="this.className = ''">
<option value="<php echo  $row1['ARTISAN_TYPE'] ?>"><php echo  $row1['ARTISAN_TYPE'] ?></option><php 
$sql135 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Type' ORDER BY OPTION_NAME");
while ($row135 = mysql_fetch_array($sql135)){
echo "<option value='". $row135['OPTION_NAME'] ."'>" . $row135['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
</div>-->
<div class="form-group">
<label for="CATEGORY">Category</label>
<select class="form-control" name="CATEGORY" >
<option></option>
<?php 
$sql133 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Artisan' ORDER BY OPTION_NAME");
while ($row133 = mysql_fetch_array($sql133)){
echo "<option value='". $row133['OPTION_NAME'] ."'>" . $row133['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
</div><!--
<div class="form-group">
<label for="LAST_NAME">Username</label>
<input class="form-control" class="form-control" type="text" name="USERNAME" id="txtbxs" placeholder="Choose a Username...">
<label for="PASSWORD">Password</label>
<input class="form-control" type="password" name="PASSWORD" placeholder="Enter Password..." required>
</div>-->
<div class="form-group">
<label for="CATEGORY" >User Type</label>
<select class="form-control" name="USER_TYPE" id="USER_TYPE"  >
<option></option>
<option value="<?php echo  $row1['USER_TYPE'] ?>"><?php echo  $row1['USER_TYPE'] ?></option><?php 
$sql137 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='UType' ORDER BY OPTION_NAME");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['OPTION_NAME'] ."'>" . $row137['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
</div>
<div class="form-group">
    <label>Years of Experience</label>
<select name="experience" class="form-control">
      <option value=""></option>
<?php 
$sql138 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Experience' ORDER BY OPTION_NAME");
while ($row138 = mysql_fetch_array($sql138)){
echo "<option value='". $row138['OPTION_NAME'] ."'>" . $row138['OPTION_NAME'] . "</option>";
}
?>
</select>
        </div>

<!--
<div class="form-group">
<label for="ADDRESS_LINE_1">Address</label>
<input class="form-control" type="text" name="ADDRESS_LINE_1" placeholder="Address..." id="txtbx" oninput="this.className = ''" >
</div>
<div class="form-group">
<label for="ADDRESS_LINE_2">Nearest Bus Stop</label>
<input class="form-control" type="text" name="ADDRESS_LINE_2" placeholder="Enter Nearest Bus Stop..." id="txtbxs" >
</div>
<div class="form-group">
<label for="CITY">City or Town</label>
<input class="form-control" type="text" name="CITY" id="CITY" placeholder="City or Town..."oninput="this.className = ''" onchange="function()" >
</div>-->
<div class="form-group">
    <label for="STATE">State</label>
          <select name="STATE" class="form-control" required>
      <option value="">Select Location</option>
<?php 
$sql138 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='States' ORDER BY OPTION_NAME");
while ($row138 = mysql_fetch_array($sql138)){
echo "<option value='". $row138['OPTION_NAME'] ."'>" . $row138['OPTION_NAME'] . "</option>";
}
?>
</select>
<input class="input" type="date" name="REG_DATE" placeholder="yyyy-mm-dd" value="<?php echo date("Y-m-d");?>" hidden>
        </div>
<div class="form-group">
<label for="MOBILE">Mobile Phone</label>
<input class="form-control" type="text" name="MOBILE" id="txtbxs">
</div>
<div class="form-group">
<label for="EMAIL">E-mail Address</label>
<input class="form-control" type="text" name="EMAIL" id="txtbx">
</div>
<div>
<label id="AKM">Admin Comments</label>
<textarea class="form-control" name="ADMIN_COMMENTS" rows="4" col="50"></textarea>
<input class="checkbox" type="checkbox" name="STATUS" id="Chkbx" value=1 <?php if($row1['STATUS'] == 1) echo "checked=1"; ?> 
<label for="STATUS">Add User</label>
</div>
<!--
<div class="form-group">
<fieldset id="F_PP">
<label id='PPP'>Passport Picture</label>
<input class="form-control" type="file" name="ARTISAN_PASSPORT" id="ARTISAN_PASSPORT"><input class="btn btn-default" type="submit" value="Upload Picture" id="submia" name="PPsubmit">
<div class="form-group">
<php
    Echo "<a href='https://www.smoothrepairs.com/Admin/pages/Artisans/".$row1['ARTISAN_PASSPORT']."' style='float: left;' ><img src=https://www.smoothrepairs.com/Admin/pages/Artisans/".$row1['ARTISAN_PASSPORT']." alt='No Passport/ Logo Uploaded' title='Artisan Passport' height='140px' width='120px'></a>"
?>
</div>
</fieldset>
</div>
<div class="form-group">
<fieldset id="F_ID">
<label id='IDK'>Identity Card</label>
<input class="form-control"  type="file" name="ARTISAN_IDCARD" id="ARTISAN_IDCARD"  >
<input type="submit"  class="btn btn-default" value="Upload ID" id="submio" name="IDsubmit">
<div class="form-group">
<php
    Echo "<a href='https://www.smoothrepairs.com//Admin/pages/Artisans/".$row1['ARTISAN_IDCARD']."' style='float: left; margin: 0' ><img src='https://www.smoothrepairs.com/Admin/pages/Artisans/".$row1['ARTISAN_IDCARD']."' alt='No ID/ Certificate Uploaded' title='Identity Card' height='140px' width='210px'></a>"
?>
</div>
</fieldset>
</div>-->
<div class="form-group">

<input id="submitb" class="btn btn-default" name="submitb" type="submit" value="Back">

<input class="btn btn-default" id="submit" name="submit" type="submit" value="Create">
</fieldset>
</div>
        <?php
        if (isset($_POST['submitb']))
            {
        echo "<script language='javascript' type='text/javascript'> location.href='registrations.php' </script>";

        }
        if (isset($_POST['submit']))
            {
        include("srconfig.php");
        
    
        $FIRST_NAME=$_POST['FIRST_NAME'];
        $LAST_NAME=$_POST['LAST_NAME'];
        $GENDER=$_POST['Gender'];
        $QUALIFICATION=$_POST['qualification'];
        $EMAIL=$_POST['EMAIL'];
        $MOBILE=$_POST['MOBILE'];
        $CATEGORY=$_POST['CATEGORY'];
        $EXPERIENCE=$_POST['experience'];
        $STATE=$_POST['STATE'];
        $LATITUDE=$_POST['LATITUDE'];
        $LONGITUDE=$_POST['LONGITUDE'];
        $STATUS=$_POST['STATUS'];
        $USER_TYPE=$_POST['USER_TYPE'];
        $ADMIN_COMMENTS=$_POST['ADMIN_COMMENTS'];
        $REG_DATE=$_POST['REG_DATE'];
        
        
        $query = mysql_query("INSERT INTO Users (FIRST_NAME,LAST_NAME,LATITUDE,LONGITUDE,ADMIN_COMMENTS,STATE,EMAIL,CATEGORY,EXPERIENCE,MOBILE,STATUS,USER_TYPE,GENDER,REG_DATE,QUALIFICATION) VALUES('$FIRST_NAME','$LAST_NAME','$LATITUDE','$LONGITUDE','$ADMIN_COMMENTS','$STATE', '$EMAIL', '$CATEGORY', '$EXPERIENCE', '$MOBILE', '$STATUS','$USER_TYPE','$GENDER','$REG_DATE','$QUALIFICATION')") or die(mysql_error($db));
        
        if ($_POST['STATUS'] == 1 && $_POST['USER_TYPE'] == "Artisan") {
            //echo 'Records Ready to Submit';
        //echo $FIRST_NAME;
        //echo $LAST_NAME;
        //echo $GENDER;
        //echo $QUALIFICATION;
        //echo $EMAIL;
        //echo $MOBILE;
        //echo $CATEGORY;
        //echo $EXPERIENCE;
        //echo $STATE;
        //echo $LATITUDE;
        //echo $LONGITUDE;
        //echo $STATUS;
        //echo $ADMIN_COMMENTS;
        //return false;
        
        
        echo "<script type='text/javascript'>alert('User profile Approved. Notification sent')</script>";
        
        $to = $EMAIL;
        $subject = "SmoothRepairs Registration Approval for $FIRST_NAME $LAST_NAME";

        $message = "
        <html>
        <head>
        <title><strong><u>SmoothRepairs Registration Approval Notification</u></strong></title>
        </head>
        <body>
        <p>Dear $FIRST_NAME,</p>
        <p>Thanks for choosing <strong>SmoothRepairs</strong>.</p>
        <p>Your registration with Africa's largest professional community has been approved.</p>
        <p>Kindly use the following link to access and update your user profile:</p>
        <p><a href='http://www.smoothrepairs.com/indexx.php'>Click Here to access your profile</a></p>
        <i>Your login credentials are as follows:</i>
        <br>
        <br>Username: $USERNAME 
        <br>Password: $PASSWORD
        <p>Welcome to the world of <strong> limitless Opportunities!</strong>.</p>
        <p>Best Regards,</p>
        <i>Owolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        
        
        $request = "";                                      //initialize the request variable
$param["user"] = "ics_limited";                     //this is the username of our smstorrent.net api account
$param["cypher"] = "ics_recruitment";               //this is the password of our smstorrent.net api account
$param["message"] = "Dear $FIRST_NAME, your SmoothRepairs registration has been approved. You are now a registered SmoothRepairs professional. Congratulations";   //this is the message that we want to send
$param["recipient"] = "$ARTISAN_MOBILE";                //these are the comma-separated recipients of the message
$param["sender"] = "S_Repairs";                        //this is our sender 
$param["redirect"]= "";                             //optional parameter if you want your script to handle the response.
$param["resp_type"]= "data";                        //optional parameter (data | html)

foreach($param as $key=>$val)               //traverse through each member of the param array
{ 
  $request.= $key."=".rawurlencode($val);       //we have to urlencode the values
  $request.= "&";                   //append the ampersand (&) sign after each paramter/value pair
}
$request = substr($request, 0, strlen($request)-1);     //remove the final ampersand sign from the request

//First prepare the info that relates to the connection
$host = "api.smstorrent.net";               //The API domain 
$script = "/http/";                 //the script location
$request_length = strlen($request);
$method = "POST";                   // must be POST if sending large no of  messages
if ($method == "GET"){
  $script .= "?$request";
}

//Now comes the header which we are going to post. 
$header = "$method $script HTTP/1.1\r\n";
$header .= "Host: $host\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: $request_length\r\n";
$header .= "Connection: close\r\n\r\n";
$header .= "$request\r\n";

//Now we open up the connection
$socket = @fsockopen($host, 80, $errno, $errstr); 
if ($socket) //if its open, then...
{ 
  fputs($socket, $header);          // send the details over
  while(!feof($socket))
  {
    echo trim(fgets($socket));      //get the results 
  }
  fclose($socket); 
} else {
    echo "SMS sending failed:: Reason: could not connect to gateway!";
    
    }

        echo "<script language='javascript' type='text/javascript'> location.href='registrations.php' </script>";

        }
        if ($_POST['STATUS'] == 0 && $_POST['USER_TYPE'] == "Artisan") {
            
       
            
        echo "<script type='text/javascript'>alert('User CREATED, Profile UNACTIVATED!. Notification sent')</script>";

        $to = $EMAIL;
        $subject = "SmoothRepairs Registration Limitation for $FIRST_NAME $LAST_NAME";

        $message = "
        <html>
        <head>
        <title><strong><u>SmoothRepairs Registration Limitation Notification</u></strong></title>
        </head>
        <body>
        <p>Dear $FIRST_NAME,</p>
        <p>Thanks for choosing <strong>SmoothRepairs</strong>.</p>
        <p>Your registration with Africa's largest professional community has been delayed for the following reasons:</p>
        <p style='color: #FF0000' ><i><strong>$ADMIN_COMMENTS</strong></i></p>
        <br>
        <p>Kindly use the following link to access and update your user profile:</p>
        <a href='http://www.smoothrepairs.com/artisan_2.php?USERNAME=$USERNAME'>Click Here to Update Your Profile</a>
        <p><i>Your login credentials are as follows:</i></p>
        Username: $USERNAME 
        <br>Password: $PASSWORD
        <p>Welcome to the world of <strong> limitless Opportunities!</strong>.</p>
        <p>Best Regards,</p>
        <i>Owolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);


        echo "<script language='javascript' type='text/javascript'> location.href='registrations.php' </script>";
        

        }else {
            
        echo "<script type='text/javascript'>alert('Update successful')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='registrations.php' </script>";

        }
        }

        ?>
        
<?php
$UID=$row1['UID'];
$IDUID=$row1['UID'].PP;
$ARTISAN_PASSPORT=$_FILES["ARTISAN_PASSPORT"]["name"];
$ARTISAN_PASSPORTP=pathinfo($ARTISAN_PASSPORT, PATHINFO_EXTENSION);
$target_dir = "Artisans/";
$target_file = $target_dir . basename($row1['UID']."PP.".pathinfo($ARTISAN_PASSPORT, PATHINFO_EXTENSION));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["ARTISAN_PASSPORT"]["name"],PATHINFO_EXTENSION));
if(isset($_POST["PPsubmit"])) {
    

    
    $query6=mysql_query("UPDATE Users SET ARTISAN_PASSPORT='$IDUID.$ARTISAN_PASSPORTP' WHERE UID='$UID'");
    $check = getimagesize($_FILES["ARTISAN_PASSPORT"]["tmp_name"]);
    if($check !== false) {
        echo "<script type='text/javascript'>alert('File is a supported image - " . $check["mime"] . ".')</script>";
        $uploadOk = 1;
    } else {
        echo "<script type='text/javascript'>alert('File is not a supported image.')</script>";
        $uploadOk = 0;
    }

if (file_exists($target_file)) {
    echo "<script type='text/javascript'>alert('Sorry, file already exists.')</script>";
    $uploadOk = 0;
}
if ($_FILES["ARTISAN_PASSPORT"]["size"] > 30000) {
    echo "<script type='text/javascript'>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.')</script>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "<script type='text/javascript'>alert('Sorry, your file was not uploaded.')</script>";
} else {
    if (move_uploaded_file($_FILES["ARTISAN_PASSPORT"]["tmp_name"], $target_file)) {
        echo "<script type='text/javascript'>alert('The file ". basename($_FILES["ARTISAN_PASSPORT"]["name"]). " has been uploaded.')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.')</script>";
    }
}
}
?>

<?php
$UID=$row1['UID'];
$IDUID=$row1['UID'].ID;
$ARTISAN_IDCARD=$_FILES["ARTISAN_IDCARD"]["name"];
$ARTISAN_IDCARDP=pathinfo($ARTISAN_IDCARD, PATHINFO_EXTENSION);
$target_dir = "Artisans/";
$target_file = $target_dir . basename($row1['UID']."ID.".pathinfo($ARTISAN_IDCARD, PATHINFO_EXTENSION));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["ARTISAN_IDCARD"]["name"],PATHINFO_EXTENSION));
if(isset($_POST["IDsubmit"])) {
    

    
    $query6=mysql_query("UPDATE Users SET ARTISAN_IDCARD='$IDUID.$ARTISAN_IDCARDP' WHERE UID='$UID'");
    $check = getimagesize($_FILES["ARTISAN_IDCARD"]["tmp_name"]);
    if($check !== false) {
        echo "<script type='text/javascript'>alert('File is a supported image - " . $check["mime"] . ".')</script>";
        $uploadOk = 1;
    } else {
        echo "<script type='text/javascript'>alert('File is not a supported image.')</script>";
        $uploadOk = 0;
    }

if (file_exists($target_file)) {
    echo "<script type='text/javascript'>alert('Sorry, file already exists.')</script>";
    $uploadOk = 0;
}
if ($_FILES["ARTISAN_IDCARD"]["size"] > 50000) {
    echo "<script type='text/javascript'>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.')</script>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "<script type='text/javascript'>alert('Sorry, your file was not uploaded.')</script>";
} else {
    if (move_uploaded_file($_FILES["ARTISAN_IDCARD"]["tmp_name"], $target_file)) {
        echo "<script type='text/javascript'>alert('The file ". basename($_FILES["ARTISAN_IDCARD"]["name"]). " has been uploaded.')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file.')</script>";
    }
}
}
?>



<?php else: ?>

<a href="index.php">Sign-In</a>
<?php endif; ?>
</form>
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