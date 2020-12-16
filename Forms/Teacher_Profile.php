<!DOCTYPE html>
<html lang="en">

<?php
include('Teacher_home.php');
//session_start();
include('../control/Teacher_Profile_control.php');
if (empty($_SESSION["email"])) {
    header("Location: Login.php");
}
?>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
</head>

<body>


    <form action="Teacher_Profile_Update.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <ul>
                <li><label><img src="<?PHP echo $entity->getImage(); ?>" alt="Profile Image" width="100" height="100"> </label></li>
                <li>
                    <label> Name : </label>
                    <label> <?php echo  $entity->getName(); ?> </label>
                </li>

                <li>
                    <label> Email : </label>
                    <label> <?php echo $entity->getEmail(); ?> </label>
                </li>

                <li><label> Date of Birth: </label>
                    <label> <?php echo $entity->getDob(); ?> </label>
                </li>


                <li><label> Gender : </label>
                    <label> <?php echo $entity->getGender(); ?> </label>
                </li>
                <li> <label> Blood Group: </label>
                    <label> <?php echo $entity->getBlood(); ?> </label>
                </li>
                <li><label> Contact Number : </label>
                    <label> <?php echo $entity->getContact(); ?> </label>
                </li>
                <li><label> Address : </label>
                    <label> <?php echo $entity->getAddress(); ?> </label>
                </li>
                <li> <label> Religion : </label>
                    <label> <?php echo $entity->getReligion();  ?> </label>
                </li>
                <li><label> Joining Year : </label>
                    <label> <?php echo $entity->getJoinig_year(); ?> </label>
                </li>
                <li> <label> Department: </label>
                    <label> <?php echo $entity->getDept();  ?> </label>
                </li>
                <li><label> Designation : </label>
                    <label> <?php echo $entity->getDesignation(); ?> </label>
                </li>
                <li><label> Working Experience : </label>
                    <label> <?php if ($entity->getWorking_Experience() == "NoExperience") {
                                echo '0';
                            } else {
                                echo $entity->getWorking_Experience();
                            } ?> Years </label>
                </li>
                <li><label> Salary : </label>
                    <label> <?php if ($entity->getSalary() == "NoSalary") {
                                echo '0';
                            } else {
                                echo $entity->getSalary();
                            } ?> </label>
                </li>
            </ul>
            <input type="submit" name=edit class="registerbtn" value="Edit profile">

        </div>
    </form>

    <br><br>
    <?php include '../Common/footer.php'; ?>

</body>

</html>