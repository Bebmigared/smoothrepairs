<?php session_start(); ?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<?php
require('header.php');
?>
<?php

    if ($_SESSION['loggedIn'] == true){
        
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
         echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
     }
    }
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" name="">
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
                        </form>
                        <?php
    if (isset($_POST['submit']))
        {     
    include("srconfig.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username;
    $query = mysql_query("SELECT * FROM Users WHERE USERNAME='$username' AND PASSWORD='$password' AND STATUS=1");
    $row = mysql_fetch_array($query);
    $_SESSION['last_login'] = $row['last_login'];
    $_SESSION['username']=$username;
    $_SESSION['loggedIn'] = true;
    // set new last login
     $update = mysql_query("UPDATE Users SET last_login = now() WHERE USERNAME='$username' AND PASSWORD='$password' AND STATUS=1");
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
         echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
     }
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
        </div>
    </div>
<?php
require('footer.php');
?>
</body>

</html>
