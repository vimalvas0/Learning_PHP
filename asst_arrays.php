<!DOCTYPE html>
<html>
<head>
	<title>Associative Array</title>
</head>
<body>


	<?php 


		// // Normal Array : 
		// $asstArray = ['val1', 'val2', 'val3', 'val4'];

		// echo '<pre>';
		// var_dump($asstArray);
		// echo '</pre>';




		// // Then Associative arrays
		// $rollNo = array("Vimal" => "1729013058");

		// $rollNo["Samarth"] = "1729013042";

		// echo '<pre>';
		// var_dump($rollNo  );
		// echo '</pre>';


		// // Syntax I prefer 
		// $roles = [
		// 	"Vimal" => "Trainee",
		// 	"Aashish" => "Trainee",
		// 	"Lydia" => "HR",
		// 	"Umair" => "SE",
		// ];


		// var_dump($roles);


	 	// Let's put my data into it :
		$vimal_data = [
			"firstName"  => "Vimal",
			"secondName" => "Vashisth",
			"address"    => "Vijay Nagar, XXX",
			"almaMater"  => "ABESIT",
			"role"       => "Trainee",
			"mail"       => "vim#####@gmail.com"
		];


		if(isset($vimal_data['mail']))
		{
			echo "Contact him" .
			'<br>';
		}

	 ?>

</body>
</html>l