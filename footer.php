<style>
@media screen and (max-width: 650px){
#callnowbutton {
    display: block;
    position: fixed;
    text-decoration: none;
    z-index: 999997;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    border-top: 1px solid #5d6ec6;
    bottom: 15px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transform: scale(1);
    left:20px;
    background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zd…UtMTMuNjc0QzYuMTE3IDI0LjMgNy4xIDEzIDcuMSAxMyIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==) center/50px 50px no-repeat #304199;
}
}
</style>
<a id="#callnowbutton">
</a>
<footer class="footer-big-menu" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta text-center">
            <h1 class="cta-title">
              Are you an Artisan? <br> If yes, then register with us in order to position your skill in front of numerous Nigerians and start earning extra income.
            </h1>
            
            <a class="btn-outline ml-md-1" href="https://www.smoothrepairs.com/artisan.php">
             Become an Artisan
            </a>
          </div>
        </div>
      </div>
      <div class="row menu">
        <div class="col-md-4 col-lg-3">
          <h3 class="menu-title">Top Links</h3>
          <a class="menu-link" href="faqs.php">FAQ</a>
          <a class="menu-link" href="https://smoothrepairs.com/blog/">Blog</a>
          <a class="menu-link" href="#">Site Map</a>
          <a class="menu-link" href="contact-us.php">Contact Us</a>
          <a class="menu-link" href="#">Site Maps</a>
          <a class="menu-link" href="terms-conditions.php">Terms & Condition</a>
          <a class="menu-link" href="user-policy.php">User Protection Policy</a>
                 </div>
        <div class="col-md-4 col-lg-3">
          <h3 class="menu-title">Get in touch</h3>
          <a class="menu-link" >info[@]smoothrepairs.com</a>
          <a class="menu-link" href="https://api.whatsapp.com/send?phone=2348113975299">Request via Whatsapp</a>
          <a class="menu-link" >08090202323</a>
          <a class="menu-link" >9am - 5pm GMT+1 <br>(West Africa Standard Time)</a>
        </div>
        <div class="col-md-4 col-lg-3">
            <form action="" method="post">
          <h3 class="menu-title">News & Updates</h3>
         <div class="form-group">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="menu-link">You can trust us. we only send promo offers, not a single spam.</small>
            <input type="date" name="REG_DATE" placeholder="yyyy-mm-dd" value="<?php echo date("Y-m-d");?>" hidden>
             <button type="submit" name="Subscribe" class="btn btn-primary">Subscribe</button>
        </div>
        </form>
        </div>
        <div class="col-md-4 col-lg-3 text-center">
            <h3 class="menu-title">Connect With Us</h3>
          <a class="social-link" href="https://twitter.com/smoothRepairsNG">
            <i class="ion-social-twitter"></i>
          </a>
          <a class="social-link" href="https://web.facebook.com/SmoothRepairsNG/">
            <i class="ion-social-facebook"></i>
          </a>
          <a class="social-link" href="http://instagram.com/smoothrepairs">
            <i class="ion-social-instagram"></i>
          </a>
          <a class="social-link" href="https://www.linkedin.com/company/smoothrepairs/">
            <i class="ion-social-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <span class="bottom">© <script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="http://www.icsoutsourcing.com" target="_blank">ICS Digital Solutions</a> <a href="https://www.smoothrepairs.com/user-policy.php">See User Protection Policy</a></span>
  </footer>
  
<?php
        if (isset($_POST['Subscribe']))
            {
        include("srconfig.php");
        session_start();
        $EMAIL=$_POST['email'];
        $REG_DATE=$_POST['REG_DATE'];
        
       //Check for double entry
        $check_email=mysql_query("SELECT * FROM subscribers WHERE email='$EMAIL'") or die(mysql_error());
        $check_email_exist = mysql_num_rows($check_email);
          
            if($check_email_exist > 0)
            {
                echo "<script type='text/javascript'>alert('Thank You! You already subscribed.')</script>";
            }
            else
            {
                $sql1 = mysql_query("INSERT INTO subscribers(email,date_reg,status)VALUES('$EMAIL','$REG_DATE','0')");
        sendNotification_User($EMAIL);
        sendNotification_Admin($EMAIL);
	    echo "<script type='text/javascript'>alert('Your newsletter subscription was successful')</script>";
             }
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
                function sendNotification_User($Carrier)
                {
        $to = '$Carrier';
        $subject = "Newsletter Subscription";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Newsletter Subscription</title>
        </head>
        <body>
        <p>Hello,</p>
        <p>Thank you for subcribing on SmoothRepairs. We would love to keep you informed on important notifications, events and promotions when available.</p>
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
  <script type="text/javascript">
    $(function () {
      var trigger = new ScrollTrigger({
        toggle: {
          visible: 'customFadeInUp'
               },
        offset: {
          y: 150
        },
        once: true
      });
    });
    </script>
<!--<script type="text/javascript">-->
<!--$("#Rpop").hide();-->
<!--$(".index-intro-cta").style.display = 'none';-->
<!--$(document).ready(function(){-->
<!--      $('#showR').click(function(){-->
<!--      	  $('#Rpop').show();-->
<!--		  $('#Rpop').focus();-->
<!--       }-->
<!--       else{-->
<!--           $('#Rpop').hide();-->
<!--		   }-->
<!--   });-->
<!--});-->
<!--  </script>-->
</body>
</html>