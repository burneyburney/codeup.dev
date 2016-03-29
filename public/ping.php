<?php

require_once '../Input.php';

// ping.php
function pageController(){
    // isset (CHECKS if key is set) | GET request for counter`
    $counter = Input::get('counter', 0);
    // return = lets you use variable you have in the controller as variables you have in the h1
    return array(
        'counter' => $counter
    );
}

extract(pageController());

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ping.php</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/pingpong.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

</head>
<body>
    <h1>ping.php</h1>
    <h1><?= $counter ?></h1>


    <div class="hit">
            <a href="pong.php?counter=<?= $counter +1 ?>">hit</a>
        </form>
    </div>

    <div class="miss">
        <a href="ping.php?counter=<?= $counter =0 ?>">miss</a>
    </div>
</body>
</html>