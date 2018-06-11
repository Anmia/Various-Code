<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>
	<?php
		/**
		* 
		*/
		class help {
			
			public $kundenummer;
			public $navn;
			public $adresse;
			public $telefonnr;

			function __construct($kundenummerinn, $navninn, $adresseinn) {
				$this->kundenummer = $kundenummerinn;
				$this->navn = $navninn;
				$this->adresse = $adresseinn;
			}

			function stuff() {
				$kundeinfo = "Kunde Nr: " . $this->kundenummer . "<br />";
				$kundeinfo .= "Navn: " . $this->navn . "<br />";
				$kundeinfo .= "Adresse: " . $this->adresse . "<br />";
				$kundeinfo .= "Telefon Nr: " . $this->telefonnr . "<br />";

				return $kundeinfo;
			}
		}

		$kunde1 = new help(001, "Anmia", "Hjemme");
		$kunde1->telefonnr = 89976999;

		$ok = $kunde1->stuff();

		echo $ok;
	?>
</p>
<p>
	<?php
		/**
		* shoping basket
		*/
		class shoppingBasket {
			
			public $basket = array();

			function __construct($merchinn, $amountinn, $priceinn) {
				
			}

			function 
		}

		echo 
	?>
</p>
</body>
</html>