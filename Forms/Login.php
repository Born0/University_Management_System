<?php
session_start();
include('../control/Login_check.php');

?>
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="../CSS/Teacher_Home.css"> -->
    <link rel="stylesheet" href="../CSS/Login.css">
    <script>
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
    </script>
</head>



<body>
    <div class="header">
        <h1>Web University Bangladesh </h1>
    </div>


    <div class="wrapper">
        <div id="formContent">
            <h2 class="active"> Sign In </h2>
            <form action="" method="post" onsubmit="return validateForm()">
                <input type="text" name="username" id="username" placeholder="Email or Id"><?php echo $UserNameError ?>
                <input type="password" name="password" id="password" placeholder="Password"><?php echo $PasswordError ?>

                <input type="submit" name=submit value="Log In">
            </form>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include '../Common/footer.php'; ?>
</body>

</html>