<!-- park_seeder.php -->
<?php
// PDO to connect to your parks_d
require 'park_migration';

//
$parks = [
    ['name' => 'bigPark' , 'location' => 'here' , 'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres' => 47,389.67],
    ['name' => 'smallPark' , 'location' => 'here' , 'city' => 'Maine' , 'date_established' => '1239-33-12' , 'area_in_acres' => 47,389.67],
];
foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, city, date_established, area_in_acres)                                    VALUES ('{park['name']}','{park['location']}','{park['city']}','{park['date_established']}',{park['area_in_acres']})"
    $dbc->exec($query);
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
