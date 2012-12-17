<?php 


// configuration
$dbhost 	= "localhost";
$dbname 	= "test";
$dbuser 	= "root";
$dbpass 	= "pass";


if ($_GET['serach'] == 'Search'){

	// database connection
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


	$title = '%'.$_REQUEST['title'].'%';
	// query
	$sql = "SELECT * FROM books WHERE title LIKE ?";

	// Prepare Statement and Execute
	$q = $conn->prepare($sql);
	$q->execute(array($title));

	// fetch
	while ($r = $q->fetch()) {
		echo $r['id']. '. ' .$r['title']. ' | ' .$r['author'].'<br /><br />';		
	}

}



?>
