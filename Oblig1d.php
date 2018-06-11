<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$db = mysqli_connect('', '', '');
		$select = "Select * from Billet_Bestilling";
		$check = mysqli_query($db, $select);
		$rowcount = mysqli_affected_rows($db);
		echo "Navn, Tlf, Epost, Billettype, Antall Billeter";
		for ($i=0; $i < $rowcount; $i++) { 
			$rad = mysqli_fetch_array($check);
			echo $rad['Name'] . $rad['Tlf'] . $rad['Email'] . $rad['Ticktype'] . $rad['Amount'] . $rad['Date'];
		}
	?>
</body>
</html>