<?php 
//session_start();
include("../Entity/Admin.php");
include("../Repository/AdminRepo.php");
$admin=new Admin();
$repo=new AdminRepo();
$admin->setEmail($_SESSION["mail"]);
$admin=$repo->Get($admin);

?>