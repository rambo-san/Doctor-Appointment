<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Appointments</title>
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
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="doctorhome.php">GetADoc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="doctorhome.php">Home</a></li>
			
			<li><a class="nav-link scrollto active" href="appointments.php">Manage Appointments</a></li>
          <li><a class="nav-link scrollto" href="appointmenthistory.php">Appointment History</a></li>
  
        
		 <li><a class="nav-link scrollto" href="profile.php">Edit Profile</a></li>		<li><a class="nav-link scrollto" href="doctorfeedback.php">Feedback</a></li></ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../logout.php"	 class="appointment-btn scrollto"><span class="d-none d-md-inline">Log</span> out</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container"><br><br><br><br>
      
    <!-- End Hero -->

  <main id="main">








	
<br><br>
		
	<center>
		<div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 1000px;
	max-width: 100%;
					 min-width: 1100px;
	min-height: 50px;
				 align-content:flex-start;
		margin: auto;
					 max-height: 400px;
					 overflow-y: scroll;
		font-size: 15px;
					 padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
					 ">
			
		<table border="2px" class="table">
			<tr align="center">
			<th>Appointment ID</th>
			<th>Patient Name</th>
			<th>Patient ID</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th>Action</th>
				</tr>
			<?php
			include('../connection.php');
			session_start();
				if(isset($_SESSION['user']))
   {
	$doctorid = $_SESSION['user'];
}else
	$doctorid = "100";
				$qry = "select * from appointment where doctorid='$doctorid' and status not in ('completed','cancelled')";
	$sql =mysqli_query($conn,$qry);
			while($ar=mysqli_fetch_array($sql))
			{
				echo "<tr align='center'><td>$ar[0]</td>";
				echo "<td>$ar[4]</td>";
				echo "<td>$ar[1]</td>";
				echo "<td>$ar[5]</td>";
				echo "<td>$ar[6]</td>";
				echo "<td>$ar[7]</td>";
				
				
				
				?>
			
			<td align="center">
				<form action="bookingaction.php" method="post">
				<input type="hidden" name="id" value="<?php echo $ar[0] ?>">
				<?php
					if($ar[7]=="pending")
					{
						?>
				<button type="submit" value="cancel" name="cancel" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #E8000E;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >cancel</button>
					
					
		<button type="submit" value="confirm" name="confirm" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #E9B500;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >confirm</button>
					<?php
					}
				
					if($ar[7]=="confirmed")
					{
						?>
				<button type="submit" value="completed" name="completed" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #26CD13;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >completed</button>
				

				<?php
			}
				
			?>
				</form>
				
			</tr>
			<?php
			}
				
			?>
				</table>
				
				
			
			
</div></center>


 
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