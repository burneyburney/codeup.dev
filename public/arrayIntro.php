<?php

//  number 1
$numbers1 = array(1, 2, 3, 4, 5);
// var dump it
echo var_dump($numbers1);
// print_r it
print_r($numbers1);
// number 2

$numbers2 = [1,2,3,4,5];

// number 3
echo $numbers2[3];


$person1 = [
	'first_name' => 'Bob',
	'last_name'	 => 'Bobberson',
	'email'		 => 'bob@boberson.com',
	'phone'		 => '313-723-9016',
];

$person2 = [
	'first_name'=> 'Bill',
	'last_name' => 'Billyson',
	'email' 	=> 'bill@billyson.com',
	'phone' 	=> '818-370-9016',
];

$person3 = [
	'first_name'=> 'Dave',
	'last_name' => 'Davidson',
	'email' 	=> 'dave@daverson.com',
	'phone' 	=> '138-733-9016',
];

$test = [$person1, $person2, $person3];
var_dump($test);

?>