<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('Teacher_home.php');
include('../control/Teacher_Section_Control.php');
if (empty($_SESSION["email"])) {
    header("Location: Login.php");
}

?>

<body>
    <table>
        <tr>
            <table border="1" rules=NONE frame=box>
                <tr>
                    <td>Section Name</td>
                    <td></td>

                    <td>Class Time</td>
                </tr>
                <tr>
                    <td></td>

                    <td><input type="submit" name=Details value="Details"></td>
                    <td></td>
                </tr>
            </table>
        </tr>
        <tr>
        </tr>

        <tr>
            <table border="1" rules=NONE frame=box>
                <tr>
                    <td>Section Name</td>
                    <td></td>

                    <td>Class Time</td>
                </tr>
                <tr>
                    <td></td>

                    <td><input type="submit" name=Details value="Details"></td>
                    <td></td>
                </tr>
            </table>
        </tr>

        <tr>
            <table border="1" rules=NONE frame=box>
                <tr>
                    <td>Section Name</td>
                    <td></td>

                    <td>Class Time</td>
                </tr>
                <tr>
                    <td></td>

                    <td><input type="submit" name=Details value="Details"></td>
                    <td></td>
                </tr>
            </table>
        </tr>

        <tr>
            <table border="1" rules=NONE frame=box>
                <tr>
                    <td>Section Name</td>
                    <td></td>

                    <td>Class Time</td>
                </tr>
                <tr>
                    <td></td>

                    <td><input type="submit" name=Details value="Details"></td>
                    <td></td>
                </tr>
            </table>
        </tr>


    </table>
</body>

</html>