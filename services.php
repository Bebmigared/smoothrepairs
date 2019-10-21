<html>
    <head>
        <title>  </title>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" rel="stylesheet" />
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />-->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="dist/theme.min.css" />
    </head>
<style>
    section.pricing {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
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
<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
            <div class="card-head" style="flex: 1 1 auto;
    padding: 1.25rem 1.25rem 0 1.25rem;background-image: url(images/bronze.jpg);border-radius: 1rem 1rem 0 0;">
                <h3 class="card-title text-muted text-uppercase text-center" style="color: rgba(0,0,0,.9)!important;">Bronze</h3>
            <h6 class="card-price text-center">N50,000<span class="period"></span></h6>
            <hr>
            </div>
          <div class="card-body">
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>25 Call-Outs</strong></li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Plumbing Services</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>AC Repair</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Electrical Repairs</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Generator Repairs</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Washing Machine Repairs</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Carpentry Repair Work</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Refrigerator Repairs</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
            <div class="card-head" style="flex: 1 1 auto;
    padding: 1.25rem 1.25rem 0 1.25rem;background-image: url(images/silver.jpg);border-radius: 1rem 1rem 0 0;">
                <h5 class="card-title text-muted text-uppercase text-center" style="color: rgba(0,0,0,.9)!important;">Silver</h5>
            <h6 class="card-price text-center">N100,000<span class="period"></span></h6>
            <hr>
            </div>
          <div class="card-body">
            
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>50 Call-Outs</strong></li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Plumbing Services</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>AC Repair</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Electrical Repairs</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Generator Repairs</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Carpentry Repair Work</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Refrigerator Repairs</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Washing Machine Repairs</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
            <div class="card-head" style="flex: 1 1 auto;
    padding: 1.25rem 1.25rem 0 1.25rem;background-image: url(images/gold.jpg);border-radius: 1rem 1rem 0 0;">
               <h5 class="card-title text-muted text-uppercase text-center" style="color: rgba(0,0,0,.9)!important;">Gold</h5>
            <h6 class="card-price text-center">N200,000<span class="period"></span></h6>
            <hr>
            </div>
          <div class="card-body">
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>100 Call-Outs</strong></li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Plumbing Services</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>AC Repair</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Electrical Repairs</li>
              <li><span class="fa-li"><i class="fas fa-wrench"></i></span>Generator Repairs</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Carpentry Repair Work</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Refrigerator Repairs</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Washing Machine Repairs</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Subscribe</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>