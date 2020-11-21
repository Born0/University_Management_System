<?php
//include('../Entity/Teacher_Entity.php');
//include('../Repository/Teacher_repo.php');

$teacher = new Teacher();
$teacher->setEmail(($_SESSION["email"]));
$t_repo = new Teacher_repo();
$entity = new Teacher();
$entity = $t_repo->Get($teacher);
if (!isset($entity)) {
    echo "error from teacher profile control";
}
