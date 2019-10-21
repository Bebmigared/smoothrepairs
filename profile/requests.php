<?php
session_start();
?>

<?php
                                        $uac = $_SESSION['user']['acct_type'];
                                        include 'sbconfig.php';

$query_0 = "SELECT * FROM subscribers_acct WHERE acct_type = $uac";
$result_0 = mysqli_query($db, $query_0);
$row = $result_0->fetch_assoc();

        $plan = $row['acct_type'];
        
    if ($plan = 'Bronze subscriptionUser'){
        $size= 25;
    }
    if ($plan = 'Silver subscriptionUser'){
        $size= 50;
    }
    if ($plan = 'Gold subscriptionUser'){
        $size= 100;
    }
    
?>

<?php

    $uid = $_SESSION['user']['id'];
    //include 'sbconfig.php';
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
$myreq = [];
$sql = "SELECT * FROM subscribers_request WHERE requested_by = $uid ORDER BY date_requested desc";
$result = mysqli_query($db, $sql);
$set = mysqli_num_rows($result);
if ($set != 0) {
    while ($row = $result->fetch_assoc()) {
        $myreq[] = $row;
        count($request);
        $_SESSION['reqs']= $set;
        
        $score = $set - $size;
    }
}

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
                    <img src="images/icon/logo-white.png" alt="Smoothrepairs_logo" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/avatar-big-01.jpg" alt="user_img" />
                    </div>
                    <h4 class="name"><?=$_SESSION['user']['firstname']?></h4>
                    <span href="#"><?=$_SESSION['user']['email']?></span>

                    <br>
                    <a href="logout.php">Logout</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="index2.php">
                                <i class="fas fa-check-square"></i>New Request
                            </a>
                        </li>
                        <li class="active has-sub">
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
                                    <img src="images/icon/logo-white.png" alt="Smoothrepairs_logo" />
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
                    <!--<div class="container-fluid">
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
                    </div>-->
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <section>
                <div class="section__content section__content--p30" style="text-align: center;">
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
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $_SESSION['reqs']; ?></h2>
                                                <span><strong>Total Requests</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $score; ?></h2>
                                                <span><strong>Requests Left</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-header" style="text-align:center;font-size: x-large;">
                                        <span><strong>My Requests</strong></span>
                                        <!--<small> Form</small>-->
                                </div>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th style="padding: 18px;">S/No</th>
                                                <th style="padding: 18px;">Date</th>
                                                <th style="padding: 18px;">Request type</th>
                                                <th style="padding: 18px;">Description</th>
                                                <th style="padding: 18px;">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <?php 
                                    for ($row = 0; $row < count($myreq); $row++) {
                                              //  print_r ($myeve);
                                            //return false;
                                            $number = $row +1;
                                        ?>
                            
                                    
                                        <tbody>
                                            <tr>
                                                <td><?php echo $number ?></td>
                                                <td style="padding: 5px;width: 150px;"><?php echo $myreq[$row]['date_requested'] ?></td>
                                                <td style="padding: 5px;width: 200px;"><?php echo $myreq[$row]['service_type'] ?></td>
                                                <td style="padding: 5px;"><?php echo $myreq[$row]['details'] ?></td>
                                                <td class="process"><a href="details.php/?nqrt=<?=$myreq[$row]['id']?>"> View request</a></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        <?php }?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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