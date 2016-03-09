<?php
// require once for EVERYTHING, no commas;
require_once 'functions.php';

	// starts session or finds a session
	// allows us to use $_SESSION superglobal
	session_start();
	var_dump($_SESSION);
	// variables for login check
	$username = "guest";
	$password = "password";
	$message = "";
	// checking $_POST superglobal for user input to check for login
	$userInputUsername =  inputHas("username") ? inputGet("username") : '';
	$userInputPassword =  inputHas("password") ? inputGet("password") : '';
	// checking if 'LOGGED_IN_USER' key isset
	// and if it has a value(not empty string)
	// telling me that they are logged in and don't need to be here
	if(isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != "") {
		// header redircts to another page
		header('Location: /authorized.php');
		// stops all other code from running
		die();
	// checking to see if both values match the correct login information
	// doing this to login user if they entered the correct information
	} else if ($userInputUsername == $username && $userInputPassword == $password) {
		// create a session key
		// save value as the username
		$_SESSION['LOGGED_IN_USER'] = $username;
		// header redircts to another page
		header('Location: /authorized.php');
		// stops all other code from running
		die();
	// checking to see if they entered the wrong information
	// prevents message from showing when user submitted nothing or first time loading
	} else if ($userInputUsername != '' || $userInputPassword != '') {
		$message = "Incorrect login info";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<p><?= $message; ?></p>
	<form method="POST" action="">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="Username" value="<?php escape('username'); ?>"></input>
		<br>

		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Password" value="<?php escape('password'); ?>"></input>
		<br>

		<button type="submit">Login</button>
	</form>
</body>
