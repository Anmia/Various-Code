<?php
session_start();
?>
<html lang="en">
<html>
<head>
	<title> Confirm Message </title>
	<style type="text/css">
		body {
			margin: 20px;
		}
		td {
			padding: 5px;
		}
		.warn {
			margin: 100px;
		}
		.warning {
			width: 80ch;
			font-size: 1.2em;
		}
	</style>
</head>
<body>
	<p>
	<?php
		if (isset($_POST['submit'])) {
			$name = $_SESSION["name"] = $_POST['name'];
			$email= $_SESSION["email"] = $_POST['email'] ;
			$phone = $_SESSION["phone"] = $_POST['phone'];
			$member = $_SESSION["member"] = $_POST['member'];
			$querytype = $_SESSION["querytype"] = $_POST['querytype'];
			$query = $_SESSION["query"] = $_POST['query'];

			echo "<p class='info'> Make sure the information below is correct before clicking Confirm. </p>";
			echo "<p>";
			echo "<table>";
			echo "<tr> <td>" . "Name:" . "</td> <td> <strong>" . $name . "</strong> </td> </tr>";
			echo "<tr> <td>" . "Email:" . "</td> <td> <strong>" . $email . "</strong> </td> </tr>";
			if (strlen($phone) == 8) {
				echo "<tr> <td>" . "Telephone" . "</td> <td> <strong>" . $phone . "</strong> </td> </tr>";
			} else {
				echo "<tr> <td>" . "Telephone" . "</td> <td> <strong>" . "Not set" . "</strong> </td> </tr>";	
			}
			echo "<tr> <td>" . "Member:" . "</td> <td> <strong>" . $member. "</strong> </td> </tr>";
			echo "<tr> <td>" . "Type:" . "</td> <td> <strong>" . $querytype . " </strong> </td> </tr>";
			echo "<tr> <td colspan='4'>" . wordwrap($query, 60) . "</td> </tr>";
			echo "</table>";
			echo "</p>";
			
			echo "<p>";
			echo "<form action='oblig-4-mail.php'>";
			echo "<input type='submit' name='confirm' value='Confirm'>";
			echo "</form>";
			echo "</p>";
		} else {
			// Innholdet under er ment for å ungå crash og feilmeldinger når siden åpnes uten å gå gjennom forsiden.
			echo "<div class='warn'>";
			echo "<p class='warning'>";
			echo "If you managed to get here and you are seeing this, please remain calm!";
			echo "<br>";
			echo "If you panic the hamsters running things will also panic.";
			echo "<br>";
			echo "If they panic things happen...";
			echo "<br>";
			echo "Bad things...";
			echo "<br>";
			echo "Realy bad things that make stepping on a lego seem like a preferable option.";
			echo "</p>";

			echo "<p class='warning'>";
			echo "That is if they don't just go on strike again! They do it regularly, but we manage to keep things going, but when they panic...";
			echo "<br>";
			echo "When they panic they go wild! Not just good old wild, but pitchfork and torches wild!";
			echo "<br>";
			echo "As long as you aren't eating a banana that shouldn't be happening...";
			echo "<br>";
			echo "Oh.. Oh no... Your'e eating a banana aren't you!";
			echo "<br>";
			echo "<strong> PUT IT AWAY! </strong>";
			echo "</p>";

			echo "<p class='warning'>";
			echo "Please go back to <a href='oblig-4-main.php'> Main Page </a>";
			echo "<br>";
			echo "Please just do as you are told...";
			echo "<br>";
			echo "The hamsters are getting anxious!";
			echo "</p>";
			echo "</div>";
		}
	?>
	</p>
	
</body>
</html>