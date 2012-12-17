<!DOCTYPE html>
<html>
	<head></head>
	<body>
		
	<form action="function.php" method="POST">
		<p>Calculate how much you have to payback weekly</p>
		Enter loan: <input type="text" name="loan" required />
		<input type="submit" name="submit" value="Confirm" />
	</form>
		
	<?php 	
		$intereset_rate = .14;
		if ($_REQUEST['submit'] == 'Confirm'){
			$cost = $_REQUEST['loan'];
			if (!is_numeric($cost)){
				print ("Please enter a Number!");
			}
		}
		
		function ClculateWeeklyLoan($cost, $interest_rate){
		
			return $weekly_payment = $cost * $interest_rate;
		}
		
		print ("<p>You own me ".ClculateWeeklyLoan($cost, $intereset_rate)."</p>")
		
	?>
	
	</body>
</html>