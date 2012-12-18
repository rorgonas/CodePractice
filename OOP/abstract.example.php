<?php 


// Create an Ambstract class
abstract class MyAbstract {
	// methods
	public $name;
	public function doThis() {
		// do this
	}
	abstract function doThat();
	abstract function setData($data);

}


// Extend Abstract class
class MyClass extends MyAbstract {
	// class methods	
}


?>