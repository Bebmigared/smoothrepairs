<?php
session_start();

//if(isset($_SESSION['user'])){  //if login in session is not set
    //	header("Location: index2.php");
  //  }
//elseif (!isset($_SESSION['user']) ) {
    # code...
  //  header('Location: login.php');
//}

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
                <a href="https://www.smoothrepairs.com" target="_blank">
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
                                <i class="fas fa-chart-bar"></i>My Requests</a>
                            
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
                                <a href="https://www.smoothrepairs.com" target="_blank">
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
                                                <strong><a href="index.php">Home</a></strong>
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
                                        <span><strong>Service Repair Details</strong></span>
                                        <!--<small> Form</small>-->
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="name" class=" form-control-label">Name</label>
                                            <input type="text" value="<?=$_SESSION['my_request']['name']?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Email</label>
                                            <input type="email" value="<?=$_SESSION['my_request']['email']?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Mobile</label>
                                            <input type="email" value="<?=$_SESSION['my_request']['mobile']?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Address</label>
                                            <input type="email" value="<?=$_SESSION['my_request']['location']?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Other Request Details</label>
                                            <textarea name="details" id="details" rows="5" class="form-control" disabled><?=$_SESSION['my_request']['details']?></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Date Requested</label>
                                            <input type="email" value="<?=$_SESSION['my_request']['date_requested']?>" class="form-control" disabled>
                                        </div>
                                        
                                        <!--<div class="form-group">
                                            <label for="address" class=" form-control-label">Address</label>
                                            <input type="text" name="address" value="" class="form-control" disabled>
                                        </div>-->
                                       
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


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