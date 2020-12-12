<!DOCTYPE html>
<html lang="en">

<?php
include('Teacher_home.php');
//session_start();
include('../control/Teacher_Profile_control.php');
include('../control/Teacher_Profile_Update_Control.php');
if (empty($_SESSION["email"])) {
    header("Location: Login.php");
}
$_SESSION["id"] = $entity->getId();
$_SESSION["email"] = $entity->getEmail();

?>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
</head>

<body>


    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <ul>

                <li> <label>ID :</label>
                    : <input type="text" name="id" disabled value=<?php echo $entity->getId(); ?>> </li>
                <li> <label>Name :</label>
                    : <input type="text" name="name" value=<?php echo $entity->getName(); ?>> </li>
                <li> <label>Email :</label>
                    : <input type="text" name="email" disabled value=<?php echo $entity->getEmail(); ?>></li>
                <li> <label>Blood Group:</label>
                    : <input type="text" name="blood" value=<?php echo $entity->getBlood(); ?>> </li>
                <li> <label>Contact Number :</label>
                    : <input type="text" name="contact" value=<?php echo $entity->getContact(); ?>> </li>
                <li> <label>Address :</label>
                    : <input type="text" name="address" value=<?php echo $entity->getAddress(); ?>> </li>
                <li> <label>Religion :</label>
                    : <input type="text" name="religion" value=<?php echo $entity->getReligion();  ?>></li>
                <li> <label>Department:</label>
                    : <input type="text" name="dept" value=<?php echo $entity->getDept();  ?>></li>
                <li> <label>Designation :</label>
                    : <input type="text" name="designation" value=<?php echo $entity->getDesignation(); ?> </li> <li> <label>Working Experience :</label>
                    : <input type="text" name="working_experience" value=<?php if ($entity->getWorking_Experience() == "NoExperience") {
                                                                                echo '0';
                                                                            } else {
                                                                                echo $entity->getWorking_Experience();
                                                                            } ?>> Years</li>
                <li> <label>Salary :</label>
                    : <input type="text" name="salary" disabled value=<?php echo $entity->getSalary(); ?>> </li>
                <li> <label>Password :</label>
                    : <input type="text" name="password" value=<?php echo $entity->getPassword(); ?>> </li>
                <li> <label><br><br></label>

                    <input type="submit" class="registerbtn" name=update value="Update profile">

                </li>

            </ul>
        </div>
    </form>

    <br><br><?php include '../Common/footer.php'; ?>
</body>

</html>