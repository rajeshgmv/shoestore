
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'database_connection.php';

$useri = $_SESSION['user_id'];

$cartres=mysqli_query($db2,"select 
shoes.shoe_Img as image, 
shoes.shoe_Id as shoeid,
customer.id as custid, 
brand.brand_Name brand, 
color.color_Name as ccolor, 
size.size_Number as snumber, 
ROUND(sale.discount,2) as  cdiscount, 
ROUND(shoes.cost,2) as scost, 
ROUND(shoes.cost*(1-sale.discount),2) as cad
from cart, customer, shoes, brand, color, size, shoesareofcolor, shoesgoondeal,  sale where 
cart.cust_Id = customer.id and 
cart.shoe_Id = shoes.shoe_Id and
shoes.shoe_Id =	shoesareofcolor.shoe_Id and
shoesareofcolor.color_Id = color.color_Id and 
shoes.shoe_Id = shoesgoondeal.shoe_Id and 
shoesgoondeal.sale_Id = sale.sale_Id and  
shoes.shoe_Id=size.shoe_Id and 
shoes.brand_Id=brand.brand_Id  and
cart.cust_Id=$useri");

$cart_rows = mysqli_num_rows($cartres);
if($cart_rows!=0)
{
while($cartrow = $cartres->fetch_assoc()) 
								{
									$img = $cartrow['image'];
								echo "<tr>";
								echo "<td ><input type='image' img src='images/$img' alt='Shoe Image' height='150' width='150' ><br></td>";					
								echo "<td width=300px align='Center' id='Order_ID' >".$cartrow["brand"].'  '.$cartrow["shoeid"]."</td><br>"; 
								echo "<td width=300px align='Center' id='Order_ID'>".$cartrow["scost"]."</td><br>";
								echo "<td width=300px align='Center' id='Order_ID'>".$cartrow["cdiscount"]."</td><br>";	
								echo "<td width=300px align='Center' id='Order_ID'>".$cartrow["cad"]."</td>";
								echo "<td width=300px align='Center' id='Order_ID'>".$cartrow["snumber"]."</td><br>";
							    echo "<td width=300px align='Center' id='Order_ID'>".$cartrow["ccolor"]."</td><br>";
								
								echo '<td><select width="100" height="100"  style=" width:100px" name ="quantity"><option>1</option> <option>2</option><option>3</option><option>4</option><option>5</option></select></td>';

								 echo "</tr>";
								
								}

                 
		$carddet=mysqli_query($db2,"SELECT * FROM hascarddetails where cust_Id=$useri");
		$option = '';
		$star='************';
		while($row = $carddet -> fetch_assoc()){
			$option .= '<option>'.$star.substr($row['card_no'],-4).'</option>';
			
		} 

				echo '<tr>  <td></td><td></td>
						<td>select your card :</td>
						
						<td><select width="100" height="100"  style=" width:120px" name ="quantity">';echo $option; echo '</select></td>
						<td><a href= "payment.html.php">Add new card</a></td>
						</tr>
						<tr><td> &nbsp;&nbsp;&nbsp;  </td> <td> &nbsp;&nbsp;&nbsp;  </td></tr>
						<tr>
						<td></td><td></td>
						<td><button class="btn btn-danger btn-block btn-sm" type="submit" name="btn-proceed" style ="width: 150px">Proceed To Pay</button></td>
						<td><button class="btn btn-danger btn-block btn-sm" type="submit" name="btn-cancel">Cancel</button></td>
						
				</tr>
				<tr>  <td><br></td>
				</tr>';
}
else
{                   echo "<tr>"; echo "<td>"; echo "<br>"; echo "</td>"; echo "</tr>";
					 echo "<tr>"; echo "<td>"; echo "<br>"; echo "</td>"; echo "</tr>";
					  echo "<tr>"; echo "<td>"; echo "<br>"; echo "</td>"; echo "</tr>";
					echo "<tr>";
					echo "<td>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "Sorry!! ";  echo "</font>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "your ";  echo "</font>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "cart";  echo "</font>";
					echo "</td>";
					echo "<td width=300px align='Center' id='Order_ID'>"; echo "<font size='100'>";
					echo "is empty <br>";  echo "</font>";
					echo "</td>";
					echo "</tr>";
}
?>