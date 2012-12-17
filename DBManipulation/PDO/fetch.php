<?php 


// configuration
$dbhost 	= "localhost";
$dbname 	= "test";
$dbuser 	= "root";
$dbpass 	= "pass";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// query
$sql = "SELECT * FROM books";
$q = $conn->query($sql) or die("failed!");
$q->setFetchMode(PDO::FETCH_ASSOC);
// $q->setFetchMode(PDO::FETCH_NUM)
// $q->setFetchMode(PDO::FETCH_BOTH)

// fetch
while ($r = $q->fetch()) {
	print_r($r);
}



?>