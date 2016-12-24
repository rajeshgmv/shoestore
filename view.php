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

<h2>Shoe View</h2>


<?php
	error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'database_connection.php';	


$shoeid = $_GET['shoe'];	

$query = "SELECT s.shoe_Id  sid,s.shoe_Img image, b.brand_Name bname, c.category_Name cname, sale.discount disc, color_Name clname, cost 
FROM shoes s, brand b, categories c  ,shoesgoondeal sd ,sale,shoesareofcolor sc, color
where s.brand_Id = b.brand_Id and 
s.category_Id = c.category_Id and
s.shoe_Id = sd.shoe_Id and
sd.sale_Id = sale.sale_Id and
s.shoe_Id = sc.shoe_Id and 
sc.color_Id = color.color_Id and s.shoe_Id = '$shoeid'";	

$res = mysqli_query($db2,$query);
			
					$num_rows = mysqli_num_rows($res);
					
					while ($shoe = $res->fetch_assoc()){	
			
					
					$sid = $shoe['sid'];
					$img = $shoe['image'];
					$brand = $shoe['bname'];
					$category = $shoe['cname'];
					$discount = $shoe['disc'];
					$color = $shoe['clname'];
					$cost = $shoe['cost'];
					$costad = $cost *(1-$discount);
					
					 echo "<div class='col-xs-3'>
                    <div class='thumbnail' style='height:550px;width:400px;margin:0 auto'>
                      <img src='images/$img' alt='Blue Jeans' style='height:300px; width:300px;'>
                      <div class='caption'>
                      <h5>Brand: $brand </h5> <h5>ShoeID $shoeid</h5>
                      <h5>Cost $cost<h5> <h5>Type: $category<h5>"; if($discount>0) {echo "<h5>Discount $discount<h5><h5>Cost after Discount $costad<h5>";} else{ echo "No discount on this item";} 
					  echo "<h5>color $color<h5>&nbsp;&nbsp;&nbsp;&nbsp;"; if($rate!=0)
									{
										while($rate>0)
										{
											echo "☆"; 
											$rate=$rate-1;
										}
									} else{ echo "Not Rated yet!";}
								
						echo "</h5> <a href='insertcart.php?shoe=$shoeid' role='button' class='btn btn-danger btn-block btn-sm' onClick='self.close()' >
                     <img src='images/cart.png' alt='cart' style='height:30px; width:60px;'> Close View
                </a> 
				&nbsp;&nbsp;
				
                      </div>
                    </div>";
					
					
					}

?>
</body>
</html>
	