<?php include "db.php";

function returnUsernames()
{

	global $connection;

	$usernames = array();

	$query = "SELECT * FROM credentials";
	$result = mysqli_query($connection, $query);

	if(!$result)
	{
		die("Action Failed : " . mysqli_error());
	}

	while($row = mysqli_fetch_row($result))
	{
		$usernames[] = $row[0];
	}

	return $usernames;
}

?>