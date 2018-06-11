<!DOCTYPE html>
<!-- Written by Magnus Arsenovic Schei -->
<!-- Student number 315752 -->
<!-- This document is written as part of a school asignment -->
<!-- The content of this document is considered public domain -->
<head>
	<title> Oblig 1</title>
	<style type="text/css">
		table, tr, td {
			text-align: center;
			border: 1px solid black;
		}
		th {
			background-color: #98ff98;
		}
		td {
			height: 20px;
			width: 20px;
		}
		table td:first-child, table tr:nth-child(2) {
			background-color: #009900;
		}
		table {
			border-collapse: collapse;
		}
	</style>
	
</head>
<body>

	<p>
	<h3> OPPGAVE: 1.1. </h3>
		<?php
			$navn = "Anmia";
			$etternavn = "Ambraelle";
			$alder = 23;
			$adresse = "Drammensveien";
			$husnummer = 267;
			$telefon = 12481632;
			echo "$navn $etternavn er $alder år og bor i $adresse $husnummer. Hun har telfonnummer $telefon";
		?>
	</p>
	<p>
	<h3> OPPGAVE: 1.2. </h3>
		<?php
			$navn = "Anmia";
			$etternavn = "Ambraelle";
			$alder = 23;
			$adresse = "Drammensveien";
			$husnummer = 267;
			$telefon = 12481632;
			$kjonnb = "Han";
			$kjonna = "Hun";
			echo "$navn $etternavn er $alder år og bor i $adresse $husnummer. $kjonna har telfonnummer $telefon";
		?>
	</p>
	<p>
	<h3> OPPGAVE: 2. </h3>
		<?php
			$alder = -1;
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
	<h3> OPPGAVE: 3.1. </h3>
		<?php
			$tempratur = 20;
			if ($tempratur < 0) {
				echo "$tempratur grader er under frysepunktet til vann";
			} elseif ($tempratur == 0) {
				echo "$tempratur grader er frysepunktet til vann";
			} else {
				echo "$tempratur grader er over frysepunktet";
			}
		?>
	</p>
	<p>
	<h3> OPPGAVE: 3.2. </h3>
		<?php
			$tempratur = 24;
			if ($tempratur < 0) {
				echo "$tempratur grader er under frysepunktet til vann";
			} else if ($tempratur == 0) {
				echo "$tempratur grader er frysepunktet til vann";
			} else if ($tempratur >= 20 && $tempratur < 26) {
				echo "$tempratur grader er over frysepunktet til vann, det er også en behagelig sommertemperatur";
			} else {
				echo "$tempratur er over frysepunktet til vann";
			}
		?>
	</p>
	<p>
	<h3> OPPGAVE: 4.1. </h3>
			<?php
			// Hvis $i må brukes som variabel i løkker gjør jeg det, men for meg blir kodden uoversiktlig. 
			for ($i = 3; $i <= 100; $i += 3) {
				echo "$i ";
			}
		?>
	</p>
	<p>
	<h3> OPPGAVE: 4.1.1. </h3>
	Summering av output fra en For løkke og gjennomsnitt av samme output <br>
	<!-- Usikker om output er tenisk sett riktig, men usikker om et bedre begrep er tilgjengelig -->
		<?php
			$sumTreGanger = 0;

			echo "<p>";
			for ($i = 3; $i < 100; $i += 3) {
				echo "$i ";
				$sumTreGanger += $i;
			}
			echo "</p>";

			$gjennomsnittTreGanger = $sumTreGanger / 33;

			echo "Alle disse tallene blir til sammen $sumTreGanger <br/>";
			echo "Gjennomsnittet av disse tallene blir $gjennomsnittTreGanger <br>";
			echo "</p>";
		?> 
	</p>
	<h3> OPPGAVE: 4.1.2. </h3>
	Summering av output fra en For løkke og gjennomsnitt av samme output ved hjelp av en array <br>
			<?php
			// $tTimes samler tallene fra FOR loopen
			$tTimes = array();
			echo "<p>";
			for ($i = 3; $i < 100; $i += 3) {
				echo "$i ";
				$tTimes[] = $i;
			}

			echo "</p>";

			//Endelig formel for 
			$gjennomsnittTreGanger = array_sum($tTimes) / count($tTimes);

			echo "Alle disse tallene blir til sammen $sumTreGanger <br/>";
			echo "Gjennomsnittet av disse tallene blir $gjennomsnittTreGanger <br>";
			echo "</p>";
		?> 
	</p>
	<p>
	<h3> OPPGAVE: 4.2. </h3>
	<p>
	Variant av oppgave 4 med en While løkke istedenfor en For løkke.
	</p>
		<?php
			$i = 3;
			while ($i <= 100) {
				echo "$i ";
				$i += 3;
			}
		?>
	</p>
	<p>
	<h3> OPPGAVE: 5. </h3>
		<?php
			echo "<table>";
			// Tenkte det ville se bedre ut, men opprinelig var bakgrunnsfargen rosa...
			echo "<th colspan='10'> Den Lille Gangetabelen </th>";
			// $i1 = base number
			// $i2 = multiplier
				for ($i1 = 1; $i1 <= 10 ; $i1++) { 
					echo "<tr>";

					for ($i2 = 1; $i2 <= 10 ; $i2++) { 
						$sum = $i1 * $i2;
						if ($i1 / $i2 == 1 && $sum > 1) {
							echo "<td style='background-color: #0066ff'> <strong> $sum </strong> </td>";
						} else {
						echo "<td> <strong> $sum </strong> </td>";
						}
					}
					echo "</tr>";
				}
			echo "</table>";
		?>
	</p>
	<p>
	<h3> OPPGAVE: 6. </h3>
		<?php
			$money = 16968.93;
			$intrest = 5.35;
			// Rente ($intrest) basert på styringsrenten til Singapore som er 5,35%
			// Informasjonen er hentet fra DN den 24.8.16
			$years = 1;
			echo "Du starter med 16,968.93 kroner";
			echo "<ul>";

			for ($i = 1; $i <= 10; $i++) { 
				$years = $i;
				$intrestDecimal = $intrest / 100;
				$acumulative = $money * (1 + ($intrestDecimal * $years) );
				$acumulative = number_format($acumulative,2,".",",");
				echo "<li>Etter $years år med 5,35% rente har du $acumulative kroner</li>";
			}

			echo "</ul>";
		?>
	</p>
</body>
</html>