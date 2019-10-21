<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
 <?php ;
    $categ=$_POST['category'];
    $long=$_POST['longitude'];
    $lati=$_POST['latitude'];
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
<link rel="stylesheet" href="owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT5X67L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <ul class="skip-all">
     <li>
     <a id="skip" alt="skip to main content" href="#main">Skip To Content</a>
     </li>
</ul>
  <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                    
                        <nav class="navbar navbar-expand-lg navbar-light">
                                                       <a class="navbar-brand" href="/"><img src="smoothrepairs_logo.png" class="white" alt="smoothrepairs logo"></a>
                            
                                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                   
                                    <li class="nav-item active">
                                        <a class="nav-link btn-danger top-btn" href="artisan.php">Sign up</a>
                                    </li>
                                     <li class="nav-item active">
                                        <a class="nav-link" href="contact.php">Contact Us</a>
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
                                        <a class="nav-link" href="about.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/blog">Blog</a>
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
    
        <!--// SLIDER -->
    
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
                                <form class="form-wrap mt-4" method="post">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Request an Artisan?" class="btn-group1" disabled>
                                        <select name="service_type" class="btn-group1">
                                                <option class="btn-group1" >AC Repairs</option>
												<option class="btn-group1">Generator Repairs</option>
										</select>
                                       <button type="submit" name="submit" class="btn-form">Request Now!</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    if (isset($_POST['submit']))
    $option = $_POST['service_type'] ;
    if($option == "AC Repairs"){
     
         echo "<script language='javascript' type='text/javascript'> location.href='ac_repairs.php' </script>";
     }
     
     if($option == "Generator Repairs"){
     
         echo "<script language='javascript' type='text/javascript'> location.href='gen_repairs.php' </script>";
     }
        ?>
    </section>

    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FIND PLACES =============================-->
    <div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				 <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Popular Posts on SmoothRepairs Blog</h3>
					</div>
                </div>
            </div>
				
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single course -->
					<?php
     
    include("srconfig.php");
$blogpost=selectquery("select id, post_title, post_name, post_content, post_date FROM wp_posts p, wp_terms t, 
wp_term_relationships r, wp_term_taxonomy tt WHERE p.post_status='publish' AND p.post_type='post' 
AND tt.taxonomy = 'category' AND p.id=r.object_id AND r.term_taxonomy_id=tt.term_taxonomy_id 
AND tt.term_id = t.term_id order by  post_date desc limit 1", "", 
array(), "dbwp.php");
<div id="blogtestimonials_left">
                    	<h3><img src="images/blogicon.png" width="22" height="22" alt="#1 Latest Jobs in Nigeria today - Job Vacancies; Career Advice"/> From Our Blog</h3>
                        <ul>
						<?php  for($i=0; $i<$blogpost['obj']->num_rows; $i++){ ?>
                        	<li>
                            	<h4><a href="http://www.careernaija.com/blog/<?php echo date('Y',strtotime($blogpost['data'][$i]['post_date'])) ?>/<?php echo date('m',strtotime($blogpost['data'][$i]['post_date'])) ?>/<?php echo date('d',strtotime($blogpost['data'][$i]['post_date'])) ?>/<?php echo $blogpost['data'][$i]['post_name']; ?>"><?php echo $blogpost['data'][$i]['post_title']; ?></a></h4>
                                <?php  echo substr(strip_tags($blogpost['data'][$i]['post_content']), 0, 140).'...'; ?>
                            </li>
                        <?php } ?>
                        </ul>
                        <p><a href="/blog" class="searchbutton3">View all Blog Posts</a></p>
                    </div>
    $sql135 = mysql_query("SELECT * FROM Options WHERE CATEGORY='Artisan' && STATUS='1' ORDER BY OPTION_NAME");
while ($row135 = mysql_fetch_array($sql135))
{
   
echo "<div class='col-md-3 col-sm-6 col-xs-6' id='showSome'>
							<div class='course'>
								<a href='".$row135['url']."' class='course-img'>
									<img src='".$row135['image_link']."' alt='".$row135['OPTION_NAME']."'>
									<i class='course-link-icon fa fa-link'></i>
								</a>
								<a class='course-title' href='#'>".$row135['OPTION_NAME']."</a>
							
							</div>
						</div>";



}

