<?php

// function simple_func($arg, $arg2){


// 	echo "$arg <br>"


// 	echo "Argument 2 is this : $arg2";

// }



// 
// $a = 10;


// Pass by reference : 
// function addTen(&$a)
// {
// 	$a += 10;
// }


// addTen($a);


// echo "$a <br>";




// // Returning values in PHP
// $num1 = 10;
// $num2 = 2;

// function func($a, $b)
// {
// 	return $a + $b;
// }


// echo func($num1, $num2);





// How to introduce a variable inside a function such that it is global

// function f()
// {

// 	global $x;
// 	$x = "something";
// }


// echo $x;

// f();   // Chaning scope of $x to global

// echo $x;



// Define constants with define

define("PI", 3.14);

echo PI ."<br>";

define("PI", 32);    //Ineffective as PI is ocnstant

echo PI;


?>