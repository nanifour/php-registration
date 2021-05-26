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


<style>
.add-event{
  display: flex;
  
}
p{
     vertical-align: top;
     text-align: left;
}
/* table entry event */
td{
  text-align: center;
  padding: 15px 15px;
  border: 2px solid ;
  border-color: #56CBF9;
}
/* row */
tr{
    text-align: center;
}

/*Add Event Button */
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


  <div class="event-container">

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

      <h1 style="text-align:center;"> Events </h1>

      <table>
        <row><th>  Event Name   </th><th>  Sponsor   </th><th>  Description   </th><th  >Date   </th><th>  time   </th></row>

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
      </table>  


      <form action="new_event.php" method="get" >
      <div class="add-event">
        <div class="event-container">
          <p style="text-align:center;"> ONLY Royal Pups members are to add to the event calender</p>
          <button type="submit" class="btn" name="event"> Add An Event </button>
        </div>  
      </div>
      </form>


      <!-- &nbsp; //non breaking space-->
    </div>
  
</body>

</html> 

