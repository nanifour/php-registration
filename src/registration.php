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

<script>
//Make passwords visible
function showPasswords() {
	var x = document.getElementById("password1");
	var y = document.getElementById("password2");

  if (x.type === "password" && y.type == "password") {
    x.type = "text";
	y.type = "text";
  } 
  else {
    x.type = "password";
	y.type = "password";
  }
}

//Check if passwords match
function checkPassword(){
	var x = document.getElementById("password1");
	var y = document.getElementById("password2");

	if (x.value == y.value){
		x.setCustomValidity('');
	}
	else{
		x.setCustomValidity("Passwords Do NOT Match!"); //custon message for password match
	}
}

</script>

<style>
.btn {
  padding: 13px;
  font-size: 15px;
  color: white;
  margin: 10px 0px 0px 195px;
  background: #76178D;
  border: none;
  border-radius: 5px;
}

.btn:hover{
  background-color: #45a049;
}

h2{
	color: #76178D;
	
}
</style>
</head>

<body>

    <h2 style="text-align:center;">
	 <u> <b> Sign up to become a fan memeber for try out information, free gear, and to receive updates and offers from your favorive soccer club! </b> </u>
	</h2>

	<form name="registerForm" method="POST" action="registration_action.php">
		<div class="register-class">
  	  		<label>Name: </label>
  	  			<input type="text" placeholder="Full Name.." name="name" required/>
  		</div>
    	<div class="register-class">
  	 		 <label>Nickname: </label>
  	 			 <input type="text" placeholder="Nickname.." name="nickname" required/>
		</div>   
		<div class="register-class">
  	 		 <label>Email: </label>
  	 			 <input type="email" placeholder="Email Address.." name="email" required/>
  		</div> 
		<div class="register-class">
  	 		 <label>User ID: </label>
  	  			<input type="text" placeholder="User ID.." name="userid" required/>
  		</div>
    	<div class="register-class">
  	 		 <label>Password: </label>
					<input type="password" placeholder="Password.." id="password1" name="password_1" required/>
  		</div>
  		<div class="register-class">
  	 		 <label>Confirm password: </label>
					<input type="password" placeholder="Confirm Password.." id="password2"
					onkeyup = checkPassword(); name="password_2" required/>
					<input type="checkbox" onclick="showPasswords()"/> Show Passwords
  		</div>
  		<div class="register-class">
  	 		 <label>Zip Code: </label>
  	 			 <input type="text" placeholder="5 digit Zip Code .." name="zipcode" required/>
  		</div>
  		<div class="register-class">
  	  		<label>Phone Number: </label>
  	  			<input type="text" placeholder="7 digit phone number.." name="phone" required/>
  		</div>

	<p style="text-align:center;">By signing up to become a fan member, you agree to our <a href="#" style="color: blue">Terms & Privacy</a>.</p>

		  
  	<div class="register-class">
  	  <button type="submit" class="btn" name="register"> Sign Up </button>
  	</div>

	<p style="text-align:center;">Already a Royal Pups fan member? <a href="index.php" style="color: blue">Log In</a>.</p>

  
  </form>




</body>
</html>