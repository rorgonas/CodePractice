<?php


/**
 * OOP Assignment #2
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


require_once "classes/CartoonPerson.php";

// HomerPerson class
class HomerPerson extends CartoonPerson{
	
	protected $quote;

	// protected function getRandomQuote() 
	// {
	// 	return $this->setRandomQuote('gad fgadf');
	// }
	public function __construct() {
		echo "dummy test";
		if ($this->message == null){
			echo "message is NULL";
			echo parent::getRandomQuote();
		}
	}

	private function calculateWordsNumber() 
	{
		var_dump($this->message);
		$this->words = substr_count($this->message, " ") + 1;
		return $this->words;
	}

	// Display with capital letters
	public function displayMessage() 
	{
	  	$output = "";
		$output .= "<br />How many words said Homer? ". $this->calculateWordsNumber() ."</br >";
		$output .= "Homer said in capital letters: ";  //echo parent::getName($this->name)." speaks crazy language: ";

		echo $output;
		print_r(strtoupper($this->message));
	}
}

?>