<?php 


	// Let's start with the simple string

	$string = 'Hello, ';
	$string2 = 'How are you';


	$string3 = "$string, $string2?";
	echo "$string3 \n" . '<br>';
	echo "This should be another line...." . '<br>';
	


	// Strings methods : 
	//

	echo "String length of string will be " . " ";
	echo strlen($string) . '<br>';


	$string4 = "    Hello Guys    " . PHP_EOL;
	echo "Untrimmed string " . " : $string4". '<br>';
	echo "Trimmed string : " . trim($string4)  .  '<br>';


	$string5  = "My name is vimal vasisth". '<br>';
	echo sha1($string5) . '<br>';


	echo levenshtein($string4, $string5);	
	
?>
