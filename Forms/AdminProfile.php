<!DOCTYPE html>
<html>
<?php
session_start();

include("../control/AdminProfileControl.php");
?>
	<body>
		<h2>Admin Profile</h2>
		<img src="<?php echo $admin->getImage();?>" alt="Profile Image" width="100" height="100"><br>
		<label> Name : <?php echo  $admin->getName(); ?></label><br>
        <label> Email : <?php echo  $admin->getEmail(); ?></label><br>
		<label> Date of Birth : <?php echo  $admin->getDob(); ?></label><br>
        <label> Gender : <?php echo  $admin->getGender(); ?></label><br>
        <label> Bloodgroup : <?php echo  $admin->getBlood(); ?></label><br>
        <label> Contact Number : <?php echo  $admin->getContact(); ?></label><br>
        <label> Address : <?php echo  $admin->getAddress(); ?></label><br>
        <label> Religion : <?php echo  $admin->getReligion(); ?></label><br>
        <label> Joining Date : <?php echo  $admin->getJoinigYear(); ?></label><br>
        <label> Salary : <?php echo  $admin->getSalary(); ?></label><br>
        <label> Password : <?php echo  $admin->getPassword(); ?></label><br>
	</body>
</html>
<?php

session_destroy();
?>