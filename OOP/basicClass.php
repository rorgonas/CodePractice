<?php

/**
 * Define MyClass 
 */
 

class MyClass
{
	public $message = "I'm always a class property!";
	public static $count = 0;
	
	public function __construct()
	{
		// when object is initated then:
		echo 'The class "'.__CLASS__.'" was initiated! <br />';
	}
	
	public function __destruct()
	{
		// when object is destroyed then:
		echo 'The class "'.__CLASS__.'" was destroyed! <br />';
	}
	
	public function __toString()
	{
		echo "Using toString method <br />";
		return $this->getProperty();
	}
	
	public function setProperty($new_message)
	{
		$this->message = $new_message;
	}
	
	protected function getProperty()
	{
		return $this->message."<br />";
	}
	
	public static function plusOne()
	{
		return "The count is: ". ++self::$count ."<br />";
	}
	
}

class MyNewClass extends MyClass
{
	public function __construct()
	{
		parent::__construct();  // Call the parent class's constructor
		echo "A new constructor in ".__CLASS__."<br />";
	}
	
	public function newMethod()
	{
		echo "From a new method ".__CLASS__."<br />";
	}
	
	public function callProtected()
	{
		return $this->getProperty();
	}
}

?>