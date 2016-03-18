<?php
// PDO to connect to your parks_d
require 'park_migration.php';
// delete all records before reseeding

$dbc->exec('TRUNCATE national_parks');

$parks = [
['name' => 'Acadia',                        'location' => 'Maine',          'date_established' => '1919-02-26', 'area_in_acres' => 47389.67],
['name' => 'American Samoa',                'location' => 'American Samoa', 'date_established' => '1978-10-31', 'area_in_acres' => 9000.00],
['name' => 'Arches',                        'location' => 'Utah',           'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
['name' => 'Badlands',                      'location' => 'Maine',          'date_established' => '1919-02-26', 'area_in_acres' => 47389.67],
['name' => 'Big Bend',                      'location' => 'Texas',          'date_established' => '1944-06-12', 'area_in_acres' => 172924.07],
['name' => 'Biscayne',                      'location' => 'Florida',        'date_established' => '1980-06-28', 'area_in_acres' => 1.67],
['name' => 'Black Canyon of the Gunnison',  'location' => 'Colarado',       'date_established' => '1999-10-21', 'area_in_acres' => 2950.03],
['name' => 'Brynce Canyon',                 'location' => 'Utah',           'date_established' => '1928-02-25', 'area_in_acres' => 35835.08],
['name' => 'Canyonlands',                   'location' => 'Utah',           'date_established' => '1964-09-12', 'area_in_acres' => 337597.83],
['name' => 'Capitol Reef',                  'location' => 'Utah',           'date_established' => '1971-12-18', 'area_in_acres' => 241904.26],
['name' => 'Congaree',                      'location' => 'South Carolina', 'date_established' => '2003-11-10', 'area_in_acres' => 26545.86]
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)                                                                                  VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";
    $dbc->exec($query);
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
