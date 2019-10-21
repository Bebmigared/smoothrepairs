<?php 
include('sbconfig.php');
     session_start();
	 error_reporting(E_ALL);
	   ini_set('display_errors',0);
?>
 <?php include('gtm.php'); ?>
 <?php
include('header.php');
?>
<body>
<!-- MultiStep Form -->
<link href="css/multi.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->
  <link href="css/select2.min.css" rel="stylesheet" />
  <?php
  include 'nav.php';
  ?>
<div class="row">
    <div class="col-md-12 col-md-offset-3">
        <form id="msform" action="" method="post">
            
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Gen. Type</li>
                <li>Select Location</li>
				<li>Select Brand & Capacity</li>
				<li>Take Action</li>
				<li>User Details</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">GENERATOR REPAIRS AND SERVICING</h2>
                <h3 class="fs-subtitle">NOTE: A callout fee of <span style="color:red">₦1,250</span> will be paid to the artisan upon inspection.</h3>
                <label>What is the type of your generator?</label>
				<br><br>
				<div class="form-group">
				<label>Select</label><br>
				<select name="gen_type">
                                                <option>Diesel Generator</option>
                                                <option>Petrol Generator</option>
                                                <option>Gas Generator</option>
                                                
                                            </select>
               
				 </div>
                 <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Select Your Location</h2>
                <label>Please provide the location where you require the service</label>
				<br>
				<div class="form-group">
				<label class="control-label">Select Your State</label><br>
						   <select name="state" id="stat">
							  <option value="" selected="selected" >- Select -</option>
							  <option value='Asaba'>Asaba</option>
							  <option value='FCT'>FCT</option>
							  <option value='Kano'>Kano</option>
							  <option value='Lagos'>Lagos</option>
							  <option value='Rivers'>Port Harcourt</option>
							  </select><br></div><div class="form-group">
						  
						
							  <label class="control-label">Address</label><br>
							  <textarea rows="3" name="lga" id="lga1" placeholder="specify address" ></textarea></div>
                
                				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                 <input type="button" name="next" class="next action-button" attr = '1' value="Next"/>
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Select Your Brand & Capacity</h2>
                <label>What brand is the generator?</label>
				<br>
					<div class="form-group">
				<label>Select Your Brand</label>
				<br>
				<br>
				<select name="gen_brand">
                                                <option>Simba</option>
												<option>Tiger</option>
												<option>Mikano</option>
												<option>Firman</option>
												<option>Thermocool</option>
												<option>Honda</option>
												<option>Yamaha</option>
												<option>Perkins</option>
												<option>Other, user types</option>
												
												
												
			</select></div>
			   
					<div class="form-group">
				<label>Select Your Generator Output Capacity</label>
				<br>
				<br>
				<select name="gen_capacity">
                                                <option>1 to 1.3 KVA</option>
												<option>2 to 2.5 KVA</option>
												<option>3 to 3.5 KVA</option>
												<option>4 to 4.5 KVA</option>
												<option>5 KVA</option>
												<option>6 KVA</option>
												<option>7 KVA</option>
												<option>8 KVA</option>
												<option>9 KVA</option>
												<option>10 KVA</option>
												<option>20 KVA</option>
												<option>25 KVA</option>
												<option>30 KVA</option>
												<option>50 KVA</option>
												<option>100 KVA</option>
												<option>200 KVA</option>
												<option>250 KVA</option>
												<option>500 KVA</option>
												<option>1000 KVA</option>
												<option>2000 KVA</option>
												<option>Other, user types</option>
												
												
												
			</select>
					</div>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                 <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Take Action</h2>
					<div class="form-group">
				<label>What action are you taking now?</label>
				<br>
				<br>
				<select name="take_action">
                                                <option>Ready to hire</option>
												<option>Need inspection only</option>
												<option>Just checking prices and options</option>
												<option>Just checking how the website works</option>
												
				</select>
				<br>
				<label>How soon do you need the service?</label>
				<br>
				<br>
				<select name="how_soon">
                                                <option>At the earliest</option>
												<option>Within a week</option>
												<option>Within 2 weeks</option>
												<option>Later, not sure yet</option>
												
				</select>
					</div>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                 <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
			<fieldset>
			    <script src="https://js.paystack.co/v1/inline.js"></script>
                <h2 class="fs-title">User Details</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" id="email" placeholder="Email" required />
                <input type="text" name="first_name" id="first_name" placeholder="First Name" required / >
				<input type="text" name="last_name" id="last_name" placeholder="Last Name"required / >
              <input type="text" name="phone_no" id="phone_no" placeholder="Phone Number" required />
			  <br>
			  
			<textarea rows="3" name="other_message" id="other_message" placeholder="Is there anything you would like the technician to know?" required ></textarea>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                
                <!--<input type="button" class="submit action-button" type="button" onclick="validateForm()" attr ='5' value="Submit Order">
                <input type="button" class="submit action-button" onclick="payWithPaystack()" id="paystack"  style="display:none;">-->
                <input type="submit" name="submit" id="submitdata" class="submit action-button" value="Continue Order" attr ='5'/>
            </fieldset>
			<?php
