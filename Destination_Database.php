<!Doctype html>
<html>
        <body>
        
                 <?php
                        $servername = "localhost";
                        //change these according to your database credentials
                        $username = "root";
                        $password = "root";
                        $dbname = "sqm";
                        $origin=$_GET['origin'];
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                             die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $sql = "SELECT Destination FROM flight WHERE origin='".$origin."'";
                        $result = $conn->query($sql);
                        echo "<select>";
                       
                        if ($result->num_rows > 0) {
                             // output data of each row
                             echo "<option value='dest' selected>Select Destination</option>";
                             while(($row = $result->fetch_assoc())) {
                               $destination=$row['Destination'];
                               echo "<option value='".$destination."'>".$destination."</option>";
                               
                               
                                
                             }
                             
                        } 
                       else{
                             echo "<option value='not_found'>No Destinations Available</option>";
                        }
                        echo "</select>";
                        $conn->close();
                ?>  
        
        
        </body>





</html>
