<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			margin-left: 2.5%;
			margin-top: 2.5%;
		}
		p {
			margin-left: 2.5%;
		}
	</style>

</head>
<body>
<h3> Oppgave 1a </h3>
<p>
	<?php
		for ($i=3; $i <= 100; $i++) { 
			if ($i % 3 == 0) {
				echo $i . " ";
			}
		}
	?>
</p>

<h3> Oppgave 1b</h3>
<p>
	<?php
	// before I knew about reseting numbers
		$iii = 3;
		while ($iii <= 100) {
			echo $iii . " ";
			$iii = $iii + 3;
		}
	?>
</p>

<h3> Oppgave 1c</h3>
<p>
	<?php
		$count = 0;
		$sum = 0;
		for ($i=3; $i <= 100; $i++) { 
			if ($i % 3 == 0) {
				$sum = $sum + $i;
				$count++;
			}
		}
		$avg = $sum / $count;
		echo $avg;
	?>
</p>

<h3> Oppgave 2a</h3>
<p>
	<?php
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		foreach ($num as $key) {
			if ($key > 5) {
				echo $key . " ";
			}
		}
	?>
</p>

<h3> Oppgave 2b</h3>
<p>
	<?php
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		$count = 0;
		foreach ($num as $key) {
			if ($key > 5) {
				$count++;
			}
		}
		echo "There are $count numbers over 5";
	?>
</p>

<h3> Oppgave 2c </h3>
<p>
	<?php
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		rsort($num);
		foreach ($num as $key) {
			echo $key . " ";
		}
	?>
</p>

<h3> Oppgave 2d </h3>
<p>
	<?php
		$low = 100;
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		foreach ($num as $key) {
			if ($key < $low) {
				$low = $key;
			}
		}
		echo "lowest number is $low";
	?>
</p>

<h3> Oppgave 2e </h3>
<p>
	<?php
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		echo min($num);
	?>
</p>

<h3> Oppgave 2f.a </h3>
	<form action="" method="request">
		<input type="number" name="findnumber">
		<input type="submit" name="submit1">
	</form>
<p>
	<?php
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		
		function find($value, $num)
			{
				foreach ($num as $key) {
				if ($key > $value) {
					echo $key . " ";
				}
			}
		}
		
		if (isset($_REQUEST['submit1'])) {
			find($_REQUEST['findnumber'], $num);
		}
		
	?>
</p>

<h3> Oppgave 2f.b </h3>
	<form action="" method="request">
		<input type="number" name="numbernumber">
		<input type="submit" name="submit2">
	</form>
<p>
	<?php
		$num = array( 1,4,8,1,4,10,5,6,2,4,6);
		function find2($value, $num){
			
			$count = 0;
		foreach ($num as $key) {
			if ($key > $value) {
				$count++;
			}
		}
		echo "There are $count numbers higher than $value";
		}
		if (isset($_REQUEST['submit2'])) {
			find2($_REQUEST['numbernumber'], $num);
		}
		
	?>
</p>

<h3> Oppgave 3</h3>
<p>
	Form for ordering a ticket. This one ties into the three other files
</p>
<p>
	<form method="post" action="oblig1b.php" name="form">
		<table>
			<tr>
				<td> <label for="name"> Name </label> </td>
				<td> <input type="text" name="name" onchange="check_name()"> <div id="testname"> * </div> </td>
			</tr>
			<tr>
				<td> <label for="tlf"> telephone </label> </td>
				<td> <input type="text" name="tlf" onchange="check_tlf()"> <div id="testtlf"> * </div> </td>
			</tr>
			<tr>
				<td> <label for="email"> Email </label> </td>
				<td> <input type="text" name="email" onchange="check_email()"> <div id="emailtest"> * </div> </td>
			</tr>
			<tr>
				<td> <label for="tictype"> Ticket type </label> </td>
				<td> 
					<select name="tictype" required="">
						<option> Choose one...</option>
						<option value="standard"> Standard </option>
						<option value="premium"> Premium </option>
					</select> 
				</td>
			</tr>
			<tr>
				<td> <label for="amount"> Amount </label> </td>
				<td> <input type="text" name="amount" onchange="check_amount()"> <div id="testamount"> * </div> </td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" name="submit" value="Buy ticket"> </td>
			</tr>
		</table>
	</form>
	<?php
		//if (isset($_POST['submit'])) {
		//	}
	?>
	<script type="text/javascript">
		function check_name() {
			regEx = /^[a-zA-Z ]*$/;
			OK = regEx.test(document.form.name.value);
			if (!OK) {
				document.getElementById('testname').innerHTML = "Name can only contain letters from a to z";
			} else {
				document.getElementById('testname').innerHTML = "*";
			}
		}
		function check_tlf() {
			regEx = /^[1-9]{8}$/;
			OK = regEx.test(document.form.tlf.value);
			if (!OK) {
				document.getElementById('testtlf').innerHTML = "Valid telephone number contains 8 numbers";
			} else {
				document.getElementById('testtlf').innerHTML = "*";
			}
		}
		function check_email() {
			regEx = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
			OK = regEx.test(document.form.email.value);
			if (!OK) {
				document.getElementById('emailtest').innerHTML = "Valid email please";
			} else {
				document.getElementById('emailtest').innerHTML = "*";
			}
		}
		function check_amount() {
			regEx = /^[1-9]*$/;
			OK = regEx.test(document.form.tlf.value);
			if (!OK) {
				document.getElementById('testamount').innerHTML = "Only Numbers please";
			} else {
				document.getElementById('testamount').innerHTML = "*";
			}
		}
	</script>
</p>
<p>
	Se bestillinger <a href="oblig1d.php"> her </a>
</p>
</body>
</html>