<?php

error_reporting(0);
ini_set('display_errors', 0);
 session_start();
include_once 'database_connection.php';


?>

 <!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>ShoeStop!</title>
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/app.css" rel="stylesheet">
            <link href="css/bcss.css" rel="stylesheet">
            <link href="css/gendercss.css" rel="stylesheet">
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
        </head>

        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {

                margin: auto;

            }
        </style>

        <body>
		
		<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Shoe Stop!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="ShoppingCart.html.php">Cart</a></li>
                <li><a href="OrderHistory.html.php">Order History</a></li>
                <li><a href="trending.php">Trending</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
			<li><p class="navbar-text"><?php
if(isset($_SESSION['is_auth']))
{
include_once 'findvip.php'; } ?></p></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown"><b>
					<?php if(isset($_SESSION['is_auth']))
					{ echo $_SESSION['first_name'].' '.$_SESSION['last_name']; 
																		echo '							</b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="edit-profile.html.php">Edit Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>';} ?>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
         <div class="container">
		 <div class="about">
         <h1>CONTACT US</h1>
		 
          <p>
             <br>
              <a href='index.php' role='button' class='btn btn-danger btn-sm'>Return To Home</a>
             <br><br>Connect with us!<br>
We'd love to hear how you're enjoying your experience, so don't be shy! Write, ring, follow, or connect with us for ShoeBuying assistance, questions, comments, style inspiration, fit tips, or simply to share your #shoelove.<br>
             <br>


CUSTOMER SERVICE
<br>
ShoeStop's website is always open – with 24/7 online ordering – and you can always email us anytime. Prefer to speak to a customer service member? Just give us a call.
<br>
Phone Hours:
<br>
Monday – Friday, 8:00 AM – Midnight, Eastern Time <br>
Saturday &amp; Sunday, 8:00 AM – 11:00 PM, Eastern Time<br>
U.S. Toll-Free Calls: 1-888-200-8414<br>
<br>
International Calls: +1 980-777-5671<br>
<br>
Email: service@shoestop.com</p>
			</div>
             
               
     </div>
	 <?php
	 include_once 'footer.php';
	 ?>
        
    </body>
</html>
