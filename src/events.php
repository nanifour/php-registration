<!--Author: Darnisha Holloway 
      Date: March 2, 2020 
      Project --> 
      
<!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

<head>
	<title> Royal Pups FC </title>
     <meta charset = "UTF-8" />

<script>
//eliminate past events that are prior to current date

//list events in chronological order from database
</script>  
</head>

<body>
    <!-- Included Files -->
    <?php include("header.php"); ?>

<div class="background">
  <div class="event-container">

    <div class="content">
                <?php  
                    //show session message
                    if (isset($_SESSION['message'])){

                      //boostrap alert
                      ?>
                        <div class="alert alert-primary" role="alert">
                          <strong>Hey!</strong> <?php echo  $_SESSION['message'];?>
                        </div>
                      <?php
                        //clear session message after
                        unset($_SESSION['message']);
                    }
                ?>


            <div class="item-container">

                  <div class="header">
                    <div class="circle-container">
                      <div class="circle-one"></div>
                      <div class="circle-two"></div>
                      <div class="circle-three"></div>
                    </div>
                    <div class="event-line"></div>
                  </div>

                  <div class="form-container">
                    <div class="text-header">
                      <h2>🗓 Events ⚽️</h2>
                    </div>


                  <table class="table table-sm table-dark">

                  <thead>
                    <tr>
                      <th scope="col"> Event Name </th>
                      <th scope="col"> Sponsor </th>
                      <th scope="col"> Description </th>
                      <th scope="col"> Date </th>
                      <th scope="col"> Time </th>
                    </tr>
                  </thead>

                    <tbody>
                        <?php
                            //Show all Events in table
                            $db = new SQLite3('event.db');  // open the DB

                            $query = 'select * from event'; // get all pets
                            $result = $db->query($query); // execute the query

                      
                            while ($event = $result->fetchArray(SQLITE3_ASSOC) ) {  // get next row
                              echo '<tr><td>'. $event['eventName']. '</td>
                                    <td>'. $event['sponsor'].'</td>
                                    <td>'. $event['description']. '</td>
                                    <td>'. $event['eventDate'].'</td>
                                    <td>'. $event['eventTime']. '</td>
                                    </tr>';
                            }
                          $db->close();
                        ?>
                      </tbody>

                  </table>  


                  <form action="new_event.php" method="get" >
                  <div class="add-event">
                    <div class="event-container">
                      <button type="submit" class="btn btn-primary" name="event"> Add An Event </button>
                      <p style="text-align:center;"> * Members Only *</p>
                    </div>  
                  </div>
                  </form>
              </div>

      </div>                 <!-- &nbsp; //non breaking space-->
   </div>
</div>
  
</body>

</html> 

