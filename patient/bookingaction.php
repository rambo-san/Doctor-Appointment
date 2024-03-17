<?php
	include('../connection.php');
		session_start();
if(isset($_POST['cancel']))
{
$appointmentid=$_POST['cancel'];
$status="cancelled";
$qry="update  appointment set status='$status' where appointmentid='$appointmentid'";
$sql=mysqli_query($conn,$qry);
if($sql)
{
	$message = "Appointment Cancelled";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=bookresult.php');
		exit(0);
}
else
{
	$message = "Cancellation Failed";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=bookresult.php');
		exit(0);
}
}
if(isset($_POST['print']))
{
		$message = $_POST['print'];
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=print.php');
		exit(0);
}
?>