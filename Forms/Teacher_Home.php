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
    <form method="POST" enctype="multipart/form-data">
        <input type="submit" name=logout value="logout">
    </form>
    <link rel="stylesheet" href="../CSS/Teacher_Home.css">
</head>

<body>
    <div class="header">
        <h1>Web University Bangladesh </h1>
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


    <h3>Hello <?php echo $gender;
                echo $t_name; ?>
    </h3>



</body>

</html>