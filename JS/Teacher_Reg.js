function validateForm() {
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
        return false;
    } else {
        return true;
    }
}