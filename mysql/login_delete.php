<?php include "db.php"; ?>
<?php include "functions.php"; 
	$usernameArray = returnUsernames();

?>

<?php 
	if(isset($_POST['submit']))
	{
		$email= $_POST['email'];
		$password = $_POST['pwd'];
		$username = $_POST['username'];

		$query = "SELECT Password FROM credentials ";
		$query .= "WHERE Email = '$email' ";

		$result = mysqli_query($connection, $query);

		$password_arr = mysqli_fetch_assoc($result);

		if($password_arr!=null)
		{
			$realPassword = is_string($password_arr['Password'])? $password_arr['Password']:"Null";
		}
		else{
			$realPassword = "";
		}

		if($realPassword == $password)
		{
			$query = "DELETE FROM credentials " ;
			$query .= "WHERE Username = '$username'";

			$result = mysqli_query($connection, $query);

			if(!$result)
			{
				die("Action Denied : " . mysqli_error($connection));
			}
		}else
		{
			echo "You are not authorized to delete this account... <br>";
		}

		
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

<div class="center">
	<form class="myform" action="login_delete.php" method="post">

	 <div class="mb-3">
	    <label for="email" class="form-label">Email address</label>
	    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
	    <div id="emailHelp" class="form-text">Your email</div>
	  </div>

	 <div class="mb-3">
	    <label for="pwd" class="form-label">Password</label>
	    <input type="password" class="form-control" name="pwd">
	 	<div id="pwdHelp" class="form-text">Your new password</div>
	 </div>

	 <div>
	  <select name= "username" class="form-select" aria-label="Default select example">
		  <?php 

		  	for($i = 0; $i < sizeof($usernameArray); $i++)
		  	{
		  		$value = $usernameArray[$i];
		  		echo "<option value='$value'>$value</option>";
		  	}

		  	?>
	  </select>
	  <div id="selectHelp" class="form-text">Choose username you want to delete</div>
	 </div>

	 <br>

	 <button name= "submit" type="submit" class="btn btn-primary">Delete</button>

	</form>
</div>

</div>

</body>
</html>