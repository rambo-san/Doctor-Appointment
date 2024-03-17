<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>The Gateway</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   

	<br>
	<div class="containerx">

            <button name="Admin" class="my-button" type="button" value="Save" onClick="location.href='adminlogin.php'" >Admin Login</button>
	   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button name="register" class="my-button" type="button" value="Cancel" onClick="location.href='register.php'">Register</button>
  
</div>
	<br>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="doctorlogin.php" method="post">
			<h1>Doctor Login</h1>
			<br>
			

			<input type="email" placeholder="Email" name="email" required="" /><br>
			<input type="password" placeholder="Password" name="password" required=""  /><br>
			
			<button>Sign In</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="patientlogin.php" method="post">
			<h1>Patient Login</h1>
			<br>
			<?php
		session_start();
		if(isset($_SESSION['message']))
		{
			if($_SESSION['message']=="Invalid Username or Password")
			{
			echo "<h3 style='color:red;'>".$_SESSION['message']."</h3>";
			unset($_SESSION['message']);
			}
			else
			{
				echo "<h3 style='color:green;'>".$_SESSION['message']."</h3>";
			unset($_SESSION['message']);
			} 	
		}
			session_destroy();
			 	
		?>
		
			<input type="email" placeholder="Email" name="email" required="" /><br>
			<input type="password" placeholder="Password" name="password" required="" /><br>
	
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello, Are you a Patient?</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Patient Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Are you a Doctor?</h1>
				<p>Enter your credentials and Sign In</p>
				<button class="ghost" id="signUp">Doctor Login</button>
			</div>
		</div>
	</div>
</div>




  <script  src="./script/script.js"></script>

</body>
</html>
