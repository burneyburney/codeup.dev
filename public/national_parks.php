<!-- national_parks.php -->
<?php
$errors = [];
$parkTextField = 'bobby';
try{
    if(is_string($parkTextField)){
        throw new Exception('no!');
    }
}catch (Exception $e) {
    echo 'code in catch runs if exception caught!';
}



// var_dump($check);
// On each page load, it should retrieve all records from the database and display them.

// Modify your query to load only four parks at a time.
// Use a parameter in $_GET to determine which page the user is on and load only the appropriate parks for that page.
// Modify your page to add links to go to the next or previous page(s).
// Add some logic to determine whether or not to show the next and/or previous page links.

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');

require_once '../db_connect.php';
// input is how we get our page numbers
require_once '../Input.php';

// this will give me OFFSET
$limit = 4;
$page = Input::get('page',1);
$offset = ($page * $limit) - $limit;

// inside of this string is only SQL
// double quotes b/c it is dynamic!!!
$stmt=$dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset");


$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($parks);

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>national_parks.php</title>

</head>
<body>
    <h1> STYLE ME | ADD MORE PARKS | ADD DESCRIPTION </h1>
    <?php foreach($parks as $park): ?>
        <ul>
            <h3> <?= $park['name'] . PHP_EOL  ?></h3>
                <li><?= $park['location'] . PHP_EOL?> </li>
                <li><?= $park['date_established'] . PHP_EOL  ?> </li>
                <li><?= $park['area_in_acres'] . PHP_EOL ?> </li>
                    <?= PHP_EOL . "\n" ?>
        </ul>
    <?php endforeach; ?>

<!--  grabs page NUMBER/KEY from line 21-->
<a href="?page=<?= $page - 1 ?>"> Previous Page </a>
<a href="?page=<?= $page + 1 ?>"> Next Page     </a>


</body>
</html>
