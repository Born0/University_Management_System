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
?>

<body>
    <fieldset style="width:40%">
        <legend><b>Teacher Profile</b></legend>
        <form method="POST" enctype="multipart/form-data">
            <table align=center>
                <tr>
                    <td>ID :</td>
                    <td> : <input type="text" name="name" disabled value=<?php echo $entity->getId(); ?> </td> </tr> <tr>
                    <td>Name :</td>
                    <td> : <input type="text" name="name" value=<?php echo $entity->getName(); ?> </td> </tr> <tr>
                    <td>Email :</td>
                    <td>: <input type="text" name="email" disabled value=<?php echo $entity->getEmail(); ?> </td> </tr> <tr>
                    <td>Blood Group:</td>
                    <td>: <input type="text" name="blood" value=<?php echo $entity->getBlood(); ?> </td> </tr> <tr>
                    <td>Contact Number :</td>
                    <td>: <input type="text" name="contact" value=<?php echo $entity->getContact(); ?> </td> </tr> <tr>
                    <td>Address :</td>
                    <td>: <input type="text" name="address" value=<?php echo $entity->getAddress(); ?> </td> </tr> <tr>
                    <td>Religion :</td>
                    <td>: <input type="text" name="religion" value=<?php echo $entity->getReligion();  ?> </td> </tr> <tr>
                    <td>Department:</td>
                    <td>: <input type="text" name="dept" value=<?php echo $entity->getDept();  ?> </td> </tr> <tr>
                    <td>Designation :</td>
                    <td>: <input type="text" name="designation" value=<?php echo $entity->getDesignation(); ?> </td> </tr> <tr>
                    <td>Working Experience :</td>
                    <td>: <input type="text" name="working_experience" value=<?php if ($entity->getWorking_Experience() == "NoExperience") {
                                                                                    echo '0';
                                                                                } else {
                                                                                    echo $entity->getWorking_Experience();
                                                                                } ?> Years</td> </tr> <tr>
                    <td>Salary :</td>
                    <td>: <input type="text" name="salary" disabled value=<?php echo $entity->getSalary(); ?> </td> </tr> <tr>
                    <td>Password :</td>
                    <td>: <input type="text" name="password" value=<?php echo $entity->getPassword(); ?> </td> </tr> <tr>
                <tr>
                    <td><br><br></td>
                    <td>
                        <input type="submit" name=update value="Update profile">

                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>