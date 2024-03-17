<!DOCTYPE html>
<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>History</title>
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
	margin: 10px ;
	width: 30%;
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
	
			<div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	
	max-width: 100%;
					 min-width: 1100px;
	min-height: 50px;
					 max-height: 550px;
					 overflow-y: scroll;
				 align-content:flex-start;
		margin: auto;
		font-size: 15px;
					 padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
					 ">
			<?php 
	  if(isset($_SESSION['user']))
	  {
		  $user=$_SESSION['user'];
	  }
	  if($user=="patient")
	  {
		  $qry="select * from appointment where patientid = '$id'";
	$sql=mysqli_fetch_array(mysqli_query($conn,$qry));
	  ?>	
	
				 
		
		<a href="viewpatient.php"><img src="../png/back.png" width="100""> </a>
			<center>
		<table border="2px" class="table">
			<tr align="center">
			<th>Appointment ID</th>
			<th>Doctor Name</th>
			<th>Doctor ID</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th style="width: 220px;" >Comments</th>
				<th>Print</th>
				</tr>
			<?php
				if(isset($_SESSION['id']))
   {
	$patientid = $_SESSION['id'];
}else
	$patientid = "100";
			
				$qry = "select * from appointment where patientid='$patientid' and status  in ('completed','cancelled')";
	$sql =mysqli_query($conn,$qry);
			while($ar=mysqli_fetch_array($sql))
			{
				echo "<tr align='center'><td>$ar[0]</td>";
				echo "<td>$ar[3]</td>";
				echo "<td>$ar[2]</td>";
				echo "<td>$ar[5]</td>";
				echo "<td>$ar[6]</td>";
				echo "<td>$ar[7]</td>";
				echo "<td style=' text-align: start;' >$ar[9]</td><td>"; 
			if($ar[7]=="completed")
			{
			?>
				<form action="print.php" method="post">
					
					<button type="submit" value="<?php echo $ar[0] ?>" name="print" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #3469E5;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >Print</button></td> </tr>
	<?php
			}
				
				?>
			
			</form>
			<?php
			}
			?>
				
			
			
		
				</table>
				
			
			<br>


<?php }
			else if($user=="doctor"){
				
		
			?></center><a href="viewdoctor.php"><img src="../png/back.png" width="100"">
			</a><center>
		  <?php
		if(isset($_SESSION['message']))
		{
			if($_SESSION['message']=="Updated Successfully" )
			{
			echo "<h2 style='color:green;'><strong>".$_SESSION['message']."</strong></h2>";
			unset($_SESSION['message']);
		
			}
			else
			{
				echo "<h2 style='color:red;'><strong>".$_SESSION['message']."</strong></h2>";
			unset($_SESSION['message']);
		
			} 	
		}
		echo '<br>';
		?>
		  
			
			<table border="2px" class="table">
			<tr align="center">
			<th>Appointment ID</th>
			<th>Patient Name</th>
			<th>Patient ID</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th style="width: 220px; " >Comments</th>
				<th>Fee</th>
				</tr>
			<?php
			include('../connection.php');
				if(isset($_SESSION['id']))
   {
	$doctorid = $_SESSION['id'];
}else
	$doctorid = "100";
				$qry = "select * from appointment where doctorid='$doctorid' and status  in ('completed','cancelled')";
	$sql =mysqli_query($conn,$qry);
			while($ar=mysqli_fetch_array($sql))
			{
				echo "<tr align='center'><td>$ar[0]</td>";
				echo "<td>$ar[4]</td>";
				echo "<td>$ar[1]</td>";
				echo "<td>$ar[5]</td>";
				echo "<td>$ar[6]</td>";
				echo "<td>$ar[7]</td>";
				echo "<td style=' text-align: start;' >$ar[9]</td>";
				echo "<td>$ar[8]</td> </tr>";
				
			}
				
				
		$q="select sum(fee) from appointment where doctorid='$doctorid'";
		$a=mysqli_fetch_array(mysqli_query($conn,$q));
		
		?>
			<tr style="height: 55px; vertical-align: middle;" bgcolor="#64A6D7" align="center"><td colspan="6"></td>
				<td><strong>Total</strong></td>
				<td><strong><?php echo $a[0] ?></strong></td>
				</tr>
		
				</table>
				<br><br>
			
	  
 <?php
				
			}
	 ?>
	  
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