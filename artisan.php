<?php
include 'header.php';
?>
<style>
            .box{
                display: none;
                margin-left:20px;
            }
</style>
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
<?php
    include 'srconfig.php';
?>
<!--<script type="text/javascript">-->
<!--function changetextbox()-->
<!--{-->
<!--    if (document.getElementById("CATEGORY").value == 'Others') {-->
<!--        document.getElementById("OTHERS").disabled=false;-->
<!--    }-->
<!--    if (document.getElementById("CATEGORY").value != 'Others') {-->
<!--        document.getElementById("OTHERS").disabled=true;-->
<!--    } -->
<!--}-->
<!--</script>-->
<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["ArtisanSignup"]["ARTISAN_TYPE"].value;
        var r=document.forms["ArtisanSignup"]["CATEGORY"].value;
        if (r==null || r=="",a==null || a=="")
        {
            alert("Please fill ALL required fields.");
            return false;
        }
    }
</script>
    <div class="index-slider-header">
    <div id="spacial-slider" class="slider-component fxSideSwing">
      <ul class="itemwrap">
        <li class="slide slide--center current">
          <div class="container">
            <h2>
              Gain professional relevance &
        <p>
          get access to more job by registering as an artisan.
        </p>
            
            <a href="#Register" class="btn-shadow btn-shadow-lg btn-shadow-primary">
            
              Get started now
            </a>
          </div>

          <div class="pic" style="background-image: url('images/unsplash/smoothrepairbkg.jpg');">
          </div>
        </li>
        <li class="slide slide--right">
          <div class="container">
            <h2 class="customFadeInUp">
               All the designs in collaboration <br> with smart people
            </h2>
            <a href="#Register" class="btn-shadow btn-shadow-lg btn-shadow-dark customFadeInUp">
              Get started now
            </a>
          </div>

          <div class="pic" style="background-image: url('images/unsplash/photo-1472132858735-6313c7962473.jpg');">
          </div>
        </li>
        <li class="slide slide--left">
          <div class="container">
            <h2 class="customFadeInUp">
              Your projects will look great <br> everywhere you go
            </h2>
            <a href="#Register" class="btn-shadow btn-shadow-lg btn-shadow-info customFadeInUp">
              Register as an Artisan
            </a>
          </div>

          <div class="pic" style="background-image: url('images/unsplash/photo-1422665717225-1a37f226c92a.jpg');">
          </div>
        </li>
      </ul>
      <!--<nav>-->
      <!--  <a class="prev" href="#">-->
      <!--    <span class="icon-wrap"></span>-->
      <!--  </a>-->
      <!--  <a class="next" href="#">-->
      <!--    <span class="icon-wrap"></span>-->
      <!--  </a>-->
      <!--</nav>-->
    </div>
  </div>
 
  <div class="call-to-action-signup" id="Register">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
      <h3>
        Sign up To Become an Artisan on SmoothRepairs
      </h3>
      <form method="post" onsubmit="return validateForm()" action="" class="form-inline justify-content-center">
          <div class="row mt-4">
         <div class="col-md-4">
        <div class="form-group">
          <input type="text" name="FIRST_NAME" class="form-control" placeholder="First Name" required />
        </div>
        </div>
         <div class="col-md-4">
        <div class="form-group">
          <input type="text" name="LAST_NAME" class="form-control" placeholder="Last Name" required />
        </div>
        </div>
         <div class="col-md-4">
        <div class="form-group">
          <input type="email" name="EMAIL" class="form-control" placeholder="Your email address" required />
        </div>
        </div>
        </div>
        <div class="row mt-4">
         <div class="col-md-4">
        <div class="form-group">
          <input type="text" name="MOBILE" class="form-control" placeholder="Your Phone Number" required />
        </div>
        </div>
         <div class="col-md-4">
        <div class="form-group">
          <select name="Gender" class="form-control" required>
      <option>Select Gender</option>
      <?php 