?>
						<!-- /single course -->

						

						

						

					</div>
					<!-- /row -->

					<!-- row -->
					

				</div>
				<!-- /courses -->
    
    <!--//END FIND PLACES -->
    <!--============================= FEATURED PLACES =============================-->
   
    <!--============================= CATEGORIES =============================-->
    <div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				 <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Browse Categories</h3>
						<p class="lead">Browse Our Awesome Categories.</p>
                    </div>
                </div>
            </div>
				
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single course -->
					<?php
     
    include("srconfig.php");

    $sql135 = mysql_query("SELECT * FROM Options WHERE CATEGORY='Artisan' && STATUS='1' ORDER BY OPTION_NAME");
while ($row135 = mysql_fetch_array($sql135))
{
   
echo "<div class='col-md-3 col-sm-6 col-xs-6' id='showSome'>
							<div class='course'>
								<a href='".$row135['url']."' class='course-img'>
									<img src='".$row135['image_link']."' alt='".$row135['OPTION_NAME']."'>
									<i class='course-link-icon fa fa-link'></i>
								</a>
								<a class='course-title' href='#'>".$row135['OPTION_NAME']."</a>
							
							</div>
						</div>";



}

?>
						<!-- /single course -->

						

						

						

					</div>
					<!-- /row -->

					<!-- row -->
					

				</div>
				<!-- /courses -->
				<div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-place-wrap">
                        <a href="#" class="btn btn-danger">VIEW ALL CATEGORIES</a>
                    </div>
                </div>
            </div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->	
    <!--============================= ADD LISTING =============================-->
    
    <!--//END CATEGORIES -->
	 <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3 id="main">HOW IT WORKS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        
                            <img src="images/featured1.jpg" class="img-fluid" alt="How smoothrepairs works">
                            <span class="featured-rating-orange">1.0</span>
                            <div class="featured-title-box">
                                <h6>Step 1</h6>
                                <p>Select your preferred service and update your requirements<span>•<br> </span></p>
                                
                                 </div>
                    
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                       
                            <img src="images/featured2.jpg" class="img-fluid" alt="How smoothrepairs works">
                            <span class="featured-rating-green">2.0</span>
                            <div class="featured-title-box">
                                <h6>Step 2</h6>
                                <p>SmoothRepairs artisan inspects your appliance and gives you a quote.<span>• <br></span></p> 
                               
                               
                            </div>
                    
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                      
                            <img src="images/featured3.jpg" class="img-fluid" alt="How smoothrepairs works">
                            <span class="featured-rating">3.0</span>
                            <div class="featured-title-box">
                                <h6>Step 3</h6>
                                <p>SmoothRepairs artisan executes task. You make payment to us and rate artisan accordingly <span>. </span></p>
                                
                                
                            </div>
                     
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-place-wrap">
                        <a href="#GetStarted" class="btn btn-danger">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
<section class="main-block light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Reach millions of people</h2>
                        <p>Add your skill in front of millions and earn 3x profits from our listing</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-place-wrap">
                        <a href="artisan.php" class="btn btn-danger"><span class="ti-plus"></span> Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END ADD LISTING -->
	<!-- Start download Area -->
			<section class="download-area section-gap" id="app">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 download-left">
							<img class="img-fluid" src="images/d1.jpg" alt="Smoothrepairs_artisans_app">
						</div>
						<div class="col-lg-6 download-right">
							<h2>Download the <br>
							SmoothRepairs App Today!</h2>
							<p class="subs">
								The SmoothRepairs app provides an effective and efficient platform for users and professional artisans.
							
							SmoothRepairs houses the database of experienced, responsive and professional artisans and vendors who deliver excellent service, thereby creating peace of mind for its users.
							</p>
							<div class="d-flex flex-row">
								<div class="buttons">
									<i class="fa fa-apple" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Coming Soon!</span> <br>
											
											</p>
										</a>
									</div>
								</div>
								<div class="buttons">
									<i class="fa fa-android" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Coming Soon!</span> <br>
											
											</p>
										</a>
									</div>
								</div>									
							</div>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End download Area -->
			<script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap.bundle.min.js"></script>

		<?php
		include('footer.php');
		?>
</body>
<script src="owl.carousel.min.js"></script>

</html>
