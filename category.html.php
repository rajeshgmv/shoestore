<?php
    include('main-header.html.php');
?>
         
         
         <div class="container">
  <div class="jumbotron">
    <h1><b><?php echo  $_GET['category']; ?></h1></b>
    
</div>
         
         
      <div class="row">
    
   
          <div class="container">


          <?php
          
         $category = $_GET['category'];	

$unisex = 'none';
if(($category=='MEN')||($category=='WOMEN')||($category=='KIDS'))
{
	
if(($category=='MEN')||($category=='WOMEN'))
{
	$unisex='UNISEX';
}
 
              $query = "SELECT * FROM shoes,shoe_gender where shoes.shoe_id = shoe_gender.shoe_id and (gender_id like '$category'  or gender_id like '$unisex')";

        $results = mysqli_query($db2,$query);
                    echo "<div class='row'>";
          while ($shoe = $results->fetch_assoc()){
             
              $shoeid = $shoe['shoe_Id'];
			  $rate = 0;
					$query2 = "SELECT avg(Review) rate FROM `alsohasorderhistory` where shoe_Id = '$shoeid' and Review >0 group by shoe_Id";

					$res = mysqli_query($db2,$query2);
					
					while ($rec = $res->fetch_assoc()){	
							$rate = round($rec['rate'],1);
							}
              $brand = $shoe['brand_Id']; 
              $cost = $shoe['cost'];
              $img = $shoe['shoe_Img'];
              echo "<div class='col-xs-3'>
                    <div class='thumbnail' style='height:350px;width:200px;margin:0 auto'>
                      <img src='images/$img' alt='Blue Jeans' style='height:150px; width:150px;'>
                      <div class='caption'>
                      <h5>$brand$shoeid</h5>
                      <h5>$cost &nbsp;&nbsp;&nbsp;&nbsp;"; if($rate!=0)
									{
										while($rate>0)
										{
											echo "☆"; 
											$rate=$rate-1;
										}
									} else{ echo "Not Rated yet!";}
								
						echo "</h5> <a href='insertcart.php?shoe=$shoeid' role='button' class='btn btn-danger btn-block btn-sm'>
                     <img src='images/cart.png' alt='cart' style='height:30px; width:60px;'> Add to Cart
                </a> 
				&nbsp;&nbsp;
				<a role='button' id ='button2' class='btn btn-danger btn-block btn-sm' href='javascript:void(0);' NAME='View'  title=' My title here ' onClick=window.open('view.php?shoe=$shoeid','Ratting','width=550,height=1170,0,status=0,');>
				<img src='images/view.jpg' alt='view' style='height:30px; width:30px;'>View </a>

                      </div>
                    </div></div>
                    ";
          }
}
if($category=='trending')
{
	 $query = "SELECT shoes.shoe_Id, shoes.brand_Id, brand_Name, SUM(quantity) AS TotalSold, shoes.shoe_Img, shoes.cost as cost FROM `alsohasorderhistory`,shoes, brand WHERE alsohasorderhistory.shoe_Id = shoes.shoe_Id AND brand.brand_Id = shoes.brand_Id GROUP BY shoes.shoe_Id HAVING SUM(quantity) > 2 ORDER BY SUM(quantity) DESC";

          $results = mysqli_query($db2,$query);
                    echo "<div class='row'>";
          while ($shoe = $results->fetch_assoc()){
              //var_dump($shoe);
              $shoeid = $shoe['shoe_Id'];
			  $rate = 0;
					$query2 = "SELECT avg(Review) rate FROM `alsohasorderhistory` where shoe_Id = '$shoeid' and Review >0 group by shoe_Id";

					$res = mysqli_query($db2,$query2);
					
					while ($rec = $res->fetch_assoc()){	
							$rate = round($rec['rate'],1);
							}
              $brand = $shoe['brand_Id']; 
			  
              $cost = $shoe['cost'];
              $img = $shoe['shoe_Img'];
              echo "<div class='col-xs-3'>
                    <div class='thumbnail' style='height:350px;width:200px;margin:0 auto'>
                      <img src='images/$img' alt='Blue Jeans' style='height:150px; width:150px;'>
                      <div class='caption'>
                      <h5>$brand$shoeid &nbsp;&nbsp;&nbsp; </h5>
                      <h5>$cost &nbsp;&nbsp;&nbsp;&nbsp;"; if($rate!=0)
									{
										while($rate>0)
										{
											echo "☆"; 
											$rate=$rate-1;
										}
									}else{ echo "Not Rated yet!";}
								
						echo "</h5> 						<a href='insertcart.php?shoe=$shoeid' role='button' class='btn btn-danger btn-block btn-sm'>
                     <img src='images/cart.png' alt='cart' id = 'button1' style='height:30px; width:60px;'> Add to Cart
                </a> 
				<a role='button' id ='button2' class='btn btn-danger btn-block btn-sm' href='javascript:void(0);' NAME='View'  title=' My title here ' onClick=window.open('view.php?shoe=$shoeid','Ratting','width=550,height=1170,0,status=0,');>
				<img src='images/view.jpg' alt='view' style='height:30px; width:30px;'>View </a>
				</div>
                    </div></div>
                    ";
          }
	
}
if($category=='Deals')
{
	

              $query = "SELECT * FROM shoes,shoesgoondeal, sale where shoes.shoe_id = shoesgoondeal.shoe_id and shoesgoondeal.sale_Id = sale.sale_Id and sale.sale_Id not like 's0'";

         $results = mysqli_query($db2,$query);
                    echo "<div class='row'>";
          while ($shoe = $results->fetch_assoc()){
              //var_dump($shoe);
              $shoeid = $shoe['shoe_Id'];
			  $rate = 0;
					$query2 = "SELECT avg(Review) rate FROM `alsohasorderhistory` where shoe_Id = '$shoeid' and Review >0 group by shoe_Id";

					$res = mysqli_query($db2,$query2);
					
					while ($rec = $res->fetch_assoc()){	
							$rate = round($rec['rate'],1);
							}
              $brand = $shoe['brand_Id']; 
			  $discount = 100*$shoe['discount'];
              $cost = $shoe['cost'];
              $img = $shoe['shoe_Img'];
              echo "<div class='col-xs-3'>
                    <div class='thumbnail' style='height:350px;width:200px;margin:0 auto'>
                      <img src='images/$img' alt='Blue Jeans' style='height:150px; width:150px;'>
                      <div class='caption'>
                      <h5>$brand$shoeid &nbsp;&nbsp;&nbsp; $discount%off</h5>
                      <h5>$cost &nbsp;&nbsp;&nbsp;&nbsp;"; if($rate!=0)
									{
										while($rate>0)
										{
											echo "☆"; 
											$rate=$rate-1;
										}
									}else{ echo "Not Rated yet!";}
								
						echo "</h5> 						<a href='insertcart.php?shoe=$shoeid' role='button' class='btn btn-danger btn-block btn-sm'>
                     <img src='images/cart.png' alt='cart' id = 'button1' style='height:30px; width:60px;'> Add to Cart
                </a> 
				<a role='button' id ='button2' class='btn btn-danger btn-block btn-sm' href='javascript:void(0);' NAME='View'  title=' My title here ' onClick=window.open('view.php?shoe=$shoeid','Ratting','width=550,height=1170,0,status=0,');>
				<img src='images/view.jpg' alt='view' style='height:30px; width:30px;'>View </a>
				</div>
                    </div></div>
                    ";
          }
	
}
      
          ?>
		  
          
      
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
