<!doctype html>
<html>
<head>

<title>Airline Reservation System</title>

<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div id="FirstImage">
<img src="images/arslogo2.png" alt="plane_logo">
</div>
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

<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
  </div>
  <div>
    <ul class="nav navbar-nav">        
        <li><a href="travellerdetails.php">Traveller Details</a></li>
        <li><a href="">Seats</a></li>
        <li><a>Add-Ons</a></li>
        <li><a>Payment</a></li>
     </ul>
   </div>
</nav>

<div id="container">
    <div id="meal">
          <h2>Meal Selection</h2>
          
          <form id="addons" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

<label for="breakfast">Breakfast:</label>
<select class="form-control" id="breakfast" name="breakfast">
<option value="Continental">Continental</option> 
<option value=""></option> 
<option value=""></option> 
<option value=""></option> 
<option value=""></option>
</select>
<br>
<label for="lunch">Lunch:</label>
<select class="form-control" id="lunch" name="lunch">
<option value="Vegeterian">Vegeterian</option> 
<option value="Seafood">Seafood</option> 
<option value=""></option> 
<option value=""></option> 
<option value=""></option>
</select>
<br>
<label for="dinner">Dinner:</label>
<select class="form-control" id="dinner" name="dinner">
<option value="Vegeterian">Vegeterian</option> 
<option value="Seafood">Seafood</option> 
<option value=""></option> 
<option value=""></option> 
<option value=""></option>
</select>
<br>
</form>
          
    </div>
    <div id="baggage">
          <h2>Extra Baggage</h2>
          
           <form id="addons" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

<label for="extrapcs">Extra Pieces:</label>
<select class="form-control" id="extrapcs" name="extrapcs">
<option value=1>1</option> 
<option value=2>2</option> 
<option value=3>3</option> 
</select>
<br>
<label for="extraweight">Extra Weight:</label>
<input id="extraweight" class="form-control" type="text" name="extraweight" alt=""> kgs
<br>
<br>
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


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
 <script src="js/bootstrap.min.js"></script>



</body>
</html>

