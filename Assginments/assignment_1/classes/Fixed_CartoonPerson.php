<?php


/**
 * OOP Assignment #1
 *
 * @author Rolland Orgonas I.
 * @copyright 2012 Teksystems MSC
 */


// CartoonPerson class
class Fixed_CartoonPerson {
	// create cartoon person instance variable / property

	private $name;
	private $age;
	private $gender;
	private $height;
	private $favourite_dish;
	private $family_situation;
	private $is_bald;
	 	
	// Create a list of quotes
	private $quotes = array("D'oh!", 'Eat my shorts!', 'Life on the Fast Lane!');
	// Create looper flag to prevent infinite loop when calling the talker method
	private $has_talked;
	
	/**
	 * Constructor
	 */
	public function __construct($name = null, // this means that if name has no value then it equals null
								$age = 'uncertain', // this means that if $age has no value then it equals 'uncertain'
								$gender = null,
								$height = null,
								$favourite_dish = null,
								$family_situation = 'unknown', // this means that if $family_situation has no value then it equals 'unknown'
								$is_bald = false // this means that if is_bald has no value then it equals false
	) {
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
		$this->height = $height;
		$this->favourite_dish = $favourite_dish;
		$this->family_situation = $family_situation;
		$this->is_bald = $is_bald;
		
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
	 *
	 */
	public function getAge() {
		return $this->age;
	}
	
	/**
	 *
	 */
	public function getGender() {
		return $this->gender;
	}
	
	/**
	 *
	 */
	public function isBald() {
		return $this->is_bald;
	}
	
	/**
	 *
	 */
	public function getFamilySituation() {
		return $this->family_situation;
	}
	
	/**
	 *
	 */
	public function hasAlreadyTalked() {
		return $this->has_talked;
	}
	
	/**
	 *
	 */
	public function nowTalks() {
		$this->has_talked = true;
	}
	
	
	//... You can continue adding **getters** and even **setters**
	

	/**
	 * Get random quotes
	 */
	private function getRandomQuote() {
		$random_key = array_rand($this->quotes);
		return $this->quotes[$random_key];
	}

	/**
	 * Create talker method
	 */
	public function talksTo(Fixed_CartoonPerson $p) { // This forces the type of the parameter: Useful when you want
														// to ensure some type
														
		if (!$this->hasAlreadyTalked()) { // if character has not talked yet
			$this->nowTalks(); // this character is now talking
			echo $this->name . ' (the ' . $this->getFamilySituation(). ' who\'s ' . $this->getAge() . ' years old) says: "' . $this->getRandomQuote() . '" to ' . $p->getName() . "\n"; // message
			$p->talksTo($this);  // $this is an instance of Fixed_CartoonPerson as expected by function
		}
	}
}


// Writer class
class WriteMessage {
	public static function main() {
		$homi = new Fixed_CartoonPerson('Homer', 36, 'male', '165cm', 'chicken nuggets', 'father', true);
		$lizi = new Fixed_CartoonPerson('Lisa', 10);
		$barti = new Fixed_CartoonPerson('Bart', 15, 'male', '150cm', 'pop corns', 'sun');
		$margi = new Fixed_CartoonPerson('Marge', 33, 'female');
		$apu = new Fixed_CartoonPerson('Apu');

		// Homer ($homi) talks with Bart ($barti). Homer and Bart are Objects instances of CartoonPerson class
		
		echo "Conversation 1:\n";
		$homi->talksTo($barti);
		
		echo "\nConversation 2:\n";
		$homi->talksTo($barti);
		
		echo "\nConversation 3:\n";
		$apu->talksTo($homi);
	}
}

// Do some Messaging
WriteMessage::main();

