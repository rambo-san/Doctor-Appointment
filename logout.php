<?php
session_start();
$message = "Logged out Successfully";
		//print $message;
		//header('Refresh: 5; URL=adminlogin.php');
		$_SESSION['message']="$message";


unset($_SESSION['user']);
$url = 'index.php';
header('Location: ' . $url);

?>