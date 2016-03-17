<!--  my_first_php.php-->
<!--  michael burney-->
<?php

$greeting = 'Hello';

$student = [
    'first_name' => 'Kate',
    'last_name' => 'McKaterson',
    'cohort' => 'Balboa'
];

$student['is_awsome'] = TRUE;

var_dump($student);

foreach($student as $studentName){
    echo "{$greeting} {$studentName}\n";
}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>my_first_php.php</title>

</head>
<body>
    <h1> UI<span style="color: orange"> /</span> UX </h1>

</body>
</html>
<!--  interpelation, put a variable inside of a string and string is treated as just a variable -->
<!--  -->
