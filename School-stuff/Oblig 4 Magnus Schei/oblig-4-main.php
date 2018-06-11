<!DOCTYPE html>
<html lang="en">
<head>
	<title> Oblig 4 </title>
	<style type="text/css">
		body {
			margin: 30px;
		}
		.req {
			color: red;
			font-weight: bold;
		}
		.nav {
		top: 0;
		left: 0;
		position: fixed;
		}
		.nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 100%;
		}
		.nav a {
			font-size: 1.2em;
			display: block;
			padding: 10px;
			text-decoration: none;
			font-weight: bold;
		}
		.main {
			left: 200px;
			position: absolute;
			z-index: 2;
		}
	</style>
</head>
<body>
	<!-- PLEASE READ -->
	<!-- Menyen er tilstede for lettere bruk. Oppgaven sier at linken til å se meldinger og slette meldinger
	 skulle finnes på side 3, men jeg kom frem til at den like greit kunne være tilgjengelig på alle sidene utenom bekreftelses siden. For å bruke den, fjern komentar taggen rundt diven under denne komentaren. -->
	<!--
	<div class="nav">
	<ul>
		<li> <a href="oblig-4-main.php"> Home </a></li>
		<li> <a href="oblig-4-file-view.php"> See Messages </a> </li>
		<li> <a href="oblig-4-file-delete.php"> Delete Messages </a> </li>
	</ul>
	</div>
	-->
	
	<div class="main">
		<p>
			<h1> Welcome to the message center</h1>
		</p>
		<form action="oblig-4-confirm.php" method="post">
			<label for="name"> Name </label> 
			<br>
			<input type="text" name="name" id="name" required> <font class="req"> * </font>
			<br>

			<label for="email"> Email </label> 
			<br>
			<input type="email" name="email" id="email" required> <font class="req"> * </font>
			<br>

			<label for="phone"> Telephone </label> 
			<br>
			<input type="text" name="phone" id="phone" pattern="[0-9]{8}"> 
			<br>

			<label for="member"> Are you a member? </label> 
			<br>
			<input type="radio" name="member" value="Yes" id="yes" required> <label for="yes"> Yes </label>
			<input type="radio" name="member" value="No" id="no" required> <label for="no"> No </label> <font class="req"> * </font>
			<br>

			<label for="querytype"> What do you wish to contact us about </label>
			<select name="querytype" id="querytype" required>
				<option value=""> Choose one... </option>
				<option value="Products"> Products </option>
				<option value="Shipping"> Shipping </option>
				<option value="Membership"> Membership </option>
				<option value="Complaint"> Complaint </option>
				<option value="Other"> Other </option>
			</select>
			<font class="req"> * </font>
			<br>

			<label for="query"> Please write your message below </label> 
			<br>
			<textarea name="query" id="query" rows="6" cols="40" minlength="400" placeholder="Max 400 characters..." required></textarea>
			<br>

			<input type="submit" name="submit" value="Send ">
		</form>
	</div>
</body>
</html>