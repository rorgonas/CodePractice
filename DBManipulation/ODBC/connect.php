<?php 

// DB config
$dsn = "LocalDNS";
$user = "root";
$pass = "pass";

// connect DB
$conn = odbc_connect($dsn, $user, $pass) or die('could not open database!');

// query string
$sql = "SELECT * FROM books";

// fetch result
$result = odbc_exec($conn, $sql);
while($r = odbc_fetch_array($result)){
	print_r($r);
}

// close connection
odbc_close($conn);





?>