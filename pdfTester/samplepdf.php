<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<?php
$servername = "localhost";
$username = "smoothre_dir";
$password = "Sm00thR3p@1r5s";

//$tablename = "Options";
//$connect = new PDO("mysql:$servername;dbname:smoothre_Directory",$username,$password);
//include("../srconfig.php");

function fetch_customer_data($connect)
{
	$sql = "SELECT * FROM Options";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
	$output = '
	<div class="table-responsive">
	<table class="table table-striped table-bordered">
	<tr>
		<th>Option ID</th>
		<th>Description</th>
		<th>Category</th>
		<th>Option</th>
		<th>Status</th>
	</tr>';
	foreach($result as $rows)
	{
		$output .='
			<tr>
			<td>'.$rows['OID'].'</td>
			<td>'.$rows['DESCRIPTION'].'</td>
			<td>'.$rows['CATEGORY'].'</td>
			<td>'.$rows['OPTION_NAME'].'</td>
			<td>'.$rows['image_link'].'</td>
			</tr>'; 
	}
	$output .='
	</table>
	</div>';
	
	return $output;
}
 $message = '';
 if(isset($_POST["action"]))
 {
    
    //use Dompdf\Dompdf;
	include ('pdf.php');
	 //Set file name using md5 rand() function
	 $file_name = md5(rand()).'.pdf';
	 //$target = "Doc/".$file_name;
	 //Set html content
	 $html_code = '<h2>HTML Table</h2>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>';
	 //$html_code = '<link rel="stylesheet" href="boostrap.min.css"/>';
	 //$html_code .= fetch_customer_data($connect);
	//create new pdf object
	$pdf = new Pdf();
	//load html and render
	 $pdf->load_html($html_code);
	 $pdf->render();
	 //$pdf->stream("ok",array("Attachment"=>0));
	 //define output
	 $file = $pdf->output();
	 //$pdf->output();
	 //write content into file below
     file_put_contents("Doc/$file_name",$file);
	 //$pdf->stream("",array("Attachment"=>0));
	 //require 'class/class.phpmailer.php';
// 	 $mail = new PHPMailer;
// 	 $mail->IsSMPT();
// 	 $mail->Host = '';
// 	 $mail->Post = '80';
// 	 $mail->SMTPAuth = true;
// 	 $mail->Username = 'test@abc.com';
// 	 $mail->Password = 'password';
// 	 $mail->SMTPSecure = '';
// 	 $mail->From = 'tesuidney@gmail.com';
// 	 $mail->FromName = 'Tesusoft Solutions';
// 	 $mail->AddAddress('olumideoyetesu@gmail.com','Olumide');
// 	 $mail->WordWrap = 50;
// 	 $mail->IsHTML(true);
// 	 $mail->AddAttachment($file_name);
// 	 $mail->Subject = 'Customer Details';
// 	 $mail->Body = 'Please Find Customer details in attached PDF File.';
	 
	//Time to send email
// 	if($mail->Send())
// 	{
// 		$message = '<br><label class="text-success">Cusomer Details has been sent successfully...</label>';
// 	}
//	unlink($file_name); 
	 
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Send an Email on Form Submission using PHP
</title>
<!--<script src="jquery.min.js></script>-->
<!--<link rel="stylesheet" href="boostrap.min.css"/>-->
<!--<script src="boostrap.min.js"></script>-->
</head>
<body>
<br/>
<div class="container">
<h3 align="center">Create Dynamic PDF Send As Attachment with Email in PHP</h3>
<br />
<form method="post">
<input type="submit" name="action" class="btn btn-danger" value="PDF Send" />
</form><?php echo $message;?>
<br/>
<?php
echo fetch_customer_data($connect);
?>
</div>
<br />
<br />
</body>
</html>