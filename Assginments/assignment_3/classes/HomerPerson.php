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
	
	// Create instance variable for person's private quote
	private $private_quote = 'Why you little';
	private $crazy_language;

	/**
	 * Second implementation: Overide getRandomQuotes() method with this private quote
	 */
	protected function getRandomQuote() {
		return $this->quotes = $this->transform();
	}

	private function transform() {
		// Replace 'e' by 'y'
		$crazy_quote = str_replace('e','y', $this->private_quote);

		// Split every word into array
		$quote_array = explode(' ', $crazy_quote);
		var_dump($quote_array);

		// Cut first and last letter from each word
		foreach ($quote_array as $key=>$value) {
			$newString = substr($value, 1,-1);
			$quote_array[$key] = $newString;
		}
		var_dump($quote_array);

		$count_words = count($quote_array);
		echo "The number of words said by Homer is: ".$count_words."</br >";

		$this->crazy_language = $crazy_quote;
		return $this->crazy_language;
	}
}

?>