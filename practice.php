<html>
<head>
	<title> Practice </title>
	<style type="text/css">
		body {
			margin: 20px;
		}
		table {
		   border-collapse: collapse;
		}
		table, th, td {
			padding: 5px;
		   border: 1px solid black;
		}
	</style>
</head>
<body>
	<p>
		<form action="" method="post">
			<table>
				<tr>
					<td> Number of rolls </td>
					<td colspan="3"> <input type="number" name="rolls"> </td>
				</tr>
				<tr>
					<td> Type of dice</td>
					<td> <input type="radio" name="dice" value="6" id="dice6"> <label for="dice6"> 6 </label> </td>
					<td> <input type="radio" name="dice" value="8" id="dice8"> <label for="dice8"> 8 </label> </td>
					<td> <input type="radio" name="dice" value="20" id="dice20"> <label for="dice20"> 20 </label> </td>
				</tr>
				<tr>
					<td colspan="4"> <input type="submit" name="throw"> </td>
				</tr>
			</table>
		</form>
	</p>
	<p>
	<?php
		function throw_dice($rolls, $dice) {
			$results = array();
			for ($i = 0; $i <= $dice - 1; $i++) { 
				$results[$i] = 0;
			}

			for ($i = 1; $i < $rolls ; $i++) { 
				$toss = rand(0, $dice - 1);
				$results[$toss]++;
			}
			$number = 1;
			echo "<table>";
			echo "<tr>";
			for ($i= 1; $i <= $dice; $i++) { 
				echo "<td>" . $number . "</td>";
				$number++;
			}
			echo "</tr>";
			echo "<tr>";
			for ($i = 0; $i < $dice; $i++) { 
				echo "<td>" . $results[$i] . " " . "</td>";
			}
			echo "</tr>";
			echo "</table>";
		}

		if (isset($_POST['throw'])) {
			throw_dice($_POST['rolls'], $_POST['dice']);
		}
	?>
	</p>
	<p>
		<form action="" method="post">
			<table>
				<tr>
					<td> Number of rolls </td>
					<td colspan="3"> <input type="number" name="rollsTwo"> </td>
				</tr>
				<tr>
					<td> Type of dice</td>
					<td> <input type="radio" name="diceTwo" value="6" id="dice6"> <label for="dice6"> 6 </label> </td>
					<td> <input type="radio" name="diceTwo" value="8" id="dice8"> <label for="dice8"> 8 </label> </td>
					<td> <input type="radio" name="diceTwo" value="20" id="dice20"> <label for="dice20"> 20 </label> </td>
				</tr>
				<tr>
					<td colspan="4"> <input type="submit" name="throwTwo"> </td>
				</tr>
			</table>
		</form>
	</p>
	<p>
	<?php
		function throw_dice_v2($rolls, $dice) {
			$results = array();
			
			for ($i = 1; $i < $rolls ; $i++) { 
				$toss = rand(0, $dice - 1);
				$results[] = $toss;
			}
			$number = 1;
			echo "<table>";
			echo "<tr>";
			for ($i = 0; $i < $rolls ; $i++) { 
				if ($i % 10 == 0)  {
					echo "</tr> <tr> <td>" . $results[$i] . "</td>";
				} else {
					echo "<td>" . $results[$i] . "</td>";
				}
			}
			echo "</tr>";
			echo "</table>";
		}

		if (isset($_POST['throwTwo'])) {
			throw_dice_v2($_POST['rollsTwo'], $_POST['diceTwo']);
		}
	?>
	</p>
</body>
</html>