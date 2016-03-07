<?php
// pong.php

// hit link
// if pressed (COUNTER++)

// miss miss
// if pressed (player misses, GAME OVER)







?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>pong.php</title>

    <link rel="stylesheet" type="text/css" href="css/pingpong.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <!-- external JS -->
    <script src="/"></script>
</head>
<body>
    <h1>pong.php</h1>

    <div class="hit">
        <form method="GET" action="ping.php">
            <button type="submit" class="button"> HIT THAT BALL!! </button>
        </form>

    </div class="miss">
        <form method="GET" action="quit.php">
            <button type="submit" class="button"> -swings but misses- </button>
        </form>
    </div>
</body>
</html>
