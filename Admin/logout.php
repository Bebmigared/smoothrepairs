<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>