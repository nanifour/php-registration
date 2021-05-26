<!--Author: Darnisha Holloway 
      Date: March 2, 2020 
      Project --> 
      
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	<title> Royal Pups FC </title>
  <meta charset = "UTF-8" />

  <style>
form {
  background-color: #56CBF9 !important;

}

.btn {
  padding: 13px;
  font-size: 15px;
  color: white;
  margin: 10px 0px 0px 215px;
  background: #76178D;
  border: none;
  border-radius: 5px;
}

.btn:hover{
  background-color: #45a049;
}

</style>
</head>

<body>
    <!-- Included Files -->
    <?php include("header.php"); ?>

<?php
//check if user is logged in before adding event
if(empty($_SESSION['logged_in']) || ! $_SESSION['logged_in']){
  //direct user to log in page if not logged in
   header("Location: index.php");
   exit;
}

?>   


<form method="post" action="new_event_action.php">
  	<div class="input-group">
  	  <label> Event Name </label>
  	  <input type="text" placeholder="Name of the event.." name="event_name" required/>
  	</div>
    <div class="input-group">
  	  <label> Sponsor </label>
  	  <input type="text" placeholder="Sponsor of the event.."  name="sponsor" required/>
  	</div> 
  	<div class="input-group">
  	  <label> Description </label>
      <input type="text" name="description" placeholder="Enter short description of event..." required>
  	</div>
      <div class="input-group">
  	  <label> Date </label>
      <input type="date" name="date1" min=
        <?php
          echo date('Y-m-d');
        ?>
      >
  	</div>
    <div class="input-group">
  	  <label> Time </label>
  	  <input type="time" name="time1">
  	</div>  

  	<div class="input-group">
      <button type="submit" class="btn" name="register"> Add Event </button>
    </div>
    
</form>



</body>
</html>

