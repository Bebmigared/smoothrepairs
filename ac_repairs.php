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
<!-- MultiStep Form -->
<link href="css/multi.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->
 <link href="css/select2.min.css" rel="stylesheet" />
 <?php
  include 'nav.php';
  ?>
 <style>
            .box{
                display: none;
            }
        </style>
<div class="row">
    <div class="col-md-12 col-md-offset-3">
        <form id="msform" action="" method="post">
            
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">AC. Type</li> <!-- & Requirement-->
                <li>Select Location</li>
				<li>Select Air Conditioner Brand </li> <!-- & Number of Air Conditioner-->
				<li>Take Action</li>
				<li>User Details</li>
                
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">AIR CONDITIONER REPAIRS & SERVICING</h2>
                <h3 class="fs-subtitle">NOTE: A callout fee of <span style="color:red">₦1,250</span> will be paid to the artisan upon inspection.</h3>
                <br>
				<div class="form-group">
				<label>What type of AC do you want to get repaired/installed?</label>
				<select name="ac_type">
                                                <option>Window AC</option>
                                                <option>Split AC</option>
                                                <option>Standing AC</option>
												<option>Central AC</option>
                                                
                 </select>
                 </div>
				<div class="form-group">
				<label>What is your requirement?</label>
				<select name="service_type">
                                                <option>Inspection</option>
												<option>Repairs</option>
												<option>Servicing</option>
												<option>Installation</option>
																								
				</select>
               	 </div>
                 <input type="button" name="next" class="next action-button" attr = '1' value="Next"/>
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Select Your Location</h2>
                <label>Please provide the location where you require the service</label>
				<br>
				<div class="form-group">
				<label>Location</label>
					
							<div class="form-group">
							<label class="control-label">State</label><br>
						   <select name="state" id="selectstate">
							  <option value="" selected="selected" >- Select -</option>
							  <option value='Asaba'>Asaba</option>
							  <option value='FCT'>FCT</option>
							  <option value='Kano'>Kano</option>
							  <option value='Lagos'>Lagos</option>
							  <option value='Rivers'>Port Harcourt</option>
							  </select></div>
						<div class="form-group">
							  <label class="control-label">Address</label><br>
							  <textarea rows="2" id='lga1' name="lga" placeholder="specify address" required></textarea>
						
						</div>
                </div>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                 <input type="button" name="next" class="next action-button" attr ='2' value="Next"/>
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Select Your Brand</h2>
                <label>What brand is the AC?</label>
				<br>
					<div class="form-group">
				<label>Select Your Brand</label>
				<br>
				<br>
				<select name="ac_brand">
                                                <option>LG</option>
												<option>Samsung</option>
												<option>Panasonic</option>
												<option>Haier Thermocool</option>
												<option>Beko</option>
												<option>Other, user types</option>
												
												
												
			</select>
			
			<div class="form-group">
				<label>How many Air Conditioner's need to be checked?</label>
				<br>
				<br>
				<select name="no_ac">
                                                <option>1</option>
												<option>2</option>
												<option>3</option>
												<option>Above 3</option>
			</select>
			<br>
			<label>Select Capacity</label>
				<select name="ac_capacity" id="check" onChange="showOther(this.value)">
                                                <option>1 HP</option>
												<option>1.5 HP</option>
												<option>2 HP</option>
												<option>2.5 HP</option>
												<option>3 HP</option>
												<option>3.5 HP</option>
												<option>4 HP</option>
												<option>4.5 HP</option>
												<option>5 HP </option>
												<option>5.5 HP </option>
												<option value="other">Others, please specify</option>
			</select>
			<input class="box" id="other" type="text" name="other_ac_capacity" placeholder="Specify, AC type"/>
					<script >
					    function showOther(value){
            if (value=='other'){
            document.getElementById('other').style.display = 'block';
            }   
            else
            document.getElementById('other').style.display = 'none';
    }
					</script>
					</div>
					</div>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                 <input type="button" name="next" class="next action-button" attr ='3' value="Next"/>
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Take Action</h2>
					<div class="form-group">
				<label>How ready are you to hire?</label>
				<br>
				<br>
				<select name="take_action">
                                                <option>Ready to  call for repair/servicing</option>
												<option>Need inspection only</option>
												<option>Just checking prices and options</option>
												<option>Just checking how the website works</option>
												
				</select>
				<br>
				<label>How soon are you to hire?</label>
				<br>
				<br>
				<select name="how_soon">
                                                <option>At the earliest</option>
												<option>Within a week</option>
												<option>Within 2 weeks</option>
												<option>Later, not sure yet</option>
												
				</select>
				<label>Please select the preferred schedule for service?</label>
				<br>
				<br>
				<select name="service_schedule">
                                                <option>Weekends only</option>
												<option>Weekdays only</option>
												<option>Any day (please call me)</option>
												
												
				</select>
					</div>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                 <input type="button" name="next" class="next action-button" attr ='4' value="Next"/>
            </fieldset>
			
			<fieldset>
			    <script src="https://js.paystack.co/v1/inline.js"></script>
                <h2 class="fs-title">User Details</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" id="email" placeholder="Email" required />
                <input type="text" name="first_name" id="first_name" placeholder="First Name" required / >
				<input type="text" name="last_name" id="last_name" placeholder="Last Name"required / >
              <input type="text" name="phone_no" id="phone_no" placeholder="Phone Number (Get easily connected with the best AC technician via WhatsApp or call)" required />
			  <br>
			<textarea rows="3" name="other_message" id="othermessage" placeholder="Is there anything you would like the technician to know?" required ></textarea>
			
			<input class="form-control" name="reference" id="reference" type="text" hidden>
                                    <input class="form-control" name="message" id="message" type="text" hidden>
                                    <input class="form-control" name="state" id="state" type="text" hidden>
                                    <input class="form-control" name="transaction" id="transaction" type="text" hidden>
                                    <input class="form-control" name="amount" id="amount" type="text" hidden>
                                    <input class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" type="text" hidden>
                                    <input class="form-control" name="time" id="time" type="text" hidden>
			
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                
                <!--<button class="btn  btn-lg btn-primary btn-block" onclick="payWithPaystack()" type="button">Subscribe</button>
                <input type="button" class="submit action-button" type="button" onclick="validateForm()" attr ='5' value="Submit Order" style="display:none;">
                <input type="button" class="submit action-button" onclick="payWithPaystack()" id="paystack" attr ='5' value="Pay Now" style="display:none;">-->
                <input type="submit" name="submit" id="submitdata" class="submit action-button" attr ='5' value="Continue Order"/>
            </fieldset>
			<?php
