<?php
// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();

// Load HTML content
//$dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>');

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream();

// // Load content from html file
// 

$html = file_get_contents("pdf-content.html");

 $dompdf->loadHtml($html);

// // (Optional) Setup the paper size and orientation
 $dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
$dompdf->render();

// // Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("codexworld",array("Attachment"=>0));
?>


/*

if(!empty($_POST['Submit']))
{
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


}
*/