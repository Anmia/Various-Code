<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
		Takk for bestilingen
	</p>
	<?php

		session_start();

		$name = $_SESSION['name'];
		$tlf = $_SESSION['tlf'];
		$email = $_SESSION['email'];
		$tictype = $_SESSION['tictype'];
		$amount = $_SESSION['amount'];
		$date = $_SESSION['date'];



		$db = mysqli_connect("", "", "");

		$inspect = "Select * from Tickets limit 1";

		if ($inspect !== FALSE) {
			$billet_insert = "insert INTO Tickets(Name, Tlf, Email, Tictype, Amount, Date)";
			$billet_insert .= "values('$name', '$tlf', '$email', '$tictype', '$amount')";
			$dubadub = mysqli_query($db, $billet_insert);
			mysqli_close($db);
		} else {
			$make = "CREATE TABLE IF NOT EXISTS `s315752` . `Tickets` ( `Name` VARCHAR(45) NOT NULL, `Tlf` INT NOT NULL, `Email` VARCHAR(45) NOT NULL, `Ticktype` VARCHAR(45) NOT NULL, `Amount` INT NOT NULL, `Date` VARCHAR(45) NOT NULL)";
			$do = mysqli_query($db, $make);
			$billet_insert = "insert INTO Tickets(Name, Tlf, Email, Tictype, Amount, Date)";
			$billet_insert .= "values('$name', '$tlf', '$email', '$tictype', '$amount')";
			$dubadub = mysqli_query($db, $billet_insert);
			mysqli_close($db);
		}

			

		class KundeInfo {
			
			public $name;
			public $tlf;
			public $email;
			

			function __construct($name, $tlf, $email) {
				$this->name = $name;
				$this->tlf = $tlf;
				$this->email = $email;
				
			}

			function kundeInfo() {
				return "Name : " . $this->name . " Telephone: " . $this->tlf . " Email: " . $this->email;
			}
		}

		
		class BestillingsInfo {
			
			public $tictype;
			public $amount;

			function __construct($tictype, $amount)
			{
				$this->tictype = $tictype;
				$this->amount = $amount;
			}

			function bestilling() {
				return "Tickettype: " . $this->tictype . " Amount: " . $this->amount;
			}
		}
	?>
</body>
</html>