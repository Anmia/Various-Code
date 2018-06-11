<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Mail </title>
	<style type="text/css">
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
			top: 100px;
			left: 200px;
			position: absolute;
		}
		.message {
			font-size: 2em;
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
	<div class="main">
	<p class="message">
		Thank you for messaging us. <br>
		We will reply to your message as soon as possible!
	</p>
	<?php
	if (isset($_SESSION["member"])) {
		
			$name = $_SESSION["name"];
			$email= $_SESSION["email"];
			$phone = $_SESSION["phone"];
			$member = $_SESSION["member"];
			$querytype = $_SESSION["querytype"];
			$query = $_SESSION["query"];

			$subject = "Message from $name";

			$mail = "Name:" . " " . $name . "\n \n";
			$mail .= "Email:" . " " . $email . "\n \n";
			if (strlen($phone) == 8) {
				$mail .= "Telephone:" . " " . $phone . "\n \n";
			} else {
				$mail .= "Telephone: Not set" . "\n\n";
			}
			$mail .= "Member:" . " " . $member. "\n \n";
			$mail .= "Type:" . " " . $querytype . "\n \n";
			$mail .= "Message:" . " " . "\n \n";
			$mail .=  wordwrap($query, 70) . "\n \n" ;
			$mail .= "Message sendt:" . date("h:i:s - d.m-Y");

			$mailTo = "example@place.com";
			mail($mailTo, $subject, $mail);

			if (file_exists("query.txt") == true) {
				$queryLog = fopen("query.txt", "a");

				$queryAdd = "";
				$queryAdd .= "\r\n";
				$queryAdd .= "Name:" . " " . $name . "\r\n";
				$queryAdd .= "Email:" . " " . $email . "\r\n";
				if (strlen($phone) == 8) {
					$queryAdd .= "Telephone:" . " " . $phone . "\r\n";
				} else {
					$queryAdd .= "Telephone: Not set" . "\r\n";
				}
				$queryAdd .= "Member:" . " " . $member. "\r\n";
				$queryAdd .= "Type:" . " " . $querytype . "\r\n";
				$queryAdd .= "Message:" . " " . "\r\n";
				$queryAdd .= $query . "\r\n";
				$queryAdd .= "Message sendt:" . " " . date("h:i:s - d.m-Y");
				$queryAdd .= "\r\n";
				fwrite($queryLog, $queryAdd);
			} else {
				$queryLog = fopen("query.txt", "w");

				$queryAdd .= "Name:" . " " . $name . "\r\n";
				$queryAdd .= "Email:" . " " . $email . "\r\n";
				if (strlen($phone) == 8) {
					$queryAdd .= "Telephone:" . " " . $phone . "\r\n";
				} else {
					$queryAdd .= "Telephone: Not set" . "\r\n";
				}
				$queryAdd .= "Member:" . " " . $member. "\r\n";
				$queryAdd .= "Type:" . " " . $querytype . "\r\n";
				$queryAdd .= "Message:" . " " . "\r\n";
				$queryAdd .=  $query . "\r\n" ;
				$queryAdd .= "Message sendt:" . " " . date("h:i:s - d.m-Y");
				$queryAdd .= "\r\n";
				fwrite($queryLog, "\r\n" . $queryAdd);
			}

			if (file_exists("queryv2.txt") == true) {
				$queryLog = fopen("query.txt", "a");

				$queryAdd = "";
				$queryAdd .= "\r\n";
				$queryAdd .= "Name:" . " " . $name . "\r\n";
				$queryAdd .= "Email:" . " " . $email . "\r\n";
				if (strlen($phone) == 8) {
					$queryAdd .= "Telephone:" . " " . $phone . "\r\n";
				} else {
					$queryAdd .= "Telephone: Not set" . "\r\n";
				}
				$queryAdd .= "Member:" . " " . $member. "\r\n";
				$queryAdd .= "Type:" . " " . $querytype . "\r\n";
				$queryAdd .= "Message:" . " " . "\r\n";
				$queryAdd .= $query . "\r\n";
				$queryAdd .= "Message sendt:" . " " . date("h:i:s - d.m-Y");
				$queryAdd .= "\r\n";
				fwrite($queryLog, $queryAdd);
			} else {
				$queryLog = fopen("queryv2.txt", "w");

				$queryAdd .= "Name:" . " " . $name . "\r\n";
				$queryAdd .= "Email:" . " " . $email . "\r\n";
				if (strlen($phone) == 8) {
					$queryAdd .= "Telephone:" . " " . $phone . "\r\n";
				} else {
					$queryAdd .= "Telephone: Not set" . "\r\n";
				}
				$queryAdd .= "Member:" . " " . $member. "\r\n";
				$queryAdd .= "Type:" . " " . $querytype . "\r\n";
				$queryAdd .= "Message:" . " " . "\r\n";
				$queryAdd .=  $query . "\r\n" ;
				$queryAdd .= "Message sendt:" . " " . date("h:i:s - d.m-Y");
				$queryAdd .= "\r\n";
				fwrite($queryLog, "\r\n" . $queryAdd);
			}
		}

	session_unset();
	session_destroy();
	?>
	</div>
</body>
</html>