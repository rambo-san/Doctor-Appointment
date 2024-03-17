<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="./css/style.css">


</head>

<body>
	
	
	<a href = "javascript:history.back()"><img src="png/back.png" width="100"" ></a>
<div class="container" id="container">
	
	<div class="form-container sign-up-container" style="	 overflow-y:scroll;
	background-color: #FFFFFF;">
		<form action="doctorregister.php" method="post"><br><br><br><br><br>
			<h1>Doctor Sign Up</h1>
			<br>
		<?php
		session_start();
		if(isset($_SESSION['message']))
		{
			echo "<h3 style='color:red;'>".$_SESSION['message']."</h3>";
			unset($_SESSION['message']);
		}
		?>

			<input type="text" placeholder="Name" name="name" required=""/>
			<select	name="spec" style="color:#6e6e6e;" required="">
			<option disabled hidden selected required="">Specialization</option>
			 <option value="Physician">General Physician</option>
  			 <option value="Pediatrics">Pediatrics</option>
    		<option value="Cardiologists">Cardiologists</option>
			 <option value="Psychiatry">Psychiatry</option>
   			 <option value="Gynaecologists">Gynaecologists</option>
   			 <option value="Dermatologists">Dermatologists</option>
  </select>
			<input type="email" placeholder="Email" name="email" required=""/>
			<input type="text" placeholder="Mobile [10 digits]" name="number" type="tel" pattern="^\d{10}$" required=""/>
			
			<input type="password" placeholder="Password" name="password" required=""/>
			<br>
			<button style="padding-bottom: 10px;">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="patientregister.php" method="post">
			<h1>Patient Sign Up</h1>
			<br>

			<input type="text" placeholder="Name" name="name" required="" />
			<select	name="gender" id="gender" style="color:#6e6e6e;" required="">
			<option disabled hidden selected>Gender</option>
			 <option value="Male">Male</option>
  			 <option value="Female">Female</option>
  			 <option value="Other">Other</option>

				</select>
					<input type="email" placeholder="Email" name="email" required=""/>
			<input type="text" placeholder="Mobile [10 digits]" name="number" type="tel" pattern="^\d{10}$" required="" />
			
			<input type="password" placeholder="Password" name="password" required=""/>
			<br>
						<button>Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello, Are you a Patient?</h1>
				<p>Enter your information and Sign Up</p>
				<button class="ghost" id="signIn">Patient Sign Up</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Are you a Doctor?</h1>
				<p>Enter your information and Sign Up</p>
				<button class="ghost" id="signUp">Doctor Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script  src="./script/script.js"></script>

</body>
</html>
