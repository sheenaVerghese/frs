<!--******************************************************
* Title: Database for manage booking
* Author: Sheena V.
* Date: December 12th 2014
*
********************************************************-->
<!Doctype html>
<html>
        <body>
        
        <?php
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
                }
                
             }
        } 
       else{
             echo "0 results";
        }

        $conn->close();
?>  
        
        
        
        
        
        
        






        </body>


</html>