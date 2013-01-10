<?php


/**
 * OOP Assignment #2
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


//require_once "classes/CartoonPerson.php";

// Writer class
class ApuPerson extends CartoonPerson {
	
	// Create instance variable for person's private quote
	private $private_quote = 'Oh I\'m so angry I could just fall asleep.';

	/**
	 * Second implementation: Overide getRandomQuotes() method with this private quote
	 */
	protected function getRandomQuote() {

		return $this->quotes = $this->private_quote;
	}
}

?>