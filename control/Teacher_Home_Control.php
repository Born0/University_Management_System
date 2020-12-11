<?php
include('../Entity/Teacher_Entity.php');
include('../Repository/Teacher_repo.php');
if (isset($_POST['logout'])) {
    header("Refresh:0; url=../Common/logout.php");
}

$teacher = new Teacher();
$teacher->setEmail($_SESSION["email"]);
$t_repo = new Teacher_repo();
$t_name = $t_repo->Get($teacher)->getName();
$gender = $teacher->getGender();
if ($gender == "male") {
    $gender = "Mr. ";
} else {
    $gender = "Mst. ";
}
