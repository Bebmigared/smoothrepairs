<?php
// Author: Linmic, email: linmicya@gmail.com
include("srconfig.php");
     session_start();
	error_reporting(E_ALL);
$select = "SELECT UID, FIRST_NAME, LAST_NAME, EMAIL, MOBILE, GENDER, USER_TYPE, CATEGORY, QUALIFICATION, EXPERIENCE, STATE, REG_DATE FROM Users WHERE USER_TYPE='Artisan' ORDER BY UID DESC, FIRST_NAME, LAST_NAME, REG_DATE DESC";
$columnHeader ='';
$columnHeader = "ID"."\t"."First Name"."\t"."Last Name"."\t"."Email"."\t"."Mobile"."\t"."Gender"."\t"."User Category"."\t"."Category"."\t"."QUALIFICATION"."\t"."Experience"."\t"."State"."\t"."Date Onboarded"."\t";
$setData='';
$result = mysql_query($select);
while($rec = mysql_fetch_assoc($result))
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=artisans-on-smoothrepairs.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader)."\n".$setData."\n";

?>