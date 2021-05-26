<?php  
//Start session
session_start();

// Setup
  $messages = array();
  $error = FALSE;

// Get parameters from form 
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pwdone = $_POST['password_1'];
  $pwdtwo = $_POST['password_2'];
  $zipcode = $_POST['zipcode'];


// Validate the parameters from the form 
if ( empty($name) || ! preg_match('/^[a-zA-Z0-9 ]{2,}$/', $name) )
  {
    $error = TRUE;
    $_SESSION['message'] = "The name field is required, and can contain only letters, numbers, and spaces.";
  }

if ( empty($username) || ! preg_match('/^[a-zA-Z0-9._-]{2,}$/', $username) )
  {
    $error = TRUE;
    $_SESSION['message'] = "The username field is required, and it can contain only letters, numbers, dots, underscores, and dashes";
  }

if ( empty($email) || ! preg_match('/^.+@.+$/', $email) )
  {
    $error = TRUE;
    $_SESSION['message'] = "A valid email address is required.";
  }

if ( empty($zipcode) || strlen($zipcode) != 5 || ! is_numeric($zipcode) )
  {
    $error = TRUE;
    $_SESSION['message'] = "A five digit zip code is required.";
    
  }
 

//Generate a password hash
$password = $_REQUEST['password_1'];  // registration
$hash = password_hash($password, PASSWORD_DEFAULT);


//Save to database
$db = new SQLite3('user.db');  // open the DB

  $command = "insert into user values('".$name  ."', '"
  .$username  ."', '"
  .$email  ."', '"
  .$hash  ."', '"
  .$zipcode ."')";  //save inserted values
   

  $result = $db->exec($command); // execute the command
  if ($result){
    echo "You are successfully signed up";
  }
  else {
    echo "Something went wrong with your registration ";
  }
  $db->close();



// Welcome message in session if the parameters are valid or there are no errors
  if(! $error) {
    $_SESSION['message'] = " " . $name . ". " . "You are now a member! " . "Login now on the login page";
  }
 

//check if message is set 
if (isset($_SESSION['message'])){
//redirect with message
  header("location: index.php");
  exit;
  //echo $_SESSION['message']; 
}

//clear message
//unset($_SESSION['message']);

?>


