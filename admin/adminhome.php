<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	session_start();
	?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADMIN HOME</title>
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
          <li><a class="nav-link scrollto active" href="adminhome.php">Home</a></li>
          
          <li><a class="nav-link scrollto" href="usermanage.php">Manage Users</a></li>	
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
    <div class="container">
     <h1>Welcome to GetADoc Admin</h1><br>
			<h3>Lets see what is happening in the site.</h3>
      <a href="appointments.php" class="btn-get-started scrollto">Manage Appointments</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Improve the Site</h3>
              <p>
               
                While you were gone we got some feedbacks. Lets go through them to understand our clients and to improve the site.
              </p>
				</p>
              <div class="text-center">
				  
				  
                <a href="feedback.php" class="more-btn">Feedbacks<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
               
	<div style="background-color:#FFFFFF;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 225px;
	max-width: 100%;
	min-height: 50px;
		padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
				 align-content:center;
		margin: auto;
		font-size: 15px;">
		<form class="form" action="useradd.php" method="post">
			<center><strong><lable>Add new Doctor</lable></strong></center>
			<?php
		if(isset($_SESSION['message']))
		{
			if($_SESSION['message']=="Doctor Inserted Successfully"){
			echo "<h6 style='color:green;'><center>".$_SESSION['message']."</center></h6>";	
			}
			else
				echo "<h6 style='color:red;'><center>".$_SESSION['message']."</center></h6>";
			unset($_SESSION['message']);
		}
		?>
			
		<input type="text" placeholder="Name" name="name" required=""/><br>
			<select	name="spec" style="color:#6e6e6e;" required="">
			<option disabled hidden selected required="">Specialization</option>
			 <option value="Physician">General Physician</option>
  			 <option value="Pediatrics">Pediatrics</option>
    		<option value="Cardiologists">Cardiologists</option>
			 <option value="Psychiatry">Psychiatry</option>
   			 <option value="Gynaecologists">Gynaecologists</option>
   			 <option value="Dermatologists">Dermatologists</option>
  </select><br>
			<input type="email" placeholder="Email" name="email" required=""/><br>
			<input type="text" placeholder="Mobile [10 digits]" name="number" type="tel" pattern="^\d{10}$" required=""/><br>
			
			<input type="password" placeholder="Password" name="password" required=""/><br>
			<br>
			<center><button type="submit" name="adddoc" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >Add Doctor</button></center><br>
			</form>
		</div>
                <div class="col-lg-8 d-flex align-items-stretch">
                 <div style="background-color:#FFFFFF;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 225px;
	max-width: 100%;
	min-height: 50px;
		padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
				 align-content:center;
		margin: auto;
		font-size: 15px;">
		<form class="form" action="useradd.php" method="post">
			<center><strong><lable>Add new Patient</lable></strong></center>
			<?php

		if(isset($_SESSION['messag']))
		{
			if($_SESSION['messag']=="Patient Inserted Successfully"){
			echo "<h6 style='color:green;'><center>".$_SESSION['messag']."</center></h6>";	
			}
			else
				echo "<h6 style='color:red;'><center>".$_SESSION['messag']."</center></h6>";
			unset($_SESSION['messag']);
		}
		?>
			
		<input type="text" placeholder="Name" name="name" required=""/><br>
			 
			<select	name="gender" id="gender" style="color:#6e6e6e;" required="">
			<option disabled hidden selected>Gender</option>
			 <option value="Male">Male</option>
  			 <option value="Female">Female</option>
  			 <option value="Other">Other</option>
  </select><br>
			<input type="email" placeholder="Email" name="email" required=""/><br>
			<input type="text" placeholder="Mobile [10 digits]" name="number" type="tel" pattern="^\d{10}$" required=""/><br>
			
			<input type="password" placeholder="Password" name="password" required=""/><br>
			<br>
			<center><button type="submit" name="addpat" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
	transition: transform 80ms ease-in;
	display: inline-block;" >Add Patient</button></center><br>
			</form>
		</div>
			</div>
                </div>


		
		
			
			
		<br><br><br>
				<section id="counts" class="counts">
   
<?php
	  include('../connection.php');
	if(isset($_SESSION['user']))
   {
	$doctorid = $_SESSION['user'];
}
	  $dq="select count(*) from doctor";
	  $pq="select count(*) from patient";
	  $aq="select count(*) from appointment where status not in ('completed','cancelled')";
	  $d=mysqli_fetch_array(mysqli_query($conn,$dq));
	  $p=mysqli_fetch_array(mysqli_query($conn,$pq));
	  $a=mysqli_fetch_array(mysqli_query($conn,$aq));
	  
	  
	  
	  ?>
    
    <!-- ======= Counts Section ======= -->
    
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $d[0] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p>Specializations</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-person"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $p[0] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Patients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-scroll"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $a[0] ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Active Appointments</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

 
  </main><!-- End #main -->
</div>
   

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