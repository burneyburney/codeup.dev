<?php
// good
// logout.php
session_start();

function clearSession(){
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
}

clearSession();
header("Location: login.php");
die();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>logout.php</title>

</head>
<body>
    <h1>logout.php</h1>


</body>
</html>
