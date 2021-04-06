<!DOCTYPE html>
<html>
<head>
	<title>Condtional 2</title>
</head>
<body>


	<?php

		// For comparision
		// equal                   == 
		// identical               ===
		// compare                 > < >= <= <>
		// not equal               !=
		// not identical           !==



		// Logical Operators
		// AND             &&
		// OR              ||
		// NOT             ! 




		// if statements
	// $i = 0;
	// if($i != 1){
	// 	$i = 1;
	// }

	// echo $i;   // it works

	// echo '<br>' . PHP_EOL;



	// // Simple example of if-else
	// if($i == 0)
	// {
	// 	echo "Value of i is still $i";
	// }else
	// {
	// 	echo "Value of i is changed to $i";
	// }

	// echo '<br>' . '<br>';


	// // With elseif
	// $grade = 7;

	// if($grade >= 9 && $grade <= 10)
	// {
	// 	echo 'Brilliant!';
	// }
	// elseif( $grade >= 6 && $grade < 9)
	// {
	// 	echo "Good... Work Hard";
	// }
	// elseif($grade >= 3 && $grade < 6){
	// 	echo "You are on Margin... Consider it as warnin!";
	// }
	// elseif( $grade < 3)
	// {
	// 	echo "You have scored less than 3, you have failed.";
	// }


	// $strNum = "32";
	// $num = 32;


	// if($strNum == $num)
	// {
	// 	echo "equal";
	// 	if($strNum === $num)
	// 	{
	// 		echo " " . "and identical.";
	// 	}else
	// 	{
	// 		echo " " . "but not identical.";
	// 	}
	// }

	// echo '<br>'; 


	// $Num1  = 34;
	// $num1 = 34;

	// if($Num1 == $num1)
	// {
	// 	echo "equal";
	// 	if($Num1 === $num1)
	// 	{
	// 		echo " " . "and identical.";
	// 	}else
	// 	{
	// 		echo " " . "but not identical.";
	// 	}
	// }



	// Switch statement

	$role = "Trainee";
	$role1 = "HR";
	$role3 = "SE";
	$role4 = "Client";

	switch($role){

		case "Trainee" :
		echo "Access denied";
		break;

		case "SE" :
		echo "Access denied";
		break;

		case "HR":
		echo "Access Granted. Welcome...";
		break;

		default :
		echo "Role NOT SUPPORTED. Access Denied";
	}

	echo '<br>' . '<br>';

	switch($role1){

		case "Trainee" :
		echo "Access denied";
		break;

		case "SE" :
		echo "Access denied";
		break;

		case "HR":
		echo "Access Granted. Welcome...";
		break;

		default :
		echo "Role NOT SUPPORTED. Access Denied";
	}

	echo '<br>' . '<br>';


	switch($role3){

		case "Trainee" :
		echo "Access denied";
		break;

		case "SE" :
		echo "Access denied";
		break;

		case "HR":
		echo "Access Granted. Welcome...";
		break;

		default :
		echo "Role NOT SUPPORTED. Access Denied";
	}

	echo '<br>' . '<br>';


	switch($role4){

		case "Trainee" :
		echo "Access denied";
		break;

		case "SE" :
		echo "Access denied";
		break;

		case "HR":
		echo "Access Granted. Welcome...";
		break;

		default :
		echo "Role NOT SUPPORTED. Access Denied";
	}

	echo '<br>' . '<br>';


	?>

</body>
</html>