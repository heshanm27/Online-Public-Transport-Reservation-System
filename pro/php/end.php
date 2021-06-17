<?php   
session_start();  
if(!isset($_SESSION["user"])){  
    header("location: ../php/login.php");  
} else {  
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../css/end.css">

    <title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../img/navimg/socialmedia/logo.png"></title>
</head>
<body>




    <div id="content">


    <p>Your Ticket Will Be Received To  Email</p>
    <a href="../Feedback.html"><button>FeedBack</button></a>
    <a href="SearchBusresult.php"><button>Search Ticket Again</button></a>
    <a href="../index.html"><button>Back To Home</button></a>










</div>



</body>
</html>

<?php

  }
?>