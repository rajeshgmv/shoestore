<?php
error_reporting(0);
ini_set('display_errors', 1);
    session_start();
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "shoestore";
	
	
   

	//connect using mysqli_connect
    $db2 = new mysqli($servername, $username, $password, $dbname);
    
   

    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
       
    }
?>