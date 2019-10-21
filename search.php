<?php session_start(); ?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<?php
		include('header.php');
		?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO0cgbsapmKRr5Sq0BSnVeBNp3XxICpCM&v=3.exp&sensor=false&libraries=places"></script>
        <script>
            function init() {
                var input = document.getElementById('location');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed',
        function() {
        var place = autocomplete.getPlace();
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();
        
        document.getElementById("latitude").value = lat
        document.getElementById("longitude").value = lng
   }
);
            }
 
            google.maps.event.addDomListener(window, 'load', init);
        </script>

<script language="javascript">
function changeValue(){
    
if (document.getElementById("catego").value == 0){
    
var e = document.getElementById("category").value;

document.getElementById("catego").value = e;




}    

if (document.getElementById("category").value == 0){
    
var a = document.getElementById("catego").value;
var b = document.getElementById("longit").value;
var d = document.getElementById("latitu").value;


document.getElementById("category").value = a;
document.getElementById("longitude").value = b;
document.getElementById("latitude").value = d;

}
}
</script>
<body>
        <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/"><img src="smoothrepairs_logo.png" class="white" alt="smoothrepairs logo">SmoothRepairs</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link btn-danger top-btn" href="artisan.php">Sign up</a>
                                    </li>
                                    
                                    
                                    <!--<li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>-->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="contact.html">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                   <!--<li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Listing</a></li>-->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("srconfig.php");
    $sql = "SELECT * FROM Users WHERE USERNAME = '" . $_SESSION['username'] . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "Hi " . $row['FIRST_NAME'];
?>
<?php

if ($row['USER_TYPE'] =='User')
     {
         echo "<a href='user_home.php' style='margin-left: 70%; color: #FFFFFF; text-decoration:none; padding: 10px'>Back</a>";
     }
if ($row['USER_TYPE']=='Admin')
     {
         echo "<a href='home.php' style='margin-left: 70%; color: #FFFFFF; text-decoration:none; padding: 10px'>Back</a>";
     }
?>
    </div>
<form method="post" action="">

    <link rel="stylesheet" type="text/css" href="srstyle.css">
    <br>
    <br>
                            <label for="category" style="margin-left: 50px; font: 12px Calibri; font-weight: bold;">Enter Category</label><label for="location" style="margin-left: 310px; font: 12px Calibri; font-weight: bold;">Location</label><br>
                            <input id="category" name="category" type="text" placeholder="Search for Categories..." style="margin-left: 50px; width: 380px; height: 31px; border: 1px solid #D8D8D8; background: #F5F5F5" value="<?php if($_GET["CATEGORY"] == 0) echo $_POST["category"] ;?>" >
                            <input id="location" name="location" type="text" placeholder="Search by City..." onchange="function()" style="width: 300px; height: 31px; border: 1px solid #D8D8D8; background: #F5F5F5" >
                            <input id="submit" name="submit" type="submit" value="Search" >
                            
                            <input id="longitude" name="longitude" type="text" value="<?php echo $_GET['LONGITUDE'] ; ?>" hidden>
                            <input id="latitude" name="latitude" type="text" value="<?php echo $_GET['LATITUDE'] ; ?>" hidden>

                            
    </form>

    <?php
    include("srconfig.php");
    session_start();
    $cat=$_GET['CATEGORY'];
    $long=$_GET['LONGITUDE'];
    $lati=$_GET['LATITUDE'];
    $category=$_POST['category'];
    $longitude=$_POST['longitude'];
    $latitude=$_POST['latitude'];
    $rows_per_page = 2;
    $sql10 = "SELECT * FROM Users WHERE CATEGORY='$cat' AND LONGITUDE=IF('$long'='',LONGITUDE,'$long') AND LATITUDE=IF('$lati'='',LATITUDE,'$lati') AND USER_TYPE='Artisan' AND STATUS=1 OR CATEGORY='$category' AND LONGITUDE=IF('$longitude'='',LONGITUDE,'$longitude') AND LATITUDE=IF('$latitude'='',LATITUDE,'$latitude') AND USER_TYPE='Artisan' AND STATUS=1";
    $result10 = mysql_query($sql10);
    $total_records = mysql_num_rows($result10);
    $pages = ceil($total_records / $rows_per_page);


    if(!isset($_GET['page'])){
    $_GET['page'] = 0;
}else{
    // Convert the page number to an integer
    $_GET['page'] = (int)$_GET['page'];
}

