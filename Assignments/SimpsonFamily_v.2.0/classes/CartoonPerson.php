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
	public function getName() {
		return $this->name;
	}

	/**
	 * Name setter
	 */
	public function setName($n) {
		$this->name = $n;
	}

	/**
	 * Age getter
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * Gender getter
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Height getter
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Family relationship getter
	 */
	public function getFamilyRelationship() {
		return $this->family_relationship;
	}

	/**
	 * Is bald state
	 */
	public function isBald() {
		return $this->isBald;
	}

	/**
	 * Show CartoonPerson object with echo for test
	 */
	public function __toString() {
		return $this->name;
	}

	/**
	 * Get Talk State - checker helper only for test
	 */
	public function getTalkState() {
		return ($this->has_talked) ? '1' : '0';
	}

	/** 
	 * Set Talk State
	 * @param $state = true - the Person now talks
	 * @param $state = false - the Person has already talked
	 */
	public function setTalkState($state) {
		$this->has_talked = ($state == 1) ? true : false;
	}

	/**
	 * Get random quotes
	 */
	protected function getRandomQuote() {
		$random_key = array_rand($this->quotes);
		return $this->quotes[$random_key];
	}

	/**
	 * Create talker method
	 */
	public function talksTo(CartoonPerson $p) {		
	 
		if (!$this->has_talked) {	// if character has not talked yet		
			$this->setTalkState(1);				// this character is now talking: $state = true
			echo $this->name . ' (the ' . $this->getFamilyRelationship(). ' who\'s ' . $this->getAge() . ' years old) says: "' . $this->getRandomQuote() . '" to ' . $p->getName() . "<br />";
			$p->talksTo($this);	// $this being and instance of CartoonPerson as expected by function
		}
		$this->setTalkState(0); // reset Talk State: $state = false;
	}
}




?>
