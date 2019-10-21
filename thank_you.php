<?php 
 htmlspecialchars($_GET["subscribe"]);
$plan = $_GET["subscribe"];
//echo "My Plan is ".$plan." ";

//$plan = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   //if ($option) {
      //echo htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
   //}
?>
<html>
    <head>
        <title>
            SmoothRepair Subscription Form
        </title>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="shortcut icon" href="https://www.smoothrepairs.com/Smoothrepairs_favicon.jpg">
<!--<link rel="preload" href="dist/theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="dist/theme.min.css"></noscript>-->
<link rel="stylesheet" type="text/css" href="dist/theme.min.css" />

<?php include('gtm.php'); ?>
 <?php
include('header.php');
?>

<style>
    #subscr {
  /*background-color: blue;
  background-image: linear-gradient(1deg, #9fb8ad 0%, #1fc8db 85%, blue 95%);*/
  margin: auto;
  padding: 20px;
  width: 95%;
  min-width: 300px;
  border-radius: 15px;
  margin-bottom: 30px;
  margin-top: 50px;
}
</style>
    </head>
    <body style="background-image: linear-gradient(1deg, #9fb8ad 0%, #1fc8db 85%, #0000ff94 95%);">
        <?php
  include 'nav.php';
  ?>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" id="subscr" style="padding-top: 50px;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title" style="text-align:center; padding-top:10px;">SmoothRepair Subscription Successful</h2>
                </div>
                <div class="card-body">
                        
        <p>Dear Customer,</p>
        <p>Thanks for choosing <strong>SmoothRepair</strong>. Your <strong>order</strong> has been received and you will be notified by our technical team within 24Hrs</p>
        <p>The Details to enable us process your standing order deductions have been sent to your mail.</p>
        <br>
        <br>
        <h4><p>Back to <a href="https://www.smoothrepairs.com">SmoothRepair Website</a>.</p></h4>
      
	<hr>

      <footer>
        <p>&copy; SmoothRepair <?php $curYear = date('Y'); echo $curYear ;?> </p>
      </footer>
    </div> <!-- /container -->

                </div>
            </div>
        </div>
    </div>
  
    <?php
include('footer.php');
?>

    </body>
</html>