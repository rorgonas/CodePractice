<?php 


/**
 * @author Rolland Orgonas I.
 *
 *
*/


class CartoonPerson {
	// Create 4 instance variables representing the main characters + list of quotes
	public $person;
	public $husband;
	public $wife;
	public $boy;
	public $girl;
	public $quotes = array('D\'oh!', 'Eat my shorts!', 'Life on the Fast Lane, ');

	public function __constructor($person) {
		$this->person = $person;
		$this->_constructor();  // call second constructor
	}

	// ToDo: Add one more constructor but how?
	public function _constructor() {
		// what to do here?
	}

	// Create toTalk method
	public function toTalk($p) {
		$random_quote_index = array_rand($this->quotes);
		$message = $this->quotes[$random_quote_index];
		echo $this->person.' says: '.$message.$p.'<br />';
	}

}

class Main {
	public function main() {
		$homi = new CartoonPerson('Homer');
		$lizi = new CartoonPerson('Lisa');
		$barti = new CartoonPerson('Bart');
		$margi = new CartoonPerson('Marge');

		$homi->toTalk('Bart');
	}
}

$homi = new CartoonPerson('Homer');
$homi->toTalk('Bart');
$homi->toTalk('Lisa');

$lizi = new CartoonPerson('Lisa');
$lizi->toTalk('Marge');



?>