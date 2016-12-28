<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    include('main-header.html.php');
	
?>
		<div class="container" width = "300">
		 <div class="about">
  <div class="jumbotron">
			 <h1><b> Add Payment Details</h1></b>
			
		</div>
		
		</div>
		<img src="https://rectified.net/images/payment-option/credit-cards.png" alt="Card Image" height="200" width="400" blur(2px) >
		
		
		<br>
		
		
			<br><br>
					<form action="payment.php" method="POST">
				<input type="text" placeholder="Name on Card" name="NameOnCard" width ="200" required > 
				<input type="text" placeholder="Enter Card Number" name="CardNumber" width ="200" required >
				<input type="text" placeholder="Expiry Date YYYY-MM-DD" name="ExpiryDate"  required >
				<br> <br> <br>
						<button class="btn btn-danger btn-block btn-sm" type="submit"  name="btn-add">ADD</button>
						<button  class="btn btn-danger btn-block btn-sm" type="submit" width ="100" name="btn-cancel">Clear</button>
				
						
						
				
				</form>
			
		
		
		</div>
		 <?php
	 include_once 'footer.php';
	 ?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</div>
</body>
</html>
