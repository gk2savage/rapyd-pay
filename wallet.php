<?php
// Initialize the session
session_start();

include "login_backend.php";

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
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
<body style="background-color: black;">

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


<nav class="navbar">
    <a class="navbar-brand" href="wallet.php" style="color: white">RAPYD-PAY</a>
    <span style="float:right">
    <a href="logout.php"><button type="button" class="btn btn-danger" style="margin: 8px;">Logout</button></a> 
    </span>
</nav>

<!-- <nav class="navbar navbar-dark fixed-top navbar-expand-lg " style="background-color: white;">
    <a class="navbar-brand" href="index.html" style="color: black">RAPYD-PAY</a>
    <span style="float:right">
    <a href="logout.php"><button type="button" class="btn btn-danger" style="margin: 8px;">Logout</button></a> 
    </span>
</nav> -->

<style>
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

.container1 {
    position: absolute;
    top: 90%;
    left: 90%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}


.zoom {
  padding: 10px;
  transition: transform .2s; /* Animation */
  width: 250px;
  height: 250px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.jumbotron {
  background-color: #eaeded;
  transform: scale(0.8);
}

.my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}


@media (max-width: 600px) {
    .mobileimg {
    transform: scale(0.8);
}
    .zoom:hover {
    transform: scale(0.9); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
    .container1 {
    position: absolute;
    left: 80%;
    bottom: 5%;

}
    .container {
    position: absolute;
    top: 20%;
    left: 0%;
    -moz-transform: translateX(-0%) translateY(-0%);
    -webkit-transform: translateX(-0%) translateY(-0%);
    transform: translateX(-0%) translateY(-0%);
    }
    

}

</style>


<div class="container">
<center>
<a href="#" data-toggle="modal" data-target="#modal1" class="smoothScroll wow fadeInUp" data-wow-delay="1.0s"><img src="images/send.png" class="zoom mobileimg"></a>

<a href="#" data-toggle="modal" data-target="#modal4" class="smoothScroll wow fadeInUp" data-wow-delay="1.0s"><img src="images/recieve.png" class="zoom mobileimg"></a>    
</center>
</div>


<div class="container1">
<a href="#" data-toggle="modal" data-target="#modal3" class="" data-wow-delay="1.0s"><h2>Wallet Details</h2></a>
</div>



<!-- modal -->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
      <div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-8">
        <div class="jumbotron ">
            <div class="offset-1 col-10">

<form action="payment_backend.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
                 <?php } ?>


    <h1 class="display-5"><em><strong>Add Money via Card</strong></em></h1>
    <p class="lead">Add credits to your Rapyd Wallet</p>

    <label for="fname">Accepted Cards</label>
    <div style=" margin-bottom: 10px; padding: 7px 0; font-size: 28px;">
      <i class="fa fa-cc-visa" style="color:navy;"></i>
      <i class="fa fa-cc-amex" style="color:blue;"></i>
      <i class="fa fa-cc-mastercard" style="color:red;"></i>
      <i class="fa fa-cc-discover" style="color:orange;"></i>
    </div>
    
    <label for="cname">Amount</label>
    <input type="text" id="amt" name="amt" class="form-control"  placeholder="100" >
    <label for="cname">Name on Card</label>
    <input type="text" id="cname" name="cname" class="form-control"  placeholder="John More Doe" >
    <label for="ccnum">Credit card number</label>
    <input type="text" id="ccnum" name="ccnum" class="form-control"  placeholder="1111-2222-3333-4444">
    <br>
    <label for="expmonth">Exp Month</label>
    <input type="text" id="expmonth" name="expmonth" class="form-control"  placeholder="12">
    <label for="expyear">Exp Year</label>
    <input type="text" id="expyear" name="expyear" class="form-control"  placeholder="24">
    <label for="cvv">CVV</label>
    <input type="text" id="cvv" name="cvv" class="form-control"  placeholder="352">
    <input name="ewallet" type="text" id="ewallet" value="<?php echo $object["data"]["id"]; ?>" hidden> 


<br>

<input type="submit" value="Add Money" class="btn btn-success">
</form>
            
            </div>
        </div>
    </div>
</div>
</div>


</div>



<!-- modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
      <div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-8">
        <div class="jumbotron ">
            <div class="offset-1 col-10">
                <h1 class="display-5"><em><strong>Send Money</strong></em></h1>
                <p class="lead">Send credits to a intended user via Rapyd Wallet</p>

                <form action="sendmoney_backend.php" method="post">
                   <?php if (isset($_GET['error'])) { ?>
                     <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="form-group ">
                        <label for="destination">Send To</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter E-wallet ID">

                    </div>
                    <div class="form-group">
                        <label for="sendamount">Amount</label>
                        <input type="number" class="form-control" id="sendamount" name="sendamount"
                            placeholder="Enter Amount">

                    </div>
                    <input name="source" type="text" id="source" value="<?php echo $object["data"]["id"]; ?>" hidden>
                    <div class="form-group">
                        <button id="sendMoneyButton" type="submit" name="sendMoneyButton"
                            class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


</div>





<!-- modal -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


<?php if ($row["ewallet_id"] != ""){ ?>

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8">
            <div class="jumbotron">
                <div class="offset-1 col-10">
                    <h1 class="display-5"><em><strong>Wallet Details</strong></em></h1>
                    <p class="lead">Full Name     : <?php echo $object["data"]["first_name"]." ".$object["data"]["last_name"];  ?></p>
                    <p class="lead">Email Address : <?php echo $object["data"]["email"]; ?></p>
                    <p class="lead">Wallet ID     : <?php echo $object["data"]["id"]; ?></p>
                    <p class="lead">Reference ID     : <?php echo $object["data"]["ewallet_reference_id"]; ?></p>
                    <p class="lead">Phone Number     : <?php echo $object["data"]["phone_number"]; ?></p>
                    <h1 class="lead">Balance :  <?php echo isset($object["data"]["accounts"][0]["balance"]) ? $object["data"]["accounts"][0]["balance"]." ".$object["data"]["accounts"][0]["currency"] : "0"; ?></h1>
                   

                    


                    <div class="row justify-content-center mt-5">
                        <div class="col-8" >
                            <h1 class="display-5"><strong>Transaction History</strong></h1>
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-bordered table-hover mt-4" >
                            <caption>These are the last transactions that you have made in the past.</caption>
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Trans_Id</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php include "transaction_table.php"; ?>
                                   
                                </tbody>

                            </table>
                            </div>



                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php }  else{ ?>



<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8">
            <div class="jumbotron">
                <div class="offset-1 col-10">
                    <h1 class="display-5"><em><strong>Make your Wallet</strong></em></h1>


                <form action="signup_backend.php" method="post">
                 <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
                 <?php } ?>
                    First Name <input name="fname" type="text" class="form-control" id="fname" placeholder="First Name">
		            Last Name <input name="lname" type="text" class="form-control" id="lname" placeholder="Last Name">
                    Phone Number <input name="phone" type="text" class="form-control" id="phone" placeholder="+91<Number>">
                    Country <input name="country" type="text" class="form-control" id="country" placeholder="Country Code i.e. IN">
                    Reference ID <input name="refid" type="text" class="form-control" id="refid" placeholder="Reference ID">
                    <input name="email" type="text" id="email" value="<?php echo $_SESSION['email_id']; ?>" hidden> 
                    <input name="submit" type="submit" class="form-control" id="submit" value="Submit">
                            

                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php } ?>



</div>




<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- <script src="js/preloader.js"></script> -->
<script src="js/custom.js"></script>
</body>
</html>