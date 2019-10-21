<?php
session_start();
?>
<style>
   /*.quotes a:hover{
        
        background-color:#fff;
        font-size:16px;
    }*/
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" role="navigation">
    <div class="container no-override">
      <a class="navbar-brand" href="/">
          
        <img class="navbar-brand" src="https://www.smoothrepairs.com/smoothrepairs_logo.png" alt="SmoothRepairs" class="d-none d-lg-inline mr-2 w-25" />
        
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">
        <ul class="navbar-nav">
          
          <li class="nav-item dropdown">
            <a href="artisan.php" class="nav-link nav-link--rounded btn-pill-success">
              Register As An Artisan
            </a>
          </li>
          
          <li class="nav-item dropdown">
            <a href="about-us.php" class="nav-link">
              About Us
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link">
              Pricing
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="https://www.smoothrepairs.com/blog" class="nav-link">
              Blog
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="contact-us.php" class="nav-link">
              Contact Us
            </a>
          </li>
          <!--<li class="nav-item dropdown">
            <a href="#" class="nav-link nav-link--rounded btn-pill-success"  data-toggle="modal" data-target="#modalLoginForm" data-backdrop="false">
              Sign In
            </a>
          </li>-->
          
          <?php if(isset($_SESSION['user']) && count($_SESSION['user']) > 0) {?>
          <li class="nav-item dropdown">
              <div class="btn-group">
								<a href="profile/index.php" data-toggle="dropdown" class="nav-link nav-link--rounded btn-pill-success dropdown-toggle">
									<span >Welcome! <?=$_SESSION['user']['firstname']?> <i class="fa fa-angle-down"></i></span>
								</a>
							</li>
							<div class="dropdown-menu" style="background: none!important;">
				            <a href="profile/index.php" class="dropdown-item">My Profile</a>&nbsp;&nbsp;
                            <a href="profile/logout.php" class="dropdown-item">Logout</a>
            <!--<div class="dropdown-divider"></div>-->
				</div>
				</div>
						<?php }else { ?>
									<!--<a href="signing/index.php" class="buy-ticket">LOGIN/SIGN UP </a>-->
									
									<li class="nav-item dropdown">
            <a href="profile/login.php" class="nav-link nav-link--rounded btn-pill-success" data-backdrop="false">
              Sign In
            </a>
          </li>
          <!--<li class="nav-item dropdown"><a class="nav-link nav-link--rounded btn-pill-success dropdown-toggle" href="profile/login.php" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				<div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;min-width: 18rem !important; left: -70px !important;">
				<form class="form-horizontal" action=""  method="POST" >
				  <input id="email" class="form-control login" type="text" name="email" placeholder="Username.." />
				  <input id="password" class="form-control login" type="password" name="password" placeholder="Password.."/>
				  <input class="btn btn-primary" type="submit" name="signin" value="login" />
				</form>
				</div>
			</li>-->
						<?php } ?>
          
          <!--<li class="nav-item dropdown quotes">
            <a href="https://www.smoothrepairs.com/quotes.php" class="nav-link nav-link--rounded" style ="">
              Request for an Artisan
            </a>
          </li>-->
          <!--<li class="nav-item dropdown dropdown-extend">-->
          <!--  <a href="https://www.smoothrepairs.com/blog" class="nav-link dropdown-toggle" data-toggle="dropdown">-->
          <!--    Blog-->
          <!--  </a>-->
          <!-- </li>-->
          <!--    <li class="nav-item">-->
          <!--  <a class="nav-link nav-link--rounded" href="docs/intro.html">Request for Artisans</a>-->
          <!--</li>-->
        </ul>
        
<!--Modal Starts-->        
<!--Modal Starts-->        
<!--Modal Starts-->  
<!--
        <div class="modal" id="modalLoginForm" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="" method="POST">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>&nbsp;<label>Your email</label>
          <input type="email" id="email" name="email" placeholder="Eg. mymail@host.com" class="form-control validate">
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>&nbsp;<label>Your password</label>
          <input type="password" id="password" placeholder="*********" name="password" class="form-control validate">
          </div>
          
        </form>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" type="submit" name="signin">Login</button>
      </div>
      
    </div>
  </div>
</div>-->


<!--Modal Ends-->
<!--Modal Ends-->
<!--Modal Ends-->

      </div>
    </div>
  </nav>