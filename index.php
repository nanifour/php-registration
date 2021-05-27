<?php
//$pdo = new PDO('sqlite:makedb.sql');
?> 

<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	<title> Royal Pups FC </title>
    <meta charset = "UTF-8" />

</head>

<body>   
<!-- Included Files -->
<?php include("./include/header.php"); ?>


  <div class="background">

	<div class="content">
  		<?php  
			//show session message
			if (isset($_SESSION['message'])){

			//boostrap alert
				?>
					<div class="alert alert-primary" role="alert">
						<strong>Hey, </strong> <?php echo  $_SESSION['message'];?>
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
				<div class="line"></div>
			</div>

			<div class="form-container">
				<div class="text-header">
					<h4> Sign In as a Royal Pups member ⚽️</h4>
				</div>			
							
					<form name="loginForm" method="POST" action="login_action.php">
						<div class="form-floating mb-3">
								<input type="text" class="form-control" id="username" placeholder="username" name="username" required/>
							<label for="floatingInput">Username</label>
						</div>
						<div class="form-floating mb-3">
								<input type="password" class="form-control" id="password" placeholder="password" name="password" required/>
										<input type="checkbox" class="checkbox" onclick="showPassword()"/> Show Password
							<label for="floatingInput">Password</label>
						</div>

						<div class="form-floating">
							<button type="submit" class="btn btn-outline-primary" name="login"> Log In </button>
						</div>


						<p style=>Not a Royal Pups member yet? 
							<a href="registration.php">Sign Up</a>
						</p>
				</form>

				</div>

			</div>
			
		</div>
  </div>
  
</body>
</html>