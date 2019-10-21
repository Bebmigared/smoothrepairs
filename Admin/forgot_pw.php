<?php session_start();
?>
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
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Password</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" name="">
        <h5>Re-Send SmoothRepairs Credentials</h5>
        <div class="form-group">
                            <label for="email">Enter Registered Email</label>
                            <br><input class="input" id="email" name="email" type="text" placeholder="Enter Registered Email" required><br><br>
                            <button id="submit" name="submit" type="submit" value="Send Email" class="btn btn-lg btn-success btn-block">Reset Password</button>

                </div>
                <p><a href="login.php">Go Back</a></p>
                </form>
                            <?php
    if (isset($_POST['submit']))
        {     
    include("srconfig.php");
    $email=$_POST['email'];
    $query = mysql_query("SELECT * FROM Users WHERE EMAIL='$email' AND STATUS=1");
    $row = mysql_fetch_array($query);
    $USERNAME=$row['USERNAME'];
    $EMAIL=$row['EMAIL'];
    $PASSWORD=$row['PASSWORD'];
    $FIRST_NAME=$row['FIRST_NAME'];
    $LAST_NAME=$row['LAST_NAME'];
    
     if (mysql_num_rows($query) != 0)
    {
    echo "<script type='text/javascript'>alert('Your login credentials have been sent to your registered email address')</script>";
    
        $to = $EMAIL;
        $subject = "SmoothRepairs Login Credentials for $FIRST_NAME $LAST_NAME";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Login Credentials</title>
        </head>
        <body>
        <p>Dear $FIRST_NAME,</p>
        <p>Thanks for choosing <strong>SmoothRepairs</strong>.</p>
        <p>Welcome to the world of <strong>Exceptional Service Delivery</strong>.</p>
        <i>Your login credentials are as follows:</i>
        <br>
        <br>Username: $USERNAME 
        <br>Password: $PASSWORD
        <p>Please feel free to take advantage of our verified professionals anywhere, anytime!</p>
        <a href='http://www.smoothrepairs.com/login.php'>Click Here to Login to SmoothRepairs</a>
        <p>Best Regards,</p>
        <i>Admin Team,</i>
        <br><strong>SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
    
    }
      else
      {
    echo "<script type='text/javascript'>alert('Invalid email address')</script>";
    }
    }
    
    ?>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include('footer.php');
?>

</body>

</html>
