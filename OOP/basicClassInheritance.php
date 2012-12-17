<?php 

	require_once ('basicClass.php');
	
	
	// Create new object
	$newobj = new MyNewClass;
	
	echo $newobj->newMethod();
	
	// Use a method from the parent class
	//echo $newobj->getProperty();
	
	// Call the prote<>cted method from within a public method  
	echo $newobj->callProtected();
	
	do
	{
		// Call plusOne without instantiating MyClass
		echo MyClass::plusOne();
	}while ( MyClass::$count < 10 );
	
	echo MyClass::$count;
	
?>