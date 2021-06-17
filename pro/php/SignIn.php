<!DOCTYPE html>
<html lang="en">
<head>
<title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../img/navimg/socialmedia/logo.png"></title>
    <link rel="stylesheet" href="../css/Sign.css">
    <link rel="stylesheet" href="../css/nav.css">

    <script src="../js/sctipt.js"></script>
    
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
<li><a href="../help.html">Help</a></li>
<li><a href="../userselectlogin.html" >Log In</a></li>


    <li><a href="../userselectsignup.html" style="color:orange;">Sign Up</a>
    
        
 
    
    


<!--Third Drop Down Menu-->


</li>
</ul>
</nav>  
 <!--Navigation bar End-->

    </div>
     <!--main Div-->
    <div id="content">
        
              
        <!--Sub div-->
        <div id="rightBox" >
            <h1 id="txtSign">Create Account</h1>
                
            <div class="input">
                <!--Form-->
                <form action="../php/CrudOperation/SignInData.php" id="subForm"  method="POST" enctype="multipart/form-data">
                   <!--left div with image-->
                    <div id="left">
                        <div id="uimg">
                            <img src="../img/signup/image-icon-png-6.jpg" alt="" id="up">
                        </div>
                        <label id="upload" for="file">Select image to upload</label>
                   
                    <input type="file" name="imageupload" id="file" onchange=" return fileValidation(event)" hidden>

                   
                    </div>

                    <!--Input Name-->
                    <label>Name-:</label>
                <input type="text" id="txtName"  name="name"class="check"  placeholder="Enter Full Name" required oninvalid="this.setCustomValidity('Please Enter Full Name')" oninput="this.setCustomValidity('')">
            
                <!--Input UserName-->
                <label>User Name-:</label>
                <input type="text" id="txtUserName" name="uname" class="check" placeholder="Enter User Name" required oninvalid="this.setCustomValidity('Please Enter User Name')" oninput="this.setCustomValidity('')">
           
                <!--Input Nic-->
                <label>NIC-:</label>
                <input type="text" id="Nic" name="nic" class="check" placeholder="Enter NIC"    oninput="checknic(this)" required  oninvalid="this.setCustomValidity('Please Enter Valid NIC')" oninput="this.setCustomValidity('')">
                
                <!--Input Email -->
                <label>Email-:</label>
                <input type="email" id="email" class="check" name ="email"placeholder="Enter Email" required oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="this.setCustomValidity('')">
         
           
                <!--Phone no input-->
                <label>Phone No-:</label>
                <input type="tel" id="PhoneNo" class="check" name="pno"placeholder="Enter Valid Phone No"  oninput="checkpno(this)" required oninvalid="this.setCustomValidity('Please Enter 10 Digit Phone No')" oninput="this.setCustomValidity('')">
     
                <!--gender Input-->
                <label>Gender-:</label>
               <select id="gen" name="select" class="check" required oninvalid="this.setCustomValidity('Please Select Gender')"  oninput="this.setCustomValidity('')">
                    <option value="0"  selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                
      
                <!--Password input-->
          
                <label>PassWord-:</label>
                <input type="password" name="pass" id="pass"  class="check" placeholder="Enter Password" required oninvalid="this.setCustomValidity('Enter Password')" oninput="this.setCustomValidity('')" > 
        
           
            <!--Password input-->
                <label>Confirm PassWord-:</label>
                <input type="password" id="cpass" class="check" placeholder="Enter Confirm Password" required oninvalid="this.setCustomValidity('Enter Confirm Password')"  oninput="this.setCustomValidity('')" > 

                 <!--show password function-->
                <label><input type="checkbox"  class="check" id="showPass" value="" onclick="showpass()" >Show Password</label>
                <label><input type="checkbox"  class="check" id="checkBox" value="" required oninvalid="this.setCustomValidity('You Must Agree With Terms')" oninput="this.setCustomValidity('')">I Agree With Terms And Conditions</label>
                
                
                <!--if password confirm password miss match error show in p tag -->
                <p id="error"></p>
                <button type="submit"id="btnSign" onclick="checkPassword(event)" >Sign In</button>
            </form>
            
           
        </div>

        </div>

<!--Log in Page link -->
        <div id="login">
                    <p id="loginlink">Already Have a Account?</p>
                    <a href="../php/login.php" ><button id="btnlogin">LogIn</button></a>
                    </div>
               
  <a href=""></a>
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