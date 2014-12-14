<?php
		 	
        if(isset($_POST['submit'])) {		
                        
                        
        // Receive data form Post and Save it as variables
        $origin =($_POST['origin']);
        $destination = isset($_POST['destination'])?$_POST['destination']:"dest"; 
        $depart = isset ($_POST['depart'])?$_POST['depart']:"undefined";
        $return = isset($_POST['return'])?$_POST['return']:" ";
        $adults = isset($_POST['adults'])?$_POST['adults']:"0";
        $kids = isset ($_POST['kids'])?$_POST['kids']:"0";
        $class = isset ($_POST['class']);
        echo "depart is ".$depart;
       if($origin!="origin"&&$destination!="dest"&&$adults!=0&&$depart!=""){
       //format of date is year-month-date
        $date=explode("-",$depart);
        echo "date is ".$date[0];//gives the year
        echo " ".$destination." ";
       $servername = "localhost";
       //change these according to your database credentials
       $username = "root";
       $password = "root";
       $dbname = "sqm";
       $month=0;
        if($date[1]=='JAN'){
        $month=1;      
        }
        else if($date[1]=="FEB"){
        $month=2;
        }
        else if($date[1]=="MAR"){
        $month=3;
        }
        else if($date[1]=="APR"){
        $month=4;
        }
        else if($date[1]=="MAY"){
        $month=5;
        }
        
        else if($date[1]=="JUN"){
        $month=6;
        }
       
        else if($date[1]=="JUL"){
        $month=7;
        }
        else if($date[1]=="AUG"){
        $month=8;
        }
        else if($date[1]=="SEP"){
        $month=9;
        }else if($date[1]=="OCT"){
        $month=10;
        }
        else if($date[1]=="NOV"){
        $month=11;
        }
        else {
        $month=12;
        }
        
        echo " month is ".$month. " walala "; 
        echo "dest= ".$destination;
        
       // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
       if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
        }
       // echo "dest is ".$destination;                
        $sql = "SELECT FlightID,ArrivalTime,ArrivalDay,ArrivalMonth,ArrivalYear,Price,DepartureTime FROM flight WHERE origin='".$origin.
                "' AND destination='".$destination."' AND DepartureDate=".$date[0]." AND DepartureMonth=".$month." AND DepartureYear=".$date[2];
        //SELECT FlightID,ArrivalTime,ArrivalDay,ArrivalMonth,ArrivalYear,Price,DepartureTime FROM flight WHERE origin='Kuala Lumpur(KUL)' AND destination='Dar Es Salaam(DAR)'
       //  and DepartureDate=02 and DepartureMonth=4 and DepartureYear=2015;
        echo " origin is ".$origin;
        echo " year is ".$date[2]." month is ".$month." date is ".$date[0]." yolo ";
        $result = $conn->query($sql);
        echo "no prob here";
       // echo " result is ".$result;//result is empty
        //echo "<select>";
       // echo "result is ".$result->num_rows;               
        if ($result->num_rows > 0) {
                // output data of each row
                echo " in if";
               // echo "<option value='dest' selected>Select Destination</option>";
                while(($row = $result->fetch_assoc())) {
                        $flightId=$row['FlightID'];
                        $arrivalTime=$row['ArrivalTime'];
                        $arrivalDay=$row['ArrivalDay'];
                        $arrivalMonth=$row['ArrivalMonth'];
                        $arrivalYear=$row['ArrivalYear'];
                        $price=$row['Price'];
                        $departureTime=$row['DepartureTime'];
                        
                        //echo "<option value=".$destination.">".$destination."</option>";
                         echo "testing ".$flightId." ".$arrivalTime." ".$departureTime;       
                             }
                             
                        } 
        else{
                echo "no results";
             // echo "<option value='not_found'>No Destinations Available</option>";
           }
       // echo "</select>";
        $conn->close();               
        
}//end if
//test
//echo 'Flight Results for flights from '.$origin.' to '.$destination.', flying on '.$depart.' and returning on '.$return.' with '.$adults.' adults and '.$kids.' kids in ' .$class. ' class';
}

?>