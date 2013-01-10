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
	
	// Override parent instance variables representing famous quote of the person
	protected $quotes = array('Why you little...');
	
}

?>