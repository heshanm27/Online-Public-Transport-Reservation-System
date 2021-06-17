

 //validate select
function checkValid(){

    var e = document.getElementById("gen");
    var value = e.options[e.selectedIndex].text;

            

            if(value == "Select Gender"){
               
               e.setCustomValidity("Please Select Gender");
             
            
            }
        
        
 }

//show password function
function showpass(){

    var pass = document.getElementById("pass");
    var Cpass = document.getElementById("cpass");


    if(pass.type === "password"){


        pass.type="text";
        Cpass.type="text";
    }else{

        pass.type="password";
        Cpass.type="password";
    }

}


//check password and confirm password match
 function checkPassword(event)
        {
            var pass = document.getElementById("pass").value;
            var Cpass = document.getElementById("cpass").value;
           
            checkValid();
            

            if(Cpass !== "" )
            
            {

                
            if (pass !== Cpass){

                event.preventDefault();
                document.getElementById("error").innerHTML="Password And Confirm Password Does not Match";
                
            
                return false;
            }
            else if(pass == Cpass) {
              
               
                
                document.getElementById("error").innerHTML="";
                
            }
        }
       
        }


//image upload validation
  function fileValidation(event) {
    var fileInput = 
        document.getElementById('file');
      
    var filePath = fileInput.value;
  
    // Allowing file type
    var allowedExtensions = 
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
    } 
    else 
    {
      
        // Image preview
        if(event.target.files.length > 0){
    var file = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("up");
    preview.src = file;
}
    }
}



function checkcardno(){

    var max=16;
    var card=document.getElementById('cno');
    var cardno=document.getElementById('cno').value.length;
    if(cardno >max){
     card.setCustomValidity("Please Enter Valid card Number");
    
        
    }
    else if(cardno!= max){
        card.setCustomValidity("Please Enter Valid card Number");

    }
    else{
        card.setCustomValidity("");
    }

}

function checkcvv(){

    var max=3;
    var c=document.getElementById('cvv');
    var cvv=document.getElementById('cvv').value.length;

    if(cvv>max){

        c.setCustomValidity("Please Enter Valid CVV");
    }
    else if(cvv != max){

        card.setCustomValidity("Please Enter Valid CVV");
    }
    else{
        card.setCustomValidity("");
    }
}

function checknic(){

    var max=12;
    var nic=document.getElementById('Nic');
    var N=document.getElementById('Nic').value.length;

    if(N>max){

        nic.setCustomValidity("Please Enter Valid NIC");
    }
    else if(N!= max){

        nic.setCustomValidity("Please Enter Valid NIC");
    }
    else{
        nic.setCustomValidity("");
    }
}


function checkpno(){

    var max=10;
    var phn=document.getElementById('PhoneNo');
    var pno=document.getElementById('PhoneNo').value.length;

    if(pno>max){

        phn.setCustomValidity("Please Enter 10 Digit Phone No");
    }
    else if(pno!= max){

        phn.setCustomValidity("Please Enter 10 Digit Phone No");
    }
    else{
        phn.setCustomValidity("");
    }
}


function slideup(el){
var elem=document.getElementById(el);
elem.style.transition = "all 1s ease-in-out";
elem.style.height = "0px";

}

function slidedown(el){
    var elem = document.getElementById(el);
    elem.style.transition = "all 1s ease-in-out";
    elem.style.height = "2600px";

}



    function slideup2(el){
        var elem=document.getElementById(el);
        elem.style.transition = "all 1s ease-in-out";
        elem.style.height = "0px";
        
        }
        
        function slidedown2(el){
            var elem = document.getElementById(el);
            elem.style.transition = "all 1s ease-in-out";
            elem.style.height = "3600px";
        
        }
        function slideup3(el){
            var elem=document.getElementById(el);
            elem.style.transition = "all 1s ease-in-out";
            elem.style.height = "0px";
            
            }
            
            function slidedown3(el){
                var elem = document.getElementById(el);
                elem.style.transition = "all 1s ease-in-out";
                elem.style.height = "1600px";
            
            }
    