<?php

	// Declaring Numbers
	$a = 5;
	$b = 4;
	$c = 1.2;
	
	//Arithmetic Operators
	echo $a + $b * $c;
	
	echo $a - $b.'<br>';
	echo $a / $b.'<br>';
	echo $a % $b.'<br>';
	
	
	// Assignment with math operators
	
	// $a += $b; echo $a.'<br>';
	
	echo $a++.'<br>';    // value of $a = 5
 
 	echo ++$a.'<br>';     // value of $a = 7


 	// // Number checking functions

 	// is_float(1.25);
 	// is_double(1.43);
 	// is_int(5);
 	// is_numberic("3.15");   // true
 	// is_numeric("23232");  // false
	


	// Conversation

	$strNumber = '12.34';
	$number = intval($strNumber);
	var_dump($number);

	echo '<br>';

	echo $number;
	
	
?>   
