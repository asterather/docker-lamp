<?php
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";
try {
	$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo"connected successfully";
}catch(PDOException $e) {
	echo "connection failed: " . $e->getMessage();
}
?>
