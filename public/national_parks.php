<!-- national_parks.php -->
<?php
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




$stmt=$dbc->query('SELECT * FROM national_parks');

var_dump($stmt);




?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>national_parks.php</title>


</head>
<body>
    <h1> test </h1>

</body>
</html>
