<?php
include('../Entity/Teacher_Entity.php');
//include('../Entity/Section_Entity.php');
//include('../Repository/Section_repo.php');

$teacher = new Teacher();
$teacher->setEmail(($_SESSION["email"]));
$teacher->setId($_SESSION["id"]);
//----------> get all section from Section table by Teacher Id
