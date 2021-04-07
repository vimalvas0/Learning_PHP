<?php 

// ======================================  Connect To MySQL database ====================================

// Connecting to database using mysqli

// mysqli_connect('server_name', 'user', 'password', 'database')
$connection = mysqli_connect('localhost', 'vimal', 'unme4ever', 'login');

if($connection){
	echo "Connection is established... <br>";
}

$query = "SELECT * FROM credentials";
$result = mysqli_query($connection, $query);

if(!$result)
{
	die("Action Failed : " . mysqli_error());
}

?>




<!-- HTML Doc ---->

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<div class="center">

	<!-- Putting on the html document -->
	<?php 

		// Returns an array of values in row

		// while($row = mysqli_fetch_row($result))
		// {
		// 	echo '<pre>';
		// 	print_r($row);
		// 	echo '</pre>';
		// }


		// I wanted to fetch each row as an associative array instead of array

		while($row = mysqli_fetch_assoc($result))
		{
			echo '<pre>';
			print_r($row);
			echo '</pre>';
		}
	?>
</div>

</body>
</html>