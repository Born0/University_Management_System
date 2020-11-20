<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: Login.php");
}
include('../control/Home_Control.php');

$section = "Teacher_Section.php";
$view_student = "Teacher_View_Student.php";
$profile = "Teacher_Profile.php";
?>

<head>
    <form method="POST" enctype="multipart/form-data">
        <input type="submit" name=logout value="logout">
    </form>


</head>

<body>
    <Table style="width: 100%;">
        <tr>
            <th><a href="<?php echo $section ?>">
                    <h1>Section</h1>
                </a></th>
            <th><a href="<?php echo $view_student ?>">
                    <h1>View Student</h1>
                </a></th>
            <th><a href="<?php echo $profile ?>">
                    <h1>Profile</h1>
                </a></th>
        </tr>
    </Table>
</body>

</html>