    
   
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
  <title> Royal Pups FC </title> 
  <link rel="stylesheet" type="text/css" href="style/std.css">
  <meta charset = "UTF-8" />


  <nav>
    <div class="nav-center">
      <ul>
          <li> <a href="logout_action.php"> Log Out </a> </li>
          <li> <a href="index.php"> Log In </a> </li>
          <li> <a href="events.php"> Events </a> </li>
          <li> <a class="nav-link" href="registration.php"> Sign Up </a> </li>
      </ul>
    </div>
  </nav>


</head>

<body>
<?php
//start session 
//session_start();
session_start();

//check if logged in
//show session message
//$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : 'Guest';
if(isset($_SESSION['userid'])){
  echo "<h3>Royal Pups Member </h3>";
}
else{
  echo "<h3> Guest </h3>";
}
//<h3>Hello <?php echo $userid; </h3>
?>


</body>

</html>


<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black 

      php -S localhost:8000 -t royal-pup/


-->

