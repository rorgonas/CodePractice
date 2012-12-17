<?php 

	class Persons
	{
		
		private $name;
		private $job;
		private $age;
		
		public function __construct($name, $job, $age)
		{
			$this->name = $name;
			$this->job = $job;
			$this->age = $age;
		}		
		
		public function __toString(){
			return "Hi " .$this->name ."! What can I do for you?";
		}
		
		public function changeJob($newjob){
			$this->job = $newjob; // Change the person's job			
		}
	
		public function happyBirthay(){
			++$this->age; // Add 1 to the person's age 
		}
	
	}		
		
	// Tom got a Promotion and had a Birthday
	$person1 = new Persons('Tom', 'Button-Pusher', '34');
	$person2 = new Persons('John', 'Lever-Puller', '41');
	
	// Output statring values for people
	echo "<pre>Person 1: " .print_r($person1, TRUE). "</pre>";
	echo "<pre>Person 2: " .print_r($person2, TRUE). "</pre>";
	
	$person1 -> changeJob('Box-Mover');
	$person1 -> happyBirthay();
	$person2 -> happyBirthay();
	
	// Output New values for people
	echo "<pre>Person 1: " .print_r($person1, TRUE). "</pre>";
	echo "<pre>Person 2: " .print_r($person2, TRUE). "</pre>";
	
	echo $person2;
	
	
	
?>