<?php
// ping.php
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
    <title>ping.php</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/pingpong.css">
    <!-- jQuery -->
    <!-- <script type="text/javascript" src="/fireworks.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

    <!-- external JS -->
    <!-- <script src="/"></script> -->

</head>
<body>
    <h1>ping.php</h1>
    <h1><?= $counter ?> </h1>


    <div class="hit">
        <!-- <form method="GET" action="pong.php" href=counter.php?counter=<?= $counter +1 ?>
            <button type="submit" class="button"> HIT THAT BALL!! </button> -->

            <a href="pong.php?counter=<?= $counter +1 ?>">hit</a>

        </form>
    </div>

    <div class="miss">

        <a href="ping.php?counter=<?= $counter =0 ?>">miss</a>

    </div>
</body>
</html>
