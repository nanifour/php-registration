    
   
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
  <title> Royal Pups FC </title> 
  <link rel="stylesheet" type="text/css" href="style/std.css">
  <meta charset = "UTF-8" />
  

</head>

<body>


<div class="menu-container">
      <div class="left">
          <?php
          //start session 
          session_start();

          //check if logged in
          //show session message
          //$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : 'Guest';
          if(isset($_SESSION['username'])){
            echo "<h3>Hello Royal Pups Member 🐶</h3>";
          }
          else{
            echo "<h3> Hello Guest 👋🏽</h3>";
          }
          ?>
      </div>


      <div class="nav-right">
          <a href="events.php"> Events </a> 
          <a href="index.php"> Log In </a> 
          <a href="logout_action.php"> Log Out </a> 
          <a class="nav-link" href="registration.php"> Sign Up </a> 
      </div>


  </div>
  

</body>

</html>


<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black 

      php -S localhost:8000 -t royal-pup/


-->

