<!DOCTYPE html>
<html>
<head>
	<title>Oblig Skjema</title>
</head>
<body>
	<p>
	<?php
		echo "<table>";
			echo "<tr> <td> Fornavn: </td>" . "<td>" . $_GET['fNavn'] . "</td> </tr>";
			echo "<tr> <td> Etternavn: </td>" . "<td>" . $_GET['eNavn'] . "</td> </tr>";
			echo "<tr> <td> Alder: </td>" . "<td>" . $_GET['alder'] . "</td> </tr>";
			echo "<tr> <td> Adresse: </td>" . "<td>" . $_GET['adresse'] . "</td> </tr>";
			echo "<tr> <td> Telefon: </td>" . "<td>" . $_GET['telefon'] . "</td> </tr>";
		echo "</table>";
		?>
	</p>
	<p>
		<a  href="Oblig_2_315752.php"> <strong> BACK </strong> </a>
	</p>
</body>
</html>