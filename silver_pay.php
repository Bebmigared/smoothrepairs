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
  <?php
  session_start(); 
  
  htmlspecialchars($_GET["nsa"]);
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
$nsaPlan = htmlspecialchars($_GET["nsa"]);
include("sbconfig.php");
$sql = "SELECT * FROM subscription WHERE id= '$nsaPlan'";
$result = mysqli_query($con, $sql);
//echo $ticket;
//return false;
if (mysqli_num_rows($result) != 0) {
    
        while ($row = $result->fetch_assoc()) { 
        //print_r($row);
        
        $_SESSION['nsaPlan'][] = $row;
        //echo $_SESSION['PayPlan'][0];
        $PlanType = $_SESSION['nsaPlan'][0]['service_type'];
        
        $Email = $_SESSION['nsaPlan'][0]['email'];
//print_r($row);
        //header ('location: ../event1.php');
        }
        
}
else {
	//echo 'Couldnt connect';
	$error = 'Couldnt GET DATA!!';
}
  ?>
 <style>
            .box{
                display: none;
            }
        </style>
<div class="row">
    <div class="col-md-12 col-md-offset-3">
        <form id="msform" action="" method="post">
           	
			<fieldset>
			    <script src="https://js.paystack.co/v1/inline.js"></script>
                <h2 class="fs-title">Order Details</h2>
                <h3 class="fs-subtitle">Confirm Subscription details and make payment of <strong style="color:red;">N100,000</strong></h3>
                <span for="first_name">Name: </span><input type="text" name="name" value="<?=$_SESSION['nsaPlan'][0]['firstname'];?> <?=$_SESSION['nsaPlan'][0]['lastname'];?>" id="name" disabled / >
                <span>Email: </span><input type="text" name="email" value="<?=$_SESSION['nsaPlan'][0]['email'];?>" disabled />
                <span>Phone: </span><input type="text" name="phone" value="<?=$_SESSION['nsaPlan'][0]['phone'];?>" id="phone" disabled />
                <span>Location: </span><input type="text" name="location" value="<?=$_SESSION['nsaPlan'][0]['address'];?>, <?=$_SESSION['nsaPlan'][0]['b_stop'];?>, <?=$_SESSION['nsaPlan'][0]['state'];?>" id="location" disabled />
                <span>Subscription Plan Details: </span><input type="text" name="plan" value="<?=$_SESSION['nsaPlan'][0]['plan'];?>" id="plan" disabled />
			<span>Building Type: </span><textarea rows="3" name="details" id="details"disabled ><?=$_SESSION['nsaPlan'][0]['building_type'];?></textarea>
			<span>Number of Room: </span><textarea rows="3" name="details" id="details"disabled ><?=$_SESSION['nsaPlan'][0]['room'];?></textarea>
			<br>
			<!--<input name="email" id="email" value="<?=$_SESSION['nsaPlan'][0]['email'];?>" type="text" hidden>-->
			<input name="EMAIL" id="EMAIL" value="<?php echo $Email;?>" type="email" hidden>
			<input name="reference" id="reference" type="text" hidden>
                                    <input name="message" id="message" type="text" hidden>
                                    <input name="status" id="status" type="text" hidden>
                                    <input name="transaction" id="transaction" type="text" hidden>
                                    <input name="amount" id="amount" type="text" hidden>
                                    <input name="date" id="date" value="<?php echo date('Y-m-d'); ?>" type="text" hidden>
                                    <input name="time" id="time" type="text" hidden>
			
                <!--<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>-->
                
                <!--<button class="btn  btn-lg btn-primary btn-block" onclick="payWithPaystack()" type="button">Subscribe</button>
                <input type="button" class="submit action-button" type="button" onclick="validateForm()"  value="Submit Order" style="display:none;">-->
                <input type="button" class="submit action-button" onclick="payWithPaystack()" id="paystack" value="Pay Now">
                <input type="submit" name="submit" id="submitdata" class="submit action-button" value="Submit" style="display:none;"/>
            </fieldset>
			<?php
