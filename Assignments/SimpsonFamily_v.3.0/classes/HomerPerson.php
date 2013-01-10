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
	
	// protected $quote;

	protected function getRandomQuote() 
	{
		return $this->message = $this->transformQuote("dfgd dfgdfg dfgdfg");
	}

	private function calculateWordsNumber() 
	{
		$this->words = substr_count($this->message, " ") + 1;var_dump($this->message);
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