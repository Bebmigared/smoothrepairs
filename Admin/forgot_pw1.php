<?php session_start(); ?><?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>
<body>
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/"><img src="smoothrepairs_logo.png" class="white" alt="smoothrepairs logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <!--<li class="nav-item active">
                                         <a class="nav-link" href="#id01" onclick="document.getElementById('id01').style.display='block'">Login</a>
                                    </li>-->
                                    <li class="nav-item active">
                                        <a class="nav-link btn-danger top-btn" href="artisan.php">Sign up</a>
                                    </li>
                                    
                                    
                                    <!--<li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>-->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="contact.php">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                   <!--<li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Listing</a></li>-->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <!-- Modal for Login -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">Close[ﾃ余</span>
        <h5>Sign-In to your SmoothRepairs Account</h5>
        </header>
      <div class="w3-padding">
          <div class="col-md-6">
		<div class="contact-form">
        <form method="post" name="">
            <label for="username">Username</label><br>
            <input class="input" id="username" name="username" type="text" placeholder="Enter Username"><br><br>
            <label for="password">Password</label><br>
            <input class="input"  id="password" name="password" type="password" placeholder="Enter Password">
            <br>
            <button class="main-button icon-button pull-right" id="submit" name="submit" type="submit">Sign-In &nbsp;&nbsp;</button>
            <br><br>
            <a href='forgot_pw.php'>Forgot Password?</a>
            <br>

                </form>
                </div>
                </div>
                <?php
    if (isset($_POST['submit']))
        {     
    include("srconfig.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username;
    $query = mysql_query("SELECT * FROM Users WHERE USERNAME='$username' AND PASSWORD='$password' AND STATUS=1");
    $row = mysql_fetch_array($query);
    $_SESSION['username']=$username;
    $_SESSION['loggedIn'] = true;
     if (mysql_num_rows($query) != 0)
    {
     if ($row['USER_TYPE'] =='User')
     {
         echo "<script language='javascript' type='text/javascript'> location.href='user_home.php' </script>";
     }
          if ($row['USER_TYPE']=='Artisan')
     {
         echo "<script language='javascript' type='text/javascript'> location.href='artisan_home.php' </script>";
     }
               if ($row['USER_TYPE']=='Admin')
     {
         echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
     }
     }
      else
      {
    echo "<script type='text/javascript'>alert('Username Or Password Invalid!')</script>";
    echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
    }
    }
    
    ?>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="http://www.icsoutsourcing.com" target="_blank">ICS Digital Solutions</a>
						</p>
      </footer>
    </div>
</div>

<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(img1/blog01.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
						<br/><br/>
							<li><a href="index.php">Home</a></li>
							<li>Reset Password</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		<div class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
<form method="post" name="">
        <h5>Re-Send SmoothRepairs Credentials</h5>
                            <label for="email">Enter Registered Email</label>
                            <br><input class="input" id="email" name="email" type="text" placeholder="Enter Registered Email" required><br>
                            <button id="submit" name="submit" type="submit" value="Send Email" class="main-button icon-button pull-right">Reset Password</button>

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
    <?php ; ?>                