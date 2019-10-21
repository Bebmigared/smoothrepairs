<?php
session_start();
include 'sbconfig.php';
$data = htmlspecialchars($_GET["nqrt"]);
$_SESSION['d'] = $data;
//header('location: /emap/eventdetails.php');

  $d = $_SESSION['d'];
$detail = "SELECT * FROM subscribers_request where id= $d";
$result = mysqli_query($db, $detail);
if (mysqli_num_rows($result) > 0) {
    //while ($row = $resultdetail->fetch_assoc()) {
        while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['my_request'] = $row;
        //header ('location: cand_data.php');
        echo "<script language='javascript' type='text/javascript'> location.href='data_page.php' </script>";
        }
}
else {
    //echo 'Couldnt connect';
   // echo "<script type='text/javascript'>alert('Couldnt connect')</script>";
}

?>