if(isset($_POST['submit'])){
	
	
	if(empty($_POST['other_message'])){
		 echo "Kindly supply additional info. to help service you better<br>";
			 }
			 else
			 {
			     $capacity = $_POST['ac_capacity'];
			     if($_POST['ac_capacity'] == 'other')
				 {
				     $capacity = $_POST['other_ac_capacity'];
				 }
				 $SERVICE_CATEGORY = "AC Repairs";
				 $SERVICE_SCHEDULE = $_POST['service_schedule'];
				 //$REQUEST_DESCRIPTION = "Please provide little background on your request: ".$_POST['other_message']." AC Capacity : ".$capacity." Type of AC: ".$_POST['ac_type']." Type of Service: ".$SERVICE_CATEGORY." Preferred Schedule: ".$SERVICE_SCHEDULE." Number of AC: ".$_POST['no_ac']." AC Brand: ".$_POST['ac_brand']." Your Requirements: ".$_POST['service_type']." How ready are you to hire?: ".$_POST['how_soon']." Next Step: ".$_POST['take_action'];
				 $REQUEST_DESCRIPTION = "AC Brand: ".$_POST['ac_brand'].". Type of AC: ".$_POST['ac_type'].". AC Capacity : ".$capacity.". Number of AC: ".$_POST['no_ac'].". Preferred Schedule: ".$SERVICE_SCHEDULE;
				 $email = $_POST['email'];
				 $mobile = $_POST['phone_no'];
				 $ORIGINATOR = $_POST['first_name']." ". $_POST['last_name'];
			      $ORIGINATOR_ADDRESS = $_POST['lga'].''.$_POST['state'];
			     //$ORIGINATOR_ADDRESS = $_POST['lga'];
				 $REQUEST_DATE = date("Y-m-d H:i:s");
				 $DETAILS = $_POST['other_message'];
				 
				 
				//$sql = mysql_query("INSERT INTO request_form(fullname,email,mobile,location,service_type,messages,date_req)VALUES('$ORIGINATOR','$email','$mobile','$ORIGINATOR_ADDRESS','$SERVICE_CATEGORY','$REQUEST_DESCRIPTION','$REQUEST_DATE')");
				$sql = mysqli_query($con, "INSERT INTO request_form(fullname,email,mobile,location,service_type,messages,date_req,details)VALUES('$ORIGINATOR','$email','$mobile','$ORIGINATOR_ADDRESS','$SERVICE_CATEGORY','$REQUEST_DESCRIPTION','$REQUEST_DATE','$DETAILS')");
				
				
				if($sql)
				{
				    $last_id = mysqli_insert_id($con);
                    $order_id = $last_id;
				echo "<script type='text/javascript'>alert('Your SmoothRepairs Job Order has been submitted successfully')</script>";
				
                
                echo "<script language='javascript' type='text/javascript'> location.href='pay.php?plan=$order_id' </script>";
                
				 //$to = 'profgared@gmail.com';
				 $to = 'info@smoothrepairs.com';
				 $copy = $email;
				 $copy1 = 'cakujobi@icsoutsourcing.com';
				 $copy2 = 'oakeredolu@icsoutsourcing.com';
				 $copy3 = 'enquiries@icsoutsourcing.com';
				 
				 //User Notification
       $message2 = "
        <html>
        <head>
        <title>SmoothRepairs AC Repair Job Request Notification</title>
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
        $subject = "SmoothRepairs Job Order for $ORIGINATOR ";
        
       //Admin Notification
        $message = "
        <html>
        <head>
        <title>SmoothRepairs AC Repair Job Request Notification</title>
        </head>
        <body>
        <p>Dear Admin,</p>
        <p>There is a pending Job Order from <strong>$ORIGINATOR</strong>.</p>
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
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: SmoothRepairs Admin<info@smoothrepairs.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        mail($copy,$subject,$message2,$headers);
         mail($copy1,$subject,$message,$headers);
         mail($copy2,$subject,$message,$headers);
         mail($copy3,$subject,$message,$headers);
					  header('Location: ac_repairs.php');

$request = "";                                      //initialize the request variable
$param["user"] = "ics_limited";                     //this is the username of our smstorrent.net api account
$param["cypher"] = "ics_recruitment";               //this is the password of our smstorrent.net api account
$param["message"] = "Dear Admin, there is an $SERVICE_CATEGORY job request on SmoothRepairs by $ORIGINATOR ($mobile). Kindly sign in to view the job order.";   //this is the message that we want to send
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
} 
else 
{
    echo "SMS sending failed:: Reason: could not connect to gateway!";
    
    }				 
				    
				    
				    
				}
				 else
				 {
				 

	echo "Unable to Process Request <br>";
}
}
}
?>
        </form>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="js/lga.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		 
		 <!--<script type="text/javascript">
