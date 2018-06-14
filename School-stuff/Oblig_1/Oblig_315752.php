<!DOCTYPE html>
<html lang="no">
<body>
	<p>
	OPPGAVE 1 <br>
		<?php
			$navn = "Per";
			$etternavn = "Hansen";
			$alder = 23;
			$adresse = "Osloveien";
			$husnummer = 23;
			$telefon = 12345678;
			echo "$navn $etternavn er $alder år og bor i $adresse $husnummer. Han har telfonnummer $telefon";
		?>
	</p>
	<p>
	OPPGAVE 1b <br>
		<?php
			$navn = "Per";
			$etternavn = "Hansen";
			$alder = 23;
			$adresse = "Osloveien";
			$husnummer = 23;
			$telefon = 12345678;
			$kjonnb = "Han";
			$kjonna = "Hun";
			echo "$navn $etternavn er $alder år og bor i $adresse $husnummer. $kjonnb har telfonnummer $telefon";
		?>
	</p>
	<p>
	OPPGAVE 2 <br>
		<?php
			$alder = 1;
			if ($alder >= 105) {
				echo "Du er 105 år eller mer og et <strong> mirakel </strong>";
			} elseif ($alder >= 67) {
				echo "Du er 67 år eller eldre og <strong> pansjonist </strong>";
			} elseif ($alder >= 18) {
				echo "Du er 18 år eller eldre og <strong> myndig </strong>";
			} elseif ($alder >= 0 && $alder < 18) {
				echo "Du er mindre enn 18 år og <strong> umyndig </strong>";
			} elseif ($alder < 0) {
				echo "Du er under 0 og <strong> ikke engang påtenkt </strong>";
			} 
			    
		?>
	</p>
	<p>
	OPPGAVE 3 TEST <br>
		<?php
			$tempratur = 2;
			if ($tempratur < 0) {
				echo "$tempratur grader er under frysepunktet til vann";
			} elseif ($tempratur = 0) {
				echo "$tempratur grader er frysepunktet til vann";
			} elseif ($tempratur > 0 && $tempratur < 20 && $tempratur > 25) {
				echo "$tempratur grader er over frysepunktet";
			}
			elseif ($tempratur >= 20 && $tempratur <= 25) {
				echo "<br> Det er behagelig sommertemperatur";
			}
		?>
			<p> 
	OPPGAVE 3a TEST <br>
		<?php
			$tempratur = 9;
			if ($tempratur < 0) {
				echo "$tempratur grader er under frysepunktet til vann";
			} elseif ($tempratur = 0) {
				echo "$tempratur grader er frysepunktet til vann";
			} else {
				echo "$tempratur grader er over frysepunktet";
			}
		?>
	</p>
	<p> 
	OPPGAVE 3b TEST <br>
		<?php
			$tempratur = 9;
			if ($tempratur < 0) {
				echo "$tempratur grader er under frysepunktet til vann";
			} elseif ($tempratur = 0) {
				echo "$tempratur grader er frysepunktet til vann";
			} else {
				echo "$tempratur grader er over frysepunktet";
			}
		?>
	</p>
	<p>
	OPPGAVE 4 <br>
		<?php
			for ($treGanger = 0; $treGanger < 101; $treGanger = $treGanger + 4) {
				echo "<p> $treGanger </p>";
			}
		?>
	</p>
	<p>
	OPPGAVE 4b
		<?php
			//$threeTimes = 3
			//while ($threeTimes <= 100) {
			//	echo "<p> {$threeTimes} </p>";
			//}
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
			// Rente basert på styringsrenten til Singapore som er 5,35%
			// Informasjonen er hentet fra DN den 24.8.16
			$years = 1;
			echo "Du starter med 8.968 kroner";
			for ($years = 1; $years <= 10; $years = $years + 1) { 
				$intrestDecimal = $intrest / 100;
				$acumulative = $money * (1 + ($intrestDecimal * $years) );
				echo "<p>Etter $years år med 5,35% rente har du $acumulative kroner</p>";
			}
		?>
	</p>
	<p>
		<?php

		?>
	</p>
</body>
</html>