<!--******************************************************
* Title: Manage Booking Page
* Author: Mansa C.
* Date: November 25th 2014
*
Modified by: Sheena
Date Modified: December 12 2014
*
********************************************************-->
<!Doctype html>
<html>
        <head>

        <title>Airline Reservation System</title>

        <link href="stylestyle.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!-- Bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
	 
	 <?php
include ("ManageBooking_Database.php"); // added by Mansa
		 include ("cancelbooking.php"); // added by Mansa


         ?>
        </head>

        <body>
                <div id="FirstImage">
                        <img src="images/arslogo2.png" width="1400" height="320" alt="plane_logo">
                </div>
        <nav class="navbar navbar-default" role="navigation">
           <div class="navbar-header">
             <li><img src="images/logo1.jpg" width="186" height="45" alt=""/></li>
           </div>
           <div>
              <ul class="nav navbar-nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="managebooking.php">Manage Booking</a></li>
              </ul>
           </div>
        </nav>

        <div class="container">
              <h2>Manage Booking</h2>
              <p>Passenger Name</p>
              <form class="form-inline" role="form" action="ManageBooking_Database.php" method="post">
              <div class="form-group">
                  <label for="Booking Number">Booking Number:</label>
                  <input type="Booking Number" class="form-control" id="Booking Number" name="booking" placeholder="Enter booking number">
              </div>
              <div class="form-group">
                  <label for="passport">Passport Number:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter passport number" name="passport">
              </div>
	      <input type="submit" class="btn btn-default" id="Managebooking" name="Managebooking" value="Manage booking"/> <!-- added by Mansa -->
       
              </form>
            </div>
	    
	    <div class = "Cancel">
	    <input type="submit" class="btn btn-default" id="Cancelbooking" name="Cancelbooking" value="Cancel booking"/> <!-- added by Mansa -->
	    </div>

         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
              <script src="https://code.jquery.com/jquery.js"></script>
              <!-- Include all compiled plugins (below), or include individual files 
                    as needed -->
         <script src="js/bootstrap.min.js"></script>



        </body>
</html>
