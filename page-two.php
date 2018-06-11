<?php
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
 	$navn = $_SESSION['navn'];
	$forerkort = $_SESSION['forerkort'];
	$dykk = $_SESSION['dykk'];
	$svomming = $_SESSION['svomming'];
	$undervann = $_SESSION['undervann'];

	$text = "Navn: " . $navn . "\r\n";
	$text = "Navn: " . $navn . "\r\n";
	$text = "Navn: " . $navn . "\r\n";
	$text = "Navn: " . $navn . "\r\n";

	if (file_exists("logg.txt")) {
		$file = fopen("logg.txt", "a");
		fwrite($file, $text);
		fclose($file);
	} else {
		$file = fopen("logg.txt", "w");
		fwrite($file, $text);
		fclose($file);
	}
	
 ?>
</body>
</html>