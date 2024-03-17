<?php

include('../connection.php');
session_start();
if(isset($_POST['delete']))
{
$patientid=$_POST['id'];
$qr="update appointment set status='cancelled' where patientid='$patientid' and status in ('confirmed','pending') ";
	mysqli_query($conn,$qr);
	$qry="delete from patient where patientid='$patientid'";
	$sql=mysqli_query($conn,$qry);
	if($sql)
{
	$message = "Patient Deleted";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
else
{
	$message = "Deletion Failed";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
}
if(isset($_POST['view']))
{
	$id =$_POST['id'];
		
		$_SESSION['id']="$id";
		header('Refresh:0; URL=viewpatient.php');
		exit(0);
}


?>