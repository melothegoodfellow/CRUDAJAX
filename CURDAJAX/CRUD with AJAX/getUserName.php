<?php

	require_once('dbconnection.php');

	$username = $_REQUEST['username'];

	$isAvail = "";

	if($username !== "")
	{
		$username = strtolower($username);

		$len = strlen($username);

		$query = "select * from userDetails";

		$result = mysqli_query($conn,$query);

		if (!$result)
		{
    		printf("Error: %s\n", mysqli_error($conn));
    		exit();
		}

		while($row = mysqli_fetch_array($result))
		{
			//echo $row['username']."</br>";
			//echo $username."</br>";
			if(strtolower($row['username']) !== $username)
			{
				$isAvail = "Available";
			}
			else
			{
				$isAvail = "Not Available";
			}
		}
	}

	echo $isAvail;

?>