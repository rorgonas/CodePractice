<?php 


/**
 * OOP Assignment #1
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


// CartoonPerson class
class CartoonPerson {
	// create cartoon person instance variable / property
	public $person;
	
	// Create 4 instance variables representing the main characters
	public $husband;
	public $wife;
	public $boy;
	public $girl;
	
	// Create a list of quotes
	public $quotes = array('D\'oh!', 'Eat my shorts!', 'Life on the Fast Lane!');
		
	// Create looper flag to prevent infinite loop when calling the talker method
	public $looper = true;

	// Constructor
	public function __construct($person) {
		$this->person = $person;
		// $this->__construct($arg1, $arg2);  // Problem #3: impossible call to second constructor
	}

	// Problem #3: Add one more constructor
	// Cannot redeclare __construct() in the class

	// Get random quotes
	public function getRandomQuote() {
		$random_key = array_rand($this->quotes);
		return $this->quotes[$random_key];
	}

	// Create talker method
	public function toTalk($p) {		
		// message
		echo $this->person.' says: '.$this->getRandomQuote().$p.'<br />';
		// replay
		if ($this->looper == true) {
			$pPerson = new CartoonPerson($p);
			// Problem #5: prevent infinite loop overwriting the looper flag from CartoonPerson class
			$pPerson->looper = false;
			$pPerson->toTalk($this->person);	
		}
	}
}


// Writer class
class WriteMessage {
	public static function main() {
		$homi = new CartoonPerson('Homer');
		$homi->toTalk('Bart');

		$lizi = new CartoonPerson('Lisa');
		$barti = new CartoonPerson('Bart');
		$margi = new CartoonPerson('Marge');
	}
}

// Do some Messaging
WriteMessage::main();




?>