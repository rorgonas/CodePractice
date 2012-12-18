<?php 


// Create an Interface
interface MyInterface {
	// list of metods
	public function doTest();
	public function doSomethingElse();
	public function setName($name);
}


// Implement the Interface
class MyClass implements MyInterface {

	public $name;
	public function doTest() {
		// function body
	}
	public function doSomethingElse() {
		// function body
	}
	public function setName($name) {
		$this->name = $name;
	}

}


?>