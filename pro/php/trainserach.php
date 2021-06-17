<!doctype html>
<html>
	<head>
    <title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../img/navimg/socialmedia/logo.png"></title>
	<link rel="stylesheet" href="../css/BusSearch.css">
    <link rel="stylesheet" href="../css/navsearch.css">


	</head>
	
	<body>
    <!--Navigation bar Start-->
    <nav>  

<div class="logo">
    <!--Site Logo-->
    <a href="../index.html" style="text-decoration: none; ">
        <img src="../img/navimg/socialmedia/logo.png" id="logoimg">
       
      <h4>BuyTickets.LK </h4></a></div>
    <!--Navigiation Bar-->
<ul>
<li><a href="../index.html">Home</a></li>

<!--First Drop Down Menu-->
<li><a href="#">Reservation</a>

<ul>
<li> <a href="SearchBusresult.php">Bus Booking</a></li>
<li> <a href="trainserach.php">Train Booking</a></li>


</ul>
</li>

<li><a href="../userselectlogin.html" style="color:orange;">Log In</a>
<ul>
<li> <a href="userprofile.php">User Profile</a></li>



</ul>



</li>


    <li><a href="../userselectsignup.html" style="color:orange;">Sign Up</a>
    
        
 
  

<li><a href="../help.html">Help</a></li>
<!--Third Drop Down Menu-->


</li>
</ul>
</nav>  
 <!--Navigation bar End-->

 



     
         <div id="content">

<div id="searchrow">
         <form action="" method="POST" class="form">
		
		<h2 id="head"> SEARCH TRAIN</H2>	
	
            <select id="gen" name="From" class="check" required oninvalid="this.setCustomValidity('From')"  oninput="this.setCustomValidity('')">
                <option value="0"  selected>From</option>
                <option value="Maharagama">Maharagama</option>
                <option value="Kottawa">Kottawa</option>
                <option value="Homahagama">Homahagama</option>
                <option value="Colombo">Colombo</option>
                <option value="Malabe">Malabe</option>

            </select>
     
            <select id="gen" name="To" class="check" required oninvalid="this.setCustomValidity('To')"  oninput="this.setCustomValidity('')">
                <option value="0"  selected>To</option>
                <option value="Maharagama">Maharagama</option>
                <option value="Kottawa">Kottawa</option>
                <option value="Homahagama">Homahagama</option>
                <option value="Colombo">Colombo</option>
                <option value="Malabe">Malabe</option>

            </select>
            <input type="date" placeholder="Date" class="box" id="date" name="date">
		<button type="submit" class="srch" id="btnsearch" name="search">Search Train</button>
        
	</form>
</div>












         <div class="row">
         <?php
require 'config.php';

  


/*$to="Kottawa";
$from=	
"Mahragama";
$date="2021-05-26";   
*/
if(isset($_POST['search'])){
    $to=$_POST['To'];
$from=$_POST['From'];
$date=$_POST['date'];  

$sql = "select * from train WHERE TSPoint='".$from."' AND TEPoint ='".$to."' AND TDate ='".$date."' " ;
$result = $con->query($sql);


if($result->num_rows>0){

  while($row = $result->fetch_assoc()){
    $dbID=$row['TrainID'];
    $dbtspoint =$row['TSPoint'];
    $dbtepoint =$row['TEPoint'];;
    $dbclass=$row['TClass'];
    $dbfac=$row['TFac'];
    $dbprice =$row['TTicketPrice'];
    $dbtime =$row['TTime'];
    $dbdate=$row['TDate'];
    echo"
    <div class='Result'>";
    
    echo "<p>Starting Point-$dbtspoint</p>";
    echo "<p>End Point - $dbtepoint</p>";
    echo"<p>Train Facilities </p>";
    echo"<p>$dbfac </p>";
    echo"<p>Class -:$dbclass </p>";
    echo "<p> Train Leaving Date and Time</p>";

    echo "<p> $dbdate($dbtime)</p>";
    echo"<h2> Ticket Price</h2>";
    echo"<h2> $dbprice</h2>";
    echo "<a href='../php/trainseat.php?ID=$dbID'><button class='btnBook' name='submit'>Book</button></a>";
    echo"</div>";

  }

}
else{

    echo "No Search Result";
}

}

?>


	</div>

</div>
	 <!------------------------FOOTER-------------------------------------->
     <footer>
<div class="footerDiv" id="fd1">

    <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
   
<h1 class="fd1h1" ><a href="../index.html"> BuyTickets.LK</a></h1>
<ul id="flist">
    
            
                <li><a href="../ContactUs.html">Contact Us </a></li>
                <li><a href="../offers.html">Offers </a></li>
                <li><a href="../help.html">Helps </a></li>
                <li><a href="../Terms _ condition.html">Terms and Conditions </a></li>
                <li><a href="../Feedback.html">FeedBack </a></li>
</ul>
   
</div>

<div class="footerDiv" id="fd2">
    <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
<h1 class="fd1h2">About Us</h1>

<p>01.09 team developed BuyTicket.LK - an innovative online bus and train ticket booking platform that seeks a hassle-free and improved public transportation system. 
            The largest growing business in Sri Lanka and other countries, especially by bus and train. It is therefore imperative to provi
            de an adequate user-friendly innovation mechanism for bus and train ticket booking procedures.<a href="aboutUs.html" style="color: darkorange;">More</a></p>

</div>
<div class="footerDiv" id="fd3"><hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
<h1>Payment Method</h1>
<a href="https://www.mastercard.us/en-us.html" target="_blank"> <img src="../img/navimg/MasterCard.svg" id="mastercard" ></a>
<a href="https://www.paypal.com/us/home" target="_blank"> <img src="../img/navimg/ez-cash.png" id="paypal"></a>
<a href="https://www.payhere.lk/" target="_blank"> <img src="../img/navimg/PayHere-Logo.png" alt=""></a>
<br>

 <h1>Bank Partner</h1>
    <a href="https://www.boc.lk/" target="_blank"><img src="../img/navimg/boc.svg" alt=""></a>
    <a href="https://www.peoplesbank.lk/" target="_blank"><img src="../img/navimg/peoples-bank.png" alt=""></a>
    <a href="https://www.nsb.lk/" target="_blank"><img src="../img/navimg/National-Savings-Bank-NSB-in-Sri-Lanka.jpg" alt=""></a>
</div>
<div class="footerDiv" id="fd4">


<h1>Follow Us</h1>

<a href="https://www.facebook.com/" target="_blank"><img src="../img/navimg/socialmedia/facebook-brands.svg" alt="" class="social"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../img/navimg/socialmedia/instagram-brands.svg" alt="" class="social"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../img/navimg/socialmedia/linkedin-brands.svg" alt="" class="social"></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><img src="../img/navimg/socialmedia/twitter-square-brands.svg" alt="" class="social"></a>
    </div>
<div id="copyright">Copyright GroupProject@2021</div>
</footer>

	</body>
</html>