$sql135 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Gender' ORDER BY OPTION_NAME");
while ($row135 = mysql_fetch_array($sql135)){
echo "<option value='". $row135['OPTION_NAME'] ."'>" . $row135['OPTION_NAME'] . "</option>";
}
?>
</select>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
          <select name="qualification" class="form-control">
      <option>Select Qualification</option>
      <?php 
$sql138 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Qualification' ORDER BY OPTION_NAME");
while ($row138 = mysql_fetch_array($sql138)){
echo "<option value='". $row138['OPTION_NAME'] ."'>" . $row138['OPTION_NAME'] . "</option>";
}
?>
</select>
        </div>
        </div>
        </div>
        <div class="row mt-4">
         <div class="col-md-4">
        <div class="form-group">
<select name="experience" class="form-control">
      <option value="">Years of Experience</option>
<?php 
$sql138 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Experience' ORDER BY OPTION_NAME");
while ($row138 = mysql_fetch_array($sql138)){
echo "<option value='". $row138['OPTION_NAME'] ."'>" . $row138['OPTION_NAME'] . "</option>";
}
?>
</select>
        </div>
        </div>
         <div class="col-md-4">
        <div class="form-group">
          <select name="STATE" class="form-control" required>
      <option value="">Select Location</option>
<?php 
$sql138 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='States' ORDER BY OPTION_NAME");
while ($row138 = mysql_fetch_array($sql138)){
echo "<option value='". $row138['OPTION_NAME'] ."'>" . $row138['OPTION_NAME'] . "</option>";
}
?>
</select>
<input class="input" type="date" name="REG_DATE" placeholder="yyyy-mm-dd" value="<?php echo date("Y-m-d");?>" hidden>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
          <select name="CATEGORY" class="form-control" onChange="showOther(this.value)" required >
      <option>Select Category</option>
<?php
$sql133 = mysql_query("SELECT OPTION_NAME FROM Options WHERE CATEGORY='Artisan' ORDER BY OPTION_NAME");
while ($row133 = mysql_fetch_array($sql133)){
echo "<option value='". $row133['OPTION_NAME'] ."'>" . $row133['OPTION_NAME'] . "</option>";
}
?>
<option value="others">Others, Please Specify</option>
</select>
        </div>
        </div>
        </div>
         <div class="row mt-4">
         <div class="col-md-4">
        <div class="form-group">
          
        </div>
        </div>
         <div class="col-md-4">
        <div class="form-group">
          
        </div>
        </div>
        <div class="form-group">
          <input type="text" id="other" name="other" class="form-control box" placeholder="Others, please specify"/>
        </div>
        </div>
        </div>
        <!--close row-->
        </div>
        <!--close container-->
        <div class="row">
            <div class="col-md-4">
                </div>
        <div class="col-md-6">
            <br>
        <button class="btn-shadow btn-shadow-primary" type="submit" name="Submit">
          Become an Artisan
        </button>
        <div class="agree w-100">By signing up you agree to our <a href="#" data-toggle="modal" data-target="#exampleModal">Terms</a>.</div>
        </div>
         <!--close md-6-->
        </div>
         <!--close row-->
      </form>
    </div>
</div>
</div>
  </div>
<script>
function showOther(value)
			{
            if (value=='others'){
            document.getElementById('other').style.display = 'block';
            }   
            else
            document.getElementById('other').style.display = 'none';
    }
</script>
  <?php
