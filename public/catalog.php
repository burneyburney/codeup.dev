<?php INCLUDE '../Templates/header.php' ?>
<?php INCLUDE '../Items.php'            ?>
<?php INCLUDE '../Templates/footer.php' ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">

</head>
<body>


<?php foreach($kanyeAlbums as $album){                          ?>

<?php    if (is_array($album)){                                 ?>
<?php       foreach($album as $it){                             ?>
<?=         "{$it}"                                          ?>
<?php       }                                                   ?>
<?php    }                                                      ?>
<?php }                                                         ?>


</body>
</html>

<!--
$album[$artist]
$album[$title]
$album[$released] -->
