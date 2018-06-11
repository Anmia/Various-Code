<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Message Deleter </title>
	<style type="text/css">
		body {
			margin: 20px;
		}
		.tutorial {
			width: 80ch;
			padding: 5px;
		}
		.nav {
		top: 0;
		left: 0;
		position: fixed;
		}
		.nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 100%;
		}
		.nav a {
			font-size: 1.2em;
			display: block;
			padding: 10px;
			text-decoration: none;
			font-weight: bold;
		}
		.main {
			left: 200px;
			position: absolute;
		}
	</style>
</head>
<body>
	<div class="nav">
	<ul>
		<li> <a href="oblig-4-main.php"> Home </a></li>
		<li> <a href="oblig-4-file-view-v2.php"> See Messages </a> </li>
		<li> <a href="oblig-4-file-delete.php"> Delete Messages </a> </li>
	</ul>
	</div>
	<div class="main">
	<p class="tutorial">
	Specify which message to delete. <br>
	The message number is located at the end of each message.
	</p>
	<form action="" method="post">
		<input type="number" name="lineToRemove"> 
		<input type="submit" name="delete" value="Delete Line">
	</form>
	<p>
	<?php
		// La til en if setning for å sjekke at filen eksisterer. Før jeg la den til begynte en uendlig loop. 
		// Dette forhindrer også at hvis man prøver å slette en melding uten at filen eksisterer så blir ikke filen laget med en blank linje i begynelsen av filen. 
		if (file_exists("query.txt")) {
			if (isset($_POST['delete'])) {
			$fileDelete = file("query.txt");
			$delete = 1;
			$lineToRemove = $_POST['lineToRemove'];
			// For å ungå å bruke to input bokser brukes lineMin og lineMax variablene på denne måten.
			// Dette betyr at man slipper å regne ut hvilke linjer man ønsker å slette eller slette halve meldinger.
			$lineMin = ($lineToRemove * 9) - 8;
			$lineMax = $lineToRemove * 9;
			$keep = array();
				// Det finnes sikkert en bedre måte å gjøre dette på.
				// Her presses linjene som ikke skal slettes inn i et array.
				foreach ($fileDelete as $lineTwo) {
					if (!($delete >= $lineMin && $delete <= $lineMax)) {
						$keep[] = $lineTwo;
					}
				$delete++;
				}
				// Filen åpnes og innholdet slettes.
				$fileReplace = fopen("query.txt", "w+");
				flock($fileReplace, LOCK_EX);
				// Linjene som ble presset in arryet tidligere blir skrevet tilbake til filen.
				foreach ($keep as $lineTwo) {
					fwrite($fileReplace, $lineTwo);
				}
				flock($fileReplace, LOCK_UN);
				fclose($fileReplace);
			}

			$file = fopen("query.txt", "r") or die("Error!");
			$line = 1;
			while (!feof($file)) {
				if ($line % 9 == 0) {
					echo fgets($file) . "<strong>" . "Message:" . " " . $line/9 . "</strong> <br> <br>";
				} else {
					echo fgets($file) . "<br>";
				}
			$line++;
			}
			fclose($file);
		} else {
			echo "There are no messages.";
		}
	?>
	</p>
	</div>
</body>
</html>