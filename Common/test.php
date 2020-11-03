<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        include '../Entity/Teacher_Entity.php';
        $t=new Teacher();
        $t->setName("");
        echo $t->getName();
    ?>
</body>
</html>