<!-- exec -->
 <!-- ansible command for new database MySQL
 run from vagrant-lamp folder O   N    L  Y
 ansible-playbook ansible/playbooks/vagrant/mysql/database.yml -->
<?php
// dont forget this shit VV
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');

require 'db_connect.php';

// Set up the connection parameters for parks_db and parks_user
$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db', 'parks_user', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// set droptable variable
$dropTable = 'DROP TABLE IF EXISTS national_parks';

// Use exec() to delete a table named national_parks using DROP TABLE IF EXISTS
$dbc-> exec($dropTable);

$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(240) NOT NULL,
    `location` VARCHAR(50) NOT NULL,
    `date_established`(date),
    `area_in_acres`(double),
    PRIMARY KEY (id)
)';

// After the DROP TABLE command, add another exec() to create the table national_parks with the following fields:
