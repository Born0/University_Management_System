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

<body>
    <fieldset style="width:40%">
        <legend><b>Teacher Profile</b></legend>
        <form action="Teacher_Profile_Update.php" method="POST" enctype="multipart/form-data">
            <table align=center>
                <tr>
                    <td>Name :</td>
                    <td> <?php echo  $entity->getName(); ?> </td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><?php echo $entity->getEmail(); ?> </td>
                </tr>
                <tr>
                    <td> Date of Birth: </td>

                    <td><?php echo $entity->getDob(); ?></td>

                </tr>
                <tr>
                    <td> Gender :</td>
                    <td><?php echo $entity->getGender(); ?> </td>
                </tr>
                <tr>
                    <td>Blood Group:</td>
                    <td><?php echo $entity->getBlood(); ?> </td>
                </tr>
                <tr>
                    <td>Contact Number :</td>
                    <td><?php echo $entity->getContact(); ?> </td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><?php echo $entity->getAddress(); ?> </td>
                </tr>
                <tr>
                    <td>Religion :</td>
                    <td><?php echo $entity->getReligion();  ?></td>
                </tr>
                <tr>
                    <td>Joining Year :</td>
                    <td><?php echo $entity->getJoinig_year(); ?> </td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><?php echo $entity->getDept();  ?> </td>
                </tr>
                <tr>
                    <td>Designation :</td>
                    <td><?php echo $entity->getDesignation(); ?></td>
                </tr>
                <tr>
                    <td>Working Experience :</td>
                    <td><?php if ($entity->getWorking_Experience() == "NoExperience") {
                            echo '0';
                        } else {
                            echo $entity->getWorking_Experience();
                        } ?> Years</td>
                </tr>
                <tr>
                    <td>Salary :</td>
                    <td><?php if ($entity->getSalary() == "NoSalary") {
                            echo '0';
                        } else {
                            echo $entity->getSalary();
                        } ?> </td>
                </tr>
                <tr>
                    <td> Profile image :</td>
                    <td>
                        <img src="<?PHP echo $entity->getImage(); ?>" alt="Profile Image" width="100" height="100"> </td>
                </tr>
                <tr>
                    <td><br><br></td>
                    <td>
                    <td>
                        <input type="submit" name=edit value="Edit profile">

                    </td>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br><br>
    <?php include '../Common/footer.php'; ?>
</body>

</html>