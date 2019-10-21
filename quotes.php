<?php
 include "connection.php";
 session_start();
 if(isset($_POST['submit'])){
   //$category = mysqli_real_escape_string($conn, $_POST['category']);
   $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
   $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
   $category = mysqli_real_escape_string($conn, $_POST['category']);
   $location = mysqli_real_escape_string($conn, $_POST['location']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
   $artisan_no = mysqli_real_escape_string($conn, $_POST['artisan_no']);
   $category_all = mysqli_real_escape_string($conn, $_POST['category']);
   
   
   foreach($_POST['category'] as $selected) {
		// Here $category holding all the check box values as a string
		$category .= $selected . " ";	
		//if you need space for each value use $category .= $selected . " ";
		} 

   if($email != "" && filter_var($email, FILTER_VALIDATE_EMAIL)){
    //$server_provider = explode("@", $email)[1];
    //$provider = explode(".", $server_provider)[0];
    //if($provider == 'gmail' || $provider == 'yahoo' || $provider == 'hotmail' || $provider == 'rocketmail' || $provider == 'googlemail' || $provider == 'aol' || $provider == 'outlook' || $provider == 'mail' || $provider == 'icloud'){
//      $_SESSION['msg'] = 'Kindly use your company Email';
      //$_SESSION['category']  = $category;
      //$_SESSION['phone_number'] = $phone_number;
      //$_SESSION['job_title'] = $job_title;
      //$_SESSION['email'] = $email;
      //$_SESSION['fullname'] = $fullname;
      //$_SESSION['artisan_no'] = $artisan_no;
    //}else{
        $sql = "INSERT INTO quote (fullname, email, phone_number, job_title,artisan_no, location,category, date_created)
          VALUES ('".$fullname."', '".$email."', '".$phone_number."','".$job_title."', '".$artisan_no."', '".$location."', '".$category."','".date('Y-m-d')."')";
          if (mysqli_query($conn,$sql ) === TRUE) {
              
              $last_id = mysqli_insert_id($conn);
                    $order_id = $last_id;
              echo "<script language='javascript' type='text/javascript'> location.href='other_pay.php?plan=$order_id' </script>";
              
                                     $to = 'enquiries@icsoutsourcing.com';
                                     //$to = 'profgared@gmail.com';
                                     $copy = $email;
                                 $subject = "$fullname has Requested a Quote!";
                                 $message = "
        <html>
        <head>
        <title>SmoothRepairs Request Quote</title>
        </head>
        <body>
        <p>Dear Admin,</p>
        <p>$fullname has just requested a Quote on <strong>SmoothRepairs</strong>.</p>
        <p>The request has the following details.</p>
        <br><strong>Request Originator:</strong> $fullname
        <br><strong>Mobile:</strong> $phone_number
        <br><strong>Email Address:</strong> $email
        <br><strong>Job Title:</strong> $job_title
        <br><strong>Location:</strong> $location
        <br><strong>Type of Artisans Needed:</strong> $category
        <br><strong>Number of Artisans Needed:</strong> $artisan_no
        <p><strong> Smooth Repairs, World of Unlimited Opportunities</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Admin,</i>
        <br><strong> SmoothRepairs</strong>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        
        
        //Sends Confirmation mail to Quote issuer
         $subject2 = "SMOOTHREPAIRS - $fullname's Request Received!";
                                 $message2 = "
        <html>
        <head>
        <title>SmoothRepairs Artisan Request</title>
        </head>
        <body>
        <p>Dear $fullname,</p>
        <p>You have just requested a Quote on <strong>SmoothRepairs</strong>.</p>
        <p>The request has the following details.</p>
        <br><strong>Quote Originator:</strong> $fullname
        <br><strong>Mobile:</strong> $phone_number
        <br><strong>Email Address:</strong> $email
        <br><strong>Job Title:</strong> $job_title
        <br><strong>Location:</strong> $location
        <br><strong>Type of Artisans Needed:</strong> $category
        <br><strong>Number of Artisans Needed:</strong> $artisan_no
        <p>Thank You for choosing <strong> Smooth Repairs</strong>.</p>
        <p>You will be contacted shortly to confirm your Request.</p>
        <p><strong> Smooth Repairs, World of Unlimited Opportunities</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Chief Operations Officer,</i>
        <br><strong> SmoothRepairs</strong>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";
        
        mail($copy,$subject2,$message2,$headers);
        
            $_SESSION['msg'] = 'Your request has been Successfully Submitted and is being processed. Thank You! check your mail...';
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION['msg'] = 'Error while submitting information, please try again later';
          }


    //}
   }else {
    $_SESSION['msg'] = "Email field cannot be Empty";
    $_SESSION['category']  = $category;
      $_SESSION['phone_number'] = $phone_number;
      $_SESSION['job_title'] = $job_title;
      $_SESSION['email'] = $email;
      $_SESSION['fullname'] = $fullname;
      $_SESSION['artisanno'] = $artisanno;
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Request For Artisans | Professional Artisans</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="shortcut icon" href="https://www.smoothrepairs.com/Smoothrepairs_favicon.jpg">
<!--<link rel="preload" href="dist/theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="dist/theme.min.css"></noscript>-->
<link rel="stylesheet" type="text/css" href="dist/theme.min.css" />
<!------ Include the above in your HEAD tag ---------->
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<link rel="shortcut icon" href="https://www.smoothrepairs.com/Smoothrepairs_favicon.jpg">
<!--link rel="stylesheet" type="text/css" href="quotes.css"-->
<style type="text/css">
   .image{
     /*background-image: url("backgnd.jpg");*/
     /*background-position: center;*/
     /*background-size: contain;*/
    /* background-color: red;*/
     width: auto;
     object-fit: cover;
     height: 950px;
   }
   .form{
      background-color: #fff;
      position: absolute;
      top: 70px;
      padding: 20px;
      right: 200px;
      z-index: 34;
      width: 500px;
      border-radius: 3px;
    }
  .text_wrapper{
      position: absolute;
      top:60%;
      left: 5%;
      color: #fff;
  }
  .write{
    font-size: 40px;
    width: 500px;

  }
   .footer-big-menu{
        margin-top:0px;
    }
     html{
      overflow-x: hidden;
  } 
     
  @media only screen and (max-width: 600px) {
  .form {
    top: 38%;  
    right: 1%;
    width:98%;
  }
  .image{
      width:100%;
      height:100%;
  }
  html{
      overflow-x: hidden;
  } 
   .text_wrapper{
      position: absolute;
      top:20%;
      left: 7%;
      color: #fff;
  }
  .write{
      font-size:26px;
      width: 70%;
  }
}    
</style>
</head>
<body>
  <?php
  include 'nav.php';
  ?>    
<div class="overlay"></div>  
<!--div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>We are your reliable<br>
                technical partner</h4></div>
            <div class="col-md-5 col-12 order-md-2 order-1"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Access verified and <br>
                certified artisans here</h4>
               </div>
            <div class="col-md-5 col-12 order-md-2 order-1"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Our excellent service <br>
                delivery comes with <br>reduced turnaround time</h4>
               </div>
            <div class="col-md-5 col-12 order-md-2 order-1"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Our solution guarantees <br>
                optimum performance for your equipment</h4>
               </div>
            <div class="col-md-5 col-12 order-md-2 order-1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->
<img src="backgnd.jpg" class="image"/>
<div class="text_wrapper">
  <h4 class="write"></h4>
</div>
<div>
  <?php
  include 'footer.php';
  ?>
   <div class="form">
     <div>
       <div style="text-align: center;margin-bottom: 20px;"><h2>REQUEST FOR AN ARTISAN</h2></div>
        <?php if(isset($_SESSION['msg'])) {?>
              <div class="alert alert-primary" style="background-color: #d1ecf1;" role="alert">
                  <?=$_SESSION['msg']?>
              </div>
              <?php unset($_SESSION['msg']); ?>
        <?php } ?>
       <form action = "https://smoothrepairs.com/quotes" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="" aria-describedby="emailHelp" placeholder="Enter Full Name" value="<?=isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Email address</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" placeholder="Enter your Company Email" value="<?=isset($_SESSION['email']) ? $_SESSION['email'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="number" class="form-control" name="phone_number" id="" aria-describedby="emailHelp" placeholder="Enter Phone Number" value="<?=isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Role/Job Title</label>
            <input type="text" class="form-control" name="job_title" id="" aria-describedby="emailHelp" placeholder="Enter your Job Role at your Company" value="<?=isset($_SESSION['job_title']) ? $_SESSION['job_title'] : ''?>">
           
          </div>
          <div>
              <label for="location">Location</label>
              <select class="form-control"  id="location" name="location" value="Select State"  required>
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
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">How Many Artisans do you need?</label>
            <input type="number" class="form-control" name="artisan_no" id="" aria-describedby="emailHelp" placeholder="Enter the number of artisans needed (range between 1-10000)" value="<?=isset($_SESSION['artisan_no']) ? $_SESSION['artisan_no'] : ''?>">
           
          </div>
          <div class="form-group" style="margin:20px 0">
                <!-- Default panel contents -->
                <div class="card-header">Select the Type of Artisan you need</div>
            
                <div class="row mt-3">
                    <div class="col-md-4">
                        Carpenter
                        <!--<label class="switch ">-->
                        <input type="checkbox" name="category[]" class="default" value="carpenter, ">
                        <!--<span class="slider round"></span>-->
                        <!--</label>-->
                    </div>
                    <div class="col-md-4">
                        Electrician
                        <!--<label class="switch ">-->
                        <input type="checkbox" name="category[]" class="primary" value="electrician, ">
                        <!--<span class="slider round"></span>-->
                        <!--</label>-->
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-4">
                        AC Repairer
                        <!--<label class="switch ">-->
                        <input type="checkbox" name="category[]" class="success" value="AC repairer, ">
                        <!--<span class="slider round"></span>-->
                        <!--</label>-->
                        </div>
                    <div class="col-md-5">
                        Generator Repairer
                        <!--<label class="switch ">-->
                        <input type="checkbox" name="category[]" class="info" value="Generator repairer, ">
                        <!--<span class="slider round"></span>-->
                        <!--</label>-->
                        </div>
                    </div>
                   <div class="row mt-3">
                       <div class="col-md-4">
                        Plumber
                        <!--<label class="switch ">-->
                        <input type="checkbox" name="category[]" class="info" value="Plumber, ">
                        <!--<span class="slider round"></span>-->
                        <!--</label>-->
                    </div>
                    <div class="col-md-4">
                        Others
                        <!--<label class="switch ">-->
                        <input type="checkbox" name="category[]" class="info" value="Others, ">
                        <!--<span class="slider round"></span>-->
                        <!--</label>-->
                        </div>
                    </div>
            </div>
          <!--<div class="form-group">-->
            <!--<label for="exampleInputEmail1">Project Category</label>-->
            <!--<select name="category" class="form-control">-->
                <!--<option value="?=isset($_SESSION['category']) ? $_SESSION['category'] : ''?>">?=isset($_SESSION['category']) ? $_SESSION['category'] : ''?></option> -->
                <!--<option>Business Process Outsourcing (Outsourcing of Artisans Only)</option>-->
                <!--<option>Business Process Outsourcing (Outsourcing of Facility Managers Only)</option>-->
                <!--<option>Recruitment Outsourcing (Recruitment of Artisans Only)</option>-->
                <!--<option>Recruitment Outsourcing (Recruitment of Facility Managers Only)</option>-->
                <!--<option>Preventive Maintenance Software</option>-->
            <!--</select>-->
           
          <!--</div>-->
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Submit Request</button>
           
          </div>
       </form>
     </div>
   </div>
</div>
<?php
  session_destroy();
?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
<script type="text/javascript">
  $(function(){
      //alert("width:"+window.innerWidth);
        $(".write").typed({
            strings: ["We are your reliable technical partner", "Access verified artisans here", "Our excellent service delivery comes with reduced turnaround time","Our solution guarantees optimum performance for your equipment"],
            typeSpeed: 40,
            loop: true,
        });
    });
</script>

</html>
<!--slide end--> 