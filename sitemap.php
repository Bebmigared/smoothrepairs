<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
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

<body>
    <?php ;
    $categ=$_POST['category'];
    $long=$_POST['longitude'];
    $lati=$_POST['latitude'];
    ?>
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
                                        <a class="nav-link" href="#id01" onclick="document.getElementById('id01').style.display='block'">Login</a>
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
                                        <a class="nav-link" href="contact.php">Contact Us</a>
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
    
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>An Excellent Platfom to Experience First-Class Task Completion</h1>
                                    <h5>We don't stop until all our clients are satisfied</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4" method="post" name="" action="search.php?CATEGORY=<?php echo $categ; ?>&LONGITUDE=<?php echo $long; ?>&LATITUDE=<?php echo $lati; ?>">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Hire a Pro?" class="btn-group1">
                                        <input id="location" name="location" type="text" placeholder="Search by City..." onchange="function()"type="text" class="btn-group2">
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                 <input id="longitude" name="longitude" type="text" hidden>
                                 <input id="latitude" name="latitude" type="text" hidden>
                                <div class="slider-link">
                                    <a href="#lead">Browse Popular</a><span>or</span> <a href="#lead">Recently Added</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FIND PLACES =============================-->
    
    <!--//END FIND PLACES -->
    <!--============================= FEATURED PLACES =============================-->
   
    <!--============================= CATEGORIES =============================-->
    	<div id="courses" class="section">

			<!-- container -->
			<div class="container" id=lead>

				<!-- row -->
				
				 <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>SmoothRepairs Sitemap</h3>
					</div>
                </div>
            </div>
				
				<!-- /row -->

				<!-- courses -->
			

					<!-- row -->
					<div class="row">
<div class="section">
	<p><a href="https://www.smoothrepairs.com/">Home Page</a></p>
		<div><a href="https://www.smoothrepairs.com/artisan.php">Sign Up</a></div>

		<div><a href="https://www.smoothrepairs.com/contact.php">Contact Us</a></div>

		<div><a href="https://www.smoothrepairs.com/forgot_pw.php">Recover Password</a></div>

		<div><a href="https://www.smoothrepairs.com/index.php">Home</a></div></div>
		<div><a href="https://www.smoothrepairs.com/about.php">About Us</a></div></div>
		<div><a href="https://www.smoothrepairs.com/faq.php">FAQ</a></div></div>
		<div><a href="https://www.smoothrepairs.com/blog">Blog</a></div></div>
				<div><a href="https://www.smoothrepairs.com/user-policy.php">User Protection Policy</a></div></div>
				<div><a href="https://www.smoothrepairs.com/terms-conditions.php">Terms & Conditions</a></div></div>
						</div>
<br>
						
						

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
    <!--============================= ADD LISTING =============================-->
    
    <!--//END CATEGORIES -->
	 
    
	
			
		<?php
		include('footer.php');
		?>
</body>

</html>
