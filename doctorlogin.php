
<?php
	include('connection.php');
		session_start();

	$email = $_POST['email'];
	$pass = $_POST['password'];

	$qry = "select * from doctorappointment.doctor where email= '$email' AND password = '$pass'";
	$sql =mysqli_query($conn,$qry);
	$row = mysqli_num_rows($sql);
	if($row>0)
	{
		$a=mysqli_fetch_array($sql);
		$usr=$a['doctorid'];
//$patientid=$a[0];
			$_SESSION['user']=$usr;
		header('Refresh: 0; URL=./doctor/doctorhome.php');
		//redirect("Logged In Successfully","home.php");
	}
	else
	{
		//echo  '<script>alert("Invalid Email or Password");</script>';
		$message = "Invalid Username or Password";
		//print $message;
		//header('Refresh: 5; URL=adminlogin.php');
		$_SESSION['message']="$message";
		header('Refresh:1; URL=index.php');
		exit(0);
		
	}
	?>
<br>
