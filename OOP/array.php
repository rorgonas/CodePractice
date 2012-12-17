<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<?php
			$animal = array (
				"name" => "mici",
				"type" => "buldog",
				"age"  => "5"
			);
			
			$animals = array (
				array (
					"name" => "mici",
					"type" => "buldog",
					"age"  => "5"
				),
				array (
					"name" => "fuzz",
					"type" => "spitx",
					"age"  => "1"
				),
				array (
					"name" => "buzz",
					"type" => "spider",
					"age"  => "7"
				)
			);
			print($animals[1]["type"]);
			echo count($animals);
		?>
		
		<ul>			
			<h2>Favorite animals</h2>
			<?php 
				$lines = count($animals);
				for ($i = 0; $i < $lines; $i++){
					print ("<li>".$animals[$i]["name"]."</li>");
				}
			?>
		</ul>
	</body>
</html>