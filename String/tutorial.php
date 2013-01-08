<!DOCTYPE html>
<html>
	<head>
		<title>String Manipulation</title>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<form>			
			<fieldset>
				<legend>String Functions</legend>
				<select name="action">
					<option value ="">What to do ...</option>
					<option value ="concat">Concat</option>
					<option value ="length">Get length</option>
					<option value ="split">Split</option>
				</select>				
			</fieldset>
		</form>
		<div id="hint"></div>
		
		<?php 

			/**
			 * Build class to showcase diff predefined String functions
			 */
			class StringFunctions {
				
				private $name;
				private $syntax;
				private $example;
				private $code_sample;

				public function __construct() {
					// todo
				}

				/**
				 * Display template
				 * componenets: name, syntax, example
				 */
				public function display() {					
					echo $this->name;
					echo $this->syntax;
					echo $this->example;
				}


			}
		?>
		<!--?php 
			$text = "Some text to work with";
			echo $text;

			echo "<br /><h1>Concatenation</h1>";
			$txt1 = "House";
			$txt2 = "keeper";
			echo "We have a new sentence: ".$sentence = $txt1. " " .$txt2;

			echo "<br /><h1>Calculate string length</h1>";
			echo "First world has ".strlen($txt1)." characters";


			echo "<br /><h1>Search in string</h1>";
			echo "Second string starts at ".strpos($sentence, $txt2)." position";

			echo "<br /><h1>Convert String into Array</h1>";
			echo "House Array: ";
			print_r (str_split("House"));

			echo "<br />House Array by 2: ";
			print_r(str_split("House", 2));

			echo "<br />String to Array: ";
			print_r(str_split("House keeper"));

			echo "<br /><h1>Explode a string into an array</h1>";
			print_r(explode(" ", $sentence));
			
			echo "<br /><h1>Diff print formats</h1>";
			echo "<br /><code>printf(format, arg1, arg2, ...argn)</code>"."<br />";
			$str = "Hello"			;
			$number = 353.33;
			$expo = 1.2e+2;
			printf("%s world! Day numbexer %u", $str, $number);
			printf("%s world! Day number %.2f", $str, $number);
			printf("%s world! Day number %.1e", $str, $expo);

			echo "<br /><code>fprintf(stream,format, arg1, arg2, ...argn)</code>"."<br />";
			$file = fopen("test.txt", "w");
			echo fprintf($file, "%s world. Update number %u", $str, $number);

			echo "<br /><code>vfprintf(stream,format, argarray)</code>"."<br />";
			$num1 = 123;
			$num2 = 543;
			$argarray = array($num1, $num2);
			$file = fopen("test.txt","w");
			vfprintf($file,"%.2f\n%.2f", $argarray);

			echo "<h1><code>trim()</code></h1>";
			$long_string = " foo bar taxodo buzz ";
			echo "Start trim'".trim($long_string)."'end trim";

			echo "<h1><code>substr_replace(string, replacement, start)</code></h1>";			
			echo substr_replace("Hello world", "earth", 6);

			echo "<h1><code>implode(glue, pieces) or join()</code></h1>";
			$arr = array('Hello','World!','Beautiful','Day!');
			echo implode(" ",$arr);
			echo join(" ",$arr);

			echo "<h1><code>explode(delimiter, string)</code></h1>";
			$str = "Hello World! Beautiful Day!";
			print_r(explode(" ", $str));

			echo "<h1><code>md5(str)</code></h1>";
			$str1 = "Hello World! Beautiful Day!";
			echo md5($str1);
			echo "<br />";

			$filename = "test.txt";
			$md5file = md5_file($filename);
			echo "File fingerprint is: ".$md5file;
			// Store the MD5 hash of "test.txt" in a new ile:
			file_put_contents("md5file.txt",$md5file);

			// Test if the test.txt file was changed
			$md5file = file_get_contents("md5file.txt");
			if (md5_file("test.txt") == $md5file) {
				echo "The file is ok";
			}
			else {
				echo "The file has been chnaged";
			}

			echo "<h1>setlocale(category, locale)</h1>";
			echo setlocale(LC_ALL,"En-Us");
			echo "<br />";
			echo setlocale(LC_ALL,NULL);

		?-->
	</body>
</html>