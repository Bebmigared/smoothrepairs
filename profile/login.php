<?php
/*
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
*/

session_start();
?>
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
    <title>SmoothRepairs - Login</title>
</head>

<body style="background-image: linear-gradient(1deg, #9d00ff54 0%, #17a2b8ab 85%, #007bff 95%);">
    <div class="container">
        
        <div class="row" style="text-align:center; padding-left:500px;">
            <div class="col-sm-5">
                <a href="https://www.smoothrepairs.com"><img src="logo.png"></a>
                <br>
                <br><br><br><br><br><br>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Subscriber's Sign In</h3>
                        <hr>
                        <br>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" name="" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email..." name="email" type="text" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password..." name="password" type="password" required>
                                </div>
                                                               
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block" id="signin" name="signin" type="submit" value="Login">
                                <br>
                                <a href="forgot_pw.php">Forgot Password?</a><br>
                            </fieldset>
                        </form>
                        <?php

 if (isset($_POST['signin']))
        {     
    include('sbconfig.php');

    $username= $_POST['email'];
    $password= $_POST['password'];

    //$_SESSION['login_user']=$username;
    
    
    $login = mysqli_query($db, "SELECT * FROM subscribers_acct WHERE email='$username' AND password='$password'") or die(mysqli_error($db));

    //$row = mysqli_fetch_array($login);
    //var_dump(mysqli_query($login));
    $row = $login->fetch_assoc();
    
    //print_r($row);
    //return false;
    
    $_SESSION['last_login'] = $row['last_login'];
    $_SESSION['id']= $row['id'];
    $_SESSION['user']= $row;
    $_SESSION['loggedIn'] = true;
    // set new last login
     $update = mysqli_query($db, "UPDATE subscribers_acct SET last_login = now() WHERE email='$username' AND password='$password'");

         if ($login)
    {
     
         echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
     
    }
     else
      {
    echo "<script type='text/javascript'>alert('Username Or Password Invalid!')</script>";
    }
        }
     
    
        ?>

                    </div>
                </div>
        </div>

        <div class="row"></div>
</div>
    </div>

</body>

</html>
