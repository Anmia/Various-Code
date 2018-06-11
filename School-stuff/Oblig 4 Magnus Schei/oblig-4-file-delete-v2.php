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
		<li> <a href="oblig-4-file-view.php"> See Messages </a> </li>
		<li> <a href="oblig-4-file-delete.php"> Delete Messages </a> </li>
	</ul>
	</div>
	<div class="main">
	<p class="tutorial">
	Specify which line to delete.
	</p>
	<form action="" method="post">
		<input type="number" name="lineToRemove"> 
		<input type="submit" name="delete" value="Delete Line">
	</form>
	<p>
	<?php
		if (file_exists("queryv2.txt")) {
			if (isset($_POST['delete'])) {
			$fileDelete = file("queryv2.txt");
			$delete = 1;
			$lineToRemove = $_POST['lineToRemove'];
			$keep = array();
				foreach ($fileDelete as $lineTwo) {
					if (!($delete == $lineToRemove)) {
						$keep[] = $lineTwo;
					}
				$delete++;
				}
				// Filen åpnes og innholdet slettes.
				$fileReplace = fopen("queryv2.txt", "w+");
				flock($fileReplace, LOCK_EX);
				// Linjene som ble presset in arryet tidligere blir skrevet tilbake til filen.
				foreach ($keep as $lineTwo) {
					fwrite($fileReplace, $lineTwo);
				}
				flock($fileReplace, LOCK_UN);
				fclose($fileReplace);
			}

			$file = fopen("queryv2.txt", "r") or die("Error!");
			while (!feof($file)) {
				echo fgets($file) . "<br>";
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