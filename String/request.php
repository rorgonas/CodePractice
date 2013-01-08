<?php 

	$output = '';

	if ($_GET["action"]) {
		$sample = $_GET["action"];
	}


	// Get XML tree object
	$xmlObj = new DOMDocument();
	$xmlObj->load("string.xml");

	// Dump XML tree into a string: saveXML()
	$xmlDoc = $xmlObj->saveXML();
	//echo $xmlDoc;

	// Parse XML string
	$root = new SimpleXMLElement($xmlDoc);
	$function = $root->children();

	foreach ($function as $node) {
		
		$idx = 1;

		if ($sample == $node->name) {
			$output .= "<strong>Function: </strong>".$node->name."<br />";
			$output .= "<strong>Syntax: </strong>".$node->syntax."<br />";
			$output .= "<strong>Description: </strong>".$node->description."<br />";
			
			$examples = $node->code->children();
			
			foreach ($examples as $code) {
				$output .= "<strong>Code Sample ".$idx++. ": </strong>".$code->sample."<br />";
			}
			
		}		
	}

	echo $output;

?>