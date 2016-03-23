<!-- shapes_test.php -->
<!-- 9.2.1 -->
<?php
require_once 'square.php';

// use this to run rectangle
$shape = new Rectangle(11, 39);
echo 'Area of Rectangle = ' . $shape->area() . PHP_EOL;

$square = new Square(2, 2);
echo 'Perimiter of square = ' . $square->Perimeter();



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>shapes_test.php</title>
  </head>
  <body>
    <h1> shapes_test.php | 9.2.1</h1>
    <script>
      console.log("INCLUDED: shapes_test.php")
    </script>
  </body>
</html>
