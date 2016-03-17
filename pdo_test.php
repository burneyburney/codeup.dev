<!-- pdo_test.php -->
<?php
// define
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');

// insert here
require 'db_connect.php';

// echo contents
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
