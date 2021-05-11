

 
function checkValid(){

    var e = document.getElementById("gen");
    var value = e.options[e.selectedIndex].text;

            

            if(value == "Select Gender"){
               
               e.setCustomValidity("Please Select Gender");
             
            
            }
        
        
 }


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
        else{

            alert("Enter Password");
        }
        }

function dis()
{

    var pass = document.getElementById("pass").value;
            var Cpass = document.getElementById("cpass").value;

          
            
            if (pass !== Cpass){

                
                document.getElementById("error").innerHTML="Password And Confirm Password Does not Match";
                
            
                return false;
            }
            else if(pass == Cpass) {
              
                document.getElementById("error").innerHTML="";
                alert("Sumbitted");
          
                
                
                
            }
    
}
    

function showPreview(event){
    if(event.target.files.length > 0){
      var file = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("up");
      preview.src = file;
      
    }
  }