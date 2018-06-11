<!DOCTYPE html>
<html>
<head>
	<title> Oblig 3 </title>
	<!-- Written by Magnus Arsenovic Schei -->
	<!-- Student number 315752 -->
	<!-- This document is written as part of a school asignment -->
	<!-- The content of this document is considered public domain -->
	<style type="text/css">
		body {
			margin-left: 50px;
		}
		input[type=text], input[type=email] {
			border: 1px solid black;
			padding: 5px;
		}
		textarea {
			margin-right: auto;
			margin-left: auto;
			width: 300px;
			border: 1px solid black;
			padding: 5px;
		}
		div {
			padding: 25px 50px;
			width: 50%;
		}
		label {
			padding-top: 10px
		}
		input[type=submit] {
			padding: 5px;
			border-radius: 3px;
			border: 0.5px solid black;
		}
		.bold {
			font-weight: bold;
			color: red;
		}
		footer {
			padding: 30px;
			text-align: center;

		}
	</style>
</head>
<body>
	<header> <h1> Oblig 3 </h1> </header>
	<p>
	<h3> Oppgave 1 </h3>
		<?php
			$varer = array(
				'Brød' => 21.90,
				'Melk' => 18.50,
				'Skinke' => 14.90,
				'Kaviar' => 12.95,
				);
			foreach ($varer as $key => $value) {
				echo $key . " koster " . $value . " kroner <br>";
			}
		 ?>
	</p>
	<p>
	<h3> Oppgave 2 </h3>
		<?php
		 	$num = array(1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6);
		 	echo " <h5> a) </h5>";

		 		function countNum($innput) {
		 			$many = 0;
		 			foreach ($innput as $key) {
		 				$many++;
		 			}
		 			echo "Det er " . $many . " tall i arrayet.";
		 		} 
		 		countNum($num);

		 	echo "<h5> b) </h5>";

		 		function sumNum($innput) {
		 			$sum = 0;
		 			$length = 0;
		 			foreach ($innput as $key) {
		 				$length++;
		 			}
		 			for ($i=0; $i < $length; $i++) { 
		 				$sum = $sum + $innput[$i];
		 			}

		 			echo "Summen av tallene i arrayet er " . $sum;
		 		}
		 		sumNum($num);

		 	echo "<h5> c) </h5>";
		 		function findNum($innput, $numToFind) {
			 		$length = 0;
			 		foreach ($innput as $key) {
			 			$length++;
			 		}
			 		$amount = 0;
			 		$yes = true;
				 		for ($i=0; $i < $length; $i++) { 
		 				if ($innput[$i] == $numToFind) {
		 					$amount++;
		 				} 
		 			}
		 			echo "Tallet " . $numToFind . " finnes " . $amount . " ganger i arrayet.";
				}
				findNum($num, 4);
			
		 	echo "<h5> d) </h5>";
		 		function ifNum($innput, $what) {
		 			$length = 0;
			 		foreach ($innput as $key) {
			 			$length++;
			 		}
		 			$no = false;
		 			for ($i = 0; $i < $length; $i++) { 
		 				if ($what == $innput[$i]) {
		 					$no = true;
		 				}
		 			}
		 			if ($no == true) {
		 				echo "Tallet finnes i arrayet.";
		 			} else {
		 				echo "Tallet finnes ikke i arrayet.";
		 			}
		 		}
		 		ifNum($num, 9);

		 	echo "<h5> e) </h5>";
		 		if (in_array(5, $num)) {
		 			echo "Tallet finnes i arrayet.";
		 		} else {
		 			echo "Tallet finnes ikke i arrayet.";
		 		}

			
		 	echo "<h5> f) </h5>";
				function reverseNum($innput) {
					rsort($innput);
					echo join(", " , $innput);
				}
				reverseNum($num);

//			echo "<h5> f) v.2 </h5>";
//
//				function reverse($innput) {
//					$thelength = 0;
//					foreach ($innput as $key) {
//						$thelength++;
//					}
//					for ($i = 0; $i < $thelength ; $i++) { 
//						for ($j = 0; $j < $thelength; $j++) { 
//							if ($innput[$i] > $innput[$j]) {
//								$temp = $innput[$i];
//								$innput[$i] = $innput[$j];
//								$innput[$j] = $temp;
//							}
//						}
//					}
//					for ($i=0; $i < $thelength; $i++) { 
//						echo $innput[$i] . " ";
//					}
//				}
//				reverse($num)
		 ?>
	</p>
	<p>
	<h3> Oppgave 3 </h3>
	<form action="oblig-3-form-magnus-schei.php" method="post">
			<h5> Alle felter merket med <font class="bold"> * </font> må fylles ut! </h5>
			<label for="name"> Navn </label> <font class="bold"> * </font> <br>
			<input type="text" name="name" id="name" required> <br> <br>

			<label for="email"> Epost </label> <font class="bold"> * </font> <br>
			<input type="email" name="email" id="email"  required> <br> <br>

			<label for="telephone"> Telefon (8 siffer) </label> <br>
			<input type="text" name="telephone" id="telephone" pattern="[0-9]{8}"> <br> <br>

			<label for="member"> Er du medlem av CR4N0? </label> <font class="bold"> * </font> <br>
			<input type="radio" name="member" value="Ja" id="yes"> <label for="yes"> Ja </label> 
			<input type="radio" name="member" value="Nei" id="no"> <label for="no"> Nei </label> <br> <br>

			<label for="querytype"> Hva gjelder henvendelsen? </label> 
			<select name="querytype" id="querytype" required>
				<option> Velg...</option>
				<option value="Levering"> Levering </option>
				<option value="Produkter"> Produkter </option>
				<option value="Medlemskap"> Medlemskap </option>
				<option value="Personvern"> Personvern </option>
				<option value="Klage"> Klage </option>
				<option value="Annet"> Annet </option>
			</select> <font class="bold"> * </font>  <br> <br>
			
			<label for="query"> Skriv din hendvendelse under</label> <font class="bold"> * </font> <br>
			<textarea placeholder="Skriv ditt spørsmål her. Max 400 tegn..." name="query" id="query" wrap="hard" maxlength="400" required></textarea> <br> <br>

			Sjekk at informasjonen du har fylt inn stemmer før du trykker send! <br>
			<input type="submit" name="submit" value="Send">
	</form>
		<?php
		 
		 ?>
	</p>
	<footer>
		Skrevet av: Magnus A.S. (315752) <br>
		Siden er ikke copyrighted.
	</footer>
</body>
</html>