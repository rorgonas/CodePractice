<?php 


/**
 * @author Rolland Orgonas I.
 *
 *
*/


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

	public function __construct($person) {
		$this->person = $person;
		// $this->__construct($arg1, $arg2);  // Problem #3: call second constructor impossible
	}

	// Problem #3: Add one more constructor
	// Cannot redeclare __construct() in the class

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
			$pPerson->looper = false;  		// Problem #5: prevent infinite loop overwriting the looper flag from CartoonPerson class
			$pPerson->toTalk($this->person);	
		}
	}
}

class Main {
	public function main() {
		$homi = new CartoonPerson('Homer');
		$lizi = new CartoonPerson('Lisa');
		$barti = new CartoonPerson('Bart');
		$margi = new CartoonPerson('Marge');
	}
}

$homi = new CartoonPerson('Homer');
$homi->toTalk('Bart');
// $homi->toTalk('Lisa');

// $lizi = new CartoonPerson('Lisa');
// $lizi->toTalk('Marge');



?>