<!-- square.php -->
<?php
require_once 'rectangle.php';

class Square extends Rectangle{

  // perimeter | returns perimeter of square..
  public function Perimeter(){
    return 4 * $this->width;

  }


}







?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>square.php | 9.2.1</title>
  </head>
  <body>
    <h3> square.php </h3>
    <script>
      console.log('square.php');
    </script>
  </body>
</html>
