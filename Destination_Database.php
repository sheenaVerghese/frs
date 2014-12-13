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
                        //$pwd=isset($_POST['passport'])?$_POST['passport']:" ";
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                             die("Connection failed: " . $conn->connect_error);
                        }
                        echo $origin."wakak";
                        $sql = "SELECT Destination FROM flight WHERE origin='".$origin."'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                             // output data of each row
                             echo "<select>";
                             while(($row = $result->fetch_assoc())) {
                               $destination=$row['Destination'];
                                echo "<option value=".$destination.">".$destination."</option>";
                               
                                
                                
                             }
                             echo "</select>";
                        } 
                       else{
                             echo "0 results";
                        }

                        $conn->close();
                ?>  
        
        
        </body>





</html>
