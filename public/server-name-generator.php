<?php
 // array of nouns, and array of adjectives
 $adjective = ["needless", "unequal", "profuse", "Tart", "Clammy", "Boring", "Swift", "Huge", "Far", "Feigned", "Hellish", "Bitter"];
 $noun = ["Art", "Break", "Bush", "daffodil", "draw", "foam", "shampoo", "shingle", "Sidecar", "Temperature"];

 // random noun and adjective
 $randomAdj = array_rand($adjective);
 $randomNoun = array_rand($noun);
//////////////////////////////////////////////////////////

function pageController(){
    $adjective = ["needless", "unequal", "profuse", "Tart", "Clammy", "Boring", "Swift", "Huge", "Far", "Feigned", "Hellish", "Bitter"];
    $noun = ["Art", "Break", "Bush", "daffodil", "draw", "foam", "shampoo", "shingle", "Sidecar", "Temperature"];

    $data = ['items' => $adjective];

    return $adjective;
}

extract(pageController());

var_dump($adjective)


 ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>server-name-generator.php</title>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
</head>
<body>

    <h3> I just made my very first FTP server, I think i'll name it...  </h3>
    <!--  php on monitor -->
    <h4><?= ucfirst($adjective[$randomAdj]);?> <?= ucfirst($noun[$randomNoun]);  ?></h4>




</body>
</html>
