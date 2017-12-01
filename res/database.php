<?php

// Set MySQL username and password
$username = "";
$password = "";

// Simple functions to connect and disconnect to databases
function connectDB(){
	$s = $_SERVER['SERVER_NAME'];
	$u = $GLOBALS['username'];
	$p = $GLOBALS['password'];
	$d = $GLOBALS['currentDB'];
	
	$connection = mysqli_connect($s, $u, $p, $d) or die("Connection failed: " . mysqli_connect_error());
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	return $connection;
} function disconnectDB($connection) {
	mysqli_close($connection);
}

?>