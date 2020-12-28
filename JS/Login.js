function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "" || password == "") {
        alert("Name and Password must be filled out");
        return false;
    } else {
        return true;
    }
}

