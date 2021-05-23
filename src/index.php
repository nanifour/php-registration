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
	  <link rel="stylesheet" type="text/css" href="src/style/std.css">
    <meta charset = "UTF-8" />

<script>
//Show user password
function showPassword() {
      var x = document.getElementById("password1");

  if (x.type === "password" ) {
    x.type = "text";
  } 
  else {
    x.type = "password";
  }
}
</script>

</head>

<body>
	
  <h2 style="text-align:center;">
	 <u> <b> Sign In as a Royal Pups member </b> </u>
	</h2>

      
	<form name="loginForm" method="POST" action="login_action.php">
		<div class="login-class">
  	 		 <label>User ID: </label>
  	  			<input type="text" placeholder="Enter in your user ID.." name="userid" required/>
  		</div>
      	<div class="login-class">
  	 		 <label>Password: </label>
				<input type="password" placeholder="Enter in your password.." id="password" name="password" required/>
                        <input type="checkbox" onclick="showPassword()"/> Show Password
             </div>
  
  	<div class="login-class">
  	  <button type="submit" class="btn" name="login"> Log In </button>
  	</div>


	<p style="text-align:center;">Not a Royal Pups fan member yet? <a href="registration.php" style="color: blue">Sign Me Up</a>.</p>

	  
  </form>


</body>
</html>