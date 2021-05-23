<?php  
//Start session
session_start();

// Get parameters from form 
$userid = $_POST['userid']; 
$pwdone = $_POST['password'];

//validate userid and password
if ( empty($userid) || ! preg_match('/^[a-zA-Z0-9 ]{2,}$/', $userid ))
{
  $error = TRUE;
  $_SESSION['message'] = "A user id is required.";

}

if ( empty($pwdone))
{
  $error = TRUE;
  $_SESSION['message'] = "A password is required.";

}

//Retrieve values from database
$db = new SQLite3('user.db');  // open the DB

    $command = "select password from user where userid='" .$userid ."'"; 
    $query = 'select * from user'; // get all pets
    $result = $db->query($query);  //execute query

    //$pwdone = $row['password'];

    while ($row = $result->fetchArray(SQLITE3_ASSOC)){
      $userid = $row['userid']; 
      $hash = $row['password'];
      $valid = password_verify($pwdone, $hash);  //check hash password
    }
    if ($userid != "" && $valid){ //if id not NULL --login
      $_SESSION['userid'] = userid;
      $_SESSION['logged_in'] = TRUE;
      $_SESSION['message'] = "You are now logged in! " . " Welcome, " .$userid. "!" ;
    } 
    else {  //if not found, invalid information
      unset($_SESSION['userid']);
      unset($_SESSION['logged_in']);
      $_SESSION['message'] = "You are not signed in yet, Invalid information entered";
    }
    
$db->close();


//check if message is set 
if (isset($_SESSION['message'])){
    //redirect with message
      header("location: index.php");
      exit;
      //echo $_SESSION['message']; 
    }


?>