// If the page number is less than 1, make it 1.
if($_GET['page'] < 1){
    $_GET['page'] = 1;
    // Check that the page is below the last page
}else if($_GET['page'] > $pages){
    $_GET['page'] = $pages;
}
foreach(range(1, $pages) as $page) {
    if($page == 1 || $page == $pages || ($page >= $_GET['page'] - 2 && $page <= $_GET['page'] + 2)){
    
    echo '<a href="?page=' . $page . '&CATEGORY='. $category . '&LONGITUDE='. $longitude . '&LATITUDE='. $latitude . '" style="margin-left: 50px" onclick="changeValue()" >' . $page . '</a>';  
    }
}
 
    

    
    $offset = ($_GET['page']-1)*$rows_per_page;


    $sql1 = "SELECT * FROM Users WHERE CATEGORY='$cat' AND LONGITUDE=IF('$long'='',LONGITUDE,'$long') AND LATITUDE=IF('$lati'='',LATITUDE,'$lati') AND USER_TYPE='Artisan' AND STATUS=1 OR CATEGORY='$category' AND LONGITUDE=IF('$longitude'='',LONGITUDE,'$longitude') AND LATITUDE=IF('$latitude'='',LATITUDE,'$latitude') AND USER_TYPE='Artisan' AND STATUS=1 LIMIT $offset, $rows_per_page";
    $result1 = mysql_query($sql1);




    
    ?>




                            <input id="catego" name="catego" type="text" value="<?php if($_POST['category'] == 0) echo $_POST['catego']  ; ?>" >
                            <input id="longit" name="longit" type="text" value="<?php echo $_POST['longitude'] ; ?>" >
                            <input id="latitu" name="latitu" type="text" value="<?php echo $_POST['latitude'] ; ?>" >

    <?php ;
    $catego=$_POST['catego'];
    $longit=$_POST['$longit'];
    $latitu=$_POST['$latitu'];


    ?>


<?php 

while($row1 = mysql_fetch_array($result1))
{
    ?>
<form method="post" action="">
<link rel="stylesheet" type="text/css" href="srstyle.css">
<br>     
<div class="boxed" style="float: left; display: inline; height: 340px; margin-left: 50px; width: 280px; font: 12px Calibri; background: #FFFFFF">
    
<br>
<div style="margin-left: 50px; border: none; width: 60px;" >

<?php
    Echo "<img src=http://www.smoothrepairs.com/Artisans/".$row1['ARTISAN_PASSPORT']." alt='No Passport/ Logo Uploaded' title='Artisan Passport' height='70px' width='60px' >"
?>

</div>
<br>
<label for "FULL_NAME" style="margin-left: 50px; font: 12px Calibri; font-weight: bold; ">Professional</label>
<br>
<input type="text" name="FULL_NAME" value ="<?php echo $row1['LAST_NAME']; ?>, <?php echo $row1['FIRST_NAME']; ?> <?php echo $row1['MIDDLE_NAME']; ?>" style="margin-left: 50px; border: none; color: #808080" readonly>
<br>
<br>
<label for "CATEGORY" style="margin-left: 50px; font: 12px Calibri; font-weight: bold;">Category</label>
<br>
<input type="text" name="CATEGORY" value ="<?php echo $row1['CATEGORY']; ?>" style="margin-left: 50px; border: none; color: #808080" readonly>
<br>
<br>
<label for "rating" style="margin-left: 50px; font: 12px Calibri; font-weight: bold;">Rating</label>
<br>
<span style="margin-left: 50px" class="score s7" ></span>
<br>
<br>
<a id="cntct" href="request.php?UID=<?php echo $row1['UID']; ?>" >Click Here To Request</a>
<br>
<br>
<label for "CITY" style="margin-left: 50px; font: 12px Calibri; font-weight: bold;">Location</label>
<br>
<input type="text" name="CITY" value ="<?php echo $row1['CITY']; ?>" style="margin-left: 50px; border: none; color: #808080" readonly>
<br>
<br>

<?php   
}
?>
</div>

<?php
mysql_close(); 
?>

</form>
	<?php
		include('footer.php');
		?>
</body>
</html>


