<?php
include('../Entity/Grade_Entity.php');
include('../Repository/Grade_repo.php');


$user = $_POST['uname'];

if ($user != "") {
    $grade = new Grade();
    $grade->setId($user);
}
