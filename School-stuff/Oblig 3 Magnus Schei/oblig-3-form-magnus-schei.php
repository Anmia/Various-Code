<!DOCTYPE html>
<html>
<head>
	<title> Bekreftning av hendvendelse </title>
	<style type="text/css">
		p:nth-of-type(odd) {
			background-color: lightgrey;
			width: 30%
		}
	</style>
</head>
<body>
	<p>
		<a href="oblig-3-magnus-schei.php"> Tilbake </a>
	</p>
	<p>
		<?php
			$name = $_POST['name'];
			$emailFrom = $_POST['email'];
			$telephone = $_POST['telephone'];
			$medlem = $_POST['member'];
			$querytype = $_POST['querytype'];
			$query = $_POST['query'];

			echo "<div>";
			echo date("d.m.Y") . "<br>";
			echo "<p>" . "Navn:" . "<br>";
			echo "<strong>" . $name . "</strong>" . "</p>";
			echo "<p>" . "Epost:" . "<br>";
			echo "<strong>" . $emailFrom . "</strong>" . "</p>";
			if (strlen($telephone == 8)) {
				echo "<p>" . "Telefon:" . "<br>";
				echo "<strong>" . $telephone . "</strong>" . "</p>";
			}
			echo "<p> Medlem: " . "<strong>" . $member . "</strong> </p>";
			echo "<p> Type hendevendelse: <strong> " . $querytype . "</strong> </p>";
			echo "Din hendevendelse:" . "<br>";
			echo "<p widt='120ch'>" . $query . "</p>";
			echo "</div>";
						

			$subject = "Henvendelse fra $name";

			$mail = "Hendvendelse \n \n";
			$mail .= "Navn: " . $name . "\n \n";
			$mail .= "Medlem: " . $medlem . "\n \n";
			$mail .= "Email: " . $emailFrom . "\n \n";
			if (strlen($telephone == 8)) {
				$mail .= "Telephone: " . $telephone . "\n \n";
			}	
			$mail .= "Hendvendelse: " . wordwrap($query, 60) . "\n \n";
			$mail .= "Hendvendelse sent " . date('h:i  d.m.Y');

			$emailTo = "example@place.com";
			$header = "From: CR4N0";

			mail($emailTo, $subject , $mail, $header);
		?>	
	</p>
</body>
</html>