<?php
error_reporting(0);
ini_set('display_errors', 1);
    session_start();
echo "hi";	
	$servername = "localhost";
	$username = "id338184_shoestore";
	$password = "shoestore";
	$dbname = "id338184_shoestore";

	//connect using mysql_connect
    $conn = mysql_connect($servername,$username,$password); 

    if (!$conn) {echo "Cannot connect to MySQL";} 
	else {echo "connection sucess ";}
echo "you are here";    
    //select shoestore database
    $db = mysql_select_db($dbname, $conn);

	//connect using mysqli_connect
    $db2 = new mysqli($servername, $username, $password, $dbname);
    
    if (!$db) {
        die ('Can\'t use shoestore : ' . mysql_error());
    }

    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
       
    }
?>