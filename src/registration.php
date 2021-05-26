    <!-- Included Files -->
    <?php include("header.php"); ?>

<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	  <title> Royal Pups FC </title>
    <meta charset = "UTF-8" />

  <script src="app.js"></script>
<style>
.form-container{
  padding: 1vh;
 
}
</style>

</head>

<body>			

	<div class="background">

		<div class="content">
			<?php  
				//show session message
				if (isset($_SESSION['message'])){

				//boostrap alert
					?>
						<div class="alert alert-primary" role="alert">
							<strong>Welcome, </strong> <?php echo  $_SESSION['message'];?>
						</div>
						<?php
						//clear session message after
						unset($_SESSION['message']);
				}
			?>

			<div class="item-container">

				<div class="header">
					<div class="circle-container">
						<div class="circle-one"></div>
						<div class="circle-two"></div>
						<div class="circle-three"></div>
					</div>
					<div class="su-line"></div>
			</div>

			<div class="form-container">
						<div class="text-header">
							<h4> Sign up to become a Royal Pup 🐶⚽️! </h4>
						</div>	


				<form name="registerForm" method="POST" action="registration_action.php">

					<div class="format">
						<div class="form-floating mb-3">
								<input type="text" class="form-control input-sm" placeholder="Full Name" name="name" required/>
							<label for="input-sm">Full Name </label>
						</div>
					</div>
					<div class="format">
						<div class="form-floating mb-3">
								<input type="text" class="form-control" placeholder="Username" name="username" required/>
							<label for="floatingInput">Username </label>
						</div>  
					</div>

						<div class="form-floating mb-3">							
								<input type="email" class="form-control" placeholder="Email" name="email" required/>
							<label for="floatingInput">Email </label>
						</div> 

						<div class="form-floating">
									<input type="password" class="form-control" placeholder="Password" id="password1" name="password_1" required/>
								<label for="floatingInput">Password </label>
						</div>

						<div class="form-floating mb-3">
									<input type="password" class="form-control" placeholder="Confirm Password" id="password2"
									onkeyup = checkPassword(); name="password_2" required/>
									<input type="checkbox" onclick="showPasswords()"/> Show Passwords
								<label for="floatingInput">Confirm password </label>
						</div>

						<div class="form-floating mb-3">
								<input type="text" class="form-control" placeholder="5 digit Zip Code" name="zipcode" required/>
							<label for="floatingInput">Zip Code </label>
						</div>
						
					<div class="form-floating">
						<button type="submit" class="btn btn-primary" name="register"> Sign Up </button>
					</div>

						<p>Already a member? 
							<a href="index.php">Log In</a>
						</p>
				
				</form>
			</div>

		</div>

	</div>


</body>
</html>