<?php


/**
 * OOP Assignment #2
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


//require_once "classes/CartoonPerson.php";

// Writer class
class MargePerson extends CartoonPerson {
	
	// Create instance variable for person's private quote
	private $private_quote = 'Food keeps my family happy';

	/**
	 * Second implementation: Overide getRandomQuotes() method with this private quote
	 */
	protected function getRandomQuote() {

		return $this->quotes = $this->private_quote;
	}
}

?>