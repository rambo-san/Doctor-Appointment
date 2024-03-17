<?php
	include('../connection.php');
		session_start();
$appointmentid=$_POST['id'];
if(isset($_POST['cancel']))
{
$status="cancelled";
$qry="update  appointment set status='$status' where appointmentid='$appointmentid'";
$sql=mysqli_query($conn,$qry);
if($sql)
{
	$message = "Appointment Cancelled";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
else
{
	$message = "Cancellation Failed";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
}
if(isset($_POST['confirm']))
{
$status="confirmed";
$qry="update  appointment set status='$status' where appointmentid='$appointmentid'";
$sql=mysqli_query($conn,$qry);
if($sql)
{
	$message = "Appointment Confirmed";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
else
{
	$message = "Confirmation Failed";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
}
if(isset($_POST['completed']))
{
$status="completed";
$qry="update  appointment set status='$status' where appointmentid='$appointmentid'";
$sql=mysqli_query($conn,$qry);
if($sql)
{
		$message = $appointmentid;
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=adminincome.php');
		exit(0);
}
else
{
	$message = "Action Failed";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
		exit(0);
}
}

