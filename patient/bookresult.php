<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patient Action</title>
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
		input{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin: 10px 0;
	width: 35%;
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
      
    <!-- End Hero -->

  <main id="main">
 
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
		font-size: 15px;"><br><br>
		
		
		<?php
		session_start();
		if(isset($_SESSION['message']))
		{
			if($_SESSION['message']=="Appointment Submitted Successfully" or $_SESSION['message']=="Appointment Cancelled" or $_SESSION['message']=="Feedback Submitted Successfully" )
			{
			echo "<h2 style='color:green;'><strong>".$_SESSION['message']."</strong></h2>";
			unset($_SESSION['message']);
				header('Refresh:4; URL=patienthome.php');
		exit(0);
			}
			else
			{
				echo "<h2 style='color:red;'><strong>".$_SESSION['message']."</strong></h2>";
			unset($_SESSION['message']);
				header('Refresh:4; URL=book.php');
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