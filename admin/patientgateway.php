<?php
include('../connection.php');
session_start();
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	
	$user="patient";
	$_SESSION['user']=$user;
if(isset($_POST['edit']))
{	
	header('Refresh:0; URL=edituser.php');
		
}
else if(isset($_POST['add']))
{
	header('Refresh:0; URL=addappointment.php');
		
}
else if(isset($_POST['history']))
{
	header('Refresh:0; URL=history.php');
		
}
}
else
header('Refresh:0; URL=adminhome.php');
		exit(0);
?>