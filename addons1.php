<?php
		 	
if(isset($_POST['submit'])) {		
		
		
// Receive data form Post and Save it as variables
$extrapcs = @$_POST['extrapcs'];
$extraweight = @$_POST['extraweight'];

//1 kg = RM15
//1 piece = RM 200

$extrabaggageprice = $extrapcs*200 + $extraweight*15;
echo "Extra Baggage Price: RM $extrabaggageprice ";
}

?>