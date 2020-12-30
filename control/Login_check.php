<?php
include('../Entity/Login_Entity.php');
include('../Repository/Credential_repo.php');

$login = new Login();

$UserNameError = $PasswordError = "";
$flag = true;

if (isset($_POST['submit'])) {

    if (empty($_POST["username"])) {
        $UserNameError = "Enter Your UserName";
        $flag = false;
    } else {
        $username = $_POST["username"];
        $login->setUsername($username);
    }

    if (empty($_POST["password"])) {
        $PasswordError = "Enter Your Password";
        $flag = false;
    } else {
        $password = $_POST["password"];
        $login->setPassword($password);
    }

    if ($flag) {
        $cred = new Credential();
        $entity = $cred->Get($login);
        if ($entity != null) {
            $_SESSION["email"] = $entity->getEmail();
            $_SESSION["id"] = $entity->getId();
            $_SESSION["UserType"] = $entity->getType();
            if ($entity->getType() == 'teacher') {
                // header("Refresh:0;url= Teacher_Home.php");
                header("Refresh:0;url= Teacher_Profile.php");
            } else if ($entity->getType() == 'admin') {
                header("Refresh:0;url= AdminProfile.php");
            }
        } else {
            echo '<script  > 
            alert( "No such user !");
             </script>';
        }
    } else {
        $db_error = "FILL ALL FIELDS";
    }
}
