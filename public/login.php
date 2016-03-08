<?php
// starts session or finds current session
// allows us to use $_SESSION superglobal (NEED THIS!!!)
session_start();

// variables for login check
$username = "guest";
$password = "password";

var_dump($_POST);

// check $_POST superglobal for user input to check for login
$checkUser = isset($_POST['username']) ? ($_POST['username']) : '';
$checkPass = isset($_POST['password']) ? ($_POST['password']) : '';

// checking if logged in and don't need to be here
if($checkUser == 'guest' && $checkPass == 'password'){
    $_SESSION['Logged_IN_USER'] = $username;
    // re-direct
    header("Location: authorized.php");

    // session_id(logged_in_user);
    // $session_Id = session_id();
    // $sessionCheck = isset($_SESSION['$session_Id']) ? $_SESSION['$session_Id'] : 0;

    // script keeps going unless this is used.
    die();

    // doing this to user if they entered correct credentials
    // prevents message from showing when user submitted nothing / first itme loading
}else if($checkUser != '' || $checkUser != ''){
    echo "Username or Password is incorrect";
}


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>login.php</title>

</head>
<body>
    <h1>login.php</h1>

    <form method="POST">
        <input id="Username" type="username" name="username">
        <input id="password" type="password" name="password"> <br>
        <input type="submit">
    </form>

</html>