if (isset($_POST['Submit']))
            {
        include("srconfig.php");
        session_start();
        $FIRST_NAME=$_POST['FIRST_NAME'];
        $LAST_NAME=$_POST['LAST_NAME'];
        $ARTISAN_TYPE=$_POST['ARTISAN_TYPE'];
        //$USERNAME=$_POST['USERNAME'];
        $EMAIL=$_POST['EMAIL'];
        //$PASSWORD=$_POST['PASSWORD'];
        $MOBILE=$_POST['MOBILE'];
        //Get category or other
         $CATEGORY=$_POST['CATEGORY'];
			     if($_POST['CATEGORY'] == 'others')
				 {
				     $CATEGORY=ucwords($_POST['other']);
				 }
       
        //$COMPANY_NAME=$_POST['COMPANY_NAME'];
        //$CITY=$_POST['CITY'];
        $STATE=$_POST['STATE'];
        $REG_DATE=$_POST['REG_DATE'];
        //$ADDRESS_LINE_1=$_POST['ADDRESS_LINE_1'];
        //$ADDRESS_LINE_2=$_POST['ADDRESS_LINE_2'];
        $Qual = $_POST['qualification'];
        $Gender = $_POST['Gender'];
        $Experience = $_POST['experience'];
                        // check for duplicate entries
            $check_phone=mysql_query("SELECT * FROM Users WHERE MOBILE='$MOBILE'");
            
            $check_phone_exist = mysql_fetch_array($check_phone);
          
            if(($check_phone_exist['MOBILE']==$MOBILE))
            {
                echo "<script type='text/javascript'>alert('An Error Occurred: Phone Number already exist, Try again with a different Phone number')</script>";
            }
            else
            {
                     $query = mysql_query("INSERT INTO Users (FIRST_NAME,LAST_NAME,ARTISAN_TYPE,STATE,USER_TYPE,EMAIL,CATEGORY,MOBILE,REG_DATE,QUALIFICATION,GENDER,EXPERIENCE) VALUES ('$FIRST_NAME','$LAST_NAME','Individual','$STATE','Artisan','$EMAIL','$CATEGORY','$MOBILE','$REG_DATE','$Qual','$Gender','$Experience')") or die(mysql_error());
                    //$row = mysql_fetch_array($query);
                   
                  if ($query) 
                        {
                                    echo "<script type='text/javascript'>alert('Your SmoothRepairs registration has been submitted successfully')</script>";
                                    echo "<script language='javascript' type='text/javascript'> location.href='thank-you' </script>";
                                     $to = $EMAIL;
                                 $subject = "SmoothRepairs Artisan Registration for $FIRST_NAME $LAST_NAME";
                                 $message = "
        <html>
        <head>
        <title>SmoothRepairs Registration Notification</title>
        </head>
        <body>
        <p>Dear $FIRST_NAME,</p>
        <p>Thanks for choosing <strong>SmoothRepairs</strong>.</p>
        <p>You will be notified by the admin on the progress of your registration.</p>
        <p>Welcome to the world of <strong>Unlimited Opportunities</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Awolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08060910870
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        }
        else
        {
             echo "<script type='text/javascript'>alert('Your SmoothRepairs registration was not successful at this time, please try again later')</script>";
        }
        }
                }
        else {
            // do nothing
        }
        ?>    
   <div class="index-devices" data-scroll>
    <section class="clearfix">
      <img src="images/devices/devices-4.png" class="devices" />
      <h4>Coming Soon: The SmoothRepairs App!</h4>
      <p>The SmoothRepairs app provides an effective and efficient platform for users and professional artisans.</p>
      <p>
       SmoothRepairs houses the database of experienced, responsive and professional artisans and vendors who deliver excellent service, thereby creating peace of mind for its users. 
      </p>
      <p>Coming Soon!</p>
      <div class="icons">
        <i class="ion-monitor"></i>
        <i class="ion-ipad"></i>
        <i class="ion-iphone"></i>
      </div>
    </section>
  </div>
  <div class="index-features" data-scroll>
    <div class="container">
      <header>
        <h3>Increase Your Income And Gain Professional Relevance</h3>
        <p>
          Register as an artisan on SmoothRepairs and get connected to a job.
        </p>
      </header>
      <section class="features">
        <div class="row">
          <div class="col-md-6 feature">
            <img src="images/icons/money-bag.png" class="icon" />
            <section>
              <h4>
                Market your skills at no cost
              </h4>
              <p>
                With SmoothRepairs, you get to market your skill set at no cost to our clients. You do not have to pay to feature on SmoothRepairs
              </p>
            </section>
          </div>
          <div class="col-md-6 feature">
            <img src="images/icons/Pro.png" class="icon" />
            <section>
              <h4>
                 Development of more professional relevance
              </h4>
              <p>
                SmoothRepairs gives you the opportunity to boost your professional relevance. You have access to numerous opportunities.
              </p>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 feature">
            <img src="images/icons/working.png" class="icon" />
            <section>
              <h4>
                Enjoy flexible work schedule
              </h4>
              <p>
                We understand the value of work-life balance. SmoothRepairs allows you to work based on your availability.
              </p>
            </section>
          </div>
          <div class="col-md-6 feature">
            <img src="images/icons/money.png" class="icon" />
            <section>
              <h4>
            Increase your income
              </h4>
              <p>
               SmoothRepairs gives you access to work for high net-worth customers. Beside, you make more money and build your portfolio.
              </p>
            </section>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!--  <div class="spacial-client-quotes">-->
  <!--  <section class="container">-->
  <!--    <h2>-->
  <!--      Used by the world's largest companies-->
  <!--    </h2>-->

  <!--    <div class="client-quotes">-->
  <!--      <div class="client-quote active">-->
  <!--        <div class="quote">-->
  <!--          "Focus on creating and growing your projects and websites, and we‘ll take care of spinning up new designs for your users and making sure they’re great. Work with all types of customers just right out of the box!"-->
  <!--        </div>-->
  <!--        <div class="author">-->
  <!--          <span class="name">Jim Warner</span>-->
  <!--          <span class="role">CTO, Dribbble</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="client-quote">-->
  <!--        <div class="quote">-->
  <!--          "Bring all your ideas together and make customizations faster and better than ever. It works in all browsers and devices plus your clients can pay instantly, to improve their experience at all times anywhere they go."-->
  <!--        </div>-->
  <!--        <div class="author">-->
  <!--          <span class="name">Katia Stevens</span>-->
  <!--          <span class="role">Marketing Director, Twitter</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="client-quote">-->
  <!--        <div class="quote">-->
  <!--          "Focus on creating and growing your projects and websites, and we‘ll take care of spinning up new designs for your users and making sure they’re great. Work with all types of customers just right out of the box!"-->
  <!--        </div>-->
  <!--        <div class="author">-->
  <!--          <span class="name">John Roberts</span>-->
  <!--          <span class="role">Product Designer, Github</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="client-quote">-->
  <!--        <div class="quote">-->
  <!--          "Bring all your ideas together and make customizations faster and better than ever. It works in all browsers and devices plus your clients can pay instantly, to improve their experience at all times anywhere they go."-->
  <!--        </div>-->
  <!--        <div class="author">-->
  <!--          <span class="name">Ana Jones</span>-->
  <!--          <span class="role">Designer, Kickstarter</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="client-quote">-->
  <!--        <div class="quote">-->
  <!--          "Easily customize any part of your project for best results and quick great prototyping. Showcase your work on any computer or mobile device and all screen sizes. Bring all your ideas together and make customizations faster and better than ever."-->
  <!--        </div>-->
  <!--        <div class="author">-->
  <!--          <span class="name">Robert Williams</span>-->
  <!--          <span class="role">Marketing, Atlassian</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="client-pictures">-->
  <!--      <div class="client-picture active">-->
  <!--        <img src="images/uifaces/16.jpg">-->
  <!--      </div>-->
  <!--      <div class="client-picture">-->
  <!--        <img src="images/uifaces/13.jpg">-->
  <!--      </div>-->
  <!--      <div class="client-picture">-->
  <!--        <img src="images/uifaces/17.jpg">-->
  <!--      </div>-->
  <!--      <div class="client-picture">-->
  <!--        <img src="images/uifaces/11.jpg">-->
  <!--      </div>-->
  <!--      <div class="client-picture">-->
  <!--        <img src="images/uifaces/14.jpg">-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </section>-->
  <!--</div>-->
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">USER PROTECTION POLICY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="feature">
           <p>Thank you for choosing SmoothRepairs.</p>
