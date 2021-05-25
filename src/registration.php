    <!-- Included Files -->
    <?php include("header.php"); ?>

<?php  
//show session message
if (isset($_SESSION['message'])){
	echo  $_SESSION['message']; 
  }
//clear session message after
  unset($_SESSION['message']);
?>	

<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	  <title> Royal Pups FC </title>
	  <link rel="stylesheet" type="text/css" href="style/std.css">
    <meta charset = "UTF-8" />

  <script src="app.js"></script>

</head>

<body>

	<div class="signUp-container">

  		<div class="title">
			<h3> Sign up to become a fan member for more information, free gear, and more from your favorive soccer club! </h3>
		</div>

			<form name="registerForm" method="POST" action="registration_action.php">
				<div class="signup">
					<label>Name </label>
						<input type="text" placeholder="Full Name.." name="name" required/>
				</div>
				<div class="username">
					<label>Username </label>
						<input type="text" placeholder="Username.." name="username" required/>
				</div>   
				<div class="signup">
					<label>Email </label>
						<input type="email" placeholder="Email Address.." name="email" required/>
				</div> 
				<div class="signup">
					<label>Password </label>
							<input type="password" placeholder="Password.." id="password1" name="password_1" required/>
				</div>
				<div class="signup">
					<label>Confirm password </label>
							<input type="password" placeholder="Confirm Password.." id="password2"
							onkeyup = checkPassword(); name="password_2" required/>
							<input type="checkbox" onclick="showPasswords()"/> Show Passwords
				</div>
				<div class="signup">
					<label>Zip Code </label>
						<input type="text" placeholder="5 digit Zip Code .." name="zipcode" required/>
				</div>

			<p>By signing up to become a fan member, you agree to our <a href="#" style="color: blue">Terms & Conditions</a>.</p>

				
			<div class="signup">
			<button type="submit" class="btn" name="register"> Sign Up </button>
			</div>

			<div class="form-footer">
				<p>Already a Royal Pups fan member? <a href="index.php" style="color: blue">Log In</a>.</p>
			</div>
		
		</form>
	</div>



</body>
</html>