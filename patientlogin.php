<?php
	include('connection.php');
		session_start();

	$email = $_POST['email'];
	$pass = $_POST['password'];

	$qry = "select * from doctorappointment.patient where email= '$email' AND password = '$pass'";
	$sql =mysqli_query($conn,$qry);
	$row = mysqli_num_rows($sql);
	if($row>0)
	{
		$a=mysqli_fetch_array($sql);
		$usr=$a['patientid'];

			$_SESSION['user']=$usr;
		header('Refresh: 0; URL=./patient/patienthome.php');

	}
	else{
		
		$message = "Invalid Username or Password";
	
		$_SESSION['message']="$message";
		header('Refresh:0; URL=index.php');
		exit(0);
		
	}
	?>