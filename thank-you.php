<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<?php
include 'header.php';
?>
<body>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <?php
  include 'nav.php';
  ?>
  <br>
  <br>
<section class="main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Your Registration was successful</h2>
                         <p>Thanks for choosing <strong>SmoothRepairs</strong>.</p>
                            <p>You will be notified by the admin on the progress of your registration.</p>
                            <p>Welcome to the world of <strong>Unlimited Opportunities</strong>.</p>
                                <p>Best Regards,</p>
                                    <br><i>Owolabi Olaniyi,</i>
                                    <br><strong>COO, SmoothRepairs</strong>
                                    <br>info@smoothrepairs.com
                                    <br>Mobile: 08113975299
                    </div>
                </div>
            </div>
            
        </div>
    </section>
		<?php
		include('footer.php');
		?>
</body>
</html>