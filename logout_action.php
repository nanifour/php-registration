<?php  
//Start session
session_start();

// Get parameters from form 
$username = $_POST['username']; 


unset($_SESSION['username']);
unset($_SESSION['logged_in']);			// clear the session
$_SESSION['message'] = "You are now logged out";
header("Location: index.php");			// redirect to home page

//check if message is set 
if (isset($_SESSION['message'])){
    //redirect with message
      header("location: index.php");
      exit;
      //echo $_SESSION['message']; 
    }

?>