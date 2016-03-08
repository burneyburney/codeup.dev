<?php
// login.php
 var_dump($_POST);
 $checkUser = isset($_POST['username']) ? ($_POST['username']) : '';
 $checkPass = isset($_POST['password']) ? ($_POST['password']) : '';

if($checkUser == 'guest' && $checkPass == 'password'){
    // re-direct
    header("Location: authorized.php");
    // script keeps going unless this is used.
    die();
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
