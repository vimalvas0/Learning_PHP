<?php

// ======================================  Connect To MySQL database ====================================

// Connecting to database using mysqli

// mysqli_connect('server_name', 'user', 'password', 'database')
$connection = mysqli_connect('localhost', 'vimal', 'unme4ever', 'login');

if($connection)
{
	echo "You are connected to 'login' database <br>";    //Success
}else
{
	die("Connection Failed...");
}

?>