<p>The smoothrepairs.com website is meant to help its users resolve issues revolving around the installation, repairs and maintenance/servicing of their appliances. At SmoothRepairs, we are committed to protecting the data and privacy of our users and artisans. We believe in open, transparent communication that puts our users’ needs first. This policy sets out the basis on which any information, including any personal data, we collect from you, or you provide to us, will be processed by SmoothRepairs. Each time you access or use the Services or provide us with information, by doing so you are accepting and consenting to the practices described in this privacy policy.</p>
        </div></div>
        <div class="col-md-6">
            <div class="feature">
          <h3>
           SCOPE AND APPLICATION
          </h3>
          <p>This user protection policy applies to persons anywhere in the world who access our services or any other persons who use the SmoothRepairs website or app.</p>
          <h3>
            HOW DO WE PROTECT VISITOR INFORMATION?
          </h3>
          <p>
            Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our website as safe as possible. We use regular Malware Scanning. Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, any sensitive or debit/credit card information you supply is encrypted via Secure Socket Layer (SSL) technology. We implement a variety of security measures when you make a request, enter, submit, or access your information to maintain the safety of your personal information. 
            All transactions are processed through a gateway provider and are not stored or processed on our servers.
          </p>
        </div></div>
</div></div>
        <div class="container">
    <div class="row">
            <div class="col-12">
                 <div class="header">
                <h2 >COLLECTION OF INFORMATION</h2>
              </div>
            </div>
          </div>
