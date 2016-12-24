<?php

include_once 'database_connection.php';	
$useri = $_SESSION['user_id'];
$shoeid = $_GET['shoe'];	


$query = "select count(shoe_Id) as cartcount from cart where cust_Id = '$useri' group by cust_Id";	
$res=mysqli_query($db2,$query);
$num_rows = mysqli_num_rows($res);
if($num_rows!=0)
{
	while($row = $res->fetch_assoc()) 
							{
								$ccount = $row['cartcount'];
							}
}
else
{
	$ccount =0;
}
echo $ccount;

?>