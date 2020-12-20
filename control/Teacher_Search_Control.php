<?php
include('../Entity/Teacher_Entity.php');
include('../Repository/Teacher_repo.php');

$user = $_POST['uname'];
$teacher = new Teacher();
//if ($user != "") {
$teacher->setName($user);
$entity = new Teacher();
$newEntity = new Teacher();
$t_repo = new Teacher_repo();
$allEntityId = $t_repo->GetBy($teacher);
if ($allEntityId != null) {
    $counter = count($allEntityId);
    echo "<table><tr><th>ID</th> <th>Name</th> <th>Email</th></tr>";
    for ($i = 0; $i < $counter; $i++) {

        $entity->setId($allEntityId[$i]);

        $newEntity = $t_repo->get($entity);
        echo "<tr> <td>" . $newEntity->getId() . "</td>  <td>" . $newEntity->getName() . "</td> <td> " . $newEntity->getEmail() . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "NO DATA FROM SEARCH";
}
//}
