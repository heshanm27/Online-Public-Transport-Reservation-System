<?php   
session_start();  
unset($_SESSION['user']);  
session_destroy();  
header("location: ../php/login.php");  
?> 