<?php
include 'header.php';
?>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT5X67L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <?php
  include 'nav.php';
  ?>
  </script>
    <?php
    include("srconfig.php");
?>
  <div class="agency-contact-hero">
    <div class="container">
      <h3 class="customFadeInUp">
        Get In Touch
      </h3>
    </div>
  </div>


<div class="agency-contact-form">
    <div class="container">
      <form method="post" action="">
          <h2>Send a Message</h2>
        <input type="text" name="name" placeholder="Your name" required />
        <input type="email" name="email"  placeholder="Email address" required />
        <input type="text" name="phone" placeholder="Phone number" required />
        <select style="    font-size: 18px;
    margin-top: 20px;
    outline: 0;
    color: #888;
    background: #fff;
    padding: 18px 20px;
    border: 1px solid #cbcdd2;
    width: 100%;
    border-radius: 4px;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -ms-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;" name="location" value="Select State"  required>
                                                                                <option>Select State</option>
                                                                                <option value="Abuja FCT">Abuja FCT</option>
                                                                                <option value="Abia">Abia</option>
                                                                                <option value="Adamawa">Adamawa</option>
                                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                                <option value="Anambra">Anambra</option>
                                                                                <option value="Bauchi">Bauchi</option>
                                                                                <option value="Bayelsa">Bayelsa</option>
                                                                                <option value="Benue">Benue</option>
                                                                                <option value="Borno">Borno</option>
                                                                                <option value="Cross River">Cross River</option>
                                                                                <option value="Delta">Delta</option>
                                                                                <option value="Ebonyi">Ebonyi</option>
                                                                                <option value="Edo">Edo</option>
                                                                                <option value="Ekiti">Ekiti</option>
                                                                                <option value="Enugu">Enugu</option>
                                                                                <option value="Gombe">Gombe</option>
                                                                                <option value="Imo">Imo</option>
                                                                                <option value="Jigawa">Jigawa</option>
                                                                                <option value="Kaduna">Kaduna</option>
                                                                                <option value="Kano">Kano</option>
                                                                                <option value="Katsina">Katsina</option>
                                                                                <option value="Kebbi">Kebbi</option>
                                                                                <option value="Kogi">Kogi</option>
                                                                                <option value="Kwara">Kwara</option>
                                                                                <option value="Lagos">Lagos</option>
                                                                                <option value="Nassarawa">Nassarawa</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Ogun">Ogun</option>
                                                                                <option value="Ondo">Ondo</option>
                                                                                <option value="Osun">Osun</option>
                                                                                <option value="Oyo">Oyo</option>
                                                                                <option value="Plateau">Plateau</option>
                                                                                <option value="Rivers">Rivers</option>
                                                                                <option value="Sokoto">Sokoto</option>
                                                                                <option value="Taraba">Taraba</option>
                                                                                <option value="Yobe">Yobe</option>
                                                                                <option value="Zamfara">Zamfara</option>
                                                                            </select>
          
        <input type="text" name="subject" placeholder="Your Subject" required/>
        <textarea placeholder="Message" name="message" rows="6" required></textarea>
        <input type="date" name="REG_DATE" placeholder="yyyy-mm-dd" value="<?php echo date("Y-m-d");?>" hidden>
        <input type="submit" name="Submit" id="submit" value="Send message" />
      </form>
