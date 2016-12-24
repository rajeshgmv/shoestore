<?php

include_once 'database_connection.php';
$useri = $_SESSION['user_id'];

$res=mysqli_query($db2," SELECT count(quantity) as NumberOfOrders,sum(quantity) as TotalShoes, sum(totalcost) as totalAmountPayed, sum(quantity) as totalItemsBought, min(orderdate) as firstorder 
FROM alsohasorderhistory,customer where alsohasorderhistory.cust_id = customer.id AND  DATEDIFF(NOW(),orderdate)<30 and customer.id ='$useri'
group by customer.id ");

$num_rows = mysqli_num_rows($res);
if($num_rows==0)
{ 
 echo "Make 5 or more orders in 30 days and become a VIP Member";
}
else{
while($row = $res->fetch_assoc()) 
							{
								$orders = $row["NumberOfOrders"];
								$firstorder = $row["firstorder"];

							}

							if($orders>4)
							{
								echo "You are a VIP Member! You have free 2 day delivery for next four orders";
							}
							if(($orders<=4)&&($orders>0))
							{
								
									$date1 = date_create($firstorder);
									$today = date("Y-m-d");
									$date2 = date_create($today);
									$interval = date_diff($date1,$date2);
									$days = 30 -($interval->format('%d days'));
									$rem = 5-$orders;
									echo "Make  $rem or more orders in next $days days and become a VIP member";

							}
								
}
?>