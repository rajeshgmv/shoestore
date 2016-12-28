<?php
error_reporting(E_ERROR | E_PARSE);
    include('main-header.html.php');
	include_once 'insertorders.php';
?>
         
         
         <div class="container">
  <div class="jumbotron">
    <h1><b>  Your Cart</h1></b>
    
</div>
         
         
      <div class="row">
    
   
          <div class="container">
<form method ="POST" >
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

include_once 'ShoppingCart.php';

?>
<tr>
				</tr>
				</table>
				</form>
          
          
  
      
         
          
      
                      </div>
    </div>

              </div>
             </div></div>
       
          </div>
 
</div>   
         </div>     
               
         <?php
	 include_once 'footer.php';
	 ?>
    
</body>
</html>
