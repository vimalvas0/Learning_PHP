<?php 



// A simple associative array : 
$person = [
	'name' => 'Vimal',
	'surname' => 'Traversy',
	'age' => 26
];



// print
echo '<pre>';
var_dump($person);
echo '</pre>';



// Null  coalescing assingment operator
if(!isset($person['address']))
{
	$person['address'] = 'unknown';
}

// Checking with (7.4) - Remember JS?
$person['Id'] = $person['Id'] ?? 'Unknown';


// print
echo '<pre>';
var_dump($person);
echo '</pre>';


// Print if array has specific key




// Print the keys of the array 
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';


// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';


// Sorting associative arrays by values
asort($person);


echo '<pre>';
var_dump($person);
echo '</pre>';



// Two dimensional arrays 
$todos = [
	['title'  => 'Todo title 1', 'completed' => true],
	['title'  => 'Todo title 2', 'completed' => false]
];


echo '<pre>';
var_dump($todos);
echo '</pre>';

?>