<?php 

#include("includes/config.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>RAPYD-PAY</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">

  	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
       <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
    
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp" data-wow-delay="0.4s">Hello, we are RAPYD-PAY</h1>
          			<h3 class="wow fadeInUp" data-wow-delay="0.6s">Register and have your own <strong>PAYMENT WALLET</strong> for international transactions through payment and crypto exchanges</h3>
          	
              <a href="#" data-toggle="modal" data-target="#modal2" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Log in</a>
        			<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Sign Up</a>
              
        </div>
			</div>

		</div>
	</div>		
</section>

<!-- about section 
<section id="about">
	<div class="container">
		<div class="row">

      <div class="col-md-6 col-sm-12">
        <img src="images/about-img.png" class="img-responsive wow fadeInUp" alt="About">
      </div>

			<div class="col-md-6 col-sm-12">
				<div class="about-thumb">
					<div class="section-title">

						<h1 class="wow fadeIn" data-wow-delay="0.2s">RAPYD PAY</h1>
            <h3 class="wow fadeInUp" data-wow-delay="0.4s">Idea behind it</h3>
					</div>
					<div class="wow fadeInUp" data-wow-delay="0.6s">
						<p>To provide secure wallet maintained by RAPYD API to send transactions</p>
						<p>RAPYD - The Fastest Way to Start Accepting and Sending Payments Worldwide</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section> -->

<!-- footer section 
<footer>
	<div class="container">
		<div class="row">

      <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <h2>RAPYD-PAY</h2>
          <div class="wow fadeInUp" data-wow-delay="0.3s">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut. Etiam a tellus magna.</p>
             <p class="copyright-text">Copyright &copy; 2016 Your Company <br>
             Designed by Girish</p>
          </div>
      </div>

      <div class="col-md-1 col-sm-1"></div>

      <div class="col-md-4 col-sm-5">
        <h2>Our Studio</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          120-240 aliquam augue libero,<br>
          Convallis in vulputate 10220 <br>
          San Francisco, CA, USA
        </p>
        <ul class="social-icon">
          <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
          <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="1.4s"></a></li>
          <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="1.6s"></a></li>
        </ul>
      </div>

		</div>
	</div>
</footer> -->




<!-- modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Powered by RAPYD</h2>
        </div>
        <form action="includes/db_signup.php" method="post">
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <input name="username" type="email" class="form-control" id="email" placeholder="Email Address" required>
		      <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
          <input name="submit" type="submit" class="form-control" id="submit" value="Register">
        </form>
        <p>Register your Payment Wallet</p>
      </div>
  </div>
</div>


<!-- modal -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Powered by RAPYD</h2>
        </div>
        <form action="includes/db_verify.php" method="post">
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <input name="uname" type="email" class="form-control" id="email" placeholder="Email Address" required>
          <!-- input name="email" type="text" class="form-control" id="email" placeholder="Email Address" -->
		      <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
          <input name="submit" type="submit" class="form-control" id="submit" value="Login">
        </form>
        <p>Access your Payment Wallet!</p>
      </div>
  </div>
</div>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>