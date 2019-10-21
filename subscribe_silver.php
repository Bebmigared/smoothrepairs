<?php 
 htmlspecialchars($_GET["subscribe"]);
$plan = $_GET["subscribe"];
//echo "My Plan is ".$plan." ";

//$plan = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   //if ($option) {
      //echo htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
   //}
?>
<html>
    <head>
        <title>
            SmoothRepair Subscription Form
        </title>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="shortcut icon" href="https://www.smoothrepairs.com/Smoothrepairs_favicon.jpg">
<!--<link rel="preload" href="dist/theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="dist/theme.min.css"></noscript>-->
<link rel="stylesheet" type="text/css" href="dist/theme.min.css" />

<?php include('gtm.php'); ?>
 <?php
include('header.php');
?>

<style>
    #subscr {
  /*background-color: blue;
  background-image: linear-gradient(1deg, #9fb8ad 0%, #1fc8db 85%, blue 95%);*/
  margin: auto;
  padding: 20px;
  width: 95%;
  min-width: 300px;
  border-radius: 15px;
  margin-bottom: 30px;
  margin-top: 50px;
}
</style>
    </head>
    <body style="background-image: linear-gradient(1deg, #9fb8ad 0%, #1fc8db 85%, #0000ff94 95%);">
        <?php
  include 'nav.php';
  ?>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" id="subscr" style="padding-top: 50px;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title" style="text-align:center; padding-top:10px;">SmoothRepair <?php echo $plan; echo " Plan"; ?> Subscription Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="" name="subscription" enctype="multipart/form-data">
                        <script src="https://js.paystack.co/v1/inline.js"></script>
                        <div class="form-group row">
                           <div class=" col-sm-6" >
                                            <label >First Name</label>
                                            <input class="form-control" type="text" placeholder="First name" name="first_name" required>
                                            
                                        </div>
                                    
                                        <div class="col-sm-6" >
                                            <label >Last Name</label>
                                            <input class="form-control" type="text" placeholder="Last name" name="last_name" required>
                                            
                                        </div>
                                  </div>
                                  <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Email Address</label>
                                    <input class="form-control" type="email" placeholder="Email address" id="EMAIL" name="email" required>
                                </div>
                            
                        <div class="col-sm-6">
                            
                                        <div class="form-group">
                                            <label class="label--desc">Phone Number</label>
                                            <input class="form-control" type="tel" step="10" min="1"  placeholder="E.g 08044444444" name="phone" required>
                                            
                                        </div>
                                   </div> 

                        </div>  
                             <div class="form-group row">
                          <div class="col-sm-6">
                                    <label>Building Type/Ownership</label>
                                    <select class="form-control"  id="building_type" name="building_type" required>
                                                                                <option ></option>
                                                                                <option value="Private">Private</option>
                                                                                <option value="Office">Office</option>
                                                                                
                                                                            </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>Number of Rooms</label>
                                    <input class="form-control" type="text" placeholder="E.g 10 or 10 Rooms" name="room" required>
                                </div>
                            </div>
                                
                               <div class="form-group row">
                            <div class="col-sm-6">
                                    <label>Office/House Address</label>
                                    <input class="form-control" type="text" placeholder="Address of your facility" name="address" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>Closest Bus Stop</label>
                                    <input class="form-control" type="text" placeholder="Closest bus-stop" name="b_stop" required>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control"  id="state" name="state" value="Select State"  required>
                                                                                <option ></option>
                                                                                <option value="Abuja FCT">Abuja FCT</option>
                                                                                <option value="Asaba">Asaba</option>
                                                                                <option value="Ibadan">Ibadan</option>
                                                                                <option value="Kano">Kano</option>
                                                                                <option value="Lagos">Lagos</option>
                                                                            </select>
                                </div>
                            
                                <div class="form-group">
                                        <label>Subscription Plan</label>
                                        <select class="form-control"  disabled>
                                            <option></option>
                                            <option value="Bronze" <?php if($plan==='Bronze') echo 'selected="selected"';?>>Bronze N50,000 Monthly</option>
                                            <option value="Silver" <?php if($plan==='Silver') echo 'selected="selected"';?>>Silver N100,000 Bi-Monthly</option>
                                            <option value="Gold" <?php if($plan==='Gold') echo 'selected="selected"';?>>Gold N200,000 Quarterly</option>
                                        </select>
                                        <select class="form-control" name="plan" style="display:none;">
                                            <option></option>
                                            <option value="Bronze" <?php if($plan==='Bronze') echo 'selected="selected"';?>>Bronze N50,000 Monthly</option>
                                            <option value="Silver" <?php if($plan==='Silver') echo 'selected="selected"';?>>Silver N100,000 Bi-Monthly</option>
                                            <option value="Gold" <?php if($plan==='Gold') echo 'selected="selected"';?>>Gold N200,000 Quarterly</option>
                                        </select>
                                        
                                    <input class="form-control" name="reference" id="reference" type="text" hidden>
                                    <input class="form-control" name="message" id="message" type="text" hidden>
                                    <input class="form-control" name="state" id="state" type="text" hidden>
                                    <input class="form-control" name="transaction" id="transaction" type="text" hidden>
                                    <input class="form-control" name="amount" id="amount" type="text" hidden>
                                    <input class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" type="text" hidden>
                                    <input class="form-control" name="time" id="time" type="text" hidden>
                                    
                                </div>
                            <!--<button class="btn  btn-lg btn-primary btn-block" onclick="payWithPaystack()" type="button">Subscribe</button>-->
                            <button class="btn  btn-lg btn-primary btn-block " name="subscribe" id="submitdata" type="submit">Continue Subscription</button>
                        
                    </form>
                    <?php 
                    include('sbconfig.php');
                    
                    if (isset($_POST['subscribe'])) {
                       
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$building_type = $_POST['building_type'];
	$room = $_POST['room'];
	$address = $_POST['address'];
	$b_stop = $_POST['b_stop'];
	$state = $_POST['state'];
	$plan = $_POST['plan'];
	$name = $_POST['first_name'] ." ". $_POST['last_name'];
	
	
	//PASSWORD GENERATOR Begins
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
// Output: iNCHNGzByPjhApvn7XBD
$pass = generate_string($permitted_chars, 10);
//End of password generator 

$query2 = mysqli_query($con, "SELECT * FROM subscription where email = '$email'");
//if ($query2){
 if (mysqli_num_rows($query2)){  
      echo "<script type='text/javascript'>alert('This User already has an account.')</script>";
      return false;
  }


	$query3 = mysqli_query($con, "INSERT INTO subscribers_acct(email, password, acct_type,firstname) VALUES ('$email','$pass','Silver subscriptionUser','$name')");
	$query = mysqli_query($con, "INSERT INTO subscription (firstname,lastname,email,phone,building_type,room,address,b_stop,state,plan) VALUES ('$first_name','$last_name','$email','$phone','$building_type','$room','$address','$b_stop','$state','$plan')");
	//$query2 = mysqli_query($con,"INSERT INTO Payments (email,reference_id,message,status,transaction_id,date,time,amount) VALUES ('$email','$reference','$message','$status','$transaction_id','$date','$time','$amount')");
	
		//($db, $sql);
		if($query){
		    $last_id = mysqli_insert_id($con);
                    $order_id = $last_id;
		    echo "<script type='text/javascript'>alert('Your SmoothRepairs Silver Plan Subscription has been submitted successfully')</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='silver_pay.php?nsa=$order_id' </script>";
		    //header ('location: index.php');
		}
		else{
		     echo "<script type='text/javascript'>alert('Your Subscription Details has NOT submitted!! Try Again!!')</script>";
		}
		
                    }
                    
            
  if ($query && !empty($_POST)){
  

        $to = $email;
        $subject = "SmoothRepairs Silver Plan Subscription Order for $first_name $last_name";

        $message2 = "
        <html>
        <head>
        <title>SmoothRepair Silver Plan Subscription Order Notice</title>
        </head>
        <body>
        <p>Dear $Fname,</p>
        <p>Thanks for choosing <strong>SmoothRepairs</strong>. <br>Your <strong>Silver Plan Subscription</strong> order has been received and you will be notified by our technical team within 24Hrs.</p>
        <p>An account has been created for you on www.smoothrepairs.com || Find your login details below:</p>

        <table style='font: 13px Arial; border-collapse: collapse; width: 70%'>
        <tr>
        <th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px;' >S/N</th>
        <th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px;'>Particulars</th> 
        <th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px;'>Details</th>
        </tr>
        <tr>
        <td style='border: 1px solid #ddd; padding: 8px; width: 50px'>1</td>
        <td style='border: 1px solid #ddd; padding: 8px; width: 250px'><strong>Username</strong></td>
        <td style='border: 1px solid #ddd; padding: 8px; width: 350px'> $email                    </td>
        </tr>
        <tr>
        <td style='border: 1px solid #ddd; padding: 8px; width: 50px'>2</td>
        <td style='border: 1px solid #ddd; padding: 8px; width: 250px'><strong>Password</strong></td>
        <td style='border: 1px solid #ddd; padding: 8px; width: 350px'> $pass                </td>
        </tr>
        <p>Sign in to check your Profile, click on this link >>> www.smoothrepairs.com</p>
        </table>
        <p>Best Regards,</p>
        <br><i>Owolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepair</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 0900000000 | 0800000000
        
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothTracker Team <info@smoothrepairs.com>' . "\r\n";
        mail($to,$subject,$message2,$headers);
        
        //$to2 = "SmoothTracker Team<profgared@gmail.com>";
        //$to2 = "SmoothTracker Team<info@smoothrepairs.com>";
        $to1 = "ICS Outsourcing<enquiries@icsoutsourcing.com>";
        $subject2 = "SmoothTracker Bronze Plan Subscription Order for $first_name $last_name";

        $message = "
        <html>
        <head>
        <title>SmoothRepairs Bronze Plan Subscription Order Notice</title>
        </head>
        <body>
        <p>Dear SmoothRepairs Team,</p>
        <p>A new subscription order has been received for <strong>$first_name $last_name</strong>.</p>
        <p>Please find below the details of the request:</p>
        <strong>Customer Name: </strong>$first_name $last_name
        <br><strong>Location: </strong>$address, $b_stop, $state
        <br><strong>Payment Plan: </strong> $plan 
        <br><strong>Mobile: </strong>$phone
        <br><strong>Email Address: </strong>$email
        <p>Kindly review and take the necessary action required for the installation.</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Owolabi Olaniyi,</i>
        <br><strong>COO, SmoothRepairs</strong>
        <br>info@smoothtrackerng.com
        <br>Mobile: 090000000 | 080000000
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothTracker Team<info@smoothrepairs.com>' . "\r\n";
        //mail($to2,$subject2,$message,$headers);
        mail($to1,$subject2,$message,$headers);
        
         //echo "<script type='text/javascript'>alert('Your monthly subscription order has been submitted successfully!')</script>";
         //echo "<script language='javascript' type='text/javascript'> location.href='https://www.smoothrepairs.com/thank_you.php' </script>";
        //echo "<script language='javascript' type='text/javascript'> location.href='https://www.smoothrepairs.com/thank_you.php' </script>";

  }    
        
                    ?>
                    
                    
   <!--                 
    <script type="text/javascript">
