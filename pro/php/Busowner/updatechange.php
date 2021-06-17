<?php   
session_start();  
if(!isset($_SESSION["OwID"])){  
    header("location: login.php");  
} else {  
?>
<?php
$id=$_GET['id'];
$sesid2=$_GET['seassionid'];

?>
<?php

require '../config.php';

$facility="";
if(!empty($_POST['Fac'])) {
    foreach($_POST['Fac'] as $check) {

        $facility .=$check.",";

    }
}



	$comName = $_POST['comName'];
	
	
	$BusType = $_POST['BusType'];
	
	
	$capacity = $_POST['seat'];
	
	
	

	

		
		$sql =	"UPDATE bus SET ComName='$comName',BType='$BusType',Bfac='$facility',SCap='$capacity' WHERE BusID='$id'";
		if($con->query($sql)){
			
			
			header("Location: busupdate.php?id=$sesid2");
        }
		else{
			
			echo $sql . $con-> error; 
		}    

	
	
	
	
		$con->close();
	
	
?>

<?php
}

?>