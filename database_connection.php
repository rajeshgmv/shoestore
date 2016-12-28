<?php
error_reporting(E_ERROR | E_PARSE);
    session_start();
	
	$servername = "shoestore-cluster.cluster-ctylf64ucxj3.us-west-2.rds.amazonaws.com";
	$username = "shoestore";
	$password = "shoestore";
	$dbname = "shoestore";
 
    $db2 = new mysqli($servername, $username, $password, $dbname);
    
   if(!$db2)
   {
	   echo "connec fail";
   }


    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
       
    }
?>