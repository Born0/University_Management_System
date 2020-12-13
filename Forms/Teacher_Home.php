<!DOCTYPE html>
<html lang="en">

<?php

session_start();
if (empty($_SESSION["email"])) {
    header("Location: Login.php");
}
include('../control/Teacher_Home_Control.php');
$section = "Teacher_Section.php";
$view_student = "Teacher_View_Student.php";
$profile = "Teacher_Profile.php";
$teacher_reg = "Teacher_Reg.php";
?>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Home2.css">
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <button type="submit" name=logout class="logoutbtn">Logout</button>
    </form>

    <div class="header">
        <ul>
            <li> <img src="../Resources/varsity .png" alt="University logo">
            </li>
            <li>
                <h1>Web University Bangladesh </h1>
            </li>
        </ul>


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

</body>

</html>