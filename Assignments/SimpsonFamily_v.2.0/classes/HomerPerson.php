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
	
	protected function getRandomQuote() {
		$key = array_rand($this->quotes);
		$quote = $this->quotes[$key];
		return $this->buildCrazyLanguage($quote);
	}

	private function buildCrazyLanguage($quote) {
		$quote = $this->replaceLetters($quote);
		return $this->cutLetters($quote);
	}

	// Replace in quote 'e' by 'y'
	private function replaceLetters($str) {
		return str_replace('e','y', $str);
	}

	// Build Crazy Language
	private function cutLetters($quote) {
		$quote_array = explode(' ',$quote);
		// var_dump($quote_array);

		// Cut first and last letter from each word
		foreach ($quote_array as $key=>$value) {
			$newString = substr($value, 1,-1);
			$quote_array[$key] = $newString;
		}
		// var_dump($quote_array);
		echo "The number of words said by Homer is: ". count($quote_array) ."</br >";

		return $this->message = implode(" ", $quote_array);
	}

	// Display with capital letters
	public function displayMessage() {
		echo "The encoded message is: ";
		print_r(strtoupper($this->message));
	}
}

?>