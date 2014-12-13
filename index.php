<!--******************************************************
* Title: Home/Search Page
* Author: Shezan M
* Date: November 25th 2014
*
Modified by: Sheena, Jake
*
********************************************************-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
		<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
  	
    <title>Airline Reservation System</title>
		
    <script type="text/javascript" src="bootstrap.js"></script>
		<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
		<script type="text/javascript">
			window.onload = function() {
				new JsDatePick({
					useMode:2,
					target:"departdate",
					dateFormat:"%d-%M-%Y"
				});
				new JsDatePick({
					useMode:2,
					target:"returndate",
					dateFormat:"%d-%M-%Y"
				});
				document.getElementById('oneway').onchange = disablefield;
				document.getElementById('return').onchange = disablefield;
			}
				
			
			function showDiv(){
				document.getElementById('searchresults').style.display = 'block';
				document.getElementById('searchresults').style.display = 'block'; 
			}
		</script>
		<?php include ("search.php");?>
	</head>

  <body>
         <script>
         //gets the destinations available from database
                function getDestination(str) {
                    if (str == "origin") {
                        document.getElementById("destination").innerHTML = "";
                        return;
                    } else {
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("destination").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET","Destination_Database.php?origin="+str,true);
                        xmlhttp.send();
                    }
                }
        </script>
    <div id="FirstImage">
      <img src="images/arslogo3.png" alt="plane_logo" width="100%" height="100%" align="left">
    </div>

    <nav class="navbar-default" role="navigation">
      <div>
        <ul class="nav navbar-nav">    
          <li><a href="index.php">Home</a></li>
		      <li><a href="managebooking.html">Manage Booking</a></li>
        </ul>
      </div>
    </nav>

    <div >
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" name="searchform" id="searchform">
        <input id="oneway" type="radio" name="flighttype" value="oneway" value="return"> One-way </input>
        <input id="return" type="radio" name="flighttype" value="return" value="return" checked> Return</input>

        <br>

        <label for="origin">Origin:</label>

        <select class="form-control" id="origin" name="origin"onchange="getDestination(this.value)">
          <option value="origin"selected>Select Origin</option>
          <option value="Kuala Lumpur(KUL)">Kuala Lumpur (KUL)</option>
          <option value="London Heathrow(LHR)">London Heathrow (LHR)</option>
          <option value="Dar Es Salaam(DAR)">Dar Es Salaam (DAR)</option>
          <option value="Dubai(DXB)">Dubai (DXB)</option>
        </select>

        <label for="destination">Destination:</label>
        
        <select class="form-control" id="destination" name="destination"  >
        
        </select>
        

        <label for="departdate">Depart:</label>

                <input id="departdate" class="form-control" type="text" size="12" name="depart" alt="">
        
        <label for="returndate">Return:</label>
        
                <input id="returndate" class="form-control" type="text" size="12" name="depart" alt="">
        
        <label for="class">Class:</label>

        <select class="form-control" id="class" name="class">
          <option id="economy" value="Economy">Economy</option>
          <option id="business" value="Business">Business</option>
        </select>

        <label for="adults">Adults:</label>

        <select class="form-control" id="adults" name="adults">
          <option value=0 selected>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
        </select>

        <label for="kids">Kids:</label>
        
        <select class="form-control" id="kids" name="kids">
          <option value=0 selected>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
        </select>

        <input id="Btnsearch" type="submit" class="btn btn-default"  name="submit"  value="Search Flights"/>
      
      </form>
    </div>

<!--the code after this line can be handled by search.php in details but it needs to have a defined div to hold the results from search.php-->

    <div id="searchresults">

      <div id="dep">
      <form id= "flights" >

<h2>Departing Flight</h2>
<input id="flight1" type="radio" name="depflight" value="flight1" value="flight1"><?php  ?> </input>
<br>
<input id="flight2" type="radio" name="depflight" value="flight2" value="flight2"><?php ?> </input>
<br>
<input id="flight3" type="radio" name="depflight" value="flight3" value="flight3"><?php  ?> </input>

</form>
</div>
<div id="ret">
<form id="flights">
<h2>Returning Flight</h2>
<input id="flight1" type="radio" name="retflight" value="flight1" value="flight1"><?php ?> </input>
<br>
<input id="flight2" type="radio" name="retflight" value="flight2" value="flight2"><?php ?> </input>
<br>
<input id="flight3" type="radio" name="retflight" value="flight3" value="flight3"><?php  ?> </input>
<br><br><br>
<input type="submit" class="btn btn-default" id="Btnsearch2" formaction="travellerdetails.php" value="Continue"/>
</form>

</div>
</div>

</body>

</html>