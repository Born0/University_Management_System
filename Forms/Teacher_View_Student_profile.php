<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    session_start();
    include('Teacher_home.php');
    if (empty($_SESSION["email"])) {
        header("Location: Login.php");
    }
    //include('Student_profile.php');    -----> from student 
    ?>
    <input type="text" name="search" placeholder="student id or email">
    <input type="submit" name=search value="search">

    <fieldset style="width :50%;">
        <legend> Upload Grade</legend>
        <table align=center style="width : 50%;">
            <tr>
                <th>Term </th>
                <th>Total</th>
                <th>Gained</th>
                <th>Grade</th>
                <th>Effect</th>
            </tr>

            <tr>
                <td> Mid Term</td>
                <td> <input type="text" name="total"> </td>
                <td> <input type="text" name="Gained"> </td>
                <td> <input type="text" name="Grade"> </td>
                <td> <input type="text" name="Effect"> </td>
                <td><input type="submit" name=mid value="Lock grade"></td>
            </tr>

            <tr>
                <td> Final Term</td>
                <td> <input type="text" name="total"> </td>
                <td> <input type="text" name="Gained"> </td>
                <td> <input type="text" name="Grade"> </td>
                <td> <input type="text" name="Effect"> </td>
                <td><input type="submit" name=final value="lock grade"></td>
            </tr>
            <tr>
                <td>Total Grade</td>
                <td> <input type="text" name="total"> </td>
                <td> <input type="text" name="Gained"> </td>
                <td> <input type="text" name="Grade"> </td>
                <td> <input type="text" name="Effect"> </td>
                <td><input type="submit" name=total value="Lock grade"></td>
            </tr>


        </table>
    </fieldset>
</body>

</html>