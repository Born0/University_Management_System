<?php

session_start(); 

$error="";
// store session data
if (isset($_POST['submit'])) 
{
    if (empty($_POST['email']) || empty($_POST['password'])) 
    {
        $error = "email or Password is invalid";
    }
     else
    {
    $email=$_POST['email'];
    $password=$_POST['password'];


    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    }
}

    if(isset($_SESSION['email']))
    {
        header("location: ../Result.php");
    }



?>
