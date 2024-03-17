<!DOCTYPE html>
<html lang="en">
<head>
	<body bgcolor="#1F9BD7">
	
	<?php
	include('connection.php');
		session_start();

	$email = $_POST['email'];
	$pass = $_POST['password'];

	$qry = "select * from doctorappointment.admin where admin_email= '$email' AND admin_password = '$pass'";
	$sql =mysqli_query($conn,$qry);
	$row = mysqli_num_rows($sql);
	if($row>0)
	{
				
		$usr="admin";
		header('Refresh: 0; URL=./admin/adminhome.php');
		//redirect("Logged In Successfully","home.php");
	}
	else{
		//echo  '<script>alert("Invalid Email or Password");</script>';
		$message = "Invalid Username or Password";
		//print $message;
		//header('Refresh: 5; URL=adminlogin.php');
		$_SESSION['message']="$message";
		header('Refresh:0; URL=adminlogin.php');
		exit(0);
		
	}
	?>
</body>
	</html>