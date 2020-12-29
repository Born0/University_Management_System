<!DOCTYPE html>
<html>
<?php
session_start();

include("../control/AdminProfileControl.php");

$section = "Teacher_Section.php";
$view_student = "Teacher_View_Student.php";
$profile = "Teacher_Profile.php";
$teacher_reg = "Teacher_Reg.php";
?>
	

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Home2.css">

</head>

<body>


    <div class="mainheader">
        <div class="header">
            <div class="icon">
                <img src="../Resources/varsity.png" alt="University logo">
            </div>
            <div class="title">
                <h1>Web University<br>Bangladesh</h1>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <button type="submit" name=logout class="logoutbtn">Logout</button>
            </form>
        </div>

        <div class="topnav">
            <ul>
                <li><a href="<?php echo $section ?>">
                        Section
                    </a></li>
                <li><a href="<?php echo $view_student ?>">
                        View Student
                    </a></li>
                <li> <a href="<?php echo $profile ?>">
                        Profile
                    </a></li>
                <li> <a href="<?php echo $teacher_reg ?>">
                        Registration
                    </a></li>
            </ul>

        </div>
    </div>
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