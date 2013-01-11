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

		// Check TalkState after every CartoonPerson instance was created
		// echo "State: ". $homer->getTalkState();
		// echo "State: ". $bart->getTalkState();
		// echo "State: ". $apu->getTalkState();

		// List of converation between 2 persons
		echo "<pre>First conversation between Homer and Bart:</pre>";
		$homer->talksTo($bart);
		$homer->getMessageInfo();

		
		echo "<pre>Second conversation between Homer and Bart:</pre>";
		$homer->talksTo($bart);
		$homer->getMessageInfo();
		$bart->getMessageInfo();


		// echo "<pre>Conversation between Bart and Homer:</pre>";
		// $bart->talksTo($homer);
		//$bart->getMessageInfo();


		// echo "<pre>Conversation between Apu and Homer:</pre>";
		// $apu->talksTo($homer);
		//$apu->getMessageInfo();

		
		// echo "<pre>Conversation between Lisa and Marge:</pre>";
		// $lisa->talksTo($bart);
		//$lisa->getMessageInfo();


		// Check TalkState after talksTo is called in the class again
		// echo "State: ". $homi->getTalkState();
		// echo "State: ". $bart->getTalkState();
		// echo "State: ". $apu->getTalkState();
	}
}

?>