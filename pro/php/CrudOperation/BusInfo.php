

<?php

require '../config.php';
//busregistration info inserting
$facility="";
if(!empty($_POST['Fac'])) {
    foreach($_POST['Fac'] as $check) {

        $facility .=$check.",";

    }
}



	$comName = $_POST['comName'];
	
	
	$BusType = $_POST['BusType'];
	
	
	$capacity = $_POST['seat'];
	
	
	$OwnerName = $_POST['Ownername'];
	
	
	$NIC = $_POST['NIC'];
	
	
	$MobNum = $_POST['MobNum'];
	
	
	$Email = $_POST['email'];
	
	
	

		
		$sql =	"INSERT INTO bus(BusID, ComName, BType,Bfac, SCap, OName,ONIC, OPhn,OEmail) 
				VALUES('','$comName', '$BusType', '$facility', '$capacity', '$OwnerName', $NIC , $MobNum , '$Email')";
		if($con->query($sql)){
			
			
			header("location: ../Busowner/profile.php");  
		}
		else{
			
			echo $sql . $con-> error; 
		}    

	
	
	
	
		$con->close();
	
	
?>

