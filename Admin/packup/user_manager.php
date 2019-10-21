<?php session_start(); ?><?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<title >SmoothRepairs User Manager</title>
<?php if($_SESSION['loggedIn']): ?>
<div class="navbar" style="padding-top:5px; font:13px Arial; background:#FF4500; color: #FFFFFF; height:20px; position:fixed; top:0; left:0px; width:100%;">
    <?php
    include("srconfig.php");
    session_start();
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "Hi " . $row['FIRST_NAME'];
    ?>
<?php endif; ?>

<?php if($row['USER_TYPE']=='Admin'): ?>
<a href="home.php" style="margin-left: 70%; color: #FFFFFF" >Home</a>
<a href="registrations.php" style="margin-left: 5px; color: #FFFFFF" >Back</a>
<a href="logout.php" style="margin-left: 5px; color: #FFFFFF" >Logout</a>
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

<div>
<body onload="changetextbox()" >
<form action=""  method="post" enctype="multipart/form-data">
<link rel="stylesheet" type="text/css" href="srstyle.css">
<br>
<br>
<div class="boxed" style="height: 615px; width: 841px; font: 15px Calibri; background: #FFFFFF; border: 1px solid #D8D8D8; margin-left: 50px">
<br>
<label for="REG_DATE" style="margin-left: 48px; font: 12px Calibri; font-weight: bold">Unique ID:</label>
<input type="text" name="UIDS" value="<?php echo  $row1['UID'] ?>" oninput="this.className = ''" style="margin-left: 10px; border: transparent; width: 100px; color: #0000CD" readonly>
<label for="REG_DATE" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">Date Registered:</label>
<input type="date" name="REG_DATE" value="<?php echo  $row1['REG_DATE'] ?>" style="margin-left: 10px; border: transparent; color: #0000CD" readonly>
<label id="DKU" style="margin-left:45px; font:12px Arial; font-weight: bold">Document Uploads</label>

<br>
<fieldset style=" float: left; margin-left: 27px; width: 450px; border: transparent" >
<label for="FIRST_NAME" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">First Name</label><label for="LAST_NAME" style="margin-left: 156px; font: 12px Calibri; font-weight: bold">Last Name</label>
<br><input type="text" name="FIRST_NAME" id="txtbx" value="<?php echo  $row1['FIRST_NAME'] ?>" oninput="this.className = ''" style="margin-left: 10px" ><input type="text" name="LAST_NAME" id="txtbxs" value="<?php echo  $row1['LAST_NAME'] ?>" oninput="this.className = ''" style="margin-left: 11px;">
<br>
<br>
<input type="text" name="UID" value="<?php echo  $row1['UID'] ?>" style="margin-left: 10px; border: transparent;" hidden>
<input type="text" name="PASSWORD" value="<?php echo  $row1['PASSWORD'] ?>" style="margin-left: 10px; border: transparent;" hidden>
<input type="text" id="TYP" name="ARTISAN_TYPE" value="<?php echo  $row1['ARTISAN_TYPE'] ?>" style="margin-left: 10px; border: transparent;" hidden>
<input type="text" name="LONGITUDE" id="LONGITUDE" oninput="this.className = ''" hidden>
<input type="text" name="LATITUDE" id="LATITUDE" oninput="this.className = ''" hidden>


