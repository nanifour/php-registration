<!--Author: Darnisha Holloway 
      Date: March 2, 2020 
      Project --> 
      
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	<title> Royal Pups FC </title>
  <meta charset = "UTF-8" />

</head>

<body>
    <!-- Included Files -->
    <?php include("header.php"); ?>

  <div class="background">

    <div class="content">

            <?php
            //check if user is logged in before adding event
            if(empty($_SESSION['logged_in']) || ! $_SESSION['logged_in']){
              //direct user to log in page if not logged in
              header("Location: index.php");
              exit;
            }

            ?>  
            
            
		    <div class="item-container">

              <div class="header">
                <div class="circle-container">
                  <div class="circle-one"></div>
                  <div class="circle-two"></div>
                  <div class="circle-three"></div>
                </div>
                <div class="line"></div>
              </div>


              <div class="form-container">

                  <div class="text-header">
                    <h4> Add An Event 🗓</h4>
                  </div>	

                  <form name="newEvent" method="post" action="new_event_action.php">

                  <div class="format">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" placeholder="Event Name" name="event_name" required/>
                        <label for="floatingInput">Event Name</label>
                      </div>
                   </div>

                   <div class="format">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" placeholder="Sponsor"  name="sponsor" required/>
                        <label for="floatingInput">Sponsor</label>
                      </div> 
                    </div>

                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="description" placeholder="Short Description" required>
                        <label for="floatingInput">Short Description</label>
                      </div>


                    <div class="dt-format">
                        <label> Date </label>
                            <input type="date" name="date1" min=
                              <?php
                                echo date('Y-m-d');
                              ?>
                            >

                    </div>

                    <div class="dt-format">
                        <label> Time </label>
                        <input type="time" name="time1">
                    </div> 

                      <div class="form-floating">
                        <button type="submit" class="btn btn-primary" name="register"> Add Event </button>
                      </div>
                  </form>
                </div>

        </div>
     
      </div>
  
    </div>



</body>
</html>

