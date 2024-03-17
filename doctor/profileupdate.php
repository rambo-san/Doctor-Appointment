<?php
	include('../connection.php');
		session_start();
if(isset($_SESSION['user']))
   {
	$doctorid = $_SESSION['user'];
}


if(isset($_POST['updateprofile']))
{
$name = $_POST['name'];
	$spec = $_POST['spec'];
	$email = $_POST['email'];
			$number = $_POST['number'];
	
	
$qry="UPDATE `doctor` SET `name` = '$name',`spec` = '$spec',`email` = '$email', `mobile` = '$number' WHERE `doctor`.`doctorid` = '$doctorid';";
		$sql1=mysqli_query($conn,$qry);
		if($sql1)
		{
			$message = "Updated Successfully";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=profile.php');
		exit(0);
		}
		else
		{
			$message = "Profile Update Failure";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=profile.php');
		exit(0);
		}	
	
	
	
}

if(isset($_POST['updatepassword']))
{
	$password = $_POST['password'];
	$oldpassword = $_POST['oldpassword'];
$q="select password from doctor where doctorid='$doctorid'";
$sql=mysqli_fetch_array(mysqli_query($conn,$q));
if($sql[0]!=$oldpassword)
{
	$message = "Incorrect Old Password";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=profile.php');
		exit(0);
	
}
else
{
if($password==$oldpassword)
{
	$message = "Please provide different Password";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=profile.php');
		exit(0);
	
}
	else
	{
		$qry="UPDATE `doctor` SET `password` = '$password' WHERE `doctor`.`doctorid` = $doctorid;";
		$sql1=mysqli_query($conn,$qry);
		if($sql1)
		{
			$message = "Updated Successfully";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=profile.php');
		exit(0);
		}
		else
		{
			$message = "Password Update Failure";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=profile.php');
		exit(0);
		}	
		
	}
}
}
?>