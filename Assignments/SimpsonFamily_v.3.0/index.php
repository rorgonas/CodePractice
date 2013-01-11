<?php 
	require_once "classes/WriteMessages.php";
?>

<!Doctype html>
<html>
	<head>
		<title>PHP Assignment #3</title>
	</head>
	<body>
		<section>
			<h1>Assignment#3</h1>
			<h3>Task</h3>
			<ol>
				<li>Given the Simpsons family classes (cf. assignment 2): I would like Homer to start speaking a crazy language<br/>
					Transform his quote so that every lettre 'e' is replace by 'y' by scripting. I suggest you add a transform() function that does it.</li>
				<li>Given the new crazy language, I want you to split every word as an array (using explode() function). Words are separated by spaces.<br />
					 Next, for each word, I want every first AND last character to disappear. <br />
					 <strong>Ex:</strong> "elephant" becomes "lyphan"<br />
					Then I need you to output the number of element within the array --> i.e the number of words said by Homer.</li>
				<li>Finally create a public function that will output the content of the array that you build in point 2) after having put all characters in capital cases<br />
				Use the print_r() function for the output.</li>
			</ol>
			<hr></hr>
			</p>
		</section>
		<section>
			<?php 
				// Do some Messaging
				WriteMessages::main();		
			?>
		</section>

	</body>
</html>

