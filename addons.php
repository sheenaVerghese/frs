<!--******************************************************
* Title: Add-Ons Page
* Author: Shezan M
* Date: November 25th 2014
*
*
********************************************************-->
<!doctype html>
<html>
    <head>
    
        <title>Airline Reservation System</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
    </head>

	<body>
		<nav class="navbar navbar-default" role="navigation">
   			<div class="navbar-header">
   				<li><img src="images/logo1.jpg" width="186" height="45" alt=""/></li>
   			</div>
   			<div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="managebooking.html">Manage Booking</a></li>
                 </ul>
   			</div>
		</nav>


          	<div>
                	<ol class="progtrckr" data-progtrckr-steps="4">
    <li class="progtrckr-done"><a href="travellerdetails.php">Traveller Details</a></li><!--
 --><li class="progtrckr-done">Seat Selection</li><!--
 --><li class="progtrckr-todo">Add-Ons</li><!--
 --><li class="progtrckr-todo">Payment</li>
</ol>
                
           	</div>

		<div id="container">
   			<div id="meal">
          		<h2>Meal Selection</h2>
                <form id="addons" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                    <label for="breakfast">Breakfast:</label>
                    <select class="form-control" id="breakfast" name="breakfast">
                        <option value="Ordinary Meal">Ordinary Meal</option> 
						<option value="Continental">Continental</option> 
                        <option value="American Breakfast">American Breakfast</option> 
                        <option value="Indian Breakfast">Indian Breakfast</option> 
                        <option value="English Breakfast">English Breakfast</option>
                    </select><br>
                    <label for="lunch">Lunch:</label>
                    <select class="form-control" id="lunch" name="lunch">
                        <option value="Ordinary Meal">Ordinary Meal</option> 
                        <option value="Vegeterian Meal">Vegeterian Meal</option> 
                        <option value="Seafood">Seafood</option> 
                        <option value="Baby Meal">Baby Meal</option> 
                        <option value="Diabetic Meal">Diabetic Meal</option> 
                        <option value="Gluten-Free Meal">Gluten-Free Meal</option>
                        <option value="Kosher">Kosher</option> 
                        <option value="Muslim Meal">Muslim Meal</option> 
                        <option value="Low-Sodium Meal">Low-Sodium Meal</option> 
                    </select><br>
                    <label for="dinner">Dinner:</label>
                    <select class="form-control" id="dinner" name="dinner">
                        <option value="Ordinary Meal">Ordinary Meal</option> 
                        <option value="Vegeterian Meal">Vegeterian Meal</option> 
                        <option value="Seafood">Seafood</option> 
                        <option value="Baby Meal">Baby Meal</option> 
                        <option value="Diabetic Meal">Diabetic Meal</option> 
                        <option value="Gluten-Free Meal">Gluten-Free Meal</option>
                        <option value="Kosher">Kosher</option> 
                        <option value="Muslim Meal">Muslim Meal</option> 
                        <option value="Low-Sodium Meal">Low-Sodium Meal</option>
                    </select>
                    <br>
				</form>
			</div>
            <div id="baggage">
            	<h2>Extra Baggage</h2>
				<form id="addons" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					<label for="extrapcs">Extra Pieces:</label>
                    <select class="form-control" id="extrapcs" name="extrapcs">
                        <option value=0>None</option> 
                        <option value=1>1</option> 
                        <option value=2>2</option> 
                        <option value=3>3</option> 
                    </select><br>
                    
                    <label for="extraweight">Extra Weight:</label>
                    <input id="extraweight" class="form-control" type="text" name="extraweight" alt=""> kgs<br><br>
                    <input align="right" type="submit" class="btn btn-default" id="Btnupdate" name="submit" value="Update Booking Summary"/>
				</form>         
    		</div>
		</div>
		
        <div id="bookingsummary">	
			<h4>Booking Summary</h4>
			<?php
            	include ("addons1.php");
            ?>
			<br>
			<input type="button" class="btn btn-default" id="Btncontinue" onClick="window.location.href='payment.php'"  value="Continue"/>
       	</div>


    <script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>

