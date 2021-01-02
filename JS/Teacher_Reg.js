function validateForm() {
    var flag=true;
    var name = document.getElementById("name").value;
    var email =document.getElementById("email").value;
    var dob=document.getElementById("dob").value;
    var gender=document.getElementById("gender").value;
    var blood=document.getElementById("blood").value;
    var contact=document.getElementById("contact").value;
    var address=document.getElementById("address").value;
    var religion=document.getElementById("religion").value;
    var joining_year=document.getElementById("joining_year").value;
    var dept=document.getElementById("dept").value;
    var designation=document.getElementById("designation").value;
    var working_experience=document.getElementById("working_experience").value;
    var salary=document.getElementById("salary").value;
    var password = document.getElementById("password").value;
    if (name == "" ||  email==""  || dob==""  || gender==""  || blood==""  || contact==""  || address==""  || religion==""|| 
        joining_year==""  || dept==""  || designation==""  || working_experience==""  || salary==""  || password=="" ) {
        alert("PLEASE FILL ALL THE FIELDs");
        flag=false;
        return flag;
    } else {
        var letters = /^[A-Za-z ]+$/;
        var number=/^[0-9]+$/;
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

       
        if(name.match(letters)){alert("name available");}
        else{flag=false; alert("Invalid Name"); }

        if(religion.match(letters)){}
        else{flag=false; alert("Invalid Religion");}

        if(designation.match(letters)){}
        else{flag=false;  alert("Invalid Designation");}

        if(contact.match(number)){}
        else{flag=false;  alert("Invalid Contact");}

        
        if(email.match(mailformat)) {}
        else{flag=false;  alert("Invalid Email");}
        
        return flag;
    } 
}
