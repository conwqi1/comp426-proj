<?php
require_once ("../connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['city']) && isset($_GET['rating'])) {
	
	$name = $_GET['city'];
	$rating = $_GET['rating'];

		$query = "SELECT brewery_name, city_name, state_name, brewery_address, brewery_rating 
	FROM brewery WHERE city_name ='" . $name . "' AND brewery_rating >= '" . $rating . "'";


	$result = $db->execQuery($query);
	$ret = array();
	while($row = $result ->fetch_assoc())
	{
		$brewery = array();
		$brewery["brewery_name"] = $row["brewery_name"];
		$brewery["city_name"] = $row["city_name"];
		$brewery["state_name"] = $row["state_name"];
		$brewery["brewery_address"] = $row["brewery_address"];
		$brewery["brewery_rating"] = $row["brewery_rating"];

		array_push($ret, $brewery);
	}

    header('Content-type: application/json');
    print(json_encode($ret));

	exit();
} 

header("HTTP/1.1 400 Bad Request");
print("URL did not match any known method.");
?>
