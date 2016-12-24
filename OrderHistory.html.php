<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    include('main-header.html.php');
	
?>
         
           <?php

if(!isset($_SESSION['is_auth']))
{
	?>
        <script>alert('Please Login to view order history ');</script>
        <?php
	echo "<script>window.location = 'index.php'</script>";
}

?>	
         <div class="container">
  <div class="jumbotron">
    <h1><b>  Order History</h1></b>
    
</div>
         
         
      <div class="row">
    
   
          <div class="container">
<form method ="POST" >
<table align="left">
					
					<tr>
					<th width='200px' id="Desc"><p><font size=4> Show View</font></p> <br></th>
                    <th width='200px' id="Desc"><p><font size=4> Shoe Brand</font></p> <br></th>
					<th width='200px' id="Desc"><p><font size=4> Order ID</font></p> <br></th>
                    <th width='200px' id="Desc"><p><font size=4> Shoe ID</font></p> <br></th>
					<th width='200px' id="Desc"><p><font size=4> Order Date</font></p> <br></th>
                    <th width='200px' id="Desc"><p><font size=4> Quantity</font></p> <br></th>
					<th width='200px' id="Desc"><p><font size=4> Price</font></p> <br></th>
                    <th width='200px' id="Desc"><p><font size=4> Rating</font></p> <br></th>
                    </tr>
					
                   
<?php

include_once 'Orders.php';

?>
<tr><td><br></td><td><br></td><td><br></td><br><td>
						<!--<a href="index.php"><button type="submit" name="btn-GoBack">Go Back To Home</button>-->
					

				</td>
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
