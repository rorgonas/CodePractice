<?php 

/**
 * PDO: Connecting Use PHP Data Object
 *
 * CREATE TABLE `books` (
 *	  `id` int(11) NOT NULL auto_increment,
 *	  `title` varchar(150) NOT NULL,
 *	  `author` varchar(150) NOT NULL,
 *	  `description` varchar(255) NOT NULL,
 *	  `on_sale` tinyint(1) NOT NULL,
 *	  PRIMARY KEY  (`id`)
 *	);
 */


// configuration
$host 	= "localhost";
$db 	= "test";
$user 	= "root";
$pass 	= "pass";

// database connection
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// query
$sql = "SELECT * FROM books";
$q = $conn->query($sql) or die("failed!");

// fetch
while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
	echo $r['title'].'<br />';
}



?>