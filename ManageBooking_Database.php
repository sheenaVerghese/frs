<!--******************************************************
* Title: Database for manage booking
* Author: Sheena V.
* Date: December 12th 2014
*
********************************************************-->
<!Doctype html>
<html>
        <body>
        
	 <link href="stylestyle.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!-- Bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
         
         <?php
		 include ("cancelbooking.php"); // added by Mansa
		 ?>
	 
	 
        <?php
	
	if (isset($_POST['Manage booking'])){ // added by Mansa
	
        $servername = "localhost";
        //change these according to your database credentials
        $username = "root";
        $password = "root";
        $dbname = "sqm";
        $bookingNum=isset($_POST['booking'])?$_POST['booking']:" ";
        $pwd=isset($_POST['passport'])?$_POST['passport']:" ";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT FlightID, SeatID, PassportNumber FROM customer";
        $result = $conn->query($sql);
        $bookingI=false;
        echo "hi";
        if (($result->num_rows > 0)&&($bookingNum!=" "&&$pwd!=" ")) {
             // output data of each row
             
             while(($row = $result->fetch_assoc())&&$bookingI==false) {
                $booking_ID=$row["FlightID"].$row["SeatID"];
                echo $booking_ID;
                if($booking_ID==$bookingNum){
                        $booking=true;
                }
                if($booking_ID==$bookingNum&&$row["PassportNumber"]==$pwd){
                         echo "<br> id: ". $row["FlightID"]. " - Name: ". $row["SeatID"]. " " . $row["PassportNumber"] . "<br>";
			 echo "<br> <input type="cancelBooking" class="btn btn-default" id="Cancelbooking" name="Cancelbooking" value="Cancel booking"/> '"// syntax error over here which I cant indentify
				
			
				}
                
             }
        } 
       else{
             echo "No results found";
        }

        $conn->close();
	
	
	} // end if
?>  
        
        
        
        
        
        
        






        </body>


</html>