 <?php
	
	include 'database_connection.php';
	
						?>
										<script>alert('lona');</script>
										<?php
								
								$orid = $_POST['oid'];
								$rateu = $_POST['rate'];
									
									
									if(mysqli_query($db2,"UPDATE alsohasorderhistory set Review = '$rateu' where order_Id = '$orid' "))
									{
										?>
										<script>alert('hey');</script>
										<?php
											header("Location: updaterating.php");
											echo $orid; echo "  bai "; echo $rateu;
										
									}
								
									else
									{
										?>
										<script>alert('not successfully added ');</script>
										<?php
									}
								
								
								
								
								

						

?>