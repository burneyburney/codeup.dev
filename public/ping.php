<?php
// ping.php


// hit link
// if pressed (COUNTER++)



// miss miss
// if pressed (misses and GAME OVER)





?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ping.php</title>

    <link rel="stylesheet" type="text/css" href="css/pingpong.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <!-- external JS -->
    <!-- <script src="/"></script> -->

</head>
<body>
    <h1>ping.php</h1>

    <div class="hit">
        <form method="GET" action="pong.php">
            <button type="submit" class="button"> HIT THAT BALL!! </button>
        </form>
    </div>

    <div class="miss">
        <form method="GET" action="quit.php">
            <button type="submit" class="button"> -swings but misses- </button>
        </form>
    </div>


</body>
</html>
