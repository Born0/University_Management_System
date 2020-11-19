<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Forms/Login.php"); // Redirecting To Home Page
}
