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
	protected $quotes = array('D\'oh!', 'Eat my shorts!', 'Life on the Fast Lane!', 'Why you little...');
	
	// Save a random quote
	protected $message;

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
		return ($this->has_talked) ? '1' : '0';
	}

	/** 
	 * Set Talk State
	 * @param $state = true - the Person now talks
	 * @param $state = false - the Person has already talked
	 */

	public function setTalkState($state) 
	{
		$this->has_talked = ($state == 1) ? true : false;
	}

	
	/**
	 * Transform any random quote respecting predefined rules
	 * @param:  $quote - a random quote
	 * @return: $this->message - refactored & transformed quote
	 */

	protected function transformQuote($quote) 
	{
			// Replace chars and split string into arrays of word
		$quote = str_replace('e','y', $quote);	
		$quote_array = explode(' ',$quote);
		
		// var_dump($quote_array);
		foreach ($quote_array as $key=>$value) {
			$quote_array[$key] = substr($value, 1,-1);
		}		
		// var_dump($quote_array);
			
			// Rebuild the message and return it
		return $this->message = implode(" ", $quote_array);
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

	protected function getPersonQuote() 
	{
		$this->message = $this->randomQuote();
		return $this->transformQuote($this->message);		
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
	public function talksTo(CartoonPerson $p) 
	{		
	 	$output = '';
	 		 	
		if (!$this->has_talked) {	            // if character has not talked yet		
			$this->setTalkState(1);				// this character is now talking: $state = true
			
			$output .= $this->name;
			$output .= ' (the ' . $this->getFamilyRelationship();
			$output .= ' who\'s ' . $this->getAge();
			$output .= ' years old) says: "' . $this->getPersonQuote();
			$output .= '" to ' . $p->getName() . "<br />";
			
			echo $output;
			$p->talksTo($this);		// $this being and instance of CartoonPerson as expected by function
		}
		$this->setTalkState(0); 				// reset Talk State: $state = false;
	}

	public function getMessageInfo() 
	{
	  	$output  = "<h3>Message information</h3>";
		$output .= $this->getName(). " only said ". $this->wordCounter() ." words!</br >";
		$output .= "The crazy language of " .$this->getName(). " is displayed in Capital Letters : ";

		echo $output;
		print_r( strtoupper($this->message) );
	}


}




?>
