<!DOCTYPE html>
	<?php

		function prepareDatabase(){
		$servername = "localhost";
		$username = "username";
		$password = "password";

		$conn = mysqli_connect($servername, $username, $password);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$query = "CREATE DATABASE users";

		if (mysqli_query($conn, $query)) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . mysqli_error($conn);
		}

		$query = "CREATE TABLE users(
		username varchar(250) NOT NULL,
		password varchar(250) NOT NULL)";

		if (mysqli_query($conn, $query)) {
			echo "Table created successfully";
		} else {
			echo "Error creating Table: " . mysqli_error($conn);
		}

		$query = "INSERT INTO users (username, password)
					VALUES ('Gesha', 'gesha152A'), ('Petrakis', 'asdfasdf915'), ('bateto', 'boiko_borisoff')";

		if (mysqli_query($conn, $query)) {
			echo "Inserted one record successfully";
		} else {
			echo "Error inserting row into USERS" . mysqli_error($conn);
		}
		}

		function isUserAuthenticated(){
			prepareDatabase(); 
			
			if(isset($_POST['submit']))
			{
				$inputUsername = $_POST["username"];
				$inputPassword = $_POST["password"];
				
				$sql = "SELECT * FROM users 
						WHERE username  = $inputUsername
						AND password = $inputPassword";
				$result = mysqli_query($conn,$sql);
				
				if ($result->num-rows == 0){
					echo 'Login failed.';
				} else {
					echo 'Successfully logged in.';
				}
			}
		}

	?>
<html>
<head>
	<title> Registration </title>
</head>
<body>
	<h1> Exercise 4 </h1>
	<form <form action="isUserAuthenticated()" METHOD="POST">
		<fieldset>
		<legend> Registration form </legend>
		Username:
		<input type="text" name="username" required> </br>
		Password:
		<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required > </br>
		</fieldset>
		
		<fieldset>
		Confirm: 
		<input type="submit" /> </br>
		</fieldset>
	</form>
</body> 

</html>