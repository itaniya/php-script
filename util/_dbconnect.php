<?php

try{
	$connection = new PDO("mysql:host=localhost;dbname=isecure", 'admin', 'admin');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$dbStatus = "Connection successfully established";

}catch(PDOException $ex_msg){
	$dbStatus = "Error: ". $ex_msg->getMessage();
}

?>