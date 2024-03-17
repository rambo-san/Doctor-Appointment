<!DOCTYPE html>
<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
	<style>
		select,option{
			background-color: #eee;
	border: 1px;
	padding: 15px 15px;
	margin: 10px ;
	width: 35%;
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
	if(isset($_SESSION['user']))
   {
	$patientid = $_SESSION['user'];
}
	$qry="select * from patient where patientid = '$patientid'";
	$sql=mysqli_fetch_array(mysqli_query($conn,$qry));
		?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="patienthome.php">GetADoc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="patienthome.php">Home</a></li>
           <li><a class="nav-link scrollto" href="book.php">Make Appointment</a></li>
    <li><a class="nav-link scrollto" href="myappointments.php">My Appointments</a></li>
			 <li><a class="nav-link scrollto" href="appointmenthistory.php"> Appointment History</a></li>
        <li><a class="nav-link scrollto active" href="profile.php">Edit Profile</a></li>			<li><a class="nav-link scrollto" href="patientfeedback.php">Feedback</a></li></ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../logout.php"	 class="appointment-btn scrollto"><span class="d-none d-md-inline">Log</span> out</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container"><br><br><br><br>
      <center><h1>EDIT PROFILE</h1></center>
      
    <!-- End Hero -->

  <main id="main">








	


		
	<center><div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 800px;
	max-width: 100%;
	min-height: 50px;
		padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
				 align-content:flex-start;
		margin: auto;
		font-size: 15px;">
		
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
		<form action="profileupdate.php" method="post">
			
			<label>Name</label>&nbsp;&nbsp;&nbsp;
			<input type="text"  name="name" value="<?php echo $sql[1]?>" required="" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select	name="gender" id="gender"  required="">
				 <option hidden selected value="<?php echo $sql[2]?>"><?php echo $sql[2]?></option>
			 <option value="Male">Male</option>
  			 <option value="Female">Female</option>
  			 <option value="Other">Other</option>

				</select><br><br>
			<label>Email</label>&nbsp;&nbsp;&nbsp;
					<input type="email" name="email" value="<?php echo $sql[3]?>" required=""/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Number [10 digits]</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input  style="width: 30%;" type="tel" pattern="^\d{10}$"  name="number" value="<?php echo $sql[4]?>" required="" />
			<br><br>
			
			<button type="submit" name="updateprofile" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >Update Profile</button>
			</form	>
			<form action="profileupdate.php" method="post">
			<br>
			<label>Old Password</label>&nbsp;&nbsp;&nbsp;
			
			<input style="width: 28%;" type="password" name="oldpassword" required=""/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>New Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" style="width: 28%;"  name="password" required="oldpassword"/>
			<br><br>
<button type="submit" name="updatepassword" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >Update Password</button>
		
		<br><br>
			
			
		</form></center>
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