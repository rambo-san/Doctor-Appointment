<?php

include('../connection.php');
session_start();
if(isset($_POST['delete']))
{
$doctorid=$_POST['id'];
	
	$qr="update appointment set status='cancelled' where doctorid='$doctorid' and status in ('confirmed','pending') ";
		mysqli_query($conn,$qr);

	$qry="delete from doctor where doctorid='$doctorid'";
	$sql=mysqli_query($conn,$qry);
	if($sql)
{
	$message = "Doctor Deleted";
		
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
		header('Refresh:0; URL=viewdoctor.php');
		exit(0);
}


?>