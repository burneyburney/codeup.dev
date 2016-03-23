<!--  rectangle.php     -->
<!--  MICHAEL BURNEY    -->
<!--  9.2.1             -->
<!--  March 22nd, 2016  -->
<?php
// We are going to be using this file to calculate the area of a rectangle.
// width x height
class Rectangle {

  private $height;
  private $width;

  // a constructor to set the height and width on instantiation
  public function __construct($height, $width){
        $this->height = $height;
        $this->width = $width;
  }

  public function area(){
      return $this->height * $this->width;
  }
}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>rectangle.php | 9.2.1 </title>
  </head>
  <body>
    <h1>9.2.1</h1>
    <h2>rectangle.php</h2>
    <script>
      console.log("INCLUDED: rectangle.php");
    </script>
  </body>
</html>
