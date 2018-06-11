<!DOCTYPE html>
<html lang="no">
<body>
	<p>
	OPPGAVE 1 <br>
		

		<?php
		// basic use of PHP within HTML to set variables and print them
			$fname = "Andrew";
			echo $fname;
			$lname = "Smith";
			$age = 23;
			$adress = "31 Langford Lane, Oxfordshire";
			$husnummer = 23;
			$tlf = 12345678;
			echo "$fname $lname is $age years old and lives at $adress. Their phone number is $tlf";
			echo "string";
		?>
	</p>
	<p>
	OPPGAVE 2 <br>
		<?php
		// basic if else structure
			$alder = 1;
			if ($alder >= 105) {
				echo "You are a 105 or older and quite the <strong> miracle </strong>";
			} elseif ($alder >= 67) {
				echo "You are 67 or older and most likely an <strong> OAP </strong>";
			} elseif ($alder >= 18) {
				echo "You are 18 or older and <strong> of age </strong>";
			} elseif ($alder >= 0 && $alder < 18) {
				echo "You are 18 or younger and <strong> not of age </strong>";
			} elseif ($alder < 0) {
				echo "You are 0 or younger and <strong> it is amzing that you can in fact write or use a computer </strong>";
			} 
			    
		?>
	</p>
	<p>
	OPPGAVE 4 <br>
		<?php
		// for loop
			for ($treGanger = 0; $treGanger < 101; $treGanger = $treGanger + 4) {
				echo "<p> $treGanger </p>";
			}
		?>
	</p>
	<p>
	OPPGAVE 4b
		<?php
			$threeTimes = 3;
			while ($threeTimes <= 100) {
				echo "<p> {$threeTimes} </p>";
				$threeTimes += 3;
			}
		?>
	</p>
	<p>
	OPPGAVE 5 <br>
		<?php
			echo "<table>";
				for ($baseNumber = 1; $baseNumber < 10 ; $baseNumber = $baseNumber +1) { 
					echo "<tr>";

					for ($multiplyingNumber = 1; $multiplyingNumber < 10 ; $multiplyingNumber = $multiplyingNumber + 1) { 
						$sumNumber = $baseNumber * $multiplyingNumber;
						echo "<td> $sumNumber </td>";
					}
					echo "</tr>";
				}
			echo "</table>";
		?>
	</p>
	<p>
	OPPGAVE 6 <br>
		<?php
			$money = 8968;
			$intrest = 5.35;
			// Rates are based on those for Singapore which were 5,35%
			// source is DagensNaringsliv - 24.8.16
			$years = 1;
			echo "You start with 8.968 pounds";
			for ($years = 1; $years <= 10; $years = $years + 1) { 
				$intrestDecimal = $intrest / 100;
				$acumulative = $money (1 + ($intrestDecimal * $years) );
				echo "<p>after $years years with 5,35% intrest you will have $acumulative pounds</p>";
			}
		?>
	</p>
	<p>
		<?php

		?>
	</p>
</body>
</html>