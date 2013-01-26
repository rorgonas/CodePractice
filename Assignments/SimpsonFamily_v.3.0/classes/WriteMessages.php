<?php


/**
 * OOP Assignment #3
 *
 * @author Rolland Orgonas I.
 * @copyright 2013Teksystems MSC
 */


require_once "classes/CartoonPerson.php";
require_once "classes/HomerPerson.php";
require_once "classes/MargePerson.php";
require_once "classes/BartPerson.php";
require_once "classes/LisaPerson.php";
require_once "classes/ApuPerson.php";
require_once "classes/BurnsPerson.php";

// Writer class
class WriteMessages {
	public static function main() {
		/**
		 * CartoonPerson class instance variable list: 
		 * @param $name, $age, $gender, $weight, $height, $favorite_dish, $family_relationship, $is_bald
		 */
		$homer = new HomerPerson('Homer', '36', 'male', '260pounds','165cm', 'chicken nuggets', 'father', true);
		$marge = new MargePerson('Marge', 33, 'female');
		$bart = new BartPerson('Bart', 15, 'male', '', '150cm', 'pop corns', 'sun');
		$lisa = new LisaPerson('Lisa', 10);
		$apu = new ApuPerson('Apu');
		$burns = new BurnsPerson('Burn');

		// Check TalkState after every CartoonPerson instance was created
		// echo "State: ". $homer->getTalkState();
		// echo "State: ". $bart->getTalkState();
		// echo "State: ". $apu->getTalkState();

		// List of converation between 2 persons
		echo "<h2>First conversation between Homer and Bart:</h2>";
		
		$homer->talksTo($bart);
		print_r($homer->chatInfo());
		print_r($bart->chatInfo());

		
		echo "<h2>Second conversation between Homer and Bart in ENCODED:</h2>";
		
		$homer->talksTo($bart, 'encode');
		print_r($homer->chatInfo());
		print_r($bart->chatInfo());


		echo "<h2>Conversation between Bart and Homer:</h2>";
		
		$bart->talksTo($homer);
		$bart->chatInfo();


		echo "<h2>Conversation between Apu and Homer:</h2>";
		
		$apu->talksTo($homer);
		$apu->chatInfo();

		
		echo "<h2>Conversation between Lisa and Marge:</h2>";
		
		$lisa->talksTo($bart);
		$lisa->chatInfo();

		echo "<h2>Apu and Burns use normal language:</h2>";
		/** 
		 * Also send a second param for language support. 
		 * 	false:  NO translation! They speak a nice language
		 */ 			
		$apu->talksTo($burns);
		
		print_r($apu->chatInfo());
		print_r($burns->chatInfo());


		// Check TalkState after talksTo is called in the class again
		// echo "State: ". $homi->getTalkState();
		// echo "State: ". $bart->getTalkState();
		// echo "State: ". $apu->getTalkState();
	}
}

?>