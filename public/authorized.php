<?php
// authorized.php
// starts session or finds current session
// allows us to use $_SESSION superglobal (NEED THIS!!!)
session_start();

// declare variable
$username = (isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER']  == "") {
    header('Location: login.php ');
    die();
}






?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>authorized.php</title>


</head>
<body>
    <h1>authorized.php!</h1>
    <a href="logout.php">logout.php</a>

</body>
</html>
