
	
	<?php
	include('connection.php');
		session_start();
	
		
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
			$number = $_POST['number'];
	$password = $_POST['password'];
	$qry="select * from patient where email='$email' or number='$number';";
	
	$sql =mysqli_query($conn,$qry);
	$row = mysqli_num_rows($sql);
	if($row==0)
	{
		
		$qry1 = "INSERT INTO `patient` (`name`, `gender`, `email`, `number`, `password`) VALUES ('$name', '$gender', '$email', '$number', '$password');";
	$sql1 =mysqli_query($conn,$qry1);
		if(!$sql1)
		{
			$message = "Failure";
	
		$_SESSION['message']="$message";
		header('Refresh:0; URL=register.php');
		exit(0);
		}
		else
		{
		$message = "Patient Inserted Successfully";		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=index.php');
		exit(0);
			
		}
	}
	else{
		
		$message = "User already exist";
		$_SESSION['message']="$message";
		header('Refresh:0; URL=register.php');
		exit(0);
		
	}
	?>
