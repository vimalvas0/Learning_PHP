<?php



// This is $_POST returned is a associative array having 
// keys as the name of the input values..

if(isset($_POST['submit']))
{
	echo "Yes, form is submitted <br>";


	$username = $_POST['name'];
	$password = $_POST['pwd'];


	// echo "Name : $username <br>";
	// echo "Username : $password <br>";


	$minimum_limit  = 8;
	if($_POST['pwd'] < $minimum_limit)
	{
		echo "Password is too short ...  <br>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>


	<form action="form.php" method="post">
		<div>
			<label for="role">Role</label>
			<input type="text" name="role" placeholder="Your Role" required="true">
		</div>
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="Your Full Name" required="true">
		</div>
		<div>
			<label for="pwd">Password</label>
			<input type="password" name="pwd" placeholder="Your Unique Password" required="true">
		</div>
		<br>
		<br>
		<div>
			<input type="submit" name="submit">
			<input type="reset" name="reset">
		</div>
	</form>

</body>
</html>