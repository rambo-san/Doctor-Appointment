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
		
		#feedbox{
			background-color:aliceblue;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position:relative;
	overflow: hidden;
	width: 700px;
	max-width: 70%;
					 
	min-height: 50px;
				 align-content:flex-start;
		margin: auto;
					 max-height: 400px;
			margin-bottom: 10px;
		font-size: 15px;
					 padding-left: 20px; 
					  padding-right: 20px;
					  padding-bottom: : 20px;
			padding-top: 20px;
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		#comment{
			margin: 5px 5px 5px 5px;
		}
		#italic{
			font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
		}
		</style>

</head>

<body >
	<?php
		include('..\connection.php');
	$qry="select * from feedback order by feedbackid desc";
	
	?>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="adminhome.php">GetADoc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="adminhome.php">Home</a></li>
          
          <li><a class="nav-link scrollto" href="usermanage.php">Manage Users</a></li>	
			<li><a class="nav-link scrollto" href="appointments.php"> Manage Appointments</a></li>
			
<li><a class="nav-link scrollto active" href="feedback.php">Show Feedbacks</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../logout.php"	 class="appointment-btn scrollto"><span class="d-none d-md-inline">Log</span> out</a>

    </div>
  </header><!-- End Header -->
	
	<br><br><br><br><br><br>
	<h1 align="center" style="text-transform: uppercase; color: #21457C;">FEEDBACKS</h1><br>
<?php
	$q=mysqli_query($conn,$qry);
	while($sql=mysqli_fetch_array($q))
	{
	?>
  <div id="feedbox">
	  <div align="left"><?php
		echo "sub : ".$sql[4];
		?>
		  </div>
	  <div align="center" id="italic"><?php
		echo $sql[5];
		?>
		  </div>
	  
	  <div align="right" id="comment"><?php
		echo "-".$sql[3]." [ ".$sql[1]." ] ";
		?>
		  </div>
	  </div>
	<?php
	}
	?>
	<br><br><br>
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