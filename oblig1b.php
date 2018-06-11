<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		session_start()
	?>
</head>
<body>
	<?php
		$date = $_SESSION['date'] = date("h:i - d.m.y");

		$name = $_SESSION['name'] = $_POST['name'];
		$tlf = $_SESSION['tlf'] = $_POST['tlf'];
		$email = $_SESSION['email'] = $_POST['email'];
		$tictype = $_SESSION['tictype'] = $_POST['tictype'];
		$amount = $_SESSION['amount'] = $_POST['amount'];
		

		if ((preg_match("/^[a-zA-ZæøåÆØÅ ]*$/", $name)) && (preg_match("/^[1-9]{8}$/", $tlf)) && (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) && (preg_match("/^[1-9]*$/", $amount)) && !(empty($tictype))) {
			echo "<table>";
		echo "<tr>";
			echo "<td> Name </td>";
			echo "<td> $name </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td> Telephone </td>";
			echo "<td> $tlf </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td> Email </td>";
			echo "<td> $email </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Ticket type</td>";
			echo "<td> $tictype </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Amount </td>";
			echo "<td> $amount </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td> Date </td>";
			echo "<td> $date </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<a href='oblig1.php'> GÅ TILBAKE</a>";
			echo "</td>";
			echo "<td> <form action='oblig1c.php' method='post'> <input type='submit' name='conf' value='Bekreft Bestilling'> </form></td>";
		echo "</tr>";
	echo "</table>";
		} else {
			echo "<a href='oblig1.php'> En eller fler av detaljene du fylte inn i skjema var ikke fylt inn korekt, venlight gå tilbake og fyll det inn riktig </a>";
		}
		

		
	

	

	?>
</body>
</html>