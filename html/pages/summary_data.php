<?php
$servername = "10.0.0.129";
$username = "matthew";
$password = "G40inp237";
$dbname = "trackjog_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SHOW TABLES";
$result = $conn->query($sql);

$data = array(
	"point range" => array(989, 3919),
	"total points" => 2931,
	"duration" => "0:48:50",
	"distance" => 6.188,
	"average speed" => 7.517,
	"max speed" => 5.463,
);

echo json_encode($data, JSON_PRETTY_PRINT);
?>
