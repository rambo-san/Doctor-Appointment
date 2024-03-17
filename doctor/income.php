<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Conclusion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
	<style>
		select,option{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin: 10px ;
	width: 50%;
		}
		input,textarea{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin: 10px 0;
	width: 48%;
		}
		</style>
	
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <center><h1>Conclusion</h1></center><br>
      
    <!-- End Hero -->

  <main id="main">
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<center><div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 500px;
	max-width: 100%;
		min-width:550px;
	min-height: 150px;
				 align-content:flex-start;
		margin: auto;
		font-size: 15px;"><br>
		<label style="vertical-align: top;" >Comments</label>&nbsp;&nbsp;
		<textarea name="comments" style="width: 75%;" rows="2"  required></textarea>
		<br>
		<label>Fee Paid</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="fee" required="">&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn" type="submit" name="Submit" style="border-radius: 20px;
			border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;">Submit</button><br>
</form>
		<br>
		<?php
		include('../connection.php');
		session_start();

	  if (isset($_POST['Submit'])) {

	$fee=$_POST['fee'];
		  $comments=$_POST['comments'];
		  
		  if(isset($_SESSION['user']))
   {
	$doctorid = $_SESSION['user'];
}
		if(isset($_SESSION['message']))
			{
				$appointmentid = $_SESSION['message'];
			unset($_SESSION['message']);
				
			}
	
	$qry="UPDATE `appointment` SET `fee` = '$fee',`comment` = '$comments' WHERE `appointment`.`appointmentid` = '$appointmentid';";
	$sql=mysqli_query($conn,$qry);
		  
		  
		  if($sql)
{
	$message = "Submitted";
		
		$_SESSION['message']="$message";
		header('Refresh:0; URL=gateway.php');
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
	?>
		
		
		</center>
</div>


 
  </main><!-- End #main -->

  </section>  

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>