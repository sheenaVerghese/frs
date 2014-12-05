<!doctype html>
<html>
<head>

<title>Airline Reservation System</title>

<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
<?php
include ("flightprice.php");
include ("addons1.php");
?>
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
        <li><a href="addons.php">Add-Ons</a></li>
        <li><a>Payment</a></li>
     </ul>
   </div>
</nav>










<div id="container">
    <div id="form">
          
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
      <h2>Payment  Method</h2>

<label for="paymentname">Full Name:</label>
<input id="paymentname" class="form-control" type="text" name="paymentname" alt="">
<br>
<label for="cardtype">Card Type:</label>
<select class="form-control" id="cardtype" name="cardtype">
<option value="" selected="visa">Visa</option> 
<option value="mastercard">Master Card</option> 
<option value="maestro">Maestro</option> 
</select>
<br>
<label for="cardno">Card Number:</label>
<input id="cardno" class="form-control" type="text" name="cardno" alt="">
<br>
<label for="expirydate">Expiry Date:</label>
<input id="expirydate" class="form-control" type="date" name="expirydate" alt="">
<br>
<label for="securitycode">Security Code:</label>
<input id="securitycode" class="form-control" type="text" name="securitycode" alt="">
<br>

      <h2>Billing Information</h2>
<br>
<label for="name">Full Name:</label>
<input id="name" class="form-control" type="text" name="name" alt="">
<br>
<label for="address">Address:</label>
<input id="address" class="form-control" type="text" name="address" alt="">

<br>
<input type="submit" class="btn btn-default" id="Btnsearch" formaction="confirmation.html"name="submit" value="Continue"/>

</form>
    </div>
    
    
</div>


<div id="bookingsummary">
<h4>Booking Summary</h4>
total price will be dsplayed here



</div>


<?php
include ("payment1.php");
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
 <script src="js/bootstrap.min.js"></script>



</body>
</htm