<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users</title>
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
		<?php
			include('../connection.php');
			session_start();
	?>
	<style>
		select,option{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;

	width: 100%;
		}
		input{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin-top: 5px;
				margin-bottom: 5px;
	width: 100%;
		}
		
		#delete{
			border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #E8000E;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;
		}
		#view{
			border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #0062E9;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;
			
		}
		#cbox{
			margin: auto;
			background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 600px;
	max-width: 60%;
	min-height: 50px;
		
				 align-content:flex-start;
		margin: auto;
					 max-height: 400px;
					 overflow-y: scroll;
		font-size: 15px;
			margin: 20px 20px 20px 20px;
					 padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
					
		}
		</style>

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="adminhome.php">GetADoc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="adminhome.php">Home</a></li>
          
          <li><a class="nav-link scrollto active" href="usermanage.php">Manage Users</a></li>	
			<li><a class="nav-link scrollto" href="appointments.php"> Manage Appointments</a></li>
			
<li><a class="nav-link scrollto" href="feedback.php">Show Feedbacks</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../logout.php"	 class="appointment-btn scrollto"><span class="d-none d-md-inline">Log</span> out</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    
 

  <main id="main">
	  <br><br><br>
	  <center>
<div class="row"  style="justify-content: center;margin:auto" >
	
	
	<div  id="cbox">
			
		<table border="2px" class="table">
			<tr align="center">
			<td colspan="3" style="background-color: #1EBB43
								   ; height: 20px;"><b>Patients</b></td>	
			</tr>
			<tr>
				<th>Patient ID</th>
			<th>Patient Name</th>
			<th style="padding-left: 120px;">Action</th>
				</tr>
		<?php
			
				$qry = "select * from patient";
	$sql =mysqli_query($conn,$qry);
			while($ar=mysqli_fetch_array($sql))
			{
				echo "<tr align='center'><td>$ar[0]</td>";
				echo "<td>$ar[1]</td>";
				
				
				
				?>
			
			<td align="center">
				<form action="patientaction.php" method="post">
				<input type="hidden" name="id" value="<?php echo $ar[0] ?>">
				<button type="submit" value="delete" name="delete" id="delete" >Delete</button>
					
					
		<button type="submit" value="view" name="view" id="view" >View</button>

				</form>
				
			</tr>
			<?php
			}
				
			?>
				</table>
		
</div>
	  
	  <div  id="cbox">
			
		<table border="2px" class="table">
			<tr align="center">
				<td colspan="3" style="background-color: #1E7EBB; height: 20px;"><b>Doctors</b></td>	
			</tr>
			<tr>
				<th>Doctor ID</th>
			<th>Doctor Name</th>
			<th style="padding-left: 120px;">Action</th>
				</tr>
			<?php
			include('../connection.php');
				$qry = "select * from doctor";
	$sql =mysqli_query($conn,$qry);
				unset($_SESSION['id']);
			while($ar=mysqli_fetch_array($sql))
			{
				echo "<tr align='center'><td>$ar[0]</td>";
				echo "<td>$ar[1]</td>";
				
				
				
				?>
			
			<td align="center">
				<form action="doctoraction.php" method="post">
				<input type="hidden" name="id" value="<?php echo $ar[0] ?>">
				<button type="submit" value="delete" name="delete" id="delete" >Delete</button>
					
					
		<button type="submit" value="view" name="view" id="view" >View</button>
	  
				

				
				</form>
				
			</tr>
			<?php
			}
				
			?>
				</table>
				
				
			
			
</div>
	
	</div><center>
  
    
  </main><!-- End #main -->
    </section><!-- End Hero -->

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