<?php session_start();


?>

<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../../Smoothrepairs_favicon.jpg" />

    <title>User Login | SmoothRepairs Admin Dashboard </title>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                               
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block" id="submit" name="submit" type="submit" value="Login">
                                <br>
                                <a href="forgot_pw.php">Forgot Password?</a><br>
                            </fieldset>
                            <?php
    if (isset($_POST['submit']))
        {     
    include("srconfig.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username;
    $query = mysql_query("SELECT * FROM Users WHERE USERNAME='$username' && PASSWORD='$password' && STATUS=1");
    $row = mysql_fetch_array($query);
    $_SESSION['last_login'] = $row['last_login'];
     $_SESSION['username']=$username;
    $_SESSION['loggedIn'] = true;
     $update = mysql_query("UPDATE Users SET last_login = now() WHERE USERNAME='$username' && PASSWORD='$password' && STATUS=1");
    
     
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
         echo "<script language='javascript' type='text/javascript'> location.href='/Admin/pages/index.php' </script>";
     }
     }
      else
      {
    echo "<script type='text/javascript'>alert('Username Or Password Invalid!')</script>";
    }
    }
    
    ?>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
