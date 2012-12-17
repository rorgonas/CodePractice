<?php 

// connect DB
$conn = mysql_connect("localhost", "root", "pass");
mysql_select_db("test");

$sql = "SELECT * FROM books";
$result = mysql_query($sql);

// fetch the result data
while ($r = mysql_fetch_array($result)) {
	echo $r['id']. '). ' .$r['title']. ' | ' .$r['author']. '<br />';
}

mysql_close($conn);

?>