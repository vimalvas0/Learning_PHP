<?php 

	// Sample if

	$name = "Vimal";
	$ageOfVimal = 22;

	$age = 20;
	if($age == 20){
		echo "1";
		echo '<br>';
	}


	// Wirhout circle braces
	if($age === 20) echo "1" . '<br>' . PHP_EOL;


	// Sample if-else
	if($age > 20){
		echo "1";
	} else{
		echo "2";
	}



	// Difference between ==  and ===
	if($age === 20){
		echo "1" . '<br>'; 
	}



	//  Use of and operator
	if($name === "Vimal" && $age > 19){
		echo "We verified, you are Vimal :)" . '<br>';
	}

	// Use of OR operator
	if(isset($age) || isset($luvi))
	{
		echo "Yes, loop runs" . 
		'<br>';
	}


	// Adult website
	$decision =  $age > 18 ? "Enter" : "Not Enter" . '<br>';

	echo "You can $decision";





?>