<div class="row">
        <div class="col-md-6"><div class="feature">
                    <h3>
           Information you provide to us
          </h3>
          <p>
            We collect information you provide directly to us through your access of the services, such as when you request on-demand services, contact customer support, subscribe to our newsletters or otherwise communicate with us.
          </p>
          <p>
          This information may include: your name, email address, phone number, postal address, payment method, debit/credit card information, and other information you choose to provide.
          </p>
        </div></div>
        <div class="col-md-6"><div class="feature">
          <h3>
            Information We Collect Through Your Use of Our Services
          </h3>
          <p>
           Artisans are expected to provide current and correct account details when registering on the SmoothRepairs platform. Artisans will be paid every two weeks by SmoothRepairs’ representatives.
          </p>
          <p>
             The Artisans will be paid based on the amount stated on the quotations the Artisan provides after inspecting the repairs to be carried out at the Clients’ Locations.
             The Artisans are not to demand nor receive money from the Clients. 
          </p>
        </div></div>
        <div class="col-md-6"><div class="feature">
          <h3>
            Information We Collect from Other Sources
          </h3>
          <p>
            We may also receive information from other sources and combine that with personal data we receive from you or collect through our services. For example, if you choose to link your SmoothRepairs account with a payment provider or social media service (for example, Facebook, Twitter, LinkedIn etc), or if you engage with a separate app or website that uses our API (or whose API we use), we may receive information about you or your connections from that app or website.
          </p>
        </div></div>
        <div class="col-md-6"><div class="feature">
          <h3>
            Information We Collect from Other Sources
          </h3>
          <p>
            If your employer uses one of our enterprise solutions, we may receive information about you from your employer. When you request on-demand services, our professional artisans may provide us with a user rating after providing services to you.</p>
            <p>If you also interact with our services in another capacity, we may combine or associate that information with Personal Data we have collected from you in your capacity as a user or artisan. Please note that we do not knowingly collect, keep or maintain personal information from children under the age of 18 through the services, as we require that all users represent to us that they are at least 18 years old.
          </p>
        </div></div>
        <div class="col-md-6">
            <div class="feature">
          <h3>
            Third Party Disclosure
          </h3>
          <p>
           We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential.
        </div></div>
        <div class="col-md-6"><div class="feature">
          <h3>
            Third Party Disclosure
          </h3>
          <p>
           We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
        </div></div>
        <div class="col-md-6">
            <div class="feature">
          <h3>
           Third Party Links
          </h3>
          <p>
              We include and offer third party services on our website.
          </p>
           </div>
        </div>
      </div>
    </div>
        <section class="container">
          <div class="row">
            <div class="col-12">
              <div class="header">
                <h2>USE OF INFORMATION COLLECTED</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  USE OF INFORMATION COLLECTED
                </h3>
                <p>
                  As part of our commitment to providing you the best service, we may use your information to:
