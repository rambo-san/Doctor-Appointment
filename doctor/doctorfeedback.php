<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedback</title>
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
          <li><a class="nav-link scrollto " href="patienthome.php">Home</a></li>
           <li><a class="nav-link scrollto" href="appointments.php">Manage Appointments</a></li>
          <li><a class="nav-link scrollto" href="appointmenthistory.php">Appointment History</a></li>
      <li><a class="nav-link scrollto" href="profile.php">Edit Profile</a></li>
			<li><a class="nav-link scrollto active" href="patientfeedback.php">Feedback</a></li></ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../logout.php"	 class="appointment-btn scrollto"><span class="d-none d-md-inline">Log</span> out</a>

    </div>
  </header><!-- End Header -->

	
	<section id="hero" class="d-flex align-items-center">
    <div class="container"><br><br><br><br>
      <center><h1>FEEDBACK</h1></center>
      
    <!-- End Hero -->

  <main id="main">
	
<br>
		
	<center>
		<div  style="background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 600px;
	max-width: 100%;
					
	min-height: 300px;
				 align-content:flex-start;
		margin: auto;
		font-size: 15px;
					 padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px; 
					  padding-top: 20px;
					 ">
			
		
			<form action="../feedback.php" method="post"  >
             
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
				  <input type="hidden" value="doctor" name="role">
              </div>
              <div  class="text-center"><button href="./feedback.php" type="submit" style="border-radius: 20px;border: 1px solid #FFFFFF;
	background-color: #1977cc;
	color: #ffffff;
	font-size: 12px;
	font-weight: bold;
	padding: 10px 35px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: 0.5s;
				  margin-top: 10px;
				   margin-bottom: 10px;
	transition: transform 80ms ease-in;
	display: inline-block;">Submit Feedback</button></div>
		
            </form>
			</div>			
			
			
</div></center>

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