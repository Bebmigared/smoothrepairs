<?php
 include "connection.php";
 session_start();
 if(isset($_POST['submit'])){
   $category = mysqli_real_escape_string($conn, $_POST['category']);
   $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
   $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
   $category = mysqli_real_escape_string($conn, $_POST['category']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

   if($email != "" && filter_var($email, FILTER_VALIDATE_EMAIL)){
    $server_provider = explode("@", $email)[1];
    $provider = explode(".", $server_provider)[0];
    if($provider == 'gmail' || $provider == 'yahoo' || $provider == 'hotmail' || $provider == 'rocketmail' || $provider == 'googlemail' || $provider == 'aol' || $provider == 'outlook' || $provider == 'mail' || $provider == 'icloud'){
      $_SESSION['msg'] = 'Kindly use your company Name';
      $_SESSION['category']  = $category;
      $_SESSION['phone_number'] = $phone_number;
      $_SESSION['job_title'] = $job_title;
      $_SESSION['email'] = $email;
      $_SESSION['fullname'] = $fullname;
    }else{
        $sql = "INSERT INTO quote (fullname, email, phone_number, job_title,category, date_created)
          VALUES ('".$fullname."', '".$email."', '".$phone_number."','".$job_title."', '".$category."','".date('Y-m-d')."')";
          if (mysqli_query($conn,$sql ) === TRUE) {
            $_SESSION['msg'] = 'Information saved Successully';
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION['msg'] = 'Error while saving information, please try again later';
          }


    }
   }else {
    $_SESSION['msg'] = "Email field cannot be Empty";
    $_SESSION['category']  = $category;
      $_SESSION['phone_number'] = $phone_number;
      $_SESSION['job_title'] = $job_title;
      $_SESSION['email'] = $email;
      $_SESSION['fullname'] = $fullname;
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!------ Include the above in your HEAD tag ---------->
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<link rel="shortcut icon" href="https://www.smoothrepairs.com/Smoothrepairs_favicon.jpg">
<link rel="preload" href="dist/theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="dist/theme.min.css"></noscript>
<link rel="stylesheet" type="text/css" href="quotes.css">
<style>
    .footer-big-menu{
        margin-top:0px;
    }
</style>
</head>
<body>
<div class="overlay"></div>  
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
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
</div>
<?php
  include 'footer.php';
?>
<div>
   <div class="form">
     <div>
       <div style="text-align: center;margin-bottom: 20px;"><h2>REQUEST A QUOTE</h2></div>
        <?php if(isset($_SESSION['msg'])) {?>
              <div class="alert alert-primary" style="background-color: #d1ecf1;" role="alert">
                  <?=$_SESSION['msg']?>
              </div>
              <?php unset($_SESSION['msg']); ?>
        <?php } ?>
       <form action = "quotes.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="" aria-describedby="emailHelp" placeholder="Enter Full Name" value="<?=isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Email address</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" placeholder="Enter email" value="<?=isset($_SESSION['email']) ? $_SESSION['email'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="number" class="form-control" name="phone_number" id="" aria-describedby="emailHelp" placeholder="Enter Phone Number" value="<?=isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Role/Job Title</label>
            <input type="text" class="form-control" name="job_title" id="" aria-describedby="emailHelp" placeholder="Enter Job Role" value="<?=isset($_SESSION['job_title']) ? $_SESSION['job_title'] : ''?>">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Project Category</label>
            <select name="category" class="form-control">
                <option value="<?=isset($_SESSION['category']) ? $_SESSION['category'] : ''?>"><?=isset($_SESSION['category']) ? $_SESSION['category'] : ''?></option> 
                <option>Business Process Outsourcing (Outsourcing of Artisans Only)</option>
                <option>Business Process Outsourcing (Outsourcing of Facility Managers Only)</option>
                <option>Human Resources Resourcing (Recruitment of Artisans Only)</option>
                <option>Human Resources Resourcing (Recruitment of Facility Managers Only)</option>
                <option>Preventive Maintenance Software</option>
            </select>
           
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Submit Quote</button>
           
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
<script type="text/javascript">
  $(function(){
      //alert("ass");
      $('#myCarousel').carousel({
        interval: 3000,
     });
  });
</script>
</html>
<!--slide end--> 