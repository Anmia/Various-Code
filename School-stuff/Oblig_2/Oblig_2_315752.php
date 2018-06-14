<!DOCTYPE html>
<!-- Written by Magnus Arsenovic Schei -->
<!-- Student number 315752 -->
<!-- This document is written as part of a school asignment -->
<!-- The content of this document is considered public domain -->
<html>
<head>
	<title> Oblig 2 </title>
	<style type="text/css">
		.calc {
			text-align: center;
		}
		button {
			border-radius: 3px;
			border: solid black;
		}
		input {
			border-radius: 2px;
			border: solid gray;
		}
	</style>
</head>
<body>
	<p>
	<h3> Oppgave: 1</h3>
		<?php
		echo "<h5> Oppgave: 1a </h5>";
			$myNumb = array(20, 34, -4, 4, 5, 11, -23);
			echo join(", " , $myNumb);


		echo "<h5> Oppgave: 1b </h5>";
			$myNumb = array(20, 34, -4, 4, 5, 11, -23);
			rsort($myNumb);
			echo join(", ", $myNumb);

		echo "<h5> Oppgave: 1c </h5>";
			$myNumb = array(20, 34, -4, 4, 5, 11, -23);
			echo array_sum($myNumb);


		echo "<h5> Oppgave: 1d </h5>";
			$myNumb = array(20, 34, -4, 4, 5, 11, -23);
			$sum = array_sum($myNumb) / count($myNumb);
			echo $sum;

		echo "<h5> Oppgave: 1e </h5>";
			$myNumb = array(20, 34, -4, 4, 5, 11, -23);
			sort($myNumb);
			$length = count($myNumb) - 1;
			for ($i=0; $i <= $length ; $i++) { 
				$num = $myNumb[$i];
				if ($num > 0 && $num < 20) {
					echo "$num ";
				}
			}


		?>
	</p>	
	<p>
		<h3> Oppgave: 2a</h3>
		<p> Dette skjemaet tar deg til en ny side.</p>
		<p> 
			Please be aware that any personal information entered here may not be secure!	
		</p>
		<form action="oblig_form_315752.php" method="get">
		<table>
			<tr>
				<td> <label> Fornavn </label> </td>
				<td> <input type="text" name="fNavn"> </td>
			</tr>
			<tr>
				<td> Etternavn </td>
				<td> <input type="text" name="eNavn"> </td>
			</tr>
			<tr>
				<td> Alder </td>
				<td> <input type="text" name="alder" pattern="[0-9]{1,}"> </td>
			</tr>
			<tr>
				<td> Adresse </td>
				<td> <input type="text" name="adresse"> </td>
			</tr>
			<tr>
				<td> Telefon </td>
				<td> <input type="text" name="telefon" pattern="[0,9]{8}"> </td>
			</tr>
			<tr>
				<td colspan="2"> <button type="submit" name="submit"> Submit </button> </td>
			</tr>
		</table>
		</form>
	</p>
	<p>
		<h3> Oppgave: 2b</h3>
		<p> Dette skjemaet tar deg ikke til en ny side. <br>
		Det vil vise informasjonen du skriver inn i skjemaet under skjemaet. </p>
		<!-- Why does it "refresh" the page. I don't know yet. I will know one day! -->
		<p> 
			Please be aware that any personal information entered here may not be secure!	
		</p>
		<form action="" method="post">
		<table>
			<tr>
				<td> <label> Fornavn </label> </td>
				<td> <input type="text" name="fNavnTwo"> </td>
			</tr>
			<tr>
				<td> Etternavn </td>
				<td> <input type="text" name="eNavnTwo"> </td>
			</tr>
			<tr>
				<td> Alder </td>
				<td> <input type="text" name="alderTwo" pattern="[0-9]{1,}"> </td>
			</tr>
			<tr>
				<td> Adresse </td>
				<td> <input type="text" name="adresseTwo"> </td>
			</tr>
			<tr>
				<td> Telefon </td>
				<td> <input type="text" name="telefonTwo" pattern="[0-9]{8}"> </td>
			</tr>
			<tr>
				<td colspan="2"> <button type="submit" name="submitTwo"> Submit </button> </td>
			</tr>
		</table>
		</form>
	</p>
	<p>
		<?php
		if (isset($_POST['submitTwo'])) {
			$fNavnTwo = $_POST['fNavnTwo'];
			$eNavnTwo = $_POST['eNavnTwo'];
			$alderTwo = $_POST['alderTwo'];
			$adresseTwo = $_POST['adresseTwo'];
			$telefonTwo = $_POST['telefonTwo'];
			
				echo "<table>";
					echo "<tr> <td> Fornavn: </td>" . "<td>" . $fNavnTwo . "</td> </tr>";
					echo "<tr> <td> Etternavn: </td>" . "<td>" . $eNavnTwo . "</td> </tr>";
					echo "<tr> <td> Alder: </td>" . "<td>" . $alderTwo . "</td> </tr>";
					echo "<tr> <td> Adresse: </td>" . "<td>" . $adresseTwo . "</td> </tr>";
					echo "<tr> <td> Telefon: </td>" . "<td>" . $telefonTwo . "</td> </tr>";
				echo "</table>";
			}
		?>
	</p>
	<h3> Oppgave 3 </h3>
	<p>
		<form action="oblig_form_2_315752.php" method="post">
		<table class="calc" border="1">
			<th colspan="4"> Kalkulator (kun heltall) </th>
			<tr>
				<td colspan="2">
					Tall 1
				</td>
				<td colspan="2">
					Tall 2
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input width="50px" type="number" name="numOne">
				</td>
				<td colspan="2">
					<input width="50px" type="number" name="numTwo">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="add"> + </button>
				</td>
				<td>
					<button type="submit" name="sub"> - </button>
				</td>
				<td>
					<button type="submit" name="mul"> * </button>
				</td>
				<td>
					<button type="submit" name="div"> / </button>
				</td>
			</tr>
		</table>
		</form>
		<?php
		?>
	</p>
	<p>
		<?php
		?>
	</p>
</body>
</html>