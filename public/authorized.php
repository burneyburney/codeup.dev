<?php
	// starts session or finds a session
	// allows us to use $_SESSION superglobal
	session_start();

	var_dump($_SESSION);

	// variable to hold the user name if they were logged in
	$username = ( isset($_SESSION['LOGGED_IN_USER']) ) ? $_SESSION['LOGGED_IN_USER'] : "";

	// checking the session for the 'LOGGED_IN_USER' key and making sure it has a value
	// doing this to find out if they are logged in
	if (! isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == "") {
		header('Location: /login.php');
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>Hello <?= $username; ?>!</h1>
	<a href="/logout.php">Logout</a>
</body>
</html>
