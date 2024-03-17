<?php
	include('connection.php');
		session_start();
if(isset($_SESSION['user']))
   {
	$id = $_SESSION['user'];
}else
	$id = "100";
$role=$_POST['role'];
$subject=$_POST['subject'];
$message=$_POST['message'];
if($role=="patient")
{
	$qry="select name from patient where patientid='$id'";
	$n=mysqli_fetch_array(mysqli_query($conn,$qry));
	$name=$n[0];
	
	$qry1="INSERT INTO `feedback` (`role`,`id`, `name`,`subject`, `message`) VALUES ( '$role','$id', '$name','$subject', '$message');";
	$sql1 =mysqli_query($conn,$qry1);
		if(!$sql1)
		{
			$message = "Feedback Failed";
		$_SESSION['message']="$message";
		header('Refresh:0; URL=./patient/bookresult.php');
		exit(0);
		}
		else
		{
			$message = "Feedback Submitted Successfully";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=./patient/bookresult.php');
		exit(0);
			
		}
}
else if($role=="doctor")
{
	$qry="select name from doctor where doctorid='$id'";
	$n=mysqli_fetch_array(mysqli_query($conn,$qry));
	$name=$n[0];
	$qry1="INSERT INTO `feedback` (`role`,`id`, `name`,`subject`, `message`) VALUES ( '$role','$id', '$name','$subject', '$message');";
	$sql1 =mysqli_query($conn,$qry1);
		if(!$sql1)
		{
			$message = "Feedback Failed";
		$_SESSION['message']="$message";
		header('Refresh:0; URL=./doctor/gateway.php');
		exit(0);
		}
		else
		{
			$message = "Feedback Submitted Successfully";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=./doctor/gateway.php');
		exit(0);
			
		}
}

