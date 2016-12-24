 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'database_connection.php';
	
	
$useri = $_SESSION['user_id'];

$res=mysqli_query($db2,"SELECT s.shoe_Img image, s.brand_Id brand, a.order_Id orderid, s.shoe_Id shoeid, a.orderdate orderdate, a.quantity quantity, a.totalcost totalcost, a.Review rating FROM alsohasorderhistory a , shoes s where a.shoe_ID = s.shoe_Id and  cust_Id = '$useri'");

$num_rows = mysqli_num_rows($res);
if($num_rows!=0)
{
while($row = $res->fetch_assoc()) 
							{
								$img = $row['image'];
								$ord = $row['orderid'];
								echo "<tr>";
								echo "<td ><input type='image' img src='images/$img' alt='Shoe Image' height='150' width='150' ><br></td>"; 
								echo "<td width='200px' align='center' id='Order_ID'><p><font size=4>".$row["brand"]."</font> <br></td>"; 
								echo "<td width='200px' align='center' id='Order_ID'><p><font size=4>".$row["orderid"]."</font> <br></td>"; 
								//echo '<td align="center"><input type="text"  name="oid" readonly placeholder='.$row['orderid'].' style="width:70px"> <br></td>'; 								
								echo "<td width=200px align='center' id='Order_ID'>".$row["shoeid"]."</font> <br></td>";  
							    echo "<td width=200px align='center' id='Order_ID'>".$row["orderdate"]."</font></p> <br<th>  </th></td>";  
								echo "<td width=100px align='center' id='Order_ID'>".$row["quantity"]."</font></p> <br<th>  </th></td>";  
								echo "<td width=100px align='center' id='Order_ID'>".$row["totalcost"]."</font></td>";    
								echo '<td> <input type="text"  id="Order_ID" placeholder='.$row['rating'].' style="width:70px"></td>';
								
								echo '<td> <button type="submit" id="btn-rate" name="btn-rate" class="btn btn-primary btn-block" style ="width:60px">rate</button></td>';
								echo "</tr>";
								
							
							}

}
else
{
	 echo "<tr>"; echo "<td>"; echo "<br>"; echo "</td>"; echo "</tr>";
					 echo "<tr>"; echo "<td>"; echo "<br>"; echo "</td>"; echo "</tr>";
					  echo "<tr>"; echo "<td>"; echo "<br>"; echo "</td>"; echo "</tr>";
					echo "<tr>";
					echo "<td>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "Sorry!! ";  echo "</font>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "You don't ";  echo "</font>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "have any";  echo "</font>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "Orders! <br>";  echo "</font>";
					echo "</td>";
					echo "</tr>";
}


?>