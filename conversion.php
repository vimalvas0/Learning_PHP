<?php

	$num = 32;
	$stringNum = "32.23";

	

	# Values are dropped since originally the variable was "Float" type
	$valueInNum = intval($stringNum);

	var_dump($valueInNum);




	//Number functions----------------- 
	//
	//
	// In this section, I have learnt about the functions 
	// and concatenation of them

	echo "abs(-15)" . "  " . abs(-15) . '<br>';
	echo "pow(2, 3)" . pow(2, 3) . '<br>';
	echo "sqrt(16)" . sqrt(16) . '<br>';
	echo "max(2,3)" . max(2, 3) . '<br>';
	echo "min(2, 3)" . min(2, 3) . '<br>';
	echo "round(2.43)" . round(2.34) . '<br>';

	echo "floor(2.65)" . floor(2.65) . '<br>';
	echo "floor(2.6)". floor(2.6) . '<br>';	

	echo "ceil(2.4)" . ceil(2.4) . '<br>';




	


  		
		




?>
