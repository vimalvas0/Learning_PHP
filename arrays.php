<?php

	// How we define arrays : 
// 	we can also use $friends= array();

	// $friends = ['Mrigank', 'Aashish', 'Vivek', 'Sumit'];
	

	// var_dump($friends);
	
	// echo '<br>';

	// // How to print the whole array one element per line :
	// echo '<pre>';
	// var_dump($friends);
	// echo '</pre>';

	// echo '<br>';


	// $friends[0] = 'No one';

	// echo '<pre>';
	// var_dump($friends);
	// echo '/<pre>';


	// // For checking if a element is in array : isset($friends[0])

	// echo '<br>';

	

	// // Number of element in an array : 
	// echo count($friends) . '<br>';
	 

	// // Let's manipulate the array : 
	
	// // array_pop() : will remove last element....
	
	// echo array_pop($friends);
	// echo '<pre>';
	// var_dump($friends);
	// echo '</pre>';
	
	// echo '<br>';


	// // array_shift();
	// // array_unshift();

	// // Let's split a string by some delimiter
	

	// $stringA = "Banana, Apple, Peach";
	// echo '<pre>';
	// var_dump(explode(",", $stringA));
	// echo '</pre>';
	

	// // Combine array elements into string
	

	// $stringCombined = implode(", ", $friends);
	
	// echo "$stringCombined";
	// echo '<br>';


	// // Append a element inside array
	// $friends[] = "Vimal";


	// echo '<pre>';
	// var_dump($friends);
	// echo '</pre>';



	// Let's practice 
	
	// 1st way : 
	$greetings = array("Hello", "Hi", "Namaste", "Good Morning", "Good Evening", "Good afternoon");

	// 2nd type
	$roles = ["HR", "SE", "QA"];


	// Using implode 
	// echo implode(" ", $greetings);


	// Checking if element exists in an arraay : 
	// echo '<pre>';
	// var_dump(in_array("Hi", $greetings));       // bool(true/false)
	// echo '</pre>';


	// // Searching an array : 
	// var_dump(array_search("Namaste", $roles));
	// echo '<br>';
	// var_dump(array_search("Namaste", $greetings));


	// // Merging an array : 
	// echo '<pre>';
	// var_dump(array_merge($greetings, $roles));
	// echo '</pre>';


	// echo '<br>';

	// // A alternative (7.04) approach (that matches with js's spread operator): 
	// var_dump([...$greetings, ...$roles]);


	// Sorting an array :
	$nums    = [6, 3, 2, 9, 10];
	$myNumber= [32, 34];


	


	sort($nums);

	echo '<pre>';
	var_dump($nums);
	echo '</pre>';

	// var_dump(sort($nums));    bool(true)



















	
?>
