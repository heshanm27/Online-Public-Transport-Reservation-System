<?php   
session_start();  
if(!isset($_SESSION["OwID"])){  
    header("location: login.php");  
} else {  
?>

<?php

$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/busupdate.css">
    <link rel="stylesheet" href="../../css/nav.css">

    <script src="../js/sctipt.js"></script>
    <title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../../img/navimg/socialmedia/logo.png"></title>
</head>
<body>

   <!--Navigation bar Start-->
   <nav>  

<div class="logo">
    <!--Site Logo-->
    <a href="../../index.html" style="text-decoration: none; ">
        <img src="../../img/navimg/socialmedia/logo.png" id="logoimg">
       
      <h4>BuyTickets.LK </h4></a></div>
    <!--Navigiation Bar-->
<ul>
<li><a href="../../index.html">Home</a></li>




<li><a href="../php/userprofile.php">User Profile</a>

    
    
    </li>

<li><a href="../../help.html">Help</a></li>
<!--Third Drop Down Menu-->


</li>
</ul>
</nav>  
 <!--Navigation bar End-->






    </div>
    <div id="content">
    <a href="profile.php"><img id="back" src="../../img/arrow-left-solid.svg"></a>
    <table class='bus'>
    <tr>
    <th>COMPANY NAME</th><th>BUS TYPE</th><th>BUS FACILITIES</th><th>SEAT CAPACITY</th><th>Remove Bus</th><th>Update Bus Details</th>
    </tr>
    <?php


require '../config.php';
$sql = "SELECT * FROM bus INNER JOIN busowner ON busowner.OwID = bus.OwID where bus.OwID='$id'";
$result = $con->query($sql);

if($result->num_rows>0){

  while($row = $result->fetch_assoc()){
      $dbbusid=$row['BusID'];
    $dbcomname =$row['ComName'];
    $dbbtype =$row['BType'];
    $dbbfac =$row['Bfac'];
    $dbscap =$row['SCap'];

 
    echo"<tr>
    <td>$dbcomname</td>
    <td>$dbbtype </td>
    <td>$dbbfac </td>
    <td>$dbscap</td>
    <td><a href='busdelete.php?id=$dbbusid&seassionid=$id'><button>DELETE</button></a></td>
    <td><a href='changedata.php?id=$dbbusid&seassionid=$id'><button>UPDATE</button></a></td>
    
                 </tr> ";

      
  }

}
          
   
 ?>

</table>
    </div>

   
    <footer>
    <div class="footerDiv" id="fd1">
    
        <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
       
    <h1 class="fd1h1" ><a href="../../index.html"> BuyTickets.LK</a></h1>
        <ul id="flist">
    
            
            <li><a href="../../ContactUs.html">Contact Us </a></li>
            <li><a href="../../offers.html">Offers </a></li>
            <li><a href="../../help.html">Helps </a></li>
            <li><a href="../../Terms _ condition.html">Terms and Conditions </a></li>
            <li><a href="../../Feedback.html">FeedBack </a></li>
        </ul>
       
    </div>
    
    <div class="footerDiv" id="fd2">
        <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
    <h1 class="fd1h2">About Us</h1>
    
    <p>01.09 team developed BuyTicket.LK - an innovative online bus and train ticket booking platform that seeks a hassle-free and improved public transportation system. 
            The largest growing business in Sri Lanka and other countries, especially by bus and train. It is therefore imperative to provi
            de an adequate user-friendly innovation mechanism for bus and train ticket booking procedures.<a href="../../aboutUs.html" style="color: darkorange;">More</a></p>
    
    </div>
    <div class="footerDiv" id="fd3"><hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
    <h1>Payment Method</h1>
    <a href="https://www.mastercard.us/en-us.html" target="_blank"> <img src="../../img/navimg/MasterCard.svg" id="mastercard" ></a>
    <a href="https://www.paypal.com/us/home" target="_blank"> <img src="../../img/navimg/paypal_PNG3.png" id="paypal"></a>
    <a href="https://www.payhere.lk/" target="_blank"> <img src="../../img/navimg/PayHere-Logo.png" alt=""></a>
    <br>
    
     <h1>Bank Partner</h1>
        <a href="https://www.boc.lk/" target="_blank"><img src="../../img/navimg/boc.svg" alt=""></a>
        <a href="https://www.peoplesbank.lk/" target="_blank"><img src="../../img/navimg/peoples-bank.png" alt=""></a>
        <a href="https://www.nsb.lk/" target="_blank"><img src="../../img/navimg/National-Savings-Bank-NSB-in-Sri-Lanka.jpg" alt=""></a>
    </div>
    <div class="footerDiv" id="fd4">
    
    
    <h1>Follow Us</h1>
    
    <a href="https://www.facebook.com/" target="_blank"><img src="../../img/navimg/socialmedia/facebook-brands.svg" alt="" class="social"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../../img/navimg/socialmedia/instagram-brands.svg" alt="" class="social"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src=".././img/navimg/socialmedia/linkedin-brands.svg" alt="" class="social"></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><img src="../../img/navimg/socialmedia/twitter-square-brands.svg" alt="" class="social"></a>
     </div>
    <div id="copyright">Copyright C@2021</div>
    </footer>
</body>
</html>

<?php

  }
?>