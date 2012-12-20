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

	public function __construct($person) {
		$this->person = $person;
		// $this->__construct($arg1, $arg2);  // Problem #3: call second constructor impossible
	}

	// Problem #3: Add one more constructor
	// Cannot redeclare __construct() in the class

	public function getRandomQuote() {
		$random_key = array_rand($this->quotes);
		$quote = $this->quotes[$random_key];
		return $quote;
	}

	// Create toTalk method
	public function toTalk($p) {		
		// say something
		echo $this->person.' says: '.$this->getRandomQuote().$p.'<br />';
		// replay
		$character = new CartoonPerson($p);
		$character->toTalk($this->person);
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