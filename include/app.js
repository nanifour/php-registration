//Show user password
function showPassword() {
    var x = document.getElementById("password");

if (x.type === "password" ) {
  x.type = "text";
} 
else {
  x.type = "password";
}
}

//Make passwords visible
function showPasswords() {
	var x = document.getElementById("password1");
	var y = document.getElementById("password2");

  if (x.type === "password1" && y.type === "password2" ) {
    x.type = "text";
	y.type = "text";
  } 
  else {
    x.type = "password1";
	y.type = "password2";
  }
}


//Check if passwords match
function checkPassword(){
	var x = document.getElementById("password1");
	var y = document.getElementById("password2");

	if (x.value === y.value){
		x.setCustomValidity('');
	}
	else{
		x.setCustomValidity("Passwords Do NOT Match!"); //custon message for password match
	}
}