<?php
        if (isset($_POST['Submit']))
            {
                
        include("srconfig.php");
        session_start();

        $NAME=$_POST['name'];
        $MESSAGE=$_POST['message'];
        $PHONE=$_POST['phone'];
        $EMAIL=$_POST['email'];
        $SUBJECT=$_POST['subject'];
        $LOCATION=$_POST['location'];
        $REG_DATE=$_POST['REG_DATE'];
        
        
        function hasLink($string){
            
        $regex = "((https?|ftp)\:\/\/)?"; // SCHEME 
        $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass 
        $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
        $regex .= "(\:[0-9]{2,5})?"; // Port 
        $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
        $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
        $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor 
        
        if(preg_match("/^$regex$/", $string)) 
   { 
          return true;
   }
            return false;
  
        }
        
        
        $badWords = array("iphone x", "win", "won", "congratulations", "capsule", "night", "sexual", "pills", "bitcoin", "trading", "binary", "natural", "stress", "money", "last", "longer", "bed", "sex", "beautiful girl", "sexy", "girls for sex in your city", "sexy girls for the night", "bet9ja", "meet sexy girls", "best girl for sex", "high", "tablets", "potency", "girls", "fuck", "fucked");
        
        function match($badWords, $short_message)

            {

    foreach($badWords as $badWord){

        if (strpos($short_message, $badWord) !== false) {

            return true;

        }

                              }

    return false;

        }
        
        if(match($badWords, $MESSAGE) ||  match($badWords, $SUBJECT) || hasLink($MESSAGE)  )
        {
        echo "<script type='text/javascript'>alert('Your message has been successfully sent to our SmoothRepairs team and you will be contacted shortly')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='/contact-us' </script>";
        }
        else
        {
        
        $sql = mysql_query("INSERT INTO contact_us(name,email,phone_no,location,subject,message,date_reg)VALUES('$NAME','$EMAIL','$PHONE','$LOCATION','$SUBJECT','$MESSAGE','$REG_DATE')");
	
	$to = 'info@smoothrepairs.com';
        $subject = "$SUBJECT";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Inquiry for $NAME</title>
        </head>
        <body>
        <p>Dear SmoothRepairs Team,</p>
        <p>$NAME sent in an inquiry on $REG_DATE with the following details:</p>
        <p>$NAME</p>
        <p>$EMAIL</p>
        <p>$PHONE</p>
        <p>$LOCATION</p>
        <p>$MESSAGE</p>
        <p>Kindly review and contact the inquirer accordingly</p>
        <p>Best Regards,</p>
        <br><i>Owolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        //Second mail
        $to = 'enquiries@icsoutsourcing.com';
        $subject = "$SUBJECT";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Inquiry for $NAME</title>
        </head>
        <body>
        <p>Dear SmoothRepairs Team,</p>
        <p>$NAME sent in an inquiry on $REG_DATE with the following details:</p>
        <p>$NAME</p>
        <p>$EMAIL</p>
        <p>$PHONE</p>
        <p>$LOCATION</p>
        <p>$MESSAGE</p>
        <p>Kindly review and contact the inquirer accordingly</p>
        <p>Best Regards,</p>
        <br><i>Owolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        
        echo "<script type='text/javascript'>alert('Your message has been successfully sent to our SmoothRepairs team and you will be contacted shortly')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='/contact-us' </script>";

	
        }
            }
            
        else {

        }
        ?>      
    </div>
  </div>

  <div class="agency-contact-intro">
    <div class="container">
      <p>
        For all inquiries including new business, employment opportunities or to hear more about our services, please get in touch. We'd love to help you with your new awesome project.
      </p>
    </div>
  </div>
<div class="agency-alt-contact-info">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4 style="color: #518dc3;">
            <i class="ion-ios-email-outline"></i>
            Email
          </h4>
          <p>
            info[@]smoothrepairs.com
          </p>
        </div>
        <div class="col-md-4">
          <h4 style="color: #4fc4c5;">
            <i class="ion-ios-telephone-outline"></i>
            Phone
          </h4>
          <p>
            08090202323
          </p>
        </div>
        <div class="col-md-4">
          <h4 style="color: #a34dd6;">
            <i class="ion-social-twitter-outline"></i>
          </h4>
          <p>
            6 Olusoji Idowu St, Ilupeju 110001, Lagos
          </p>
        </div>
      </div>
    </div>
  </div>
  
  
  <script type="text/javascript">
    $(function () {
      // Google maps
      var mapLocation = new google.maps.LatLng(6.5485889,3.366240800000014);

      var map = new GMaps({
        streetViewControl : false,
        overviewMapControl: false,
        mapTypeControl: false,
        panControl : false,
        scrollwheel: false,
        center: mapLocation,
        el: '#map',
        zoom: 15,
        styles: [
        {
          "featureType":"landscape",
          "stylers":[
          {"saturation":-100},
          {"lightness":65},
          {"visibility":"on"}
          ]
        },
        {
          "featureType":"poi",
          "stylers":[
          {"saturation":-100},
          {"lightness":51},
          {"visibility":"simplified"}
          ]
        },
        {
          "featureType":"road.highway",
          "stylers":[
          {"saturation":-100},
          {"visibility":"simplified"}
          ]
        },
        {
          "featureType":"road.arterial",
          "stylers":[
          {"saturation":-100},
          {"lightness":30},
          {"visibility":"on"}
          ]
        },
        {
          "featureType":"road.local",
          "stylers":[
          {"saturation":-100},
          {"lightness":40},
          {"visibility":"on"}
          ]
        },
        {
          "featureType":"transit",
          "stylers":[
          {"saturation":-100},
          {"visibility":"simplified"}
          ]
        },
        {
          "featureType":"administrative.province",
          "stylers":[
          {"visibility":"off"}
          ]
        },
        {
          "featureType":"water",
          "elementType":"labels",
          "stylers":[
          {"visibility":"on"},
          {"lightness":-25},
          {"saturation":-100}
          ]
        }
        ]
      });

      map.addMarker({
        position: mapLocation,
        icon: 'images/icons/map-icon.png'
      });

    });
    </script>
<?php
  include 'footer.php';
?>
