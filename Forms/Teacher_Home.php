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
$teacher_search = "Teacher_Search.php";
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
                <li> <a href="<?php echo $teacher_search ?>">
                        Search
                    </a></li>
            </ul>

        </div>
    </div>

</body>

</html>