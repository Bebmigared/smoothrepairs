<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="smoothrepairs">
    <meta name="author" content="Assets repair">
    <meta name="keywords" content="Repairing">
    
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="favicon.jpg">

        <title>SmoothRepairs - Forgot Password</title>

    </head>

<?php
/*
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}*/
?>
<body style="background-image: linear-gradient(1deg, #9fb8ad 0%, #1fc8db 85%, blue 95%);">

    <div class="container">
        
        <div class="row" style="text-align:center; padding-left:500px;">
            
            <div class="col-sm-5">
                <a href="https://www.smoothrepairs.com"><img src="logo.png"></a>
                <br>
                <br><br><br><br><br><br>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Password</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="">
        <h5>Re-Send SmoothRepairs Credentials</h5>
        <hr>
        <br>
        <div class="form-group">
                            <strong><label for="email">Enter Registered Email</label></strong>
                            <input class="form-control" id="email" name="email" type="text" placeholder="email address...." required><br>
                            <button id="submit" name="submit" type="submit" class="btn btn-lg btn-success btn-block">Resend Password</button>

                </div>
                <p><a href="login.php">Go Back</a></p>
                </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row"></div>
    </div>


</body>
<?php
    if (isset($_POST['submit']))
        {     
    include("sbconfig.php");
    $email=$_POST['email'];
    $query = mysqli_query($db, "SELECT * FROM subscribers_acct WHERE email = '$email'");
    $row = mysqli_fetch_array($query);
    
    $EMAIL=$row['email'];
    $PASSWORD=$row['password'];
    $fname=$row['firstname'];
    
    
    
     if ($query)
    {
        //require '../../mailing.php'   ;
    
    
        $to = $EMAIL;
        $subject = "SmoothRepairs Login Credentials for $fname ";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Login Credentials</title>
        </head>
        <body>
        <img alt='SmoothRepairs_logo' name='SmoothRepairs_logo' src='https://smoothrepairs.com/profile/logo.png'>
        <br>
        <p>Dear $fname,</p>
        <p>Thanks for choosing <strong>SmoothRepairs</strong>.</p>
        <p>Welcome to the world of <strong>Exceptional Service Delivery</strong>.</p>
        <i>Your login credentials are as follows:</i>
        <br>
        <br>Username: $EMAIL 
        <br>Password: $PASSWORD
        <p>Please feel free to contact our verified professionals anywhere, anytime!</p>
        <a href='http://www.smoothrepairs.com/profile/login.php'>Click Here to Login to SmoothRepairs</a>
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
        
        
        echo "<script type='text/javascript'>alert('Your login credentials have been sent to your registered email address')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='login.php' </script>";
    }
      else
      {
    echo "<script type='text/javascript'>alert('Invalid email address')</script>";
      }

    }
    
    ?>
</html>
