<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    include('main-header.html.php');
	include_once 'insertorders.php';
?>
         
         
         <div class="container">
  <div class="jumbotron">
    <h1><b>  Order Placed</h1></b>
    <h2><b> <a href="index.php" class="btn btn-danger btn-sm" role="button">Continue Shopping</a> </b></h2>
</div>
         
         
   <table align="center">
				<tr>
				
                    <td width=300px align='Center' id="Order_ID">Shoe</td>

                    <td width=300px align='Center' id="Order_ID">ShoeName</td>

                    <td width=300px align='Center' id="Order_ID">Price</td>

					<td width=300px align='Center' id="Price">Discount</td>

                    <td width=300px align='Center' id="Rating">Cost after Discount</td>

                    <td width=300px align='Center' id="Shoe_ID">Shoe Size</td>

                    <td width=300px align='Center' id="Order_date">Shoe Color</td>

                    <td width=300px align='Center' id="Quantity">Quantity</td>
                   
                    </tr>
				
				

<?php

include_once 'temporder.php';

?>
<tr>
				</tr>
				</table>


              </div>
               
               
         <?php
	 include_once 'footer.php';
	 ?>
    
</body>
</html>
