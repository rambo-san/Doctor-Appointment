<?php
	include('../connection.php');
		session_start();



if(isset($_POST['updatepatient']))
{
	if(isset($_SESSION['id']))
   {
	$patientid = $_SESSION['id'];
}
$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
			$number = $_POST['number'];
	
	
$qry="UPDATE `patient` SET `name` = '$name',`gender` = '$gender',`email` = '$email', `number` = '$number' WHERE `patient`.`patientid` = '$patientid';";
		$sql1=mysqli_query($conn,$qry);
		if($sql1)
		{
			$message = "Updated Successfully";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=edituser.php');
		exit(0);
		}
		else
		{
			$message = "Profile Update Failure";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=edituser.php');
		exit(0);
		}	
	
	
	
}
if(isset($_POST['updatedoctor']))
{
	if(isset($_SESSION['id']))
   {
	$doctorid = $_SESSION['id'];
}
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
		header('Refresh:0; URL=edituser.php');
		exit(0);
		}
		else
		{
			$message = "Profile Update Failure";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=edituser.php');
		exit(0);
		}	
	
	
	
}

?>