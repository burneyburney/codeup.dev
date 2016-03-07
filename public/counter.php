<?php

// page controller
function pageController(){

    // isset (CHECKS if key is set) | GET request for counter`

    $counter = isset($_GET['counter'])?$_GET['counter']:0;

    // return = lets you use variable you have in the controller as variables you have in the h1
    return array(
        'counter' => $counter
    );

}
// use it cuzz duhh
extract(pageController());





?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>counter.php</title>

</head>
<body>

    <!--  display on page -->
    <h1><?= $counter ?> </h1>

    <!-- increase / decrease -->
    <a href="counter.php?counter=<?= $counter +1 ?>">up</a>
    <br>
    <a href="counter.php?counter=<?= $counter -1 ?>">down</a>



</body>
</html>
