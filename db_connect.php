<?php

	$connection = mysqli_connect("sql108.unaux.com", "unaux_27726460", "1bg3f8tt", "unaux_27726460_sqli");

	if (mysqli_connect_errno($connection))
	{
		die ("Failed to connect to MySQL: <strong>" . mysqli_connect_error() . "</strong>");
	}
?>