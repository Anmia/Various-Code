<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
	<?php
		// Tried using the GET method, but it didn't seem to work propperly.
		// Used POST method instead which solved the problem.
		$numOne = $_POST['numOne'];
		$numTwo = $_POST['numTwo'];
		if (isset($_POST['add'])) {
			$sumAdd = $numOne + $numTwo;
			echo "$sumAdd";

		} else if (isset($_POST['sub'])) {
			$sumSub = $numOne - $numTwo;
			echo "$sumSub";

		} else if (isset($_POST['mul'])) {
			$sumMul = $numOne * $numTwo;
			echo "$sumMul";
		} else if (isset($_POST['div'])) {
			$sumDiv = $numOne / $numTwo;
			echo "$sumDiv";
		}
	?>
	</p>
	<p>
		<a href="Oblig_2_315752.php"> <strong> BACK </strong> </a>
	</p>
</body>
</html>