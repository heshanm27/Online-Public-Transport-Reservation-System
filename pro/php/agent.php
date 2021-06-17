
<!DOCTYPE html>
<html lang="en">
<head>
<title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../img/navimg/socialmedia/logo.png"></title>
    <link rel="stylesheet" href="../css/agent.css">
    <link rel="stylesheet" href="../css/nav.css">

    <script src="/js/valid.js"></script>
  
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


<li><a href="userprofile.php">User Profile</a>

  
    
    </li>

<li><a href="../help.html">Help</a></li>
<!--Third Drop Down Menu-->


</li>
</ul>
</nav>  
 <!--Navigation bar End-->



    <div id="content">
    <h1 id="mainh1">Registration</h1>
        
<div class="input">

<form action='CrudOperation/addagent.php' method='post'>


                <label>Full Name-:</label>
                <input type="text" id="Pname" name="PName" class="check" placeholder="Enter Passanger Name" required oninvalid="this.setCustomValidity('Please Enter NIC')" oninput="this.setCustomValidity('')">
                
                        <!--Phone no input-->
                <label>NIC-::</label>
                <input type="tel" id="PhoneNo" class="check" name="nic"placeholder="Enter Valid Phone No"  pattern="[0-9]{10}" required oninvalid="this.setCustomValidity('Please Enter 10 Digit Phone No')" oninput="this.setCustomValidity('')">
     
                
                <label>Email-:</label>
                <input type="email" id="email" class="check" name ="email"placeholder="Enter Email" required oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="this.setCustomValidity('')">
         
                <label>Mobile</label>
                <input type="number" id="Dplace" class="check" name ="ticket"placeholder="Enter Mobile Number" required oninvalid="this.setCustomValidity('Please Enter Number Of Tickets')" oninput="this.setCustomValidity('')">
         
                <label>Business Name-:</label>
                <input type="text" id="Bplace" class="check" name ="Bname"placeholder="Enter Business Name" required oninvalid="this.setCustomValidity('Please Enter Business Name')" oninput="this.setCustomValidity('')">
         
                    
                <label>Business Adddress-:</label>
                <input type="text" id="Dplace" class="check" name ="Badd"placeholder="Enter Business Adddress" required oninvalid="this.setCustomValidity('Please Enter Business Adddress')" oninput="this.setCustomValidity('')">
         
                
           
                <button type="submit"id="btnReg" >Register</button>



                
    

      
    </div>
    
  </form>

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

