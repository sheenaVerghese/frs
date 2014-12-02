
<!--******************************************************
* Title: Home/Search Page
* Author: Shezan M
* Date: November 25th 2014
*Hello Test 
*
********************************************************-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
  		<title>Airline Reservation System</title>
		<script>
			window.onload = function() {
				document.getElementById('oneway').onchange = disablefield;
				document.getElementById('return').onchange = disablefield;
			}
			function disablefield(){
				if ( document.getElementById('oneway').checked == true ){
					document.getElementById('returndate').value = '';
					document.getElementById('returndate').disabled = true
				}
				else if (document.getElementById('return').checked == true ){
					document.getElementById('returndate').disabled = false;
				}
			}
		</script>
	</head>

<body>
<div id="FirstImage">
<img src="images/arslogo3.png" alt="plane_logo" width="78%" height="78%" align="right">
</div>
<nav class="navbar-default" role="navigation">
   <div class="navbar-header">
      </div>
   <div>
      <ul class="nav navbar-nav"">    
        <li><a href="index.html">Home</a></li>
<li><a href="managebooking.html">Manage Booking</a></li>
      </ul>
   </div>
</nav>
<div id="searchform">
<form id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<input id="oneway" type="radio" name="flighttype" value="oneway" value="return"> One-way </input>
<input id="return" type="radio" name="flighttype" value="return" value="return" checked> Return</input>
<br>

<label for="origin">Origin:</label>
<select id="origin" name="origin">
  <option value="KUL">Kuala Lumpur (KUL)</option>
  <option value="LHR">London Heathrow (LHR)</option>
  <option value="DAR">Dar Es Salaam (DAR)</option>
  <option value="DXB">Dubai (DXB)</option>
  //add more countries
</select>
<br>
<label for="destination">Destination:</label>
<select id="destination" name="destination">
  <option value="KUL">Kuala Lumpur (KUL)</option>
  <option value="LHR">London Heathrow (LHR)</option>
  <option value="DAR">Dar Es Salaam (DAR)</option>
  <option value="DXB">Dubai (DXB)</option>
  //add more countries
</select>
<br>
<label for="departdate">Depart:</label>
<input id="departdate" class="form-control" type="date" name="depart" alt="">
<br>
<label for="returndate">Return:</label>
<input id="returndate" class="form-control" type="date" name="return" alt="">
<br>
<label for="class">Class:</label>
<select id="class" name="class">
  <option id="economy" value="Economy">Economy</option>
  <option id="business" value="Business">Business</option>
 </select>
 <br>
<label for="adults">Adults:</label>
<select id="adults" name="adults">
  <option value=0>0</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
</select>

<label for="kids">Kids:</label>
<select id="kids" name="kids">
  <option value=0>0</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
</select>
<br>
<input type="submit" class="btn btn-default" id="Btnsearch" name="submit" value="Search Flights"/>

</form>


</div>
<div id="searchresults">

<?php
include ("search.php");
?>
</div>

</body>

</html>