<label for="ARTISAN_TYPE" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">Plan</label><label for="CATEGORY" style="margin-left: 189px; font: 12px Calibri; font-weight: bold">Category</label>
<br><select name="ARTISAN_TYPE" placeholder="Select Artisan Type..." oninput="this.className = ''" style="margin-left: 10px; width: 200px; font-size: 15px; border: 1px solid #D8D8D8; height: 25px">
<option value="<?php echo  $row1['ARTISAN_TYPE'] ?>"><?php echo  $row1['ARTISAN_TYPE'] ?></option><?php 
$sql135 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Type' ORDER BY OPTION_NAME");
while ($row135 = mysql_fetch_array($sql135)){
echo "<option value='". $row135['OPTION_NAME'] ."'>" . $row135['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
<select name="CATEGORY" placeholder="Select Category..." oninput="this.className = ''" style="margin-left: 8px; width: 200px; font-size: 15px; border: 1px solid #D8D8D8; height: 25px">
<option value="<?php echo  $row1['CATEGORY'] ?>"><?php echo  $row1['CATEGORY'] ?></option><?php 
$sql133 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='$UTYPE' ORDER BY OPTION_NAME");
while ($row133 = mysql_fetch_array($sql133)){
echo "<option value='". $row133['OPTION_NAME'] ."'>" . $row133['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>

<br>
<br>
<label for="LAST_NAME" style="margin-left: 10px; font: 12px Calibri; font-weight: bold; color: #FF4500">Username</label><label for="CATEGORY" style="margin-left: 160px; font: 12px Calibri; font-weight: bold; color: #0000CD">User Type</label>
<br>
<input type="text" name="USERNAME" id="txtbxs" value="<?php echo  $row1['USERNAME'] ?>" oninput="this.className = ''" style="margin-left: 10px; background: #F8F8F8; color: #FF4500; font-weight: bold" >
<select name="USER_TYPE" id="USER_TYPE" placeholder="Select User Type..." oninput="this.className = ''" style="margin-left: 8px; width: 200px; font-size: 15px; border: 1px solid #D8D8D8; height: 25px; color: #0000CD">
<option value="<?php echo  $row1['USER_TYPE'] ?>"><?php echo  $row1['USER_TYPE'] ?></option><?php 
$sql137 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='UType' ORDER BY OPTION_NAME");
while ($row137 = mysql_fetch_array($sql137)){
echo "<option value='". $row137['OPTION_NAME'] ."'>" . $row137['OPTION_NAME'] . "</option>";
}
?>
"</option>"</select>
<br>
<br>
<label for="ADDRESS_LINE_1" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">Address</label>
<br><input type="text" name="ADDRESS_LINE_1" value="<?php echo  $row1['ADDRESS_LINE_1'] ?>" id="txtbx" oninput="this.className = ''" style="margin-left: 10px; width: 410px" >
<br>
<br>
<label for="ADDRESS_LINE_2" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">Nearest Bus Stop</label>
<br>
<input type="text" name="ADDRESS_LINE_2" value="<?php echo  $row1['ADDRESS_LINE_2'] ?>" id="txtbxs" oninput="this.className = ''" style="margin-left: 10px; width: 410px" >

<br>
<br>
<label for="CITY" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">City or Town</label><label for="MOBILE" style="margin-left: 148px; font: 12px Calibri; font-weight: bold">Mobile Phone</label>
<br>
<input type="text" name="CITY" id="CITY" value="<?php echo  $row1['CITY'] ?>" oninput="this.className = ''" onchange="function()" style="float: left; margin-left: 10px; width: 200px; font-size: 15px; border: 1px solid #D8D8D8; height: 25px" >
<input type="text" name="MOBILE" id="txtbxs" style="margin-left: 10px;" value="<?php echo  $row1['MOBILE'] ?>" oninput="this.className = ''" >
<br>
<br>
<label for="EMAIL" style="margin-left: 10px; font: 12px Calibri; font-weight: bold">E-mail Address</label>
<br>
<input type="text" name="EMAIL" value="<?php echo  $row1['EMAIL'] ?>" id="txtbx" oninput="this.className = ''" style="margin-left: 10px; width: 410px" >
<br>
<br>

<label id="AKM" style="margin-left: 10px; font:12px Arial; font-weight: bold">Admin Comments</label><label for="STATUS" style="margin-left: 267px; font: 12px Calibri; font-weight: bold; color: #FF0000">Activate</label>
<br>
<textarea name="ADMIN_COMMENTS" rows="4" col="50" style="float: left; margin-left: 10px; height:65px; width:360px; font: 13px Arial; border: 1px solid #D8D8D8"><?php echo  $row1['ADMIN_COMMENTS'] ?></textarea><input type="checkbox" name="STATUS" id="Chkbx" value=1 <?php if($row1['STATUS'] == 1) echo "checked=1"; ?> oninput="this.className = ''" style="margin-left: 20px;" >
<br>
<br>
<input style="margin-left:155px;" id="submitb" name="submitb" type="submit" value="Back"><input style="margin-left:10px; margin-top: 15px" id="submit" name="submit" type="submit" value="Update">
</fieldset>

<fieldset id="F_PP" style="float: right; width: 120px; border: 1px solid #D8D8D8; margin-right: 50px" >
<label id='PPP' style="margin-left:1px; font:12px Arial; font-weight: bold">Passport Picture</label>
<br>
<input type="file" name="ARTISAN_PASSPORT" id="ARTISAN_PASSPORT" style="margin-left:1px" >
<br>
<input type="submit" value="Upload Picture" id="submia" name="PPsubmit">
<br>
<?php
    echo "<a href='https://www.smoothrepairs.com/Artisans/".$row1['ARTISAN_PASSPORT']."' style='float: left;' ><img src=https://www.smoothrepairs.com/Artisans/".$row1['ARTISAN_PASSPORT']." alt='No Passport/ Logo Uploaded' title='Artisan Passport' height='140px' width='120px'></a>"
?>

</fieldset>

<fieldset id="F_ID" style="float: right; width: 120px; border: 1px solid #D8D8D8; margin-right: 50px" >
<label id='IDK' style="margin-left: 1px; font:12px Arial; font-weight: bold">Identity Card</label>
<br>
<input  type="file" name="ARTISAN_IDCARD" id="ARTISAN_IDCARD" style="margin-left:1px" >
<br>
<input type="submit" value="Upload ID" id="submio" name="IDsubmit">
<br>
<?php
    Echo "<a href='https://www.smoothrepairs.com/Artisans/".$row1['ARTISAN_IDCARD']."' style='float: left; margin: 0' ><img src=https://www.smoothrepairs.com/Artisans/".$row1['ARTISAN_IDCARD']." alt='No ID/ Certificate Uploaded' title='Identity Card' height='140px' width='210px'></a>"
?>

</fieldset>
<br>

</div>
</form>
</body>
        <?php
        if (isset($_POST['submitb']))
            {
        echo "<script language='javascript' type='text/javascript'> location.href='registrations.php' </script>";

        }
        if (isset($_POST['submit']))
            {
        include("srconfig.php");
        
        $UID=$_POST['UID'];
        $FIRST_NAME=$_POST['FIRST_NAME'];
        $LAST_NAME=$_POST['LAST_NAME'];
        $ARTISAN_TYPE=$_POST['ARTISAN_TYPE'];
        $USERNAME=$_POST['USERNAME'];
        $EMAIL=$_POST['EMAIL'];
        $PASSWORD=$_POST['PASSWORD'];
        $MOBILE=$_POST['MOBILE'];
        $CATEGORY=$_POST['CATEGORY'];
        $CITY=$_POST['CITY'];
        $LATITUDE=$_POST['LATITUDE'];
        $LONGITUDE=$_POST['LONGITUDE'];
        $REG_DATE=$_POST['REG_DATE'];
        $ADDRESS_LINE_1=$_POST['ADDRESS_LINE_1'];
        $ADDRESS_LINE_2=$_POST['ADDRESS_LINE_2'];
        $STATUS=$_POST['STATUS'];
        $USER_TYPE=$_POST['USER_TYPE'];
        $ADMIN_COMMENTS=$_POST['ADMIN_COMMENTS'];
        

        $query = mysql_query("UPDATE Users SET FIRST_NAME='$FIRST_NAME',LAST_NAME='$LAST_NAME',LATITUDE='$LATITUDE',LONGITUDE='$LONGITUDE',ADMIN_COMMENTS='$ADMIN_COMMENTS',ARTISAN_TYPE='$ARTISAN_TYPE',USERNAME='$USERNAME',CITY='$CITY',USER_TYPE='$USER_TYPE',EMAIL='$EMAIL',CATEGORY='$CATEGORY',ADDRESS_LINE_1='$ADDRESS_LINE_1',MOBILE='$MOBILE',ADDRESS_LINE_2='$ADDRESS_LINE_2',STATUS='$STATUS' WHERE UID='$UID'");
        
        if ($_POST['STATUS'] == 1 && $_POST['USER_TYPE'] == "Artisan") {
        echo "<script type='text/javascript'>alert('User profile aproved. Notification sent')</script>";
        
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
        <i>Ayodele Osho,</i>
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
        echo "<script type='text/javascript'>alert('User profile unactivated. Notification sent')</script>";

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
        <i>Ayodele Osho,</i>
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