<!DOCTYPE html>
<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Doctor</title>
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
	if(isset($_SESSION['id']))
   {
	$doctorid = $_SESSION['id'];
	
}
	

	
	$qry="select * from doctor where doctorid = '$doctorid'";
	$sql=mysqli_fetch_array(mysqli_query($conn,$qry));
	$qry1="select count(*) from appointment where doctorid = '$sql[0]'";
		$qry2="select count(*) from appointment where doctorid = '$sql[0]' and status='confirmed' ";
	$sql1=mysqli_fetch_array(mysqli_query($conn,$qry1));
	$sql2=mysqli_fetch_array(mysqli_query($conn,$qry2));
		?>
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
	width: 500px;
	max-width: 100%;
	min-height: 200px;
		padding-left: 40px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
				 align-content:stretch;
		margin: auto;
		font-size: 18px;
				 line-height: 28px;
				 font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace';">
		
		<a href = "usermanage.php"><img src="../png/back.png" width="100"" ></a>	
		<form style="align-content:center;" action="doctorgateway.php" method="post">
			
			<label>Doctor ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql[0]?>
		<br>
			<label>Doctor Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $sql[1]?>

			<br>
			<label>Specialization :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $sql[2]?>
		
			<br>
			<label>Email :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<?php echo $sql[3]?>
			<br>
				<label>Mobile :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $sql[4];
			?>
				<br>
			<label>Total Appointments : </label>&nbsp;&nbsp;
			<?php if($sql1){echo $sql1[0];}
			else echo "0";?><br>
			
			
				<label>Active Appointments :</label>&nbsp;
			<?php 
			 if($sql2){ echo $sql2[0];}
			else
			echo "0";?>
				<br>
			<input type="hidden" name="did" value="<?php echo $sql[0]?>">
			<br>
			<br>
			<center><button type="submit" name="edit" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #E9AD00;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;">Edit</button>
			<button type="submit" name="history" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #0062E9;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;">History</button>
			</center><br>
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