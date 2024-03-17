<!DOCTYPE html>
<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Appointment</title>
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
<style>
		select,option{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin: 5px ;
			margin-bottom: 10px;
	width: 81%;
		}
		input{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin-top: 5px;
				margin-bottom: 5px;
	width: 35%;
		}
		</style>
	
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
		include('..\connection.php');
	session_start();
	if(isset($_SESSION['id']))
   {
	$id = $_SESSION['id'];
	
}
		?>
  <section id="hero" class="d-flex align-items-center">
    <div class="container"> 
      
    <!-- End Hero -->

  <main id="main">
	  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<br>
		
	<div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 500px;
	max-width: 100%;
	min-height: 50px;
		padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
				 align-content:flex-start;
		margin: auto;
		font-size: 15px;">
		<a href = "viewpatient.php"><img src="../png/back.png" width="100"" ></a>
		<br><center>
		<?php
		
		if(isset($_SESSION['message']))
		{
			if($_SESSION['message']=="Appointment Submitted Successfully" )
			{
			echo "<h4 style='color:green;'><strong>".$_SESSION['message']."</strong></h4>";
			unset($_SESSION['message']);
				
			}
			else
			{
				echo "<h4 style='color:red;'><strong>".$_SESSION['message']."</strong></h4>";
			} 	
		}			 	
		
		 $qry="select * from patient where patientid = '$id'";
	$sql=mysqli_fetch_array(mysqli_query($conn,$qry));
		?><label>Patient Id</label>&nbsp;
		<input type="text" value="<?php echo $sql[0]?>" style="width: 20%;" readonly>
		&nbsp;&nbsp;&nbsp;
		<label>Name</label>&nbsp;&nbsp;
		<input type="text" style="width: 45%;" value="<?php echo $sql[1]?>" readonly>
		<br>
		<label >Category</label>&nbsp;&nbsp;
	   	<select  name="categorey"  required="">
	   		<option value="Physician" >General Physician</option>
	   		<option value="Pediatrics">Pediatrics</option>
	   		<option value="Cardiologists">Cardiologists</option>
	   		<option value="Psychiatry">Psychiatry</option>
	   		<option value="Gynaecologists">Gynaecologists</option>
			<option value="Dermatologists">Dermatologists</option>


	   	</select>
		&nbsp;&nbsp;<button class="btn" type="submit" name="Search" style="border-radius: 20px;
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
	display: inline-block;">Search</button><br>
</form>
		<br>
		<form method="post" action="bookvalidate.php">
	<?php 
		include('../connection.php');

	  if (isset($_POST['Search'])) {

	$categorey=$_POST['categorey'];
	
	$query2="SELECT * FROM doctor WHERE spec='$categorey'";
	$result2=mysqli_query($conn,$query2);
	?>
	
<br>
			<label>Doctor Name & ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			

		<select style="width: 62%;" name="doctorid">
			
	<?php   while ($row2=mysqli_fetch_array($result2)) {
		?>
		
	 
		<option value="<?php echo $row2['doctorid'] ?>"> <?php echo $row2['name']."  [ ID - ".$row2['doctorid']." ]" ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	





<br><br>

		<label>Date</label>&nbsp;&nbsp;
		<input type="Date" id="datePickerId" name="date" required="">
&nbsp;&nbsp;&nbsp;

		<label>Time</label>&nbsp;&nbsp;
		<input type="Time" name="time" required="">
<br><br>
			
	 
	





		<button type="submit" name="Book" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >Book</button>
		
		<br><br>
		 <?php  
}


	    ?>
			
			
		</form>
	  
	 </div> </center>
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