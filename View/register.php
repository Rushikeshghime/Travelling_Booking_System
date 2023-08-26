<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="register.css">
	<title>Airline Reservation System</title>
</head>
<body>
	<div id="logo">
		<img src="1.png">
	</div>
	<h1>Airline Reservation System</h1>

	<div id="log">
		<form id="form1">
			<fieldset>
				<legend style="text-align: center;">Register</legend>
				<label for="name">Enter Your Name: </label>
				<input type="text" name="username" placeholder="Name..."><br>
				<label for="name">Email Address: </label>
				<input type="email" name="email" placeholder="Email..."><br>
				<label for="name">Enter Your Username: </label>
				<input type="text" name="username" placeholder="Username..."><br>
				<label for="name">Enter Password: </label>
				<input type="password" name="pass" placeholder="Password..."><br>
				<label for="name">Confirm Password: </label>
				<input type="password" name="confpass" placeholder="Confirm Password...">
		 		<input type="submit" id="create" name="create" value="Register"><br>
		 		<div id="login">
			 		<h5>already have an account</h5>
			 		<input type="button" id="back" name="back" value="Login">
			 	</div>
			</fieldset>

		</form>
	</div>
</body>
</html>