Send you a quote based on your request
Send you our newsletters only when you have subscribed
Send you survey links in order to enable you rate the services of our artisans
Each time you access our services or provide us with your information, you are accepting and consenting to the practices described in this user protection policy. We put in place these practices:
                </p>
                <p>To personalize user's experience and to allow us to deliver the type of content and service offerings in which you are most interested.
To improve our website in order to better serve you.
To allow us to better service you in responding to your customer service requests.
To administer a promotion, survey or other site feature.
To quickly process your requests.
To send periodic emails regarding your requests or other services.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  STORAGE AND TRANSFER OF PERSONAL DATA
                </h3>
                <p>
                  You agree that we have the right to transfer the Personal Data described in this privacy policy to and from, and process and store it in Nigeria and other countries, some of which may have less protective data protection laws than the region in which you reside. Where this is the case, we will take appropriate measures to protect your Personal Data in accordance with this privacy policy. 
                  By submitting your Personal Data, you agree to this transfer, storing or processing. We will take all steps reasonably necessary to ensure your data is treated securely and in accordance with this privacy policy.
                </p>
                <p>To preserve the integrity of our databases, to carry out on-going services on your behalf, for research, analytics and statistics purposes and to ensure compliance with applicable laws and regulations, we retain Personal Information and Demographic Information submitted by Users and Artisans for a reasonable length of time. SmoothRepairs is not responsible for the accuracy of the information you provide, and will modify or update your Personal Information in our databases upon your request.</p>
<p>If required by law or at your request, we will erase or archive from active use your Personal Information. By accessing or using the Services, you do hereby represent and warrant that you understand that all information submitted by you through the Services or otherwise to SmoothRepairs may be used by SmoothRepairs in accordance with applicable laws, this privacy policy and our customer terms of use.</p>
            </div>
          </div>
          </div>
        </section>
<div class="container">
    <div class="row">
            <div class="col-12">
                 <div class="header">
                <h2 >SHARING OF PERSONAL DATA AND DISCLOSURE</h2>
                <p>We may share Personal Data which we collect about you as described in this privacy policy or as described at the time of collection or sharing, including as follows:</p>
              </div>
            </div>
          </div>
          <section class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  Through Our Services
                </h3>
                <p>
                 With artisans to enable them to provide the services you request. For example, we share your name and address locations with artisans;

With third parties to provide you a service you requested through a partnership or promotional offering made by a third party or us;

With third parties with whom you choose to let us share your Personal Data, for example other apps or websites that integrate with our API or Services, or those with an API or Service with which we integrate; and

With your employer (or similar entity) and any necessary third parties engaged by us or your employer, if you participate in any of our enterprise solutions.
                </p>
                <p>To personalize user's experience and to allow us to deliver the type of content and service offerings in which you are most interested.
To improve our website in order to better serve you.
To allow us to better service you in responding to your customer service requests.
To administer a promotion, survey or other site feature.
To quickly process your requests.
To send periodic emails regarding your requests or other services.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  Other Important Sharing
                </h3>
                <p>With SmoothRepairs subsidiaries and affiliated entities;</p>
                <p>
                    With vendors, consultants, marketing and advertising partners, and other service providers who need access to such Personal Data to carry out work on our behalf or to perform any contract we enter into with them;

In response to a request for information by a competent authority if we believe disclosure is in accordance with, or is otherwise required by, any applicable law, regulation, or legal process;

With law enforcement officials, government authorities, or other third parties to enforce or apply our Terms of Service, to investigate potential breaches or if we believe your actions are inconsistent with our Terms of Service, or to protect the rights, property, or safety of SmoothRepairs or others;

With third parties in connection with, or during negotiations of, any merger, sale of company assets, consolidation or restructuring, financing, or acquisition of all or a portion of our business by or into another company;

If we otherwise notify you and you consent to the sharing;

With third parties in an aggregated and/or anonymised form which cannot reasonably be used to identify you.</p>
            </div>
          </div>
          </div>
        </section>
