<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	session_start();
	?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PATIENT HOME</title>
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


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="patienthome.php">GetADoc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="patienthome.php">Home</a></li>
          
          <li><a class="nav-link scrollto" href="book.php">Make Appointment</a></li>			<li><a class="nav-link scrollto" href="myappointments.php">My Appointments</a></li>
			 <li><a class="nav-link scrollto" href="appointmenthistory.php"> Appointment History</a></li>
			<li><a class="nav-link scrollto" href="profile.php">Edit Profile</a></li>			<li><a class="nav-link scrollto" href="patientfeedback.php">Feedback</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../logout.php"	 class="appointment-btn scrollto"><span class="d-none d-md-inline">Log</span> out</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to GetADoc</h1>
      <h2>Care at your Fingertips.</h2>
      <a href="book.php" class="btn-get-started scrollto">Make Appointment</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose GetADoc?</h3>
              <p>
               
                GetADoc is a solution for all of your medical needs. We provide you with the best doctors and medical officers.Thank you for choosing GetADoc.
              </p>
              <div class="text-center">
                <a href="patientfeedback.php" class="more-btn">Feedback<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-timer"></i>
                    <h4>Any time</h4>
                    <p>You can book Appointments based on your time preferences</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-health"></i>
                    <h4>Any Doctor</h4>
                    <p>You can choose the doctor of you preferences</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-medal"></i>
                    <h4>Any Specialization</h4>
                    <p>You get to choose from a variety of Specializations</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
<?php
	  include('../connection.php');
	if(isset($_SESSION['user']))
   {
	$patientid = $_SESSION['user'];
}
	  $dq="select count(*) from doctor";
	  $pq="select count(*) from patient";
	  $aq="select count(*) from appointment where patientid='$patientid' and status in ('pending','confirmed') ";
	  $d=mysqli_fetch_array(mysqli_query($conn,$dq));
	  $p=mysqli_fetch_array(mysqli_query($conn,$pq));
	  $a=mysqli_fetch_array(mysqli_query($conn,$aq));
	  
	  
	  
	  ?>
    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
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