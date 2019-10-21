<?php
session_start();

//if(isset($_SESSION['user'])){  //if login in session is not set
    //	header("Location: index2.php");
  //  }
//elseif (!isset($_SESSION['user']) ) {
    # code...
  //  header('Location: login.php');
//}
include('sbconfig.php');
$email_id = $_SESSION['user']['email'];
$search = mysqli_query($db, "SELECT * FROM subscription WHERE email='$email_id' ") or die(mysqli_error($db));
$row = $search->fetch_assoc();
$tel = $row['phone'];
$building_type = $row['building_type'];
$address = $row['address'] .", ". $row['b_stop'] .", ". $row['state'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="smoothrepairs">
    <meta name="author" content="Assets repair">
    <meta name="keywords" content="Repairing">

    <!-- Title Page-->
    <title>SmoothRepairs - Subscription Profile</title>

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
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="SmoothRepairs_logo" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/avatar-big-01.jpg" alt="user_img" />
                    </div>
                    <h4 class="name"><?=$_SESSION['user']['firstname']?></h4>
                    <span><?=$_SESSION['user']['email']?></span>

                    <br>
                    <a href="logout.php">Logout</a>
                    <a target="_blank" href="change_pwd.php">Change Password</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-check-square"></i>New Request
                            </a>
                        </li>
                        <li>
                            <a href="requests.php">
                                <i class="fas fa-chart-bar"></i>My Requests
                            </a>
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="https://www.smoothrepairs.com">
                                    <img src="images/icon/logo-white.png" alt="SmoothRepairs_UserProfile" />
                                </a>
                            </div>
                            <div>
                                <a>

                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <strong><a href="#">Home</a></strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- RECENT REPORT 2-->
                                
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            <div class="col-xl-4">
                                <!-- TASK PROGRESS-->
                                
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header" style="text-align:center;font-size: x-large;">
                                        <span><strong>Request For A Service Repair</strong></span>
                                        <!--<small> Form</small>-->
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="name" class=" form-control-label">Name</label>
                                            <input type="text" value="<?=$_SESSION['user']['firstname']?>" class="form-control" disabled>
                                            <input type="text" name="name" value="<?=$_SESSION['user']['firstname']?>" class="form-control" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Email</label>
                                            <input type="email" value="<?=$_SESSION['user']['email']?>" class="form-control" disabled>
                                            
                                            <input type="text" name="id" value="<?=$_SESSION['user']['id']?>" class="form-control" hidden>
                                            <input type="text" name="tel" value="<?php echo $tel;?>" class="form-control" hidden>
                                            <input type="text" name="address" value="<?php echo $address;?>" class="form-control" hidden>
                                            
                                            <input type="email" name="email" value="<?=$_SESSION['user']['email']?>" class="form-control" hidden>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="address" class=" form-control-label">Address</label>
                                            <input type="text" name="address" value="" class="form-control" disabled>
                                        </div>-->
                                        <div class="form-group">
                                            <label>Type of Technician needed</label>
                                    <select class="form-control"  id="technicians" name="technicians" required>
                                                                                <option ></option>
<option value='AC Technician & Electrician'>AC Technician & Electrician</option>
<option value='AC Technician, Electrician & Plumber'>AC Technician, Electrician & Plumber</option>
<option value='Aluminium Carpenter'>Aluminium Carpenter</option>
<option value='Architect'>Architect</option>
<option value='Carpenter'>Carpenter</option>
<option value='Caterer'>Caterer</option>
<option value='Cleaner'>Cleaner</option>
<option value='Computer Engineer'>Computer Engineer</option>
<option value='Cook'>Cook</option>
<option value='Dry Cleaner'>Dry Cleaner</option>
<option value='Electrician'>Electrician</option>
<option value='Fumigation Expert'>Fumigation Expert</option>
<option value='GPS Tracking Equipment Installation Technician'>GPS Tracking Equipment Installation Technician</option>
<option value='Laptop Engineer'>Laptop Engineer</option>
<option value='Mechanic'>Mechanic</option>
<option value='Painter '>Painter </option>
<option value='Panel Beater'>Panel Beater</option>
<option value='Photographer'>Photographer</option>
<option value='Plumber'>Plumber</option>
<option value='Printer'>Printer</option>
<option value='Real Estate'>Real Estate</option>
<option value='Rewire'>Rewire</option>
<option value='Tiler'>Tiler</option>
<option value='Welder'>Welder</option>
<option value="others">Others, Please Specify</option>
                                                                            </select>
                                        </div>
                                                <div class="form-group">
</br>
                                                    <label for="details" class=" form-control-label">Repair Details</label>
                                                    <textarea name="details" id="details" rows="9" placeholder="repair details..." class="form-control"></textarea>
                                                

                                                </div>
                                                <button class="btn  btn-lg btn-primary btn-block" name="subscription" type="submit">Submit Request</button>

                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php 
include('sbconfig.php');
                    
if (isset($_POST['subscription'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $technicians = $_POST['technicians'];
    $details = $_POST['details'];
    $tel = $_POST['tel'];
    $user_id = $_POST['id'];
    /*
email	fullname	location	mobile	service_type	messages	date_req	status	details

id	name	email	location	mobile	service_type	date_requested	details	requested_by

*/

    $query = mysqli_query($db, "INSERT INTO subscribers_request (name,email,location,date_requested,mobile,service_type,details,requested_by) VALUES ('$name','$email','$address',NOW(),'$tel','$technicians','$details','$user_id')");
		//($db, $sql);
		if($query){
		    
		    
        $to = 'profgared@gmail.com';
        $subject = "SmoothRepairs Subscriber -  $name has just submitted a NEW REPAIR SERVICE REQUEST ";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Subscriber - $name has just submitted a NEW REPAIR SERVICE REQUEST </title>
        </head>
        <body>
        <img alt='SmoothRepairs_logo' name='SmoothRepairs_logo' style='height:20%; width:20%;' src='https://smoothrepairs.com/profile/favicon.jpg'>
        <br>
        <p>Dear Admin,</p>
        <p>This is to notify you that <strong> $fname has just submitted a new repair service request</strong>.</p>
        <br>
        <p>The request has the following details.</p>
        <br><strong>Request Originator:</strong> $name
        <br><strong>Mobile:</strong> $tel
        <br><strong>Email Address:</strong> $email
        <br><strong>Location:</strong> $address
        <br><strong>Type of Artisans Needed:</strong> $technicians
        <br><strong>Number of Artisans Needed:</strong> $details
        <br>
        <p>Welcome to the world of <strong>Exceptional Service Delivery</strong>.</p>
        <p>Best Regards,</p>
        <i>Admin Team,</i>
        <br><strong>SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        <br><a href='https://www.smoothrepairs.com/Admin/login.php'>Click Here to Login to SmoothRepairs</a>
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
		    
		    echo "<script type='text/javascript'>alert('Your Subscription Plan Details has been submitted successfully')</script>";
		    //header ('location: index.php');
		    echo "<script language='javascript' type='text/javascript'> location.href='requests.php' </script>";
		}
		else{
		     echo "<script type='text/javascript'>alert('Your Subscription Details has NOT submitted!! Try Again!!')</script>";
		}

}
?>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 SmoothRepairs. All rights reserved <a href="https://www.smoothrepairs.com">SmoothRepairs</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->