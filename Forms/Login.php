<?php
session_start();
include('../control/Login_check.php');

?>
<!DOCTYPE html>
<html>

<body>

    <h2>Login</h2>

    <form action="" method="post">

        <table>

            <tr>
                <td><label for="Email or Id">Email or Id : </label></td>
                <td><input type="text" name="username" placeholder="Email or Id"><?php echo $UserNameError ?></td>
            </tr>

            <tr>
                <td><label for="Password">Enter your password : </label></td>
                <td><input type="password" name="password" placeholder="Password"><?php echo $PasswordError ?></td>
            </tr>

        </table>

        <input name="submit" type="submit" value="LOGIN">
    </form>

    <br>
</body>

</html>