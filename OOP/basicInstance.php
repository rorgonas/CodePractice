<?php

require_once('basicClass.php');

$obj = new MyClass;
echo $obj->getProperty(); // Get the property value

$obj->setProperty("Public property was changed!"); // Set a new one
echo $obj->getProperty(); // Print out the new value for this property

// Create another instance of MyClass
$obj2 = new MyClass;
$obj2->setProperty("This value belongs to second instance");
echo $obj2->getProperty();


// Output the object as a string
echo "Output the object: ".$obj;
echo "Output the object: ".$obj2;

// To explicitly trigger the destructor, you can destroy the object using the
unset($obj);
echo "End of file.<br />"; 

?>