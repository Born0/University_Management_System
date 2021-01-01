<!DOCTYPE html>


<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
    <?php
    include('Teacher_Home.php');
    ?>


</head>

<body>
    <div class="container2">
        <h1>Section: "[section name]" </h1>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><input type="file" name="fileToUpload" id="fileToUpload"> </td>
                    <td></td>
                    <td><input type="submit" name=submit value="upload"></td>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    include('../control/Teacher_Study_Material_Control.php');
    include('../Common/footer.php');
    ?>

</body>

</html>