<?php 

// We must have recieved a associative array : $_POST
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


// strstr(string, needle) -> returns a substring after or before that needle
// true suggests before string before needle
$defaultUsername = strstr($email, "@", true);

echo "Your default Username : $defaultUsername <br>";
echo "Your Email : $email <br>";
echo "Your password : $maskedPassword <br>";









// // Connecting to database using mysqli

// // mysqli_connect('server_name', 'user', 'password', 'database')
// $connection = mysqli_connect('localhost', 'vimal', 'unme4ever', 'login');

// if($connection)
// {
// 	echo "You are connected to 'login' database <br>";    //Success
// }




?>