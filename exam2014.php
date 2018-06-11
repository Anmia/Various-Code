<?php 
	session_start();
?>
<html>
<head>
</head>
<body>
<p>
	<h1> oppgave 1 </h1>
	<h3> 1.a </h3>
		<?php 
			$list = array(0, 4, 4, 2, 3, 7, 4);
			echo array_sum($list);
		?>

	<h3> 1.b </h3>
		<?php
			$list = array(0, 4, 4, 2, 3, 7, 4);

			$find = 0;
			foreach ($list as $key) {
				if ($key == 4) {
					$find++;
				}
			}
			if ($find > 0) {
				echo "4 finnes i arrayet";
			} else {
				echo "4 finnes ikke i arrayet";
			}
		?>

	<h3> 1.c </h3>
		<?php 
			$list = array(0, 4, 4, 2, 3, 7, 4);

			$findAgain = 0;
			foreach ($list as $key) {
				if ($key == 4) {
					$findAgain++;
				}
			}
			if ($find > 0) {
				echo "4 finnes $findAgain ganger i arrayet";
			} else {
				echo "4 finnes ikke i arrayet";
			}

		?>
</p>
<p>
	<h1> oppgave 2 </h1>
		<form action ="" method ="post">
			<table>
				<tr>
					<td>Navn</td>
					<td><input type="text" name="navn"/></td>
				</tr>
				<tr>
					<td>Førerkort</td>
					<td><input type="checkbox" name="forerkort"/>
				</td>
				</tr>
				<tr>
					<td>Antall meter dykking</td>
					<td><input type="text" name="dykk"/></td>
				</tr>
				<tr>
					<td>Antall meter svømming</td>
					<td><input type="text" name="svomming"/></td>
				</tr>
				<tr>
					<td>Antall meter under vann</td>
					<td><input type="text" name="undervann"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="sjekk" value="Sjekk"/></td>
				</tr>
			</table>
		</form>

		<?php 
			function politiOpptak($navn, $forerkort, $dykk,$svomming,$undervann) {
				if (($forerkort == true) && ($dykk >= 2.5) && ($svomming >= 100) && ($dykk >= 12)) {
					return true;
				} else {
					return false;
				}
			}

			if (isset($_POST['sjekk'])) {
				$_POST['navn'] = $navn = $_SESSION['navn'];
				if (isset($_POST['forerkort'])) {
					$forerkort = true;
				} else {
					$forerkort = false;
				} 
				$_SESSION['forerkort'] = $forerkort;
				$_POST['dykk'] = $dykk = $_SESSION['dykk'];
				$_POST['svomming'] = $svomming = $_SESSION['svomming'];
				$_POST['undervann'] = $undervann = $_SESSION['undervann'];

				$godkjent = politiOpptak($navn, $forerkort,$dykk,$svomming,$undervann);

				if ($godkjent == true) {
					echo $navn . " oppfyller opptakskravene <br>";
					echo "<a href='page-two.php'> HERE? </a>";
				} else {
					echo $navn . " oppfyller ikke opptakskravene<br>";
					echo "<a href='page-two.php'> HERE? </a>";
				}
			} 
		?>
</p>
<p>
	<h1> oppgave 3 </h1>
		<?php 
		
		?>
</p>
</body>
</html>