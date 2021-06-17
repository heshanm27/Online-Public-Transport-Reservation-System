<?php   
session_start();  
if(!isset($_SESSION["OwID"])){  
    header("location: log.php");  
} else {  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/Busreg.css">
    <link rel="stylesheet" href="../../css/nav.css">
    
    <title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../..//img/navimg/socialmedia/logo.png"></title>
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
        <!--First Drop Down Menu-->
        
        
        <li><a href="profile.php">User Profile</a>
       
        
        </li>
        <li><a href="../../help.html">Help</a></li>
        
        </li>
        <!--Third Drop Down Menu-->
        <li><a href="reg.php" style="background-color:orange;color:white; ">Sign In</a>
        
           
            
            </li>
        
        </li>
        </ul>
        </nav>  

         <!--Navigation bar End-->
<!---------------------------------------------------------------------------------------------------->


    <div id="content">
	<div id="rightBox">
<table>

<form action="../CrudOperation/BusInfo.php" method="post">
<center>

<tr>
<td><h2> Bus Registration </h2></td>
</tr>


<tr>
<td> Company name -: </td>
</tr>

<tr>
<td colspan="2"> <input type="text" name="comName" id="comName" size="50" placeholder="Enter Company Name" required> </td> 
</tr>


<tr>
<td> Bus Type -: </td>
</tr>
<tr>
<td colspan="2"> <select id="BusType" name="BusType" style="width:355px"; required>
		<option value=""selected disabled hidden>Choose Bus Type</option>
		<option value="AC"> A/C </option>
		<option value="Non AC"> Non A/C </option> 
	 </select>
</td>
</tr>

<tr>
<td> Bus facilities -:</td>
</tr>
<tr>
<td>
<input type="checkbox" id="Fac1" name="Fac[]" value="A/C" style="margin-left:30px"> A/C 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="Fac2" name="Fac[] " value="adjustable Seat"> Adjustable Seat 
</td>
</tr>

<tr>
<td>
<input type="checkbox" id="Fac3" name="Fac[]" value="Wifi" style="margin-left:30px"> Wifi
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="Fac4" name="Fac[]" value="Movie"> Movie
</td>
</tr>


<tr>
<td>
<input type="checkbox" id="Fac5" name="Fac[]" value="Music" style="margin-left:30px"> Music
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="Fac6" name="Fac[]" value="Phone charger"> Phone charger
</td>
</tr>

<tr>
<td>Seat Capacity -: </td>
</tr>
<tr>
<td colspan="2" >
<input type="radio" id="32" name="seat" value="32" style="margin-left:30px" required>32
<input type="radio" id="48" name="seat" value="48" style="margin-left:30px">48
<input type="radio" id="54" name="seat" value="54"style="margin-left:30px">54
<input type="radio" id="60" name="seat" value="60"style="margin-left:30px">60
</td>
</tr>

<tr>
<td>Owner Name -: </td>
</tr>
<tr>
<td colspan="2">
<input type="text" id="OwnerName" name="Ownername" size="50" placeholder="Enter Your Full Name" required>
</td>
</tr>

<tr>
<td>NIC -:</td>
</tr>
<tr>
<td colspan="2">
<input type="Text" id="NIC" name="NIC" maxlength="12" size="50" placeholder="Enter NIC Number" required>
</td>
</tr>

<tr>
<td>Mobile Number -:</td>
</tr>
<tr>
<td colspan="2">
<input type="tel" id="MobNum" name="MobNum" min="0" maxlength="10" size="50" placeholder="Mobile phone number" required>
</td>
</tr>

<tr>
<td> Email -: </td>
</tr>
<tr>
<td colspan="2">
<input type="email" id="email" name="email" size="50" placeholder="Enter Valid Email Address" required>
</td>
</tr>

<tr>
<td><center><input type="submit" value="Register" class="button"></center>	
</td>
</tr>

</table>





</form>

</center>
        
    </div>
	</div>



  <!------------------------------------------------------------------------------------------------------------->  

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
        <a href="https://www.linkedin.com/" target="_blank"><img src="../../img/navimg/socialmedia/linkedin-brands.svg" alt="" class="social"></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><img src="../../img/navimg/socialmedia/twitter-square-brands.svg" alt="" class="social"></a>
     </div>
    <div id="copyright">Copyright C@2021</div>
    </footer>
</body>
</html>

<?php

  }
?>