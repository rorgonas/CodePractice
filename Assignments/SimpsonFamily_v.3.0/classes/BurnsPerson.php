<?php


/**
 * OOP Assignment #3
 *
 * @author Rolland Orgonas I.
 * @copyright 2013Teksystems MSC
 */


//require_once "classes/CartoonPerson.php";

// Writer class
class BurnsPerson extends CartoonPerson {
	
	// This person speaks plain language
	// protected $language = "cool";

	protected function getPersonQuote() 
	{
		$this->message = $this->randomQuote();
		return $this->message;
	}
}

?>