<?php 


/**
 * OOP Assignment #1
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


// CartoonPerson class
class CartoonPerson {

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
	
	// Save a random quote in this instance variable
	protected $message;
	protected $message_type = null;

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
	 * Name getter
	 */
	public function getName() 
	{
		return $this->name;
	}

	/**
	 * Name setter
	 */
	public function setName($n) 
	{
		$this->name = $n;
	}

	/**
	 * Age getter
	 */
	public function getAge() 
	{
		return $this->age;
	}

	/**
	 * Gender getter
	 */
	public function getGender() 
	{
		return $this->gender;
	}

	/**
	 * Height getter
	 */
	public function getHeight() 
	{
		return $this->height;
	}

	/**
	 * Family relationship getter
	 */
	public function getFamilyRelationship() 
	{
		return $this->family_relationship;
	}

	/**
	 * Is bald state
	 */
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
	 * Get random quotes
	 */
	protected function getRandomQuote() 
	{
		$key = array_rand($this->quotes);
		$this->message = $this->quotes[$key];
		
		return $this->message;
	}

	/**
	 * Set random quotes
	 */
	protected function setRandomQuote($str) 
	{
		$this->message = $str;
	}

	/**
	 * Get Crazy Language
	 */
	protected function transformQuote($quote) 
	{
		$quote = str_replace('e','y', $quote);
		$quote_array = explode(' ',$quote);
		//var_dump($quote_array);
		foreach ($quote_array as $key=>$value) {
			$quote_array[$key] = substr($value, 1,-1);
		}
		//var_dump($quote_array);
		return $this->message = implode(" ", $quote_array);
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
			$output .= ' years old) says: "' . $this->getRandomQuote();
			$output .= '" to ' . $p->getName() . "<br />";
			
			echo $output;
			$p->talksTo($this);		// $this being and instance of CartoonPerson as expected by function
		}
		$this->setTalkState(0); 				// reset Talk State: $state = false;
	}

}




?>
