<?php
		 	
if(isset($_POST['submit'])) {		
		
		
// Receive data form Post and Save it as variables
$origin = @$_POST['origin'];
$destination = @$_POST['destination'];
$depart = @$_POST['depart'];
$return = @$_POST['return'];
$adults = @$_POST['adults'];
$kids = @$_POST['kids'];
$class = @$_POST['class'];


//test
//echo 'Flight Results for flights from '.$origin.' to '.$destination.', flying on '.$depart.' and returning on '.$return.' with '.$adults.' adults and '.$kids.' kids in ' .$class. ' class';
}

?>