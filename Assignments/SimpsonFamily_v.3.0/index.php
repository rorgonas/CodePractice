<!Doctype html>
<html>
	<head>
		<title>PHP Assignment #2</title>
	</head>
	<body>
		<section>
			<h1>Assignment#2</h1>
			<h3>Task</h3>
			<p><strong>Create</strong> 5 new  classes that will inherit from CartoonPerson class.<br />
			The first class will be called HomerPerson, the second MargePerson, LisaPerson, BartPerson and ApuPerson.<br />
			You will have to make sure that one person can say 1 and only 1 quote --> so Homer would only say: "Why you little..."<br /><br />
			<strong>IMPORTANT:</strong> You CANNOT use any IF nor SWITCH statement for this assignment!
			<hr></hr>
			</p>
		</section>
		<section>
			<?php 
				require_once "classes/WriteMessages.php";
				
				// Do some Messaging
				WriteMessages::main();		

			?>
		</section>

	</body>
</html>
