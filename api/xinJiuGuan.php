<?php
require_once ("../connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])
	&& isset($_POST['street']) && isset($_POST['state']) && isset($_POST['city'])) {
	
	$name = $_POST['name'];
	$street = $_POST['street'];
	$state = $_POST['state'];
	$city = $_POST['city'];

	$query = "INSERT INTO `brewery_finder`.`brewery` (`brewery_name`, `city_name`, `state_name`, `brewery_address`, `brewery_rating`) 
	VALUES (" . "'" . $name . "','". $city . "','". $state . "','". $street . "', 3)";

	$status = $db->execQuery($query);
	if($status)
	{
		print("Successfully insert new drunk " . $_POST['name']);
	}

	exit();
} 

header("HTTP/1.1 400 Bad Request");
print("URL did not match any known method.");
?>
