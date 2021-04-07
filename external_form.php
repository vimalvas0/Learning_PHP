
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>

	<!-- Sending the name and password to another file process_form.php -->
	<form action="process_form.php" method="post">
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