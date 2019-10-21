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
        <br><i>Ayodele Osho,</i>
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