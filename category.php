 <?php 

include_once 'database_connection.php';
$category = $_GET['category'];	

$unisex = 'none';
if(($category=='MEN')||($category=='WOMEN')||($category=='KIDS'))
{
	
			if(($category=='MEN')||($category=='WOMEN'))
{
	$unisex='UNISEX';
}
 
              $query = "SELECT * FROM shoes,shoe_gender where shoes.shoe_id = shoe_gender.shoe_id and (gender_id like '$category'  or gender_id like '$unisex')";

          $results = mysql_query($query);
                    echo "<div class='row'>";
          while ($shoe = mysql_fetch_assoc($results)){
              $shoeid = $shoe['shoe_Id'];
              $brand = $shoe['brand_Id']; 
              $cost = $shoe['cost'];
              $img = $shoe['shoe_Img'];
              echo "<div class='col-xs-3'>
                    <div class='thumbnail' style='height:350px;width:200px;margin:0 auto'>
                      <img src='images/$img' alt='Blue Jeans' style='height:150px; width:150px;'>
                      <div class='caption'>
                      <h3> $brand $shoeid <br> $cost </h3>
						<a href='insertcart.php?shoe=$shoeid' role='button' class='btn btn-danger btn-block btn-sm'>
                     <img src='images/cart.png' alt='Blue Jeans' style='height:20px; width:20px;'> Add to Cart
                </a>
                      </div>
                    </div></div>
                    ";
          }
}
if($category=='Trending')
{
	
	$query = "$query = "SELECT shoes.shoe_Id, shoes.brand_Id, brand_Name, SUM(quantity) AS TotalSold, shoes.shoe_Img
                FROM `alsohasorderhistory`,shoes, brand 
                WHERE alsohasorderhistory.shoe_Id = shoes.shoe_Id AND brand.brand_Id = shoes.brand_Id 
                GROUP BY shoes.shoe_Id HAVING SUM(quantity) > 2 
                ORDER BY SUM(quantity) DESC";";

          $results = mysql_query($query);
                    echo "<div class='row'>";
          while ($shoe = mysql_fetch_assoc($results))
			{
              //var_dump($shoe);
              $shoeid = $shoe['shoe_Id'];
              $brand = $shoe['brand_Id']; 
              $cost = $shoe['cost'];
              $img = $shoe['shoe_Img'];
              echo "<div class='col-xs-3'>
                    <div class='thumbnail' style='height:350px;width:200px;margin:0 auto'>
                      <img src='images/$img' alt='Blue Jeans' style='height:150px; width:150px;'>
                      <div class='caption'>
                      <h4>$brand $shoeid</h4>
                      <h3>$cost</h3>
						<a href='insertcart.php?shoe=$shoeid' role='button' class='btn btn-danger btn-block btn-sm'>
                     <img src='/images/cart.png' width='50'> Add to Cart
                </a>
                      </div>
                    </div></div>
                    ";
	
			}
}

?>