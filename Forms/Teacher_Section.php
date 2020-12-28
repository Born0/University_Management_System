<!DOCTYPE html>
<html lang="en">
<?php
include('Teacher_home.php');
//session_start();
include('../control/Teacher_Section_Control.php');
if (empty($_SESSION["email"])) {
    header("Location: Login.php");
}

?>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
</head>

<body>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <table border="1" rules=NONE frame=box align="center" style="width: 50%;">
                        <tr>
                            <td>Section Name</td>
                            <td>Class Time</td>

                            <td><input type="submit" name=Details class="registerbtn" value="Details"></td>
                        </tr>
                    </table>
                </tr>
                <tr>
                </tr>

                <tr>
                    <table border="1" rules=NONE frame=box align="center" style="width: 50%;">
                        <tr>
                            <td>Section Name</td>


                            <td>Class Time</td>



                            <td><input type="submit" class="registerbtn" name=Details value="Details"></td>

                        </tr>
                    </table>
                </tr>

                <tr>
                    <table border="1" rules=NONE frame=box align="center" style="width: 50%;">
                        <tr>
                            <td>Section Name</td>


                            <td>Class Time</td>



                            <td><input type="submit" class="registerbtn" name=Details value="Details"></td>

                        </tr>
                    </table>
                </tr>

                <tr>
                    <table border="1" rules=NONE frame=box align="center" style="width: 50%;">
                        <tr>
                            <td>Section Name</td>


                            <td>Class Time</td>



                            <td><input type="submit" class="registerbtn" name=Details value="Details"></td>

                        </tr>
                    </table>
                </tr>
            </table>
            <br><br><br><br> <br><br><br><br><br>
        </form>
    </div>
    <?php include '../Common/footer.php'; ?>
</body>

</html>