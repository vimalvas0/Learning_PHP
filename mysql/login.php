
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<div class="center">
	<form class="myform" action="login_create.php" method="post">
	  <div class="mb-3">
	    <label for="email" class="form-label">Email address</label>
	    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	  </div>
	  <div class="mb-3">
	    <label for="pwd" class="form-label">Password</label>
	    <input type="password" class="form-control" name="pwd">
	    <div id="pwdHelp" class="form-text">Please use atleast 8 characters.</div>
	  </div>
	  <div class="mb-3 form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

</body>
</html>