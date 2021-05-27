    
   
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
  <title> Royal Pups FC </title> 
  <link rel="stylesheet" type="text/css" href="include/std.css">
  <script src="include/app.js"></script>
  <meta charset = "UTF-8" />

    <!-- Bootstrap CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

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
          <a href="registration.php"> Sign Up </a> 
          <a href="logout_action.php"> Log Out </a> 
      </div>


  </div>
  

</body>

</html>


<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black 

      php -S localhost:8000 -t royal-pup/


-->

