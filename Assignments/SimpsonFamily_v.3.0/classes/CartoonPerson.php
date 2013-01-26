<?php 


/**
 * OOP Assignment #3
 *
 * @author Rolland Orgonas I.
 * @copyright 2013 Teksystems MSC
 */


// CartoonPerson class
class CartoonPerson 
{

	// Create instance variables representing the main characters
	private $name;
	private $age;
	private $gender;
	private $weight;
	private $height;
	private $favorite_dish;
	private $family_relationship;
	private $is_bald;

	// Create a list of quotes
	protected $quotes;  // quote list different for each person
	protected $message; // random quote
	protected $encode; 	// encode messag

	// Create flag to prevent infinite loop when talker method was called once
	private $has_talked;

	// Constructor
	public function __construct($name = null,
								$age = 'uncertain',
								$gender = null,
								$weight = null,
								$height = null,
								$favorite_dish = null,
								$family_relationship = 'unknow',
								$is_bald = false
	) {
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->height = $height;
		$this->favorite_dish = $favorite_dish;
		$this->family_relationship = $family_relationship;
		$this->is_bald = $is_bald;	
		$this->has_talked = false;
	}

	/**
	 * Getters and Setters
	 */
	public function getName() 
	{
		return $this->name;
	}

	public function setName($n) 
	{
		$this->name = $n;
	}

	public function getAge() 
	{
		return $this->age;
	}

	public function getGender() 
	{
		return $this->gender;
	}

	public function getHeight() 
	{
		return $this->height;
	}

	public function getFamilyRelationship() 
	{
		return $this->family_relationship;
	}

	public function isBald() 
	{
		return $this->isBald;
	}

	/**
	 * Show CartoonPerson object with echo for test
	 */

	public function __toString() 
	{
		return $this->name;
	}

	/**
	 * Get Talk State - checker helper only for test
	 */

	public function getTalkState() 
	{
		return $this->has_talked;
	}

	/** 
	 * Set Talk State
	 * @param $state = true - the Person now talks
	 * @param $state = false - the Person has already talked
	 */

	public function setTalkState($state) 
	{
		$this->has_talked = $state;
	}

	/**
	 * Set talk mode
	 */
	public function setTalkMode($mode) {
		$this->encode = $mode;
	}


	/**
	 * Transform any random quote respecting predefined rules
	 * @param:  $quote - a random quote
	 * @return: $this->message - refactored & transformed quote
	 */

	protected function transformQuote($quote) 
	{
				
		$quote = str_replace('e','y', $quote);	// Replace 'e' by 'y' chars 
		$array = explode(' ',$quote);    // Split string into arrays of words
		
		foreach ($array as $key=>$value) {
			$array[$key] = substr($value, 1,-1);   // Trim each words
		}		
			
		// Rebuild the message and return it
		return strtoupper(implode(" ", $array));
	}

	/**
	 * Generate a random quote from the given quotes list
	 */

	protected function randomQuote() 
	{
		$i = array_rand($this->quotes);
		return $this->quotes[$i];
	}


	/**
	 * Return the chat message 
	 */

	protected function getQuote() 
	{
		$msg = $this->randomQuote();

		switch ($this->encode) {
			case 'encode':
				$msg = $this->transformQuote($msg);
				break;
			
			default:
				// ...
				break;
		}
		
		$this->setQuote($msg);
		return $msg;
	}

	protected function setQuote($msg) {
		$this->message = $msg;
	}


	/**
	 * Count the words in a chat message
	 * @return: $num - number of words in a message
	 */

	protected function wordCounter() 
	{		
		return $num = str_word_count($this->message);
	}


	/**
	 * Create talker method
	 */
	public function talksTo(CartoonPerson $p, $mode = null) 
	{		
	 		 	
		if (!$this->has_talked) {	            // if character has not talked yet		
			
			// Config talk
			$this->setTalkState(true);				// when person talkes the  $state = true
			$this->setTalkMode($mode);				// message is encoded when $mode = 'encode'

			// Generate ouuput
			$output  = $this->name;
			$output .= ' (the ' . $this->getFamilyRelationship();
			$output .= ' who\'s ' . $this->getAge();
			$output .= ' years old) says: "' . $this->getQuote();
			$output .= '" to ' . $p->getName() . "<br />";
			
			echo $output;
			$p->talksTo($this, $mode);		// $this being and instance of CartoonPerson as expected by function
		}
		$this->setTalkState(false); 				// reset Talk State: $state = false;
	}

	public function chatInfo() 
	{
		$output = "<p>";
		$output .= $this->getName(). " only said ". $this->wordCounter() ." words!</br >";
		$output .= "The crazy language of " .$this->getName(). " is displayed in Capital Letters : ";
		$output .= $this->message;
		$output .= "</p>";
		
		return $output;	
	}


}




?>
