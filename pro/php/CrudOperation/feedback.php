<?php


require '../config.php';

	$FulName = $_POST['name'];
	
	
	$opinion = $_POST['rating'];
	
	
	$Feedback = $_POST['feedback'];
	
	
	
	
	//database connection

	
		
		$sql =	"INSERT INTO feedback(FID,FName, rate, Feedback) 
				VALUES('','$FulName', '$opinion', '$Feedback')";
		if($con->query($sql)){
			
			header("Location: ../../index.html");
                }
			
		
		else{
			
			echo $sql . $conn-> error; 
		}    

	
	
	
	
		$conn->close();
	
	
?>