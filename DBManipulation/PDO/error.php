<?php 


// configuration
$dbhost 	= "localhost";
$dbname 	= "test";
$dbuser 	= "root";
$dbpass 	= "pass";

// database connection
try{
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}
catch(PDOException $message){
	die('Conenction error, because: '.$message->getMessage());
}


// query
$sql = "SELECT title FROM books ORDER BY title";
$q = $conn->query($sql) or die("failed!");

if (!$q){
	die('Execute query error, because: '.$conn->errorInfo());
}
// fetch
while ($r = $q->fetch()) {
	print_r($r);
}



?>