<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('Teacher_Home.php');
    //session_start();
    ?>
    <h1>Section: "[section name]" </h1>
</head>

<form method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td><input type="file" name="fileToUpload" id="fileToUpload"> <?PHP  ?></td>
            <td></td>
            <td><input type="submit" name=submit value="Submit"></td>
            </td>
        </tr>
        <br><br><br>
    </table>
</form>

<body>
    <fieldset style="width: 50%;">
        <legend>Study Materials</legend>
        <table>
            <tr>
                <td>"[prev uploads]"</td>
            </tr>

        </table>
    </fieldset>
    <br><br>
    <?php include '../Common/footer.php'; ?>
</body>

</html>