function payWithPaystack(){
    let email = $('#EMAIL').val();
    let amount = 500;
    var handler = PaystackPop.setup({
      //key: 'pk_live_61cbf727786a5c521a98990828f66b7e6dac6c97',
      key: 'pk_test_e6081be0199b85660e2f466dab4dab608d43c828',
      email: email,
      amount: amount,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348077392969"
            }
         ]
      },
      callback: function(response){
          //alert('success. transaction ref is ' + response.reference);
          $('#reference').val(response.reference);
          $('#message').val(response.message);
          $('#state').val(response.status);
          $('#transaction').val(response.transaction);
          $('#amount').val(response.amount);
          
           $.post("verify.php", {reference:response.reference}, function(status){
                if(status == "success")
                    //successful transaction
                    alert('Transaction was successful');
                else
                    //transaction failed
                    //alert(response);
                    alert('Transaction UNSUCCESSFUL');
            });
            
          $('#submitdata').trigger('click');
          console.log(response);
      },
      onClose: function(){
          alert('Your have cancelled your online payment for the Monthly Subscription order');
          $('#submitdata').trigger('click');
          window.location.replace("https://www.smoothrepairs.com");
          //echo $_SERVER['HTTP_REFERER'];
          //alert('window closed');
          
      }
    });
    handler.openIframe();
  }
        </script>-->
<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["subscription"]["FIRST_NAME"].value;
        var b=document.forms["subscription"]["NO_OF_FLEET"].value;
        var d=document.forms["subscription"]["PHONE"].value;
        var i=document.forms["subscription"]["EMAIL"].value;
      //  var k=document.forms["subscription"]["ADDRESS"].value;
      //  var m=document.forms["subscription"]["CITY"].value;
        var n=document.forms["subscription"]["STATE"].value;
        var r=document.forms["subscription"]["SUBSCRIBE"].value;
         var q=document.forms["subscription"]["PAYMENT_PLAN"].value;
         var o=document.forms["subscription"]["DATE"].value;
         var p=document.forms["subscription"]["TIME"].value;
        
        if (a==null || a=="",b==null || b=="" || b==0,d==null || d=="",i==null || i=="", n==null || n=="",r=="0" || r==null || r=="",q==null ||q=="", o==null || o=="", p==null ||p=="")
        {
            alert("Please fill ALL required fields.");
            return false;
        }
       
    }
</script>

<script type="text/javascript">
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

   $('#time').val(time);
</script>

                </div>
            </div>
        </div>
    </div>
  
    <?php
include('footer.php');
?>

    </body>
</html>