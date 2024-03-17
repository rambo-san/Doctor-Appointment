<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Admin login</title>
</head>
<body>

	<a href = "index.php"><img src="png/back.png" width="100"" ></a>

	<div class="container" id="container">
		<div class="form-container sign-in-container">
			<form action="adminauthenticate.php" method="post">
				<h1>Admin Login</h1>
				<br>
		<?php
		session_start();
		if(isset($_SESSION['message']))
		{
			echo "<h3 style='color:red;'>".$_SESSION['message']."</h3>";
			unset($_SESSION['message']);
		}
		?>
		
				<input type="email" placeholder="Email" name="email"required=""  />
				<input type="password" placeholder="Password"  name ="password" required="" />
				<a href="#">Forgot your password?</a>
				<button>Log In</button>
			</form>

		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Hello Admin</h1>
					<p>Login using your credentials</p>
				</div>
			</div>
		</div>
	</div>
		
		<script  src="./script/script1.js"></script>
</body>
</html>