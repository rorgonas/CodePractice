<?php 

	
	function changeJob($person, $newjob){
		$person['job'] = $newjob; // Change the person's job
		return $person;
	}
	
	function happyBirthay($person){
		++$person['age']; // Add 1 to the person's age 
		return $person;
	}
	
	$person1 = array(
		'name' => 'Tom',
		'job'  => 'Button-Pusher',
		'age'  => 34
	);
	
	$person2 = array(
		'name' => 'John',
		'job'  => 'Lever-Puller',
		'age'  => 41
	);
	
	// Output statring values for people
	echo $person1['name']." is a ".$person1['job']."<br />";
	echo $person2['name']." is a ".$person2['job']."<br />";
	
	echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
	echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>"; 
	
	// Tom got a Promotion and had a Birthday
	$person1 = changeJob($person1, 'Box-Mover');
	$person1 = $person1 = happyBirthay($person1);
	
	// Jonh had a birthday
	$person2 = happyBirthay($person2);
	
	// Output New values for people
	echo $person1['name']." has a new job:  ".$person1['job']."<br />";
	echo "Happy Birthady " .$person1['name']. "! You are now: " .$person1['age'] ."<br />";
	echo $person2['name']." was not promoted! <br />";
	echo "Happy Birthady " .$person2['name']. "! You are now: " .$person2['age'] ."<br />";
	
	echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
	echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>"; 
	
?>