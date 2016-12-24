 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'database_connection.php';
	
	
$useri = $_SESSION['user_id'];

$res=mysqli_query($db2,"SELECT s.shoe_Img image, s.brand_Id brand, a.order_Id orderid, s.shoe_Id shoeid, a.orderdate orderdate, a.quantity quantity, a.totalcost totalcost, a.Review rating FROM orders a , shoes s where a.shoe_ID = s.shoe_Id and  cust_Id = '$useri'");


while($row = $res->fetch_assoc()) 
							{
								$img = $row['image'];
								$ord = $row['orderid'];
								echo "<tr>";
								echo "<td ><input type='image' img src='images/$img' alt='Shoe Image' height='150' width='150' ><br></td>"; 
								echo "<td width='200px' align='center' id='Order_ID'><p><font size=4>".$row["brand"]."</font> <br></td>"; 
								echo "<td width='200px' align='center' id='Order_ID'><p><font size=4>".$row["orderid"]."</font> <br></td>"; 
								echo "<td width=200px align='center' id='Order_ID'>".$row["shoeid"]."</font> <br></td>";  
							    echo "<td width=200px align='center' id='Order_ID'>".$row["orderdate"]."</font></p> <br<th>  </th></td>";  
								echo "<td width=100px align='center' id='Order_ID'>".$row["quantity"]."</font></p> <br<th>  </th></td>";  
								echo "<td width=100px align='center' id='Order_ID'>".$row["totalcost"]."</font></td>";    
								echo "</tr>";
								
							
							}


mysqli_query($db2, "DELETE FROM orders where cust_Id='$useri'");


?>