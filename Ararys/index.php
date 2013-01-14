<?php 



// Utility Function: Display Arrat in a better way
function display($exp) {
	print_r("<pre>");
	print_r($exp);
	print_r("</pre>");
}
// ----------------------------------


$tab = array(
	0 => array("prenom"=>"pepe", "nom"=>"woody"),
	1 => array("prenom"=>"mama", "nom"=>"loody")
	);

print_r($tab);
var_dump($tab);

echo "Hello " .ucfirst($tab[0]["nom"]). "!<br />";


$fruits = array("orange", "apple", "lemon");
foreach($fruits as $val) {
	echo $val. "<br />";
}
display($fruits);
echo "<br />End of array is: " .end($fruits);
echo "<br />Prev of array is: " .prev($fruits);
echo "<br />This fruit position: " .key($fruits);
echo "<br />This fruit is: " .current($fruits);
echo "<br />Reset fruits pointer: " .reset($fruits);

print_r(each($fruits));


$garden = array(
	"a"=>"apple",
	"b"=>"banana",
	"c"=>array("lemon", "orange")
	);

display($garden);
echo "A fruit can be: " .$garden["c"][0];

// count array dimension
echo count($garden);

// delete one element from array
unset($garden["a"]);
display($garden);

// count array dimension
echo count($garden);

// Concert String into Array
$string = "jo,patrick,elen,nick,lee";
$name = explode(",", $string);
display($name);

$date = "2004/10/23";
$tab = explode("/", $date);
echo "Split the date in : <br />";
foreach ($tab as $value) {
	echo $value. "<br />";
}

// given Array
$tab = array("rouge", "jaune", "vert");
display($tab);

$elem = array_shift($tab);
echo "<br />After aray_shift we got: ";
echo "<br />First out is: " .$elem;
display($tab);

$elem = array_pop($tab);
echo "<br />After aray_pop we got: ";
echo "<br />Last out is: " .$elem;
display($tab);

array_unshift($tab, "black");
echo "<br />After aray_unshift we got: ";
display($tab);


array_unshift($tab, "white", "pink");
echo "<br />After aray_unshift we got: ";
display($tab);

array_push($tab, "marron", "grey");
echo "<br />After aray_push we got: ";
display($tab);

echo "<br />Sort Array";
$list = "vert,bleu,jaune,blanche";
$tab = explode(",", $list);

display($tab);
sort($tab);
display($tab);

echo "<br />ksort and asort";
$tab = array(
	"name"=>"charles",
	"age"=>"54",
	"prenom"=>"alexandre");
display($tab);

asort($tab);
display($tab);

ksort($tab);
display($tab);

echo "<br />File sort with natsort()";
$tab = array("file100.jpg", "file2.jpg","file21.jpg", "file1.jpg");
display($tab);

sort($tab);
display($tab);

natsort($tab);
display($tab);

echo "<br />Check precence in the Array";
$tab = array("paul-louis", "boubin");
display($tab);

if (in_array("paul-louis", $tab)) {
	echo "We've found Mr." .ucfirst($tab[0]);
}

echo "<br />Check precence in an Associative Array";
$tab = array("prenom"=>"paul-louis", "nom"=>"boubin");
display($tab);

if (array_key_exists("name", $tab)) {
	print "The name exists";
}
print "The name DOES NOT exists";

if (isset($tab["nom"])) {
	print "<br />Test with isset() was successful";
}

echo "<br />How to generate a storable representation of a value?";
$tab = array(
	"color"=>array("red", "yellow"),
	1=>2
	);
display($tab);

$array_s = serialize($tab);
echo "<br />serialized array is: " .$array_s;

$str = 'a:2:{i:0;s:1:"a";i:1;s:1:"b";}';
$tab = unserialize($str);
display($tab);

?>