if(isset($_POST['submit'])){
				 
				  $reference=$_POST['reference'];
        $message=$_POST['message'];
        $status=$_POST['status'];
        $transaction_id=$_POST['transaction'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $amount=$_POST['amount'];
        //$plan='AC Repair'; $_POST['first_name']." ". $_POST['last_name'];
        $plan = $PlanType;
				 
		$ORIGINATOR = $_SESSION['nsaPlan'][0]['firstname']. " " .$_SESSION['nsaPlan'][0]['lastname'];
		$mobile =$_SESSION['nsaPlan'][0]['phone'];
		$email = $_SESSION['nsaPlan'][0]['email'];
		$ROOM = $_SESSION['nsaPlan'][0]['room'];
		$ORIGINATOR_ADDRESS =$_SESSION['nsaPlan'][0]['address'] .", ".$_SESSION['nsaPlan'][0]['b_stop'] .", ".$_SESSION['nsaPlan'][0]['state'];
		$SERVICE_CATEGORY = $_SESSION['nsaPlan'][0]['plan'];
		$REQUEST_DESCRIPTION = $_SESSION['nsaPlan'][0]['building_type'];
		$ROOM =$_SESSION['nsaPlan'][0]['room'];
		$Price = 'N100,000';
				//$sql = mysql_query("INSERT INTO request_form(fullname,email,mobile,location,service_type,messages,date_req)VALUES('$ORIGINATOR','$email','$mobile','$ORIGINATOR_ADDRESS','$SERVICE_CATEGORY','$REQUEST_DESCRIPTION','$REQUEST_DATE')");
				
				$query2 = mysqli_query($con,"INSERT INTO Payments (email,reference_id,message,status,transaction_id,date,time,amount,plan) VALUES ('$Email','$reference','$message','$status','$transaction_id','$date','$time','$Price','$plan')");
				
				if($query2)
				{
				    $to = 'enquiries@icsoutsourcing.com';
				    //$to = 'profgared@gmail.com';
				 //$to = 'info@smoothrepairs.com';
				 $copy1 = 'cakujobi@icsoutsourcing.com';
				 $copy2 = 'oakeredolu@icsoutsourcing.com';
				 $copy3 = 'enquiries@icsoutsourcing.com';
				 
				 //User Notification
     
        $subject = "SmoothRepairs Silver Plan Subscription Payment for $ORIGINATOR ";
        
       //Admin Notification
        $message2 = "
        <html>
        <head>
        <title>SmoothRepairs Silver Plan Subscription Payment Notification</title>
        </head>
        <body>
        <p>Dear Admin,</p>
        <p>There is a new Silver Plan Subscription Payment of $Price with pending Confirmation from <strong>$ORIGINATOR</strong>.</p>
        <p><strong>$ORIGINATOR</strong> has successfully paid $Price with the following details.</p>
        <br><strong>Referrence ID:</strong> $reference
        <br><strong>Transaction ID:</strong> $transaction_id
        <br>
        <br><i>Request Brief:</i>
        <br><strong>Originator:</strong> $ORIGINATOR
        <br><strong>Mobile:</strong> $mobile
        <br><strong>Email Address:</strong> $email
        <br><strong>Address:</strong> $ORIGINATOR_ADDRESS
        <br><strong>Subscription Plan:</strong> $SERVICE_CATEGORY 
        <br><strong>Building Details:</strong> $REQUEST_DESCRIPTION
        <br><strong>Number of Rooms:</strong> $ROOM
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

        mail($to,$subject,$message2,$headers);
         mail($copy1,$subject,$message2,$headers);
         mail($copy2,$subject,$message2,$headers);
         mail($copy3,$subject,$message2,$headers);
				    
				echo "<script type='text/javascript'>alert('Your Subscription Order Payment has been done successfully')</script>";
				//echo "<script type='text/javascript'>window.location.replace('https://www.smoothrepairs.com')</script>";
				echo "<script language='javascript' type='text/javascript'> location.href='https://www.smoothrepairs.com' </script>";
				}
				 else
				 {
				 

	echo "Unable to Process Request <br>";
}

}
?>
        </form>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>-->
    
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="js/lga.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
		 
		 <script type="text/javascript">
function payWithPaystack(){
    let email = $('#EMAIL').val();
    let amount = 10000000;
    var handler = PaystackPop.setup({
      key: 'pk_live_61cbf727786a5c521a98990828f66b7e6dac6c97',
      
      //key: 'pk_test_152fc0d1d5b76e4291a4cadc0b7d0c969e04ce16',
      //key: 'pk_test_e6081be0199b85660e2f466dab4dab608d43c828',;
      //key: 'pk_test_e22c091552997080bc70b61637096324bb1405ba';
      //key: 'pk_test_e22c091552997080bc70b61637096324bb1405ba';
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
          $('#status').val(response.status);
          $('#transaction').val(response.transaction);
          $('#amount').val(response.amount);
          
           //$.post("verify.php", {reference:response.reference}, function(status){
                //if(status == "success")
                    //successful transaction
                    //alert('Transaction was successful');
                //else
                    //transaction failed
                    //alert(response);
                    //alert('Transaction UNSUCCESSFUL');
            //});
            
          $('#submitdata').trigger('click');
          console.log(response);
          
      },
      onClose: function(){
          alert('You have cancelled your online payment!');
          $('#submitdata').trigger('click');
          window.location.replace("https://www.smoothrepairs.com");
          //echo $_SERVER['HTTP_REFERER'];
          //alert('window closed');
          
      }
    });
    handler.openIframe();
  }
        </script>
       <script type="text/javascript">
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

   $('#time').val(time);
</script> 
        
        <!--PayStack function starts-->
        
        <!--<script type="text/javascript">
            function payWithPaystack() {
    let email = $('#email').val();
    
    var handler = PaystackPop.setup({ 
        key: 'pk_test_e6081be0199b85660e2f466dab4dab608d43c828', //put your public key here
        email: email, //put your customer's email here
        amount: 125000, //amount the customer is supposed to pay
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348012345678" //customer's mobile number
                }
            ]
        },
        callback: function (response) {
            //after the transaction have been completed
            //make post call  to the server with to verify payment 
            //using transaction reference as post data
            $.post("verify.php", {reference:response.reference}, function(status){
                if(status == "success")
                    //successful transaction
                    alert('Transaction was successful');
                else
                    //transaction failed
                    alert(response);
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}
        </script>-->
        

</body>

<?php
include('footer.php');
?>
