<!DOCTYPE html>
<html>
	<head>
		<title>Word Processor</title>
	</head>
	<body>
		<?php
			if ($_REQUEST['submit'] == "Confirm"){
				// Capture the posted values
				$YourName = $_REQUEST['YourName'];
				$FavoriteWord = $_REQUEST['FavoriteWord'];
				
				// capture input values in simple Array
				$form = array ($YourName, $FavoriteWord);
				
				// capture input values in Associative array
				$input_form = array (
					"name"	=> $YourName,
					"word" 	=> $FavoriteWord
				);
				
				// list all favorite word that you entered
				$input_form = array (
					"name"	=> $YourName,
					"word" 	=> $FavoriteWord
				);
			}
			else {
				print("Error in the process!");
			}
		?>
		
		<h1>Hi <?php print("$input_form[name]!");?></h1>
		<p><?php print("Your favorite word is $input_form[word]");?></p>
	</body>
</html>