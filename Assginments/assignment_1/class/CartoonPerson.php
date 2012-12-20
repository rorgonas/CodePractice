<?php 


/**
 * OOP Assignment #1
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


// CartoonPerson class
class CartoonPerson {

	// Create 4 instance variables representing the main characters
	private $name;
	private $age;
	private $sex;
	private $weight;

	// Create a list of quotes
	private $quotes = array('D\'oh!', 'Eat my shorts!', 'Life on the Fast Lane!');	

	// Create looper flag to prevent infinite loop when calling the talker method
	private $looper = true;

	// Constructor
	public function __construct() {
		$argument = func_get_args();
		switch (func_num_args()) {
			case 2:
				$this->__construct2($argument[0],$argument[1]);
				break;
			case 3:
				$this->__construct3($argument[0],$argument[1],$argument[2]);
				break;
			default:
				$this->__construct1($argument[0]);
				break;
		}		
	}

	// Add 3 Constructor methods accepting 1, 2, or 3 number of arguments
	private function __construct1($name) {
		$this->name = $name;
	}

	private function __construct2($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	private function __construct3($name, $age, $quote) {
		$this->name = $name;
		$this->age = $age;
		array_push($this->quotes, $quote);
	}

	// Show CartoonPerson object with echo for test
	public function __toString() {
		return $this->name;
	}

	// Get random quotes
	private function getRandomQuote() {
		$random_key = array_rand($this->quotes);
		return $this->quotes[$random_key];
	}

	// Create talker method
	public function toTalk($p) {		
		// message
		echo $this->name.' says: '.$this->getRandomQuote().$p.'<br />';

		// replay
		if ($this->looper == true) {
			// Problem #5: prevent infinite loop overwriting the looper flag from CartoonPerson class
			$p->looper = false;
			$p->toTalk($this);	
		}
	}
}


// Writer class
class WriteMessage {
	public static function main() {
		$homi = new CartoonPerson('Homer');
		$lizi = new CartoonPerson('Lisa', '43', 'What is this?');
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
