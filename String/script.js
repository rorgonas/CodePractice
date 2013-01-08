window.onload = function() {
	function showHint() {
				
		// var output = document.getElementById("hint").innerHTML;
		var select = document.getElementsByTagName("select")[0];
		var option =  select.value;
		var xmlhttp = setXMLHttp();
		
		// Output response from server
		xmlhttp.onreadystatechange = responseAjax; 	
		xmlhttp.open("GET", "request.php?action=" + option, true);
		xmlhttp.send();

		function setXMLHttp() {
			return (window.XMLHttpRequest)? new XMLHttpRequest() : ActiveObject("Microsoft.XMLHTTP");
		}

		function responseAjax() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("hint").innerHTML = xmlhttp.responseText;				
			}
		}
	};

	document.getElementsByTagName("select")[0].onchange = showHint;
}