function payWithPaystack(){
    let email = $('#email').val();
    let amount = 100000;
    var handler = PaystackPop.setup({
      key: 'pk_live_61cbf727786a5c521a98990828f66b7e6dac6c97',
      //key: 'pk_test_e6081be0199b85660e2f466dab4dab608d43c828',
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
          
          $('#submitdata').trigger('click');
          console.log(response);
      },
      onClose: function(){
          alert('Your have cancelled your online payment for the Monthly Subscription order');
          $('#submitdata').trigger('click');
          window.location.replace("https://www.smoothrepairs.org");
          //echo $_SERVER['HTTP_REFERER'];
          //alert('window closed');
          
      }
    });
    handler.openIframe();
  }
        </script>-->
        
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
        else{
            $('#paystack').trigger('click');
        }
           }
        </script>
        
        <!--PayStack function starts-->
        
        
        
<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    let attr = $(this).attr('attr');
	if(attr == '2' && ($("#lga1").val() == "" || $("#selectstate").val()=="")) {alert("Address and State are Required"); return false;
	}
// 		
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
    // let attr = $(this).attr('attr');
    //if(attr == '5' && $("#othermessage").val() == "") {alert("Please specify other information"); return false;
// // 	}
	return true;
});
</script>
</body>

<?php
include('footer.php');
?>