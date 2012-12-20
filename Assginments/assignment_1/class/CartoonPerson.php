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
	private $person;
	// Create 4 instance variables representing the main characters
	private $husband;
	private $wife;
	private $boy;
	private $girl;
	// Create a list of quotes
	private $quotes = array('D\'oh!', 'Eat my shorts!', 'Life on the Fast Lane!');	
	// Create looper flag to prevent infinite loop when calling the talker method
	private $looper = true;

	// Constructor
	protected function __construct($person) {
		$this->person = $person;
	}

	// Show CartoonPerson object with echo for test
	public function __toString() {
		return $this->person;
	}

	// Get random quotes
	private function getRandomQuote() {
		$random_key = array_rand($this->quotes);
		return $this->quotes[$random_key];
	}

	// Create talker method
	protected function toTalk($p) {		
		// message
		echo $this->person.' says: '.$this->getRandomQuote().$p.'<br />';
		// replay
		if ($this->looper == true) {
			// Problem #5: prevent infinite loop overwriting the looper flag from CartoonPerson class
			$p->looper = false;
			$p->toTalk($this->person);	
		}
	}
}


// Writer class
class WriteMessage extends CartoonPerson {
	public static function main() {
		$homi = new CartoonPerson('Homer');
		$lizi = new CartoonPerson('Lisa');
		$barti = new CartoonPerson('Bart');
		$margi = new CartoonPerson('Marge');

		// Homer ($homi) talks with Bart ($barti). Homer and Bart are Objects instances of CartoonPerson class
		$homi->toTalk($barti);
		//echo $homi;
		//echo $barti;

		// Lisa talks with Marge. They are alos Objects instances of CartoonPerson class
		$lizi->toTalk($margi);
	}
}

// Do some Messaging
WriteMessage::main();




?>