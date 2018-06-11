<?php 
	session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> File Viewer </title>
	<style type="text/css">
		body {
			margin: 20px;
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
			z-index: 2;
		}
	</style>
</head>
<body>
	<div class="nav">
	<ul>
		<li> <a href="oblig-4-main.php"> Home </a></li>
		<li> <a href="oblig-4-file-view.php"> See Messages </a> </li>
		<li> <a href="oblig-4-file-delete-v2.php"> Delete Messages </a> </li>
	</ul>
	</div>
	<p class="main">
	<?php
		if (file_exists("queryv2.txt")) {
		$file = fopen("queryv2.txt", "r") or die("Cannot open file or file does not exist!");
		$line = 1;
		while (!feof($file)) {
			echo fgets($file) . "<br>";
		}
		fclose($file);
	} else {
		echo "There are no messages.";
	}
	?>
	</p>
</body>
</html>