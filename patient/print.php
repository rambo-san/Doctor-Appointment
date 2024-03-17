<!DOCTYPE html>
<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Print</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
	
	
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
<?php
		include('..\connection.php');
	session_start();
	if(isset($_SESSION['message']))
   {
	$appointmentid = $_SESSION['message'];
	unset($_SESSION['message']);	
	$url="myappointments.php";	
}
	if(isset($_POST['print']))
   {
	$appointmentid = $_POST['print'];	
	$url="appointmenthistory.php";	
		unset($_SESSION['message']);
}

	
	$qry="select * from appointment where appointmentid = '$appointmentid'";
	$sql=mysqli_fetch_array(mysqli_query($conn,$qry));
	$qry1="select * from doctor where doctorid = '$sql[2]'";
	$sql1=mysqli_fetch_array(mysqli_query($conn,$qry1));
		?>

  <!-- ======= Header ======= -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container"> 
      
    <!-- End Hero -->

  <main id="main">
		
	<div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 330px;
	max-width: 100%;
	min-height: 200px;
		padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
				 align-content:stretch;
		margin: auto;
		font-size: 18px;
				 line-height: 28px;
				 font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace';">
		
		<a href = "<?php echo $url ?>"><img src="../png/back.png" width="100"" ></a>	
		<form style="align-content:center;" action="../pdf.php" method="post">
			
			<label>Appointment ID :</label>
			<?php echo $sql[0]?>
		<br>
			<label>Patient ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $sql[1]?>

			<br>
			<label>Patient Name :</label>&nbsp;&nbsp;
					<?php echo $sql[4]?>
		
			<br>
			<label>Doctor ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<?php echo $sql[2]?>
			<br>
				<label>Doctor Name :</label>&nbsp;&nbsp;&nbsp;
			<?php echo $sql[3];
			if($sql1){?>
				<br>
			<label>contact :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql1[4]?><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input type="hidden" name="num" value="<?php echo $sql1[4]?>">
			<input type="hidden" name="email" value="<?php echo $sql1[3]?>">
			<?php echo $sql1[3];}
			else{?>
			<input type="hidden" name="num" value="Not Available">
			<input type="hidden" name="email" value="Not Available">
			<?php } ?>
				<br><br>
				<label>Date :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql[5]?>
				<br>
				<label>Time :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql[6]?>
			<br>
				<label>Status :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql[7];
			
			if($sql[9]!="")
			{
			?>
			<label>Comments :</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql[9];
			}?>
			
			<input type="hidden" name="aid" value="<?php echo $sql[0]?>">
			<input type="hidden" name="pid" value="<?php echo $sql[1]?>">
			<input type="hidden" name="pname" value="<?php echo $sql[4]?>">
			<input type="hidden" name="did" value="<?php echo $sql[2]?>">
			<input type="hidden" name="dname" value="<?php echo $sql[3]?>">
			
			<input type="hidden" name="date" value="<?php echo $sql[5]?>">
			<input type="hidden" name="time" value="<?php echo $sql[6]?>">
			<input type="hidden" name="status" value="<?php echo $sql[7]?>">
			<input type="hidden" name="comments" value="<?php echo $sql[9]?>">
			<br>
			<br>
			<center><button type="submit" name="print" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;
	">Print</button></center><br>
			</form	>
			
</div>


 
  </main><!-- End #main -->

 </div>
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