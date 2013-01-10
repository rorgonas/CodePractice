<?php


/**
 * OOP Assignment #2
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


//require_once "classes/CartoonPerson.php";

// Writer class
class BartPerson extends CartoonPerson {
	
	// Create instance variable for person's private quote
	private $private_quote = 'D\'oh!';

	/**
	 * Second implementation: Overide getRandomQuotes() method with this private quote
	 */
	protected function getRandomQuote() {

		return $this->quotes = $this->private_quote;
	}
}

?>