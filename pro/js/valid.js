function valid(){


    var x=document.getElementById("txtUserName").value;

            console.log(x);


}



function showpass(){

    var pass = document.getElementById("pass");
   


    if(pass.type === "password"){


        pass.type="text";
        
    }else{

        pass.type="password";
       
    }

}

