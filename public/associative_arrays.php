<?php

$book1 = [
	'Title'				=> 'Rich Dad, Poor Dad',
	'author_first_name' => 'Robert',
	'author_last_name' 	=> 'Kiyosaki',
	'pages' 			=> '207',	
];

$book2 = [
	'Title' 			=> 'Mean Genes: From Sex to Money to Food: Taming Our Primal Instincts',
	'Authors' 			=> [
		'author_first_name1' => 'Terry', 
		'author_last_name1'  => 'Burnham',
		'author_first_name2' => 'Jay',
		'author_last_name2'  => 'Phelan',
	],	
	'pages' 			=> '272',
];

$book3 = [
	'Title' 			=> 'The One Thing',
	'author_first_name'	=> 'Gary',
	'author_last_name' 	=> 'Keller',
	'pages' 			=> '240',
];

$book4 = [
	'Title' 			=> 'How to win friends & Influence people',
	'author_first_name' => 'Dale',
	'author_last_name' 	=> 'Carnege',
	'pages' 			=> '288',
];

$book5 = [
	'Title'				=> 'The Power of Now',
	'author_first_name' => 'Ekhart',
	'author_last_name' 	=> 'Tolle',
	'pages' => '229',
];

$bookArray = [$book1, $book2, $book3, $book4, $book5];
print_r($bookArray);


?>