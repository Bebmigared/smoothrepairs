<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Links</h6>
								<ul class="footer-nav">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Advertise With Us</a></li>
									<li><a href="#">Support</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul class="footer-nav">
									<li><a href="#">Our Blog</a></li>
									<li><a href="#">FAQs</a></li>
									<li><a href="#"></a></li>
									<li><a href="#">Home</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" action="" method="post" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
											    
												<input type="email" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required >
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button type="submit" name="Subscribe" id="subscribe" class="main-button icon-button pull-right">Subscribe</button>
												<input type="date" name="REG_DATE" placeholder="yyyy-mm-dd" value="<?php echo date("Y-m-d");?>" hidden>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
									<?php
        if (isset($_POST['Subscribe']))
            {
                
        include("srconfig.php");
        session_start();

        $EMAIL=$_POST['email'];
        $REG_DATE=$_POST['REG_DATE'];
        
        $sql1 = mysql_query("INSERT INTO subscribers(email,date_reg,status)VALUES('$EMAIL','$REG_DATE','0')");
        
        sendNotification_User($EMAIL);
        sendNotification_Admin($EMAIL);
        
	    echo "<script type='text/javascript'>alert('Your newsletter subscription was successful')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='#' </script>";

        } 
        else {

        }
        //Notification Modules Subscribers and Admin
        function sendNotification_Admin($receiver){
        $to = 'info@smoothrepairs.com';
        $subject = "New Email Newsletter Subscription";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Subscription Signup</title>
        </head>
        <body>
        <p>Dear SmoothRepairs Team,</p>
        <p>You have a new newsletter subscription with the following details:</p>
        <p>$receiver</p>
        <p>Best Regards,</p>
        <br><i>Ayodele Osho,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "¥r¥n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "¥r¥n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "¥r¥n";

        mail($to,$subject,$message,$headers);
        }
        function sendNotification_User($Carrier){
        $to = '$Carrier';
        $subject = "Newsletter Subscription";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Newsletter Subscription</title>
        </head>
        <body>
        <p>Hello,</p>
        <p>Thank you for signing up as a client on SmoothRepairs. We would love to keep you informed on important notifications, events and promotions when available.</p>
        <p>To do this, kindly click on the 'Yes, subscribe me to this list' button above.</p>
        <p>If you received this email by mistake, simply delete it. You won't be subscribed if you don't click the confirmation link above.</p>
        <p>For questions about this list, please contact info@smoothrepairs.com</p><br/>
        <p>Thank you</p>
        <br>
        <p>Best Regards,</p>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "¥r¥n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "¥r¥n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "¥r¥n";

        mail($to,$subject,$message,$headers);
        }
        ?>
								</div>		
							</div>
						</div>
									
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="http://www.icsoutsourcing.com" target="_blank">ICS Digital Solutions</a>
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<ul class="footer-social">
							<li><a href="https://web.facebook.com/SmoothRepairsNG/ " class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/smoothRepairsNG" class="twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="http://instagram.com/smoothrepairs" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/company/smoothrepairs/ " class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		
	<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->
		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js1/jquery.min.js"></script>
		<script type="text/javascript" src="js1/bootstrap.min.js"></script>
		<script type="text/javascript" src="js1/main.js"></script>




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>