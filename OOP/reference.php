
<?php 

	class Person
	{
		public function __construct()
		{
			// empty
		}
	
	}
	
	$joe = new Person();
	echo $joe->sex = 'male';
	
	$betty = clone $joe;
	echo $betty->sex = 'female' . "<br />";
	
	echo $joe->sex;

?>