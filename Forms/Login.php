<?php
session_start();
include('../control/Login_check.php');

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Home.css">

</head>

<body>
    <div class="header">
        <h1>Web University Bangladesh </h1>
    </div>

    <form action="" method="post">

        <table>

            <tr>
                <td><label for=" Email or Id">Email or Id : </label></td>
                <td><input type="text" name="username" id="username" placeholder="Email or Id"><?php echo $UserNameError ?></td>
            </tr>

            <tr>
                <td><label for="Password">Enter your password : </label></td>
                <td><input type="password" name="password" id="password" placeholder="Password"><?php echo $PasswordError ?></td>
            </tr>

        </table>

        <input name="submit" type="submit" value="LOGIN">
    </form>

    <br>
    <?php include '../Common/footer.php'; ?>
</body>

</html>