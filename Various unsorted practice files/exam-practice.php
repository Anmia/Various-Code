<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="request" action="">
	Navn: <input type="text" name="name"> <br>
	Passord: <input type="password" name="password"> <br>
	<input type="submit" name="submit">
</form>

	<?php
		if (isset($_REQUEST['submit'])) {
			$name = $_REQUEST['name'];
			$password = $_REQUEST['password'];

			$db = mysqli_connect('localhost', 'root@localhost', '', 'test');
			if (!$db) {
				trigger_error(mysqli_error($db));
				die("DIED!");
			}

			$sql = "insert into kunde(KNr, navn, passord)";
			$sql .= "values('', '$name', '$password')";

			$insert = mysqli_query($db, $sql);
			if (!$insert) {
				trigger_error(mysqli_error($db));
				die("DIED!");
			}

			mysqli_close($db);
		}


	?>
		<p>
		<form method="request" action="">
			<input type="submit" name="get" value="list opp brukere">
		</form>

		<?php
			if (isset($_REQUEST['get'])) {
				$db = mysqli_connect('localhost', 'root@localhost', '', 'test');
				if (!$db) {
				trigger_error(mysqli_error($db));
				die("DIED!");
				}

				$sql = "select * from kunde";

				$result = mysqli_query($db, $sql);
				if (!$result) {
				trigger_error(mysqli_error($db));
				die("DIED!");
				}

				while ($row = mysqli_fetch_array($result)) {
					$KNr = $row['KNr'];
					$navn = $row['navn'];
					$passord = $row['passord'];

					echo $KNr . $navn . $passord . "<br>";
				}

				mysqli_close($db);
			}
		?>
		</p>

		<?php
			if (isset($_REQUEST['gettafix'])) {
				$db = mysqli_connect('localhost', 'root@localhost', '', 'test');
				if (!$db) {
				trigger_error(mysqli_error($db));
				die("DIED!");
				}

				$sql = "select passord from kunde";
				$sql .= "where kunde = '$kunde' and passord = '$pw'";

				$result = mysqli_query($db, $sql);
				if (!$result) {
				trigger_error(mysqli_error($db));
				die("DIED!");
				}

				if (mysqli_affected_rows($result) >= 0) {
					echo "Logget inn!";
				} else {
					echo "Feil passord eller brukernavn";
				}

				mysqli_close($db);
			}



			if (isset($_REQUEST['submithashed'])) {
			$name = $_REQUEST['name'];
			$password = $_REQUEST['password'];

			$salt = "HolyBanana42Tester";
			$pwtemp = $salt + $password;
			$pw = hash('crc32', $pwtemp);

			$db = mysqli_connect('localhost', 'root@localhost', '', 'test');
			if (!$db) {
				trigger_error(mysqli_error($db));
				die("DIED!");
			}

			$sql = "insert into kunde(KNr, navn, passord)";
			$sql .= "values('', '$name', '$password')";

			$insert = mysqli_query($db, $sql);
			if (!$insert) {
				trigger_error(mysqli_error($db));
				die("DIED!");
			}

			mysqli_close($db);
		}


			if (isset($_REQUEST['gettafix'])) {
				$db = mysqli_connect('localhost', 'root@localhost', '', 'test');
				if (!$db) {
				trigger_error(mysqli_error($db));
				die("DIED!");
				}

				$sql = "select passord from kunde";
				$sql .= "where kunde = '$kunde' and passord = '$pw'";

				$result = mysqli_query($db, $sql);
				if (!$result) {
				trigger_error(mysqli_error($db));
				die("DIED!");
				}

				if (mysqli_affected_rows($result) >= 0) {
					echo "Logget inn!";
					$_SESSION['loged'] = true;
				} else {
					echo "Feil passord eller brukernavn";
					$_SESSION['loged'] = false;
				}

				mysqli_close($db);
				}
		?>

		<p>
			<table> 
				<tr>
					<td>
						<input type="number" id="num1" onchange="doitnow()">
					</td>
					<td>
						+
					</td>
					<td>
						<input type="number" id="num2" onchange="doitnow()">
					</td>
					<td>
						=
					</td>
					<td>
						<div id="num3"> </div>
					</td>
					<button onclick="doitnow()"> Clickety </button>
				</tr>
			</table>
			<script>
				function doitnow() {
					x = document.getElementById("num1").value;
					y = document.getElementById("num2").value;
					z = x + y;
					document.getElementById("num3").innerHTML = z;
				}
			</script>
		</p>

</body>
</html>