</div>
<div class="container">
    <div class="row">
            <div class="col-12">
                 <div class="header">
                <h2 >CHOICE, ACCESS AND CHANGE</h2>
            </div>
            </div>
          </div>
          <section class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  Marketing and Opting Out
                </h3>
                <p>
                 SmoothRepairs provides Users the opportunity to opt-out of receiving communications from us and our partners at the point where we request information about the visitor. You have the choice to ask us not to process your Personal Data for marketing purposes and to remove it from our database, to not receive future communications or to no longer receive our Services.</p>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  Changes to this Privacy Policy
                </h3>
                <p>You have the right to access and change your information via the SmoothRepairs website.</p>
                
            </div>
          </div>
          </div>
        </section>
        <section class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  Changes to this Privacy Policy
                </h3>
                <p>
                 We may change this privacy policy from time to time. If we make significant changes in the way we treat your Personal Data, or to the privacy policy, we will provide you notice through the Services or by some other means, such as email. Your continued use of the Services after such notice constitutes your consent to the changes.

We encourage you to periodically review this privacy policy for the latest information on our privacy practice.</p>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  Changes to Personal Information by User
                </h3>
                <p>On our user privacy policy page, users are able to change their personal information by:

Sending us an email.
Calling us to effect the change.
Logging in to their account to effect the change.</p>
                
            </div>
          </div>
          </div>
        </section>
</div>
<div class="container">
    <div class="row">
            <div class="col-12">
                 <div class="header">
                <h2 >INFORMATION RETENTION OR DELETION</h2>
            </div>
            </div>
          </div>
          <section class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="feature">
                <p>SmoothRepairs shall retain your user profile and other information for as long as you maintain your SmoothRepairs account.

SmoothRepairs retains information for a period of 7 years in connection with regulatory, tax, insurance or other requirements in the places in which it operates. SmoothRepairs thereafter deletes or anonymises such information in accordance with applicable laws.

Users may request deletion of their accounts at any time. Following such request, SmoothRepairs deletes the information that it is not required to retain, and restricts access to or use of any information it is required to retain.

Personal data will be deleted (according to the policies set out in this section) from the databases, unless such data is required to be retained for accounting, dispute resolution or fraud prevention purposes.</p>
                 </div>
            </div>
            <div class="col-md-6">
              <div class="feature">
                <h3>
                 Access to Information
                </h3>
                <p>You have the right to access and change your information via the SmoothRepairs website.</p>
                
            </div>
          </div>
          </div>
        </section>
        <section class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="feature">
                <h3>
                  SECURITY PRECAUTIONS
                </h3>
                <p>
                 Your SmoothRepairs profile is password-protected so that only you and authorized SmoothRepairs employees have access to your account information. SmoothRepairs staff will never proactively reach out to you and ask for any personal account information, including your password.

SmoothRepairs makes every effort to ensure that your Personal Data is secure on its system. SmoothRepairs has staff dedicated to maintaining our privacy policy as set forth herein and other privacy initiatives, periodically reviewing Web security and making sure that every SmoothRepairs employee is aware of our security practices. Unfortunately, no data transmission over the Internet can be guaranteed to be 100% secure. As a result, SmoothRepairs cannot guarantee the security of any Personal Data you transmit to us, and you do so at your own risk. If you have any further questions on this issue, refer to our customer terms of use. To the extent permitted by applicable law, SmoothRepairs expressly disclaims any liability that may arise should any other individuals obtain the Personal Data you submit to SmoothRepairs.</p>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature">
                <h3>
                 COOKIES
                </h3>
                <p>Our website uses cookies to distinguish you from other users of our website. This helps us to provide you with a good experience when you browse our website and also allows us to improve our website and the Services we provide. By accessing and browsing our website, you are agreeing to our use of cookies.</p>
                
            </div>
          </div>
          </div>
        </section>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
    $(function () {
      var $quotes = $('.client-quote')
      var $faces = $('.client-picture')

      $faces.click(function (e) {
        index = $faces.index(this)

        $quotes.removeClass('active')
        $quotes.eq(index).addClass('active')

        $faces.removeClass('active')
        $(this).addClass('active')
      })
    })
  </script>
   <script src="js/add_remove_type.js"></script>
<?php
include 'footer.php';
?>