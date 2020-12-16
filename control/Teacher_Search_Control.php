<?php
include('../Entity/Teacher_Entity.php');
include('../Repository/Teacher_repo.php');

$user = $_POST['uname'];
$teacher = new Teacher();
$teacher->setName($user);
$entity = new Teacher();

$t_repo = new Teacher_repo();
$allEntity = $t_repo->GetBy($teacher);
if ($allEntity != null) {
    $counter = count($allEntity);
    echo "Match found" . $counter . "<br>";

    // for ($i = 0; $i < $counter; $i++) {
    //     //$entity = $allEntity[$i];
    //     // echo $entity->getName();
    //     echo "hello " . $allEntity[$i]->getName() . "      ";
    // }

    // echo $allEntity[0]->getName() . "      ";
    //echo $allEntity[1]->getName() . "      ";
    // echo $allEntity[2]->getName() . "      ";
} else {
    echo "NO DATA FROM SEARCH";
}
