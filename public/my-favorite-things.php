<?php
// 5 of my favorite things
$favoriteThings = ["Cars", "Computers", "Drinking", "Working", "Coding"];

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>my-favorite-things.php</title>
    <link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css">
</head>
<body>
    <h4>Wanna know some of my favorite things? </h4>
    <!--  We will need to loop through this array and display each element inside your HTML. -->
    <h4><?php  foreach($favoriteThings as $thing){          ?></h4>
    <h4><?php     echo  $thing . PHP_EOL;                   ?></h4>
    <h4><?php     }                                         ?></h4>


</body>
</html>
