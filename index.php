<?php
include 'header.php';
?>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
<link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="dist/all.css" />
<style>
    section.pricing {
  background: #007bff;
  background: linear-gradient(to right, #ccc, #bdbdbd);
  
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 1.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>



<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT5X67L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <?php
  include 'nav.php';
  ?>
  <div class="agency-hero">
    <section class="container">
      <div class="hero-text">
        <h1 class="customFadeInUp">
         <span data-animate="bounceIn" data-animate-delay="1.8" data-animate-duration="5" data-animate-infinite="true"><b>AC </span><span data-animate="bounceIn" data-animate-delay="1.8" data-animate-duration="5" data-animate-infinite="true"> & Generator</span> Repairs</b> in Nigeria | Professional Artisans
        </h1>
       <p data-animate="pulse" data-animate-delay="0.4" data-animate-duration="2" data-animate-infinite="true">
        Millions of people use this website to request<span > AC and Generator Technicians</span>.
        <br>We don't stop until all our clients are satisfied.
      </p>
        <div class="actions customFadeInUp"  >
          <!--//data-animate="hinge" data-animate-delay="2" data-animate-duration="4" data-animate-infinite="True"-->
        <!--<a href="#" class="btn-pill btn-pill-success btn-pill-lg">-->
        <!--    <i class="ion-earth"></i> Request Now !</a>-->
           <!-- <a class="btn-pill btn-pill-secondary btn-pill-lg" href="/ac_repairs">
      Request AC Repairs <i class="ion-chevron-right"></i>
    </a>-->
    
    <!--<div class="dropdown">
  <button class="btn-pill btn-pill-primary btn-pill-lg dropbtn" onclick="myFunction()">Request For Repair Service
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="/ac_repairs">Request AC Technicians</a>
    <a href="/gen_repairs">Request Generator Technicians</a>
    <a href="/quotes">Request For Other Technicians</a>
  </div>
  </div> -->
  
  <!--<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Request For Repair Service</button>
  <ul class="dropdown-menu">
    <li><a href="/ac_repairs">Request AC Technicians</a></li>
    <li><a href="/gen_repairs">Request Generator Technicians</a></li>
    <li><a href="/quotes">Request For Other Technicians</a></li>
  </ul>
</div>-->

<div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Request For Repair Service</button>
        <div class="dropdown-menu" style="background: none!important;">
            <a href="/ac_repairs" class="dropdown-item">Request AC Technicians</a>&nbsp;&nbsp;
            <a href="/gen_repairs" class="dropdown-item">Request Generator Technicians</a>&nbsp;&nbsp;
            <!--<div class="dropdown-divider"></div>-->
            <a href="/quotes" class="dropdown-item">Request For Other Technicians</a>
        </div>
    </div>
  
     <!--<a class="btn-pill btn-pill-secondary btn-pill-lg" data-toggle="modal" data-target="#serviceModal">
      Request For Repair Service <i class="ion-chevron-right"></i>
    </a>
    <a href="#subscription" class="btn-pill btn-pill-primary btn-pill-lg" > 
      Subscription Plans <i class="ion-chevron-right"></i>
    </a>
    <a href="/quotes" class="btn-pill btn-pill-primary btn-pill-lg" style=" background: #fff900bd; border: 1px solid #304199; margin-bottom: .7rem; margin-top: .7rem;">
      Request For Artisans <i class="ion-chevron-right"></i>
    </a>-->
      </div>
      </div>
    </section>
  </div>

 

  <div class="spacial-features" data-scroll>
    <section class="container">
      <div class="row">
        <div class="col-12">
          <div class="header">
            <h2>Hire Reliable & Professional Artisans in Nigeria</h2>
            <p>
              SmoothRepairs is a technology company with 24+ years of collective management experience in Nigeria. We integrate leading edge technology to offer professional and domestic onsite services to customers on demand across Nigeria. 
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="feature">
            <img src="images/icons/pms.png">
            <h3>
              Preventive Maintenance Software
            </h3>
            <p>
              Get access to your equipment in real-time while they are situated at various locations through our custom software solution. 
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature">
            <img src="images/icons/speed.png">
            <h3>
              Convenience and Speed
            </h3>
            <p>
              No matter where you are, our licensed professional artisans will get in touch with you. We ensure a low turnaround time in excellent service delivery.
            </p>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="feature">
            <img src="images/icons/verified.png">
            <h3>
              Verified Workers 
            </h3>
            <p>
              All our artisans are verified and certified. Hire our tested and trusted professional artisans. 
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature">
            <img src="images/icons/money-bag.png">
            <h3>
              No Hidden Fees
            </h3>
            <p>
              There are no extra or hidden fees. It’s completely free to book any service.
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="spacial-features" data-scroll>
<div class="agency-portfolio-hero">
    <section class="container">
      <h1>
        Some Of Our Services
      </h1>
      <p>
        Access a wide array of well trained professionals and experts who are skilful and well-behaved.
    </section>
  
  <div class="blog-cols-wrapper">
    <div class="container">
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/ac.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              AC Repairs
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/gen.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Generator Repairs
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/Cleaner.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Cleaning
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/Plumbers.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Plumbing
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/Carpenters.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Carpentry
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/Tiler.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Tiling
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/Welder.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Welding
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/painter.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Painting
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="post">
        <div class="post-wrapper">
          <div class="post-bg" style="background-image: url('images/unsplash/Mechanic.jpg');">
          </div>
          <div class="post-intro">
            <div class="post-title">
              Automobile Repairs & Services
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="index-features" data-scroll>
    <div class="container">
      <header>
        <h3>Increase Your Income And Gain Professional Relevance</h3>
        <p>
          Register as an artisan on SmoothRepairs and get connected to a job.
        </p>
      </header>
      <section class="features">
        <div class="row">
          <div class="col-md-6 feature">
            <img src="images/icons/skills.png" class="icon" />
            <section>
              <h4>
                Market your skills at no cost
              </h4>
              <p>
                With SmoothRepairs, you get to market your skill set at no cost to our clients. You do not have to pay to feature on SmoothRepairs
              </p>
            </section>
          </div>
          <div class="col-md-6 feature">
            <img src="images/icons/Pro.png" class="icon" />
            <section>
              <h4>
                 Development of more professional relevance
              </h4>
              <p>
                SmoothRepairs gives you the opportunity to boost your professional relevance. You have access to numerous opportunities.
              </p>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 feature">
            <img src="images/icons/working.png" class="icon" />
            <section>
              <h4>
                Enjoy flexible work schedule
              </h4>
              <p>
                We understand the value of work-life balance. SmoothRepairs allows you to work based on your availability.
              </p>
            </section>
          </div>
          <div class="col-md-6 feature">
            <img src="images/icons/money.png" class="icon" />
            <section>
              <h4>
            Increase your income
              </h4>
              <p>
               SmoothRepairs gives you access to work for high net-worth customers. Beside, you make more money and build your portfolio.
              </p>
            </section>
          </div>
        </div>
      </section>
    </div>
  </div>
    <div class="agency-portfolio-hero">
    <section class="container">
      <h1 id="animate-on-focus" data-animate="zoomInDown" data-animate-delay="0.4" data-animate-duration="3">
        How SmoothRepairs Works 
      </h1>
      <p>
        Save time; get quality delivered fast at your convenience. 
      </p>
    </section>
  </div>
  <div class="agency-portfolio-gallery">
    <div class="container no-override">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-4">
          <a href="agency-project.html" class="project">
            <span class="mask">
              <span class="info">
                <h3>Step 1</h3>
                <p>
                 Select your preferred service and update your requirements 
                </p>
              </span>
              <span class="btn-see-project">
                See More
              </span>
            </span>
            <span style="background-image:url('images/unsplash/photo-1478059425650-ca13d6d422f4.jpg');" class="pic">
            </span>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="agency-project.html" class="project">
            <span class="mask">
              <span class="info">
                <h3>Step 2</h3>
                <p>
                  SmoothRepairs artisan inspects your appliance and gives you a quote.
                </p>
              </span>
              <span class="btn-see-project">
                Learn More
              </span>
            </span>
            <span style="background-image:url('images/project/shot-3.jpg');" class="pic">
            </span>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="agency-project.html" class="project">
            <span class="mask">
              <span class="info">
                <h3>Step 3</h3>
                <p>
                 SmoothRepairs artisan executes task. You make payment to us and rate artisan accordingly
                </p>
              </span>
            </span>
            <span style="background-image:url('images/unsplash/photo-1467659226669-a1360d97be2d.jpg');" class="pic">
            </span>
          </a>
        </div>
        </div>
        </div>
        </div>
  <div class="index-devices" data-scroll>
    <section class="clearfix">
      <img src="images/devices/devices-4.png" class="devices" />

      <h4>Coming Soon: The SmoothRepairs App!</h4>
      <p>The SmoothRepairs app provides an effective and efficient platform for users and professional artisans.</p>
      <p>
       SmoothRepairs houses the database of experienced, responsive and professional artisans and vendors who deliver excellent service, thereby creating peace of mind for its users. 
      </p>
      <p>Coming Soon!</p>
      <div class="icons">
        <i class="ion-monitor"></i>
        <i class="ion-ipad"></i>
        <i class="ion-iphone"></i>
      </div>
    </section>
  </div>
  
  <section class="pricing py-5" style="padding:5px !important" id="subscription">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
            <div class="card-head" style="flex: 1 1 auto;background-image: url(images/bronze.jpg);border-radius: 1rem 1rem 0 0;">
                <h3 class="card-title text-muted text-uppercase text-center" style="color: rgba(0,0,0,.9)!important;">Bronze</h3>
            <h6 class="card-price text-center">N50,000<span class="period"></span></h6>
            <hr style="margin: 5px;">
            </div>
          <div class="card-body">
            <ul class="fa-ul">
            <li style="font-size: larger;margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-check"></i></span><strong>25 Call-Outs</strong></li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Plumbing Services</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>AC Repair</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Electrical Repairs</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Generator Repairs</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Carpentry Repair Work</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Painting Service</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Computer Engineer</li>
            </ul>
            <a href="subscribe.php?subscribe=Bronze" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
            <div class="card-head" style="flex: 1 1 auto;background-image: url(images/silver.jpg);border-radius: 1rem 1rem 0 0;">
                <h5 class="card-title text-muted text-uppercase text-center" style="color: rgba(0,0,0,.9)!important;">Silver</h5>
            <h6 class="card-price text-center">N100,000<span class="period"></span></h6>
            <hr style="margin: 5px;">
            </div>
          <div class="card-body">
            
            <ul class="fa-ul">
              <li style="font-size: larger;margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-check"></i></span><strong>50 Call-Outs</strong></li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Plumbing Services</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>AC Repair</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Electrical Repairs</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Generator Repairs</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Carpentry Repair Work</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Painting Service</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Computer Engineer</li>
            </ul>
            <a href="subscribe_silver.php?subscribe=Silver" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
            <div class="card-head" style="flex: 1 1 auto;background-image: url(images/gold.jpg);border-radius: 1rem 1rem 0 0;">
               <h5 class="card-title text-muted text-uppercase text-center" style="color: rgba(0,0,0,.9)!important;">Gold</h5>
            <h6 class="card-price text-center">N200,000<span class="period"></span></h6>
            <hr style="margin: 5px;">
            </div>
          <div class="card-body">
            <ul class="fa-ul">
              <li style="font-size: larger;margin-bottom: 0rem;"><span class="fa-li"><i class="fas fa-check"></i></span><strong>100 Call-Outs</strong></li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Plumbing Services</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>AC Repair</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Electrical Repairs</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Generator Repairs</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Carpentry Repair Work</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Painting Service</li>
              <li style="margin-bottom: 0rem;!important"><span class="fa-li"><i class="fas fa-wrench"></i></span>Computer Engineer</li>
            </ul>
            <a href="subscribe_gold.php?subscribe=Gold" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--<div class="business-single-client" data-scroll>-->
  <!--  <div class="quote-wrapper">-->
  <!--    <img src="images/customers/logo-customer-7-w.png" class="logo">-->
  <!--    <p>-->
  <!--      "Focus on creating and growing your projects and websites, and we‘ll take care of spinning up new designs for your users and making sure they’re great. Work with all types of customers right out of the box while still getting great results in your environment."-->
  <!--    </p>-->
  <!--    <div class="author">-->
  <!--      Ayodele Osho, Product Manager-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->

  <!--<div class="index-clients">-->
  <!--  <div class="container">-->
  <!--    <header>-->
  <!--      <h4>Used and trusted by</h4>-->
  <!--    </header>-->
  <!--    <div class="row justify-content-center">-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/google.jpg">-->
  <!--      </div>-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/dropbox.jpg">-->
  <!--      </div>-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/fb.jpg">-->
  <!--      </div>-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/twitter.jpg">-->
  <!--      </div>-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/instagram.jpg">-->
  <!--      </div>-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/apple.jpg">-->
  <!--      </div>-->
  <!--      <div class="col-12 col-md-4 col-lg">-->
  <!--        <img class="img-fluid mb-4" src="images/logos/stripe.jpg">-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
<?php
include 'footer.php';
?>