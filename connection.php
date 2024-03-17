<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";

//dbname
$dbname = "doctorappointment";
	
	//$link = mysqli_init();

// Creating a connection
$conn = mysqli_connect(
       $servername,
	   $username,
       $password,
       $dbname);


// Check connection
/*if (!$conn) {
	die("Connection failure ");
}
else
{
	echo("Connection Successfull");
}*/




?>

</body>
</html>