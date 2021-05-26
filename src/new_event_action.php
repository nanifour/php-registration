<?php 
 //Start session
session_start();

// Setup
$messages = array();
$error = FALSE;

// Get parameters from form 
$ename = $_POST['event_name'];
$sponsor = $_POST['sponsor'];
$description = $_POST['description'];
$date = $_POST['date1']; 
$time = $_POST['time1'];

// Validate the parameters from the form 
if ( empty($ename) || ! preg_match('/^[a-zA-Z0-9 ]{2,}$/', $ename) )
  {
    $error = TRUE;
    $_SESSION['message'] = "The event name field is required.";
  }

if ( empty($sponsor) || ! preg_match('/^[a-zA-Z0-9 ]{2,}$/', $sponsor) )
  {
    $error = TRUE;
    $_SESSION['message'] = "The sponsor field is required.";
  }

if ( empty($description) || ! preg_match('/^[a-zA-Z0-9 ]{2,}$/', $description) )
  {
    $error = TRUE;
    $_SESSION['message'] = "The description field is required.";
  }

if ( empty($date))
{
  $error = TRUE;
  $_SESSION['message'] = "The date field is required.";
}

if ( empty($time))
{
  $error = TRUE;
  $_SESSION['message'] = "The time field is required.";
}

//save to database
$db = new SQLite3('event.db');  // open the DB

  $command = "insert into event values('".$ename  ."', '"
  .$sponsor   ."', '"
  .$description  ."','"
  .$date  ."', '"
  .$time."')";   

  $result = $db->exec($command); // execute the command
  if ($result){
    echo "You have successfully added an event";
  }
  else {
    echo "Something went wrong with adding the event";
  }
$db->close();


// Success in session if event added
if(! $error) {
  $_SESSION['message'] = "Event:  " . $ename . " " . " was successfully added.";
}

//check if message is set 
if (isset($_SESSION['message'])){
  //redirect with message
    header("location: events.php");
    exit;
    //echo $_SESSION['message']; 
  }


?>