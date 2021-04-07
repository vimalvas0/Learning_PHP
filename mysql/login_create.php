<?php




// ======================================  Connect To MySQL database ====================================

// Connecting to database using mysqli

// mysqli_connect('server_name', 'user', 'password', 'database')
$connection = mysqli_connect('localhost', 'vimal', 'unme4ever', 'login');

if($connection)
{
	echo "You are connected to 'login' database <br>";    //Success
}



// ========================================   Process Credentials   =======================================

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwdlimit = 8;


// echo $pwd;
if(strlen($pwd) < 8)
{
	echo "Password is too short! <br>";
}


// Calculating a masked password to print :
$lastThree = substr($pwd, -3);
$maskedPassword = str_pad($lastThree, strlen($pwd), "*", STR_PAD_LEFT);


// Calculating Username off the provided email

// strstr(string, needle) -> returns a substring after or before that needle
// true suggests before string before needle
$defaultUsername = strstr($email, "@", true);



// ======================================== Adding user to database =========================================

// Doing C of CRUD i.e. Create

$query = "INSERT INTO credentials (Username, Email, Password) ";
$query .= "VALUES ('$defaultUsername', '$email', '$pwd') ";

$result = mysqli_query($connection, $query);


if(!$result)
{
	die('Action FAILED : ' . mysqli_error($connection));
}

?>