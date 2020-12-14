<?php
include('../Entity/Teacher_Entity.php');
include('../Repository/Teacher_repo.php');

$user = $_POST['uname'];
$teacher = new Teacher();
$teacher->setName($user);
$teacher->setId($user);

$t_repo = new Teacher_repo();
$allEntity = $t_repo->GetBy($teacher);
