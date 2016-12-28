<?php

include_once 'database_connection.php';
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['btn-GoBack']))
{
header("Location: index.php");

}
if(isset($_POST['btn-add'])){

	
	$NameOnCard = $_POST['NameOnCard'];
	$CardNumber = $_POST['CardNumber'];
	$ExpiryDate = $_POST['ExpiryDate'];
	
	
	$useri = $_SESSION['user_id'];

	    
		
		
		if(mysqli_query($db2, "INSERT INTO hascarddetails(cust_Id,card_no,nameoncard,exp_date) 
	    	VALUES('$useri', '$CardNumber', '$NameOnCard','$ExpiryDate');"))
		 {
	?>
        <script>alert('card details added');</script>
        <?php
		echo "<script>window.location = 'index.php'</script>";
		}
	
	else{
		?>
        <script>alert('enter correct details');</script>
        <?php
	echo "<script>window.location = 'payment.html.php'</script>";
	   }
}
else{
	echo "<script>window.location = 'payment.html.php'</script>";
	
}
?>