
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	<title> Royal Pups FC </title>
    <meta charset = "UTF-8" />
	<link rel="stylesheet" type="text/css" href="src/style/std.css">


	<script src="app.js"></script>

</head>

<body>   
<!-- Included Files -->
<?php include("header.php"); ?>



  <div class="background">


		<div class="item-container">

			<div class="flash-message">
				<div class="flash-text">
					<?php  
						//show session message
						if (isset($_SESSION['message'])){
							echo  $_SESSION['message']; 
						}
						//clear session message after
						unset($_SESSION['message']);
					?>
				</div>
			</div>
			
				<h2> Sign In as a Royal Pups member </h2>

					<form name="loginForm" method="POST" action="login_action.php">
						<div class="form-floating">
							<label>Username </label>
								<input type="text" placeholder="Enter in your username.." name="username" required/>
						</div>
						<div class="form-floating">
							<label>Password </label>
								<input type="password" placeholder="Enter in your password.." id="password" name="password" required/>
										<input type="checkbox" onclick="showPassword()"/> Show Password
						</div>
					
						<div class="form-floating">
							<button type="submit" class="btn" name="login"> Log In </button>
						</div>


						<p style=>Not a Royal Pups fan member yet? 
							<a href="registration.php">Sign Me Up</a>
						</p>
				</form>
		</div>

  </div>
  
</body>
</html>