if(isset($_POST['submit'])){
	
	
	if(empty($_POST['other_message'])){
		 echo "Kindly supply additional info. to help service you better<br>";
			 }
			 else{
				 
				 $SERVICE_CATEGORY = "Generator Repairs & Servicing";
				 //$REQUEST_DESCRIPTION = "Is there anything you would like the technician to know? ".$_POST['other_message']." Type of Generator: ".$_POST['gen_type']." Generator Brand: ".$_POST['gen_brand']." Generator Power Output: ".$_POST['gen_capacity']." How ready are you to hire?: ".$_POST['how_soon']." Next Step: ".$_POST['take_action'];
				 $REQUEST_DESCRIPTION = "Type of Generator: ".$_POST['gen_type'].". Generator Brand: ".$_POST['gen_brand'].". Generator Power Output: ".$_POST['gen_capacity'];
				 $email = $_POST['email'];
				 $mobile = $_POST['phone_no'];
				 $ORIGINATOR = $_POST['first_name']." ". $_POST['last_name'];
			     $ORIGINATOR_ADDRESS = $_POST['lga'].' '.$_POST['state'];
			     //$ORIGINATOR_ADDRESS = $_POST['lga'];
				 $REQUEST_DATE = date("Y-m-d H:i:s");
				 $DETAILS = $_POST['other_message'];
				 

				 
				$sql = mysqli_query($con, "INSERT INTO request_form(fullname,email,mobile,location,service_type,messages,date_req,details)VALUES('$ORIGINATOR','$email','$mobile','$ORIGINATOR_ADDRESS','$SERVICE_CATEGORY','$REQUEST_DESCRIPTION','$REQUEST_DATE','$DETAILS')");
				
				if($sql){
				    
				$last_id = mysqli_insert_id($con);
                    $order_id = $last_id;
                    
                //echo "<script type='text/javascript'>alert('review your answer');window.location.href = 'pay.php?plan=$order_id'</script>";
				echo "<script type='text/javascript'>alert('Your SmoothRepairs Job Order has been submitted successfully')</script>";
				echo "<script language='javascript' type='text/javascript'> location.href='pay.php?plan=$order_id' </script>";
				
				 //$to = 'profgared@gmail.com';
				 $to = 'info@smoothrepairs.com';
				 $copy = $email;
				 $copy1 = 'lezinando@icsoutsourcing.com';
				 $copy2 = 'oakeredolu@icsoutsourcing.com';
				 $copy3 = 'enquiries@icsoutsourcing.com';

        $subject = "SmoothRepairs Job Order for $ORIGINATOR ";
        //Admin Notification
        $message = "
        <html>
        <head>
        <title>SmoothRepairs Registration Job Request Notification</title>
        </head>
        <body>
        <p>Dear Admin,</p>
        <p>There is a pending Job Order for <strong>$ORIGINATOR</strong>.</p>
        <i>Request Brief:</i>
        <br>
        <br><strong>Originator:</strong> $ORIGINATOR
        <br><strong>Mobile:</strong> $mobile
        <br><strong>Email Address:</strong> $email
        <br><strong>Address:</strong> $ORIGINATOR_ADDRESS
        <br><strong>Service Type:</strong> $SERVICE_CATEGORY 
        <br><strong>Request Details:</strong> $REQUEST_DESCRIPTION
        <p>Best Regards,</p>
        <i>Customer Service,</i>
        <br><strong>SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        </body>
        </html>
        ";
        //User Notification
        $message2 = "
        <html>
        <head>
        <title>SmoothRepairs Registration Job Request Notification</title>
        </head>
        <body>
        <p>Dear $ORIGINATOR,</p>
        <p>Thank you for choosing SmoothRepairs, your reliable on-demand service.<strong></p>
        <br>
        <br>Your job order is currently being reviewed and a suitable artisan will be assigned to you shortly.
        <p>Best Regards,</p>
        <i>Customer Service,</i>
        <br><strong>SmoothRepairs</strong>
        <br>info@smoothrepairs.com
        <br>Mobile: 08113975299
        </body>
        </html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
         mail($copy,$subject,$message2,$headers);
         mail($copy1,$subject,$message,$headers);
         mail($copy2,$subject,$message,$headers);
         mail($copy3,$subject,$message,$headers);
					  //header('Location: gen_repairs.php');
					  
					  
					  
$request = "";                                      //initialize the request variable
$param["user"] = "ics_limited";                     //this is the username of our smstorrent.net api account
$param["cypher"] = "ics_recruitment";               //this is the password of our smstorrent.net api account
$param["message"] = "Dear Admin, there is a $SERVICE_CATEGORY job request on SmoothRepairs by $ORIGINATOR ($mobile). Kindly sign in to view the order.";   //this is the message that we want to send
$param["recipient"] = "08113975299";                //these are the comma-separated recipients of the message
$param["sender"] = "S_Repairs";                        //this is our sender 
$param["redirect"]= "";                             //optional parameter if you want your script to handle the response.
$param["resp_type"]= "data";                        //optional parameter (data | html)

foreach($param as $key=>$val)               //traverse through each member of the param array
{ 
  $request.= $key."=".rawurlencode($val);       //we have to urlencode the values
  $request.= "&";                   //append the ampersand (&) sign after each paramter/value pair
}
$request = substr($request, 0, strlen($request)-1);     //remove the final ampersand sign from the request

//First prepare the info that relates to the connection
$host = "api.smstorrent.net";               //The API domain 
$script = "/http/";                 //the script location
$request_length = strlen($request);
$method = "POST";                   // must be POST if sending large no of  messages
if ($method == "GET"){
  $script .= "?$request";
}

//Now comes the header which we are going to post. 
$header = "$method $script HTTP/1.1\r\n";
$header .= "Host: $host\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: $request_length\r\n";
$header .= "Connection: close\r\n\r\n";
$header .= "$request\r\n";

//Now we open up the connection
$socket = @fsockopen($host, 80, $errno, $errstr); 
if ($socket) //if its open, then...
{ 
  fputs($socket, $header);          // send the details over
  while(!feof($socket))
  {
  }
  fclose($socket); 
} else {
    echo "SMS sending failed:: Reason: could not connect to gateway!";
    
    }					  
				 }
				 else{
				 

	echo "Unable to Process Request <br>";

					 
}
}
}
?>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="js/lga.min.js"></script>
		
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		  
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->

 <script type="text/javascript">
           function validateForm(){    
         if (document.getElementById("email").value == "") {
            alert("Email cannot be blank");
        } else if (document.getElementById("first_name").value == "") {
            alert("First name cannot be blank.");
        } else if (document.getElementById("last_name").value == "") {
            alert("Last name cannot be blank.");
        } else if (document.getElementById("phone_no").value == "") {
            alert("Phone Number cannot be blank.");
        } else if (document.getElementById("othermessage").value == "") {
            alert("Other message cannot be blank.");
        }
        
            $('#paystack').trigger('click');
        
           }
        </script>
        

<script>

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    let attr = $(this).attr('attr');
	if(attr == '1' && ($("#lga1").val() == "" || $("#stat").val()=="")) {alert("Address and State are Required"); return false;
	}
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return true;
})
</script>
</body>
<?php